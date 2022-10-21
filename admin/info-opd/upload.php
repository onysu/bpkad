<?php
include '../../koneksi.php';

$dokumen = $_FILES['dokumen']['name'];
$tmp_dokumen = $_FILES['dokumen']['tmp_name'];
$keterangan = $_POST['keterangan'];
$jenis_file = $_POST['file'];
move_uploaded_file($tmp_dokumen, '../../files/' . $dokumen);
$query = "INSERT INTO infoopd SET keterangan='$keterangan', file='$jenis_file', dokumen='$dokumen'";
mysqli_query($koneksi, $query);
header('location:index.php');


// fungsi tambah dokumen
// function tmbh_dok()
// {
//   $keterangan = $_POST['keterangan'];
//   $file = $_POST['file'];
//   $dokumen = $_POST['dokumen'];

//   $query = "INSERT INTO infoopd VALUES(null, '$keterangan','$file','$dokumen', CURRENT_TIMESTAMP())";

//   mysqli_query($koneksi, $query);

//   return mysqli_affected_rows($koneksi);
// }
