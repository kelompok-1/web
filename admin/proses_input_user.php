<?php 
include '../koneksi.php';
if (isset($_POST['input'])) {
    $userName = $_POST['txt_username'];
    $userPass = $_POST['txt_pass'];
    $userEmail = $_POST['txt_email'];

    $query = "INSERT INTO pengguna VALUES ('$userName', '$userEmail', '$userPass', '2')";
    $result = mysqli_query($koneksi, $query);
    header('location:tables.php');
}?>