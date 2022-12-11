<?php 

require "function_booking.php";

session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['status']==""){
    header("Location: login.php?pesan=gagal");
}


if (isset($_POST["submit"])){
    $nama = $_POST['username'];
    if ( tambah_booking($_POST) > 0 ){
        echo "
            <script>
                alert('pemesanan telah berhasil di lakukan klik ok untuk mencetak nota');
                document.location.href = 'output_booking.php?nama=$nama';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('pemesanan gagal di lakukan klik ok untuk mencoba lagi');
                document.location.href = 'form_booking.php';
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

<div class="poss">
        <div class="poss2" style="margin-top: 120px;">
            <h2>Form Pemesanan Tempat</h2>
            <p>Silahkan lengkapi data dibawah ini:</p>
            <form method="post" action="">
                <div>
                    <div class="col-sm-4 col-form-label">
                        <label for="username">username</label>
                        <input name="username" id="username" type="text" class="form-control"
                        value="<?php echo $_SESSION['username']; ?>">
                    </div>
                    <div class="col-sm-4 col-form-label">
                        <label for="email">Email</label>
                        <input name="email" id="email" type="text" class="form-control" placeholder="masukan email">
                    </div>
                    <div class="col-sm-4 col-form-label">
                        <label for="no_hp">No. Hp</label>
                        <input name="no_hp" id="no_hp" type="text" class="form-control" placeholder="masukan no hp">
                    </div>
                    <div class="col-sm-4 col-form-label">
                        <label for="">Kode_Tempat</label>
                        <select class="form-control" name="tempat">
                            <option value="">--Please choose an option--</option>
                            <option value="TMPT01">TMPT01</option>
                            <option value="TMPT02">TMPT02</option>
                            <option value="TMPT03">TMPT03</option>
                            <option value="TMPT04">TMPT04</option>
                            <option value="TMPT05">TMPT05</option>
                            <option value="TMPT06">TMPT06</option>
                            <option value="TMPT07">TMPT07</option>
                        </select>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
            </form>
            <!-- <a href="landing_page.php" class="text-center py-2">kembali</a> -->
        </div>
</body>
</html>