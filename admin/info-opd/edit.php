<?php
include '../../koneksi.php';

// $dokumen = htmlspecialchars($_FILES['dokumen']['name']);
// $tmp_dokumen = $_FILES['dokumen']['tmp_name'];
// $keterangan = htmlspecialchars($_POST['keterangan']);
// $jenis_file = htmlspecialchars($_POST['file']);
// move_uploaded_file($tmp_dokumen, '../../files/' . $dokumen);
// $query = "UPDATE infoopd SET keterangan='$keterangan', file='$jenis_file', dokumen='$dokumen'";
// mysqli_query($koneksi, $query);
// header('location:index.php');
$id_info = $_GET['id_info'];
$query = mysqli_query($koneksi, "SELECT * FROM infoopd WHERE id_info = $id_info");
// while(mysqli_fetch_array($koneksi, $query));
