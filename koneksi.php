<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_bpkad");

// Periksa koneksi
if (mysqli_connect_errno()) {
  echo "Gagal tersambung ke MySQL: " . mysqli_connect_error();
  exit();
}
