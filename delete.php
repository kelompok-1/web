<?php 
	require ('koneksi.php');
	$user = $_GET['username'];
	mysqli_query($koneksi, "DELETE FROM pengguna WHERE username='$user'");
	header("location:admin/tables.php");
?>