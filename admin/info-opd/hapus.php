<?php

include '../../koneksi.php';

// SQL untuk menghapus data
$sql = "DELETE FROM infoopd WHERE id_info=id_info";

if ($koneksi->query($sql) === TRUE) {
  echo "Data berhasil dihapus";
} else {
  echo "Kesalahan menghapus data: " . $koneksi->error;
}
header('location:index.php');
