<?php
include 'koneksi.php';

$foto = $_FILES['foto_siswa']['name'];
$tmp_foto = $_FILES['foto_siswa']['tmp_name'];
$nama = $_POST['nm_siswa'];
// echo $nama;
// echo $foto;
move_uploaded_file($tmp_foto, 'file/' . $foto);
$query = "INSERT INTO siswa SET nm_siswa='$nama', foto_siswa='$foto'";
mysqli_query($koneksi, $query)
    or die("SQL Error " . mysqli_error());
header('location:index.php');
