<?php
	@ob_start();
	session_start();
	require 'config.php';
    $sql = 'select * from penelitian';
    $row = $config->prepare($sql);
    $row -> execute();
    $res = $row -> fetchAll();
    $no = 1;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>one document - Penelitian</title>
    <?php include('../layout/header.php'); ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php extends('layout/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('../layout/topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <form action="tambahpenelitian.php" method="post">
                    <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Data Penelitian</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a data-target="#tambahModal" data-toggle="modal" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"> Tambah Data</a>
                    </div>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                    <div class="table-responsive">
                        <table class="table">
                             <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Judul</th>
                                    <th>Afiliasi</th>
                                    <th>Tahun Usulan</th>
                                    <th>Tahun Kegiatan</th>
                                    <th>Tahun Pelaksanaan</th>
                                    <th>Lama Kegiatan</th>
                                    <th>Dana</th>
                                    <th>Kind</th>
                                    <th>SK</th>
                                    <th>Tanggal Penugasan</th>
                                    <th>Upload</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($res as $isi) {
                                    ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $isi['kategori']?></td>
                                    <td><?= $isi['judul']?></td>
                                    <td><?= $isi['afiliasi']?></td>
                                    <td><?= $isi['tahun_usulan']?></td>
                                    <td><?= $isi['tahun_kegiatan']?></td>
                                    <td><?= $isi['tahun_pelaksanaan']?></td>
                                    <td><?= $isi['lama_kegiatan']?></td>
                                    <td><?= $isi['dana']?></td>
                                    <td><?= $isi['kind']?></td>
                                    <td><?= $isi['sk']?></td>
                                    <td><?= $isi['tanggal_penugasan']?></td>
                                    <td><?= $isi['upload']?></td>
                                    <td>
                                    <a href="deleteabsen.php?id=<?php echo $isi['id'];?>" class="waves-effect waves-dark">
                                        <i class="mdi mdi-delete-forever btn btn-danger"></i>
                                    </a>

                                    <a href="editabsen.php?id=<?php echo $isi['id'];?>" class="waves-effect waves-dark">
                                        <i class="mdi mdi-table-edit btn btn-success"></i>
                                    </a>
                                    </td>
                                    </tr>
                                         <?php 
                                            $no++;}
								          ?>                               
                                     </tbody>
                                     </table>

                                    <!-- Form tambah -->

                                    <!-- medium modal -->
                                    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" 
                                        aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                 <div class="modal-content mt-5">
                                                        <div class="modal-header">
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" id="mediumBody">
                                                            <!-- form -->

                                                            <div class="col-lg-8 col-xlg-9 col-md-7">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <form class="form-horizontal form-material" method="POST" action="tambahpenelitian.php">
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Kategori</label>
                                                                                <div class="col-md-12">
                                                                                <input type="text" name="kategori" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Judul</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="judul" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Afiliasi</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="afiliasi" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Tahun Usulan</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="tahun_usulan" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Tahun Kegiatan</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="tahun_kegiatan" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Tahun Pelaksanaan</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="Tahun Pelaksanaan" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Lama Kegiatan</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="lama_kegiatan" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Dana</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="dana" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Kind</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="kind" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">SK</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="sk" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-12">Tanggal Penugasan</label>
                                                                                 <div class="col-md-12">
                                                                                 <input type="text" name="tanggal_penugasan" class="form-control form-control-line">
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                            <label class="col-md-12">Upload</label>
                                                                         <div class="col-md-12">
                                                                     <input type="file" name="upload" class="form-control form-control-line">
                                                                </div>
                                                            </div>  
                                                        <div class="form-group">
                                                    <div class="col-sm-12">
                                                <button class="btn btn-success">Tambah</button>
                                             </div>
                                        </div>
                                    </form>
                               </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('../layout/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- javascript -->
    <?php include('../layout/down.php'); ?>

</body>

</html>