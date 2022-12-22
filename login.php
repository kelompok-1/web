<?php 
require('koneksi.php');
session_start();

if(isset($_POST['submit'])){
    $user = $_POST['txt_username'];
    $pass = $_POST['txt_pass'];

    if(!empty(trim($user)) && !empty(trim($pass))){
        $query = "SELECT * FROM pengguna WHERE username='$user'";
        $result = mysqli_query($koneksi,$query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)){
            $userVal = $row['username'];
			$emailVal = $row['email'];
            $passVal = $row['password'];
        }

        if($num != 0){
            if($userVal==$user && $passVal==$pass){
                // header('Location: dashboard.php?user_fullname='.urlencode($username));
                $_SESSION['username'] = $userVal;
                header('Location:admin/home.php');
            }else{
                setcookie("message","Maaf, Password Salah",time()+1);
                header('Location:login.php');
            }
        }else{
            setcookie("message","Akun Belum Terdaftar",time()+1);
            header('Location:login.php');
        }
    }else{
        $error = 'Data tidak boleh kosong!!';
        echo $error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Skoolen | Login</title>
	<meta charset="UTF-8">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
				<form class="login100-form validate-form" action="login.php" method="POST">
					<span class="login100-form-title p-b-43">
						Masuk untuk Melanjutkan
					</span>
					<?php  if (isset($_COOKIE["message"])) {
                      echo $_COOKIE["message"];
                    }?>
					<div class="mb-3">
    				<label for="username" class="form-label">Username</label>
    				<input type="text" class="form-control" id="username" aria-describedby="username" name="txt_username">
    				<div id="username" class="form-text"></div>
  					</div>
					<div class="mb-3">
    				<label for="password" class="form-label">Password</label>
    				<input type="password" class="form-control" id="password" aria-describedby="password" name="txt_pass">
    				<div id="password" class="form-text"></div>
  					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							LOGIN
						</button>
					</div>
				</form>
				<div class="login100-more" style="background-image: url('images/1.png');">
				<a href="index.php" class="btn btn-dark py-md-2 px-md-4">←</a>
				</div>
			</div>
		</div>
	</div>
	
	

	
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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