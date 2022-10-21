<?php

include 'koneksi.php';

// SQL untuk menghapus data
$sql = "DELETE FROM siswa WHERE id_siswa=id_siswa";

if ($koneksi->query($sql) === TRUE) {
  echo "Data berhasil dihapus";
} else {
  echo "Kesalahan menghapus data: " . $koneksi->error;
}
header('location:index.php');
