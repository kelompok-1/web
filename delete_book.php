<?php 
	require ('koneksi.php');
	$kd = $_GET['kode_buku'];
	mysqli_query($koneksi, "DELETE FROM buku WHERE kode_buku='$kd'");
	header("location:admin/book_tables.php");
?>