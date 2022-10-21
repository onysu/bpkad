<?php
include '../../koneksi.php';

$foto = $_FILES['gambar']['name'];
$tmp_foto = $_FILES['gambar']['tmp_name'];
$nama = $_POST['nama'];
$subnama = $_POST['subnama'];
$link = $_POST['link'];
// echo $nama;
// echo $foto;
move_uploaded_file($tmp_foto, '../../file/img/' . $foto);
$query = "INSERT INTO layanan SET nama='$nama', subnama='$subnama', link='$link', gambar='$foto'";
mysqli_query($koneksi, $query);
header('location:index.php');
