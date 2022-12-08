<?php 
	require ('koneksi.php');
	if (isset($_POST['register'])) {
		$userName = $_POST['txt_username'];
		$userPass = $_POST['txt_pass'];
		$userEmail = $_POST['txt_email'];

		$query = "INSERT INTO pengguna VALUES ('$userName', '$userEmail', '$userPass', '2')";
		$result = mysqli_query($koneksi, $query);
		header('location:login.php');
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
				<form class="login100-form validate-form" action="register.php" method="POST">
					<span class="login100-form-title p-b-43">
						Daftar
					</span>
					
					<div class="mb-3">
    				<label for="username" class="form-label">Username</label>
    				<input type="text" class="form-control" id="username" aria-describedby="username" name="txt_username">
    				<div id="username" class="form-text"></div>
  					</div>
					<div class="mb-3">
    				<label for="nama" class="form-label">Email</label>
    				<input type="email" class="form-control" id="email" aria-describedby="nama" name="txt_email">
    				<div id="email" class="form-text"></div>
  					</div>
					<div class="mb-3">
    				<label for="password" class="form-label">Password</label>
    				<input type="password" class="form-control" pattern=".{6,}" id="password" aria-describedby="password" name="txt_pass">
    				<div id="password" class="form-text"></div>
  					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="register">
							REGISTER
						</button>
					</div>
					
					<div class="text-center w-full p-t-3 p-b-32">
						<a href="login.php">
							Sudah punya akun? Masuk
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/1.png');">
				<a href="index.php" class="btn btn-dark py-md-2 px-md-4">←</a>
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