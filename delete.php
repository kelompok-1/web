<?php 
	require ('koneksi.php');
	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM user_detail WHERE id='$id'");
	header("location:sb-admin-2/tables.php");
?>