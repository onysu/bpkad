<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_upload_foto");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
