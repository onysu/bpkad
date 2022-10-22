<?php

include '../../koneksi.php';
$id_info = $_GET['id_info'];
// ambil dahulu gambar sesuai data yg dipilih
$dokumen = mysqli_query($koneksi, "SELECT * FROM infoopd WHERE id_info = $id_info");
$result = mysqli_fetch_assoc($dokumen);
unlink("../../files/" . $result['dokumen']);

$sql = "DELETE FROM infoopd WHERE id_info = $id_info";

if (mysqli_query($koneksi, $sql)) {
  echo "Data berhasil dihapus";
} else {
  echo "Kesalahan menghapus rekaman: " . mysqli_error($koneksi);
}
header('location:index.php');
