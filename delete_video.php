<?php 
	require ('koneksi.php');
	$nama = $_GET['nama_video'];
	mysqli_query($koneksi, "DELETE FROM video WHERE nama_video='$nama'");
	header("location:admin/video_tables.php");
?>