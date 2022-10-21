<?php

include '../../koneksi.php';

// SQL untuk menghapus data
$sql = "DELETE FROM layanan WHERE id=id";

if ($koneksi->query($sql) === TRUE) {
  echo "Data berhasil dihapus";
} else {
  echo "Kesalahan menghapus data: " . $koneksi->error;
}
header('location:index.php');
