<?php
	@ob_start();
	session_start();
	require 'config.php';
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
    $afiliasi = $_POST['afiliasi'];
    $tahun_usulan = $_POST['tahun_usulan'];
    $tahun_kegiatan = $_POST['tahun_kegiatan '];
    $tahun_pelaksanaan= $_POST['tahun_pelaksanaan'];
    $lama_kegiatan = $_POST['lama_kegiatan'];
    $dana= $_POST['dana'];
    $kind = $_POST['kind'];
    $sk = $_POST['sk'];
    $tanggal_penugasan= $_POST['tanggal_penugasan'];
    $upload= $_POST['upload'];
    $id = $_POST['id'];

    $data[] = $kategori;
    $data[] = $judul;
    $data[] = $afiliasi;
    $data[] = $tahun_usulan ;
    $data[] = $tahun_kegiatani;
    $data[] = $tahun_pelaksanaan;
    $data[] = $lama_kegiatan;
    $data[] = $dana;
    $data[] = $kind ;
    $data[] = $sk ;
    $data[] = $tanggal_penugasan;
    $data[] = $upload;
    $data[] = $id;

    $sql = 'UPDATE penelitian SET kategori=?,judul=?,afiliasi=?,tahun_usulan=?,tahun_kegiatan=?,tahun_pelaksanaan=?,lama_kegiatan=?,kind=?,sk=?,tanggal_penugasan=?,upload=? WHERE id = ?';
    $row = $config -> prepare($sql);
    $row -> execute($data);

    echo '<script>window.location="penelitian.php"</script>';
?>