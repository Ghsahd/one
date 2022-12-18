<?php 
	@ob_start();
	session_start();
	require 'config.php';
	$id = $_GET['id'];
    $sql = "select * from penelitian where id=?";
    $row = $config->prepare($sql);
    $row -> execute(array($id));
    $hasil = $row -> fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets//images/favicon.png">
    <title>One Document</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/pages/dashboard.css" rel="stylesheet">
    <link href="assets/css/colors/default-dark.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"></p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="akun.php">
                            <div class="dark-logo"></div>
                        </b>
                        <span>
                            <div class="dark-logo"></div>
                        </span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>                    
                </div>
            </nav>
        </header>
        
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="admin.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Penelitian</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="dataguru.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">pengabdian</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="absen.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">publikasi</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="logout.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Log Out</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        
        <div class="page-wrapper">
            <div class="container-fluid">                
                <!-- Data Siswa -->

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Edit Data</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">  
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h3 class="card-title m-b-5"><span class="lstick"></span>Data </h3>
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <form class="form-horizontal form-material" method="POST" action="updatepenelitian.php">
                                                <input type="hidden" name="id" value="<?= $hasil['id']?>">
                                                <div class="form-group">
                                                       <label class="col-md-12">Kategori</label>
                                                             <div class="col-md-12">
                                                                   <input type="text" name="kategori" value="<?= $hasil['kategori']?> class="form-control form-control-line">
                                                                       </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Judul</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="judul" value="<?= $hasil['judul']?> class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Afiliasi</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="afiliasi" value="<?= $hasil['afiliasi']?>class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Tahun Usulan</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="tahun_usulan" value="<?= $hasil['tahun_usulan']?>class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Tahun Kegiatan</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="tahun_kegiatan" value="<?= $hasil['tahun_kegiatan']?> class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Tahun Pelaksanaan</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="tahun_Pelaksanaan" value="<?= $hasil['tahun_pelaksanaan']?>class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Lama Kegiatan</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="lama_kegiatan" value="<?= $hasil['lama_kegiatan']?> class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Dana</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="dana" value="<?= $hasil['dana']?> class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Kind</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="kind" value="<?= $hasil['kind']?> class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">SK</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="sk"  value="<?= $hasil['sk']?> class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Tanggal Penugasan</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="tanggal_penugasan" value="<?= $hasil['tanggal_penugasan']?>class="form-control form-control-line">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                            <label class="col-md-12">Upload</label>
                                                                         <div class="col-md-12">
                                                                     <input type="file" name="upload" value="<?= $hasil['upload']?> class="form-control form-control-line">
                                                                </div>
                                                                </div>
                                                            <div class="form-group">
                                                            <div class="col-sm-12">
                                                        <button class="btn btn-success">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--- content -->
                    </div>
                </div>

                <script>
                    $(document).on('click', '#smallButton', function(event) {
                        event.preventDefault();
                        let href = $(this).attr('data-attr');
                        $.ajax({
                            url: href,
                            beforeSend: function() {
                                $('#loader').show();
                            },
                            success: function(result) {
                                $('#smallModal').modal("show");
                                $('#smallBody').html(result).show();
                            },
                            complete: function() {
                                $('#loader').hide();
                            },
                            error: function(jqXHR, testStatus, error) {
                                console.log(error);
                                alert("Page " + href + " cannot open. Error:" + error);
                                $('#loader').hide();
                            },
                            timeout: 8000
                        })
                    });
                    
                    $(document).on('click', '#mediumButton', function(event) {
                        event.preventDefault();
                        let href = $(this).attr('data-attr');
                        $.ajax({
                            url: href,
                            beforeSend: function() {
                                $('#loader').show();
                            },
                            
                            success: function(result) {
                                $('#mediumModal').modal("show");
                                $('#mediumBody').html(result).show();
                            },
                            complete: function() {
                                $('#loader').hide();
                            },
                            error: function(jqXHR, testStatus, error) {
                                console.log(error);
                                alert("Page " + href + " cannot open. Error:" + error);
                                $('#loader').hide();
                            },
                            timeout: 8000
                        })
                    });

                </script>
            </div>
            <footer class="footer"> © 2022 Admin Absensi </footer>
        </div>
    </div>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/plugins/d3/d3.min.js"></script>
    <script src="assets/plugins/c3-master/c3.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>

</html>