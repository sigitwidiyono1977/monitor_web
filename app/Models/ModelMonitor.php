<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMonitor extends Model
{
	public $db;

	public function __construct()
	{
		parent::__construct();
		$this->db = \Config\Database::connect();
	}

	protected $table      = 'tab_monitor';
	protected $primaryKey = 'id';

	protected $returnType     = 'object';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['waktu', 'id_website', 'status', 'kode', 'enkripsi'];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';

	protected $skipValidation  = true;
}
