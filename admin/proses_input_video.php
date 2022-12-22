<?php 
include '../koneksi.php';
if (isset($_POST['input'])) {
    $urut = $_POST['urutan'];
    $namaVid = $_POST['nama_video'];
    $durasi = $_POST['durasi'];
    $linkVid = $_POST['link_video'];
    $Kat = $_POST['nama_sub_kategori_video'];
    $thubN = $_POST['thumbnail'];

    $query = "INSERT INTO video VALUES ('$urut', '$namaVid', '$durasi', '$linkVid', '$Kat', '$thubN')";
    $result = mysqli_query($koneksi, $query);
    header('location:video_tables.php');
}?>