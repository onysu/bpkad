<?php
include '../../koneksi.php';

$dokumen = htmlspecialchars($_FILES['dokumen']['name']);
$tmp_dokumen = $_FILES['dokumen']['tmp_name'];
$keterangan = htmlspecialchars($_POST['keterangan']);
$jenis_file = htmlspecialchars($_POST['file']);
move_uploaded_file($tmp_dokumen, '../../files/' . $dokumen);
$query = "INSERT INTO infoopd SET keterangan='$keterangan', file='$jenis_file', dokumen='$dokumen'";
mysqli_query($koneksi, $query);
header('location:index.php');
