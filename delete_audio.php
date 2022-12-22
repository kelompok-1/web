<?php 
	require ('koneksi.php');
	$au = $_GET['nama_audio'];
	mysqli_query($koneksi, "DELETE FROM audio WHERE nama_audio='$au'");
	header("location:admin/audio_tables.php");
?>