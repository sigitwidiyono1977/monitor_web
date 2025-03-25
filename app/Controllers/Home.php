<?php

namespace App\Controllers;

use App\Models\ModelMonitor;
use App\Models\ModelWebsite;

class Home extends BaseController
{
    public $monitor;
    public $website;

    public function __construct()
    {
        $this->monitor = new ModelMonitor();
        $this->website = new ModelWebsite();
    }

    public function index()
    {

        $data['web'] = $this->db->table('tab_website')->orderBy('id', 'ASC')->get()->getResult();
        return view('welcome_message', $data);
    }

    function refreshData()
    {
        $id = $this->request->getPost('id');
        $waktu = strtotime(date('Y-m-d H:i:s'));
        $sql = $this->db->table('tab_website')->orderBy('id', 'ASC')->get()->getResult();

        foreach ($sql as $row) {
            $sta = $this->checkWebsiteStatus($row->website);
            $ssl = $this->checkSslStatus($row->website);
            $simpan = ['waktu' => $waktu, 'id_website' => $row->id, 'status' => $sta['status'], 'kode' => $sta['http_code'], 'enkripsi' => $ssl];
            $this->monitor->save($simpan);

            // cek persentase
            $up = $this->db->table('tab_monitor')->selectCount('status')->where(['id_website' => $row->id, 'status' => 1])->get()->getRow();
            $upx = $up->status;

            if ($upx == '') {
                $upx = 0;
            } else {
                $upx = $upx;
            }

            $down = $this->db->table('tab_monitor')->selectCount('status')->where(['id_website' => $row->id, 'status' => 0])->get()->getRow();
            $downx = $down->status;

            if ($downx == '') {
                $downx = 0;
            } else {
                $downx = $downx;
            }

            $tot = $upx + $downx;

            if ($tot != 0) {
                if ($upx == 0) {
                    $persenUp = '0% Up';
                } else {
                    $persenUp = ($upx / $tot) * 100;
                    $persenUp = round($persenUp) . '% Up';
                }

                if ($downx == 0) {
                    $persenDown = '0% Down';
                } else {
                    $persenDown = ($downx / $tot) * 100;
                    $persenDown = round($persenDown) . '% Down';
                }
            } else {
                $persenDown = '0% Down';
                $persenUp = '0% Up';
            }

            $persen[] = ['idSite' => $row->id, 'persenDown' => $persenDown, 'persenUp' => $persenUp];
        }

        // cek databases
        $a = 0;
        foreach ($sql as $row) {
            $a++;
            $bro = $this->db->table('tab_monitor')->where(['id_website' => $row->id])->orderBy('id', 'DESC')->get()->getRow();
            if ($a == 1) {
                if ($id == null) {
                    $id = 1;
                } else {
                    $id = $id + 1;
                }
            }

            $bro->status == 1 ? $status = '<span class="text-success">|</span>' : $status = '<span class="text-danger">|</span>';
            $bro->kode == 200 ? $kode = '<span class="badge bg-success">'. $bro->kode.'</span>' : $kode = '<span class="badge bg-danger">'.$bro->kode.'</span>' ;
            $baris[] = ['idSite' => $row->id, 'status' => $status, 'kode' => $kode, 'enkripsi' => $bro->enkripsi];
        }

        $data['id'] = $id;
        $data['baris'] = $baris;
        $data['persen'] = $persen ;

        //dd($data);
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    private function checkSslStatus($url)
    {
        $parsed = parse_url($url);
        // Jika skema bukan https, SSL tidak berlaku
        if (!isset($parsed['scheme']) || $parsed['scheme'] !== 'https') {
            return '<span class="text-danger">SSL Not Applicable</span>';
        }
        $hostname = $parsed['host'];
        $port = isset($parsed['port']) ? $parsed['port'] : 443;

        $contextOptions = array(
            "ssl" => array(
                "capture_peer_cert" => true,
                "verify_peer"       => true,
                "verify_peer_name"  => true,
                "allow_self_signed" => false,
            )
        );
        $context = stream_context_create($contextOptions);
        $client = @stream_socket_client("ssl://" . $hostname . ":" . $port, $errno, $errstr, 10, STREAM_CLIENT_CONNECT, $context);
        if ($client === false) {
            return '<span class="text-danger">SSL Error $errstr</span>';
        }
        $params = stream_context_get_params($client);
        if (isset($params["options"]["ssl"]["peer_certificate"])) {
            return '<span class="text-success">SSL Active</span>';
        }
        return '<span class="text-warning">SSL Not Active</span>';
    }

    private function checkWebsiteStatus($url)
    {
        // Inisialisasi cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        // Hanya mengambil header (tanpa konten)
        curl_setopt($ch, CURLOPT_NOBODY, true);
        // Mengembalikan hasil sebagai string, bukan output langsung
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Timeout dalam detik
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Eksekusi request
        curl_exec($ch);
        // Ambil kode HTTP
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Website dianggap "UP" jika kode status antara 200 hingga 399
        $status = ($http_code >= 200 && $http_code < 400) ? 1 : 0;

        return [
            'status' => $status,
            'http_code' => $http_code
        ];
    }
}
