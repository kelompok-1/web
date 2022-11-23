<?php 
// koneksi database
include 'koneksi.php';
if (isset($_POST['update'])) {

$id = $_POST['id'];
$userName = $_POST['txt_username'];
$userPass = $_POST['txt_pass'];
$userFullName = $_POST['txt_nama'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE user_detail SET username='$userName', user_password='$userPass', user_fullname='$userFullName' where id='$id'");
header("location:sb-admin-2/tables.php");
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Skoolen | Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <?php
                    include 'koneksi.php';
	                $id = $_GET['id'];
	                $data = mysqli_query($koneksi,"SELECT * FROM user_detail WHERE id='$id'");
	                while($row = mysqli_fetch_array($data)){
		            ?>
				<form class="login100-form validate-form" action="edit.php" method="POST">
					<span class="login100-form-title p-b-43">
						Edit User
					</span>
					<div class="mb-3">
    				<label for="username" class="form-label">Username</label>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    				<input type="text" class="form-control" id="username" aria-describedby="username" name="txt_username" value="<?php echo $row['username']; ?>">
    				<div id="username" class="form-text"></div>
  					</div>
					<div class="mb-3">
    				<label for="password" class="form-label">Password</label>
    				<input type="password" class="form-control" id="password" aria-describedby="password" name="txt_pass" value="<?php echo $row['user_password']; ?>">
    				<div id="password" class="form-text"></div>
  					</div>
					<div class="mb-3">
    				<label for="nama" class="form-label">Nama</label>
    				<input type="nama" class="form-control" id="nama" aria-describedby="nama" name="txt_nama" value="<?php echo $row['user_fullname']; ?>">
    				<div id="nama" class="form-text"></div>
  					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="update">
							Update
						</button>
					</div>
				</form>
                <?php
                }
                ?>
				<div class="login100-more" style="background-image: url('images/1.png');">
				<a href="sb-admin-2/tables.php" class="btn btn-dark py-md-2 px-md-4">←</a>
				</div>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>