<?php

include '../../koneksi.php';

// ambil dahulu dokumen sesuai id yg dipilih
$id_info = $_GET['id_info'];
$dokumen = mysqli_query($koneksi, "SELECT * FROM infoopd WHERE id_info = $id_info");
$hasil = mysqli_fetch_assoc($dokumen);
unlink("../../files/" . $hasil['dokumen']);

$sql = "DELETE FROM infoopd WHERE id_info = $id_info";

if (mysqli_query($koneksi, $sql)) {
  echo "Data berhasil dihapus";
} else {
  echo "Kesalahan menghapus data: " . mysqli_error($koneksi);
}
header('location:index.php');
