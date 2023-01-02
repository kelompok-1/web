<?php
require('koneksi.php');

$nm_barang = $_POST['nm_barang'];
$stok = $_POST['stok'];
$gambar = $_POST['gambar'];

$insert = $conn->query("INSERT INTO tabel_barang(nm_barang,stok) VALUES ('".$nm_barang."','".$stok."','".$gambar."')") ;
if($insert){
    echo "Success";
}
$conn->close();
return;

?>