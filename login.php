<?php 

session_start();

if( isset($_SESSION["status"])) {
    header("Location: landing_page.php");
    exit;
}

require "functionLogin-Regis.php";

if (isset ($_POST["login"])) {

    $username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' 
    and password = '$password' ");

	//cek username
	if ( mysqli_num_rows($result) === 1) {

		$data = mysqli_fetch_assoc($result);

		if($data['status'] == "user") {
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "user";
			// alihkan ke halaman dashboard admin
			header("Location: landing_page.php");

		} else if($data['status'] == "admin"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "admin";
			// alihkan ke halaman dashboard admin
			header("Location: halaman_admin.php");
			
		}else{
			// alihkan ke halaman login kembali
			header("Location: login.php?pesan=gagal");
		}

		// $_SESSION["login"] = true;

		// header("Location: landing_page.php");
        // exit;
	}

	$error = true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="login.php" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>

				<?php if(isset($error)) : ?>
					<p style="color: red; font-style: italic;">username / password salah</p>
				<?php endif; ?>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input" id="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input" id="password">
            	   </div>
            	</div>
            	
				<button type="submit" name="login" class="btn">Login</button>
				<p>Belum punya akun?<a href="registrasi.php">register</a></p>
            </form>
        </div>
    </div>
	<script type="text/javascript" src="js/mainLogin.js"></script>
</body>
</html>
