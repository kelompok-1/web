<?php 
include '../koneksi.php';
if (isset($_POST['input'])) {
    $kodeBuku = $_POST['kode_buku'];
    $namaBuku = $_POST['nama_buku'];
    $namaPen = $_POST['nama_penulis'];
    $desK = $_POST['deskripsi_buku'];
    $jumHal = $_POST['jumlah_halaman'];
    $gaM = $_POST['gambar'];
    $linkPdf = $_POST['link_pdf'];

    $query = "INSERT INTO buku VALUES ('$kodeBuku', '$namaBuku', '$namaPen', '$desK', '$jumHal', '$gaM', '$linkPdf')";
    $result = mysqli_query($koneksi, $query);
    header('location:book_tables.php');
}?>