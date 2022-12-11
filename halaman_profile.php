<?php 
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['status']==""){
    header("Location: login.php?pesan=gagal");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from pemesanan tempat</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="css/profile.css">
    
</head>
<body>

<?php include "navbar_user.php"; ?>

<div class="main text-center" style="margin-top: 100px;">
    <img src="img/avatar.png" alt="" width="170px" style="border-radius: 100%;">
    <h3 class="mt-3" style="color: black;"><?php echo $_SESSION['username']; ?></h3>
    <div class="text"><p>Selamat datang di halaman profile <b><?php echo $_SESSION['username']; ?></p></div>
</div>
</body>
</html>