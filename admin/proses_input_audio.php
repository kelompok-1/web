<?php 
include '../koneksi.php';
if (isset($_POST['input'])) {
    $namaAu = $_POST['nama_audio'];
    $namaAut = $_POST['nama_author'];
    $gam = $_POST['gambar'];
    $linkAu = $_POST['link_audio'];

    $query = "INSERT INTO audio VALUES ('$namaAu', '$namaAut', '$gam', '$linkAu')";
    $result = mysqli_query($koneksi, $query);
    header('location:audio_tables.php');
}?>