<?php
$conn = mysqli_connect("localhost", "root", "", "db_user");

if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO regist (nama, email, password) VALUES ('$nama', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    include 'ruangdiskus.html';
    echo 'Record inserted successfully';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>
