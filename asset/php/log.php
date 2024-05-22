<?php 
$conn = mysqli_connect("localhost","root","","db_user");

if ($conn == false) {
    die("". mysqli_connect_error());
}

$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$sql = "INSERT INTO regist VALUES ('$email', '$password')";

if (mysqli_query($conn, $sql)) {
    include 'ruangdiskus.html';
    echo'record inserted successfully';
} else {
    echo 'Eror: '. mysqli_error($conn);
}
mysqli_close($conn);
?>