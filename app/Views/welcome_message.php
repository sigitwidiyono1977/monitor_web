    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Pemantauan Website</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/dataTables.bootstrap5.css') ?>" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/headers.css') ?>" rel="stylesheet">
    <script>
        var base = '<?= base_url() ?>';
    </script>
    </head>

    <body>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="home" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
            </symbol>
            <symbol id="speedometer" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
            </symbol>
            <symbol id="shield" viewBox="0 0 16 16">
                <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
            </symbol>
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="bg-primary d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                        <a href="/" class="text-white d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                            <svg class="bi me-2" width="40" height="32">
                                <use xlink:href="#home" />
                            </svg>
                            <span class="fs-4">Pemantauan Website</span>
                        </a>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><svg class="bi me-2" width="20" height="20">
                                    <use xlink:href="#speedometer" />
                                </svg> Monitoring Website</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    if ($web) {
                                        foreach ($web as $row) {
                                    ?>
                                            <div class="fs-6"><?php echo $row->website ?> <span class="badge text-success" id="up<?= $row->id ?>"></span> <span class="badge text-danger" id="down<?= $row->id ?>"></span></div>
                                            <div id="baris<?php echo $row->id ?>"></div>
                                    <?php }
                                    } ?>
                                </div>
                                <input type="hidden" id="id" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><svg class="bi bi-shield" width="20" height="20">
                                    <use xlink:href="#shield" />
                                </svg> Monitoring SSL</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <?php
                                if ($web) {
                                    foreach ($web as $row) {
                                ?>
                                        <div class="fs-6"><?php echo $row->website ?> <span id="kode<?php echo $row->id ?>"></span></div>
                                        <div id="ssl<?php echo $row->id ?>"></div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="<?php echo base_url('assets/js/jquery-3.7.1.min.js') ?>" charset="utf-8" type="text/javascript"></script>
        <script>
            $().ready(function() {
                bacaData();
                setInterval(bacaData, 300000); // 5 menit
            });

            function bacaData() {
                var id = $('#id').val();
                $.ajax({
                    url: base + "refresh-data",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        'id': id
                    },
                    success: function(data) {
                        $('#id').val(data.id);
                        for (var key in data.baris) {
                            if (data.id <= 96) { //96
                                $('#baris' + data.baris[key].idSite).append(data.baris[key].status);
                            } else {
                                $('#id').val(1);
                                $('#baris' + data.baris[key].idSite).html('');
                                $('#baris' + data.baris[key].idSite).append(data.baris[key].status);
                            }

                            $('#ssl' + data.baris[key].idSite).html(data.baris[key].enkripsi);
                            $('#kode' + data.baris[key].idSite).html(data.baris[key].kode);

                            $('#up' + data.persen[key].idSite).html(data.persen[key].persenUp);
                            $('#down' + data.persen[key].idSite).html(data.persen[key].persenDown);
                        }
                    },
                    error: function(jqXHR, exception) {
                        var msg = '';
                        if (jqXHR.status === 0) {
                            msg = 'Not Connect.\n Verify Network';
                        } else if (jqXHR.status == 404) {
                            msg = 'Requested page not found [404]';
                        } else if (jqXHR.status == 500) {
                            msg = 'Internal Server Error [500]';
                        } else if (exception === 'parsererror') {
                            msg = 'Requested JSON parse failed';
                        } else if (exception === 'timeout') {
                            msg = 'Time out error';
                        } else if (exception === 'abort') {
                            msg = 'Ajax request aborted';
                        } else {
                            msg = 'Uncought Error.\n' + jqXHR.responseText;
                        }
                        alert(msg);
                    },
                });
            }
        </script>
    </body>

    </html>