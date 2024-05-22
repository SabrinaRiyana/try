<?php
$servername = "localhost";
$database = "twolprofile";
$email = "root";
$password = "";

$conn = mysqli_connect($servername, $email, $password, $database);

if (!$conn) {
    die("Koneksi Gagal". mysqli_connect_error());
} else {
    echo"Koneksi Berhasil" ;
}