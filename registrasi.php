<?php 

require "functionLogin-Regis.php";

if (isset ($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('anda telah berhasil melakukan registrasi');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
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
			<form action="" method="POST">
				
				<h2 class="title">Welcome To Registrastion</h2>
           		
                <div class="input-div one">
                    <div class="i"> 
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                         <h5>Nama</h5>
                         <input type="text" name="nama" class="input" id="nama">
                 </div>
                </div>

                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                         <h5>Email</h5>
                         <input type="email" name="email" class="input" id="email">
                 </div>
                </div>
            	
                <div class="input-div pass">
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

                <button type="submit" name="register" class="btn">registrasi</button>
                <p>Sudah punya akun?<a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/mainLogin.js"></script>
</body>
</html>
