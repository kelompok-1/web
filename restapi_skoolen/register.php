<?php
$db = mysqli_connect('localhost','wstifci1_courseapp','Polije1234','wstifci1_courseapp');
if(!$db)
{
	echo "Database connection failed";
}
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

$sql = "SELECT * FROM pengguna WHERE username = '".$username."'";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
if($count == 1){
	echo json_encode("Error");
}else{
	$insert = "INSERT INTO pengguna(username,email,password,level) VALUES ('".$username."','".$email."','".$password."','".$level."')";
		$query = mysqli_query($db,$insert);
		if($query){
			echo json_encode("Success");
		}
}
?>