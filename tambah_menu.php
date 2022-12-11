<?php 

session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['status']==""){
    header("Location: login.php?pesan=gagal");
}

require "function_admin.php";

if (isset ($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil di tambahkan');
                document.location.href = 'halaman_admin.php';
            </script>";
    } else {
        echo "
            <script>
                alert('data gagal di tambahkan');
                document.location.href = 'tambah_menu.php';
            </script>
        ";
    }
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
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Merriweather:wght@400;700;900&family=Open+Sans:wght@300;400&family=Quicksand:wght@300;400;500&display=swap" 
    rel="stylesheet">
    <!-- Box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Css landing -->
    <link rel="stylesheet" href="css/landing.css">
    <style>
        :root {
            /* color */
            --primaryColor : #002939;
        }
        .body {
            background-color: var(--primaryColor);
            /* background-color: #E9E9E9; */
            font-family:'Helvetica';
            font-weight: bold;
        }
        .poss {
            margin-left: -10px;
            margin-top: 25px;
            color: white;
        }
        .poss2 {
            margin-left: 165px;
        }
        .h2 {
            font-family:'Helvetica';
            font-weight: bold;
        }
    </style>
    
</head>
<body class="body">
<!-- Navbar -->
<header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
            <div class="container">
                <a class="navbar-brand" href="#"><span>MEMORY</span>JINGGA CAFE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end align-items-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link me-4" href="#">Welcome <?php echo $_SESSION['username']; ?></a>
                        <div class="icons-home mt-2">
                            <a href="logout.php"><i class='bx bx-log-out-circle'></i></a>
                        </div>
                    </div> 
                </div>
            </div>
          </nav>
    </header>
<div class="poss">
        <div class="poss2" style="margin-top: 120px;">
            <h2>Form Tambah Menu</h2>
            <p>Silahkan lengkapi data dibawah ini:</p>
            <form method="post" action="" enctype="multipart/form-data">
                <div>
                    <div class="col-sm-4 col-form-label">
                        <label for="nm_menu">nama menu</label>
                        <input name="nm_menu" id="nm_menu" type="text" class="form-control" placeholder="masukan nama menu">
                    </div>
                    <div class="col-sm-4 col-form-label">
                        <label for="harga">harga</label>
                        <input name="harga" id="harga" type="number" class="form-control" placeholder="masukan harga">
                    </div>
                    <div class="col-sm-4 col-form-label">
                        <label for="">jenis_menu</label>
                        <select class="form-control" name="jenis_menu">
                            <option value="">--Please choose an option--</option>
                            <option value="makanan">makanan</option>
                            <option value="minuman">minuman</option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-form-label">
                        <label for="gambar">gambar</label>
                        <input name="gambar" id="gambar" type="file" class="form-control">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
            </form>
        </div>
</body>
</html>