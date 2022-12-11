<?php 

require "function_admin.php";

session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['status']==""){
    header("Location: login.php?pesan=gagal");
}

if (isset($_POST["submit"])){
    $nama = $_POST['username'];
    if ( tambah_transaksi($_POST) > 0 ){
        echo "
            <script>
                alert('pemesanan telah berhasil di lakukan klik ok untuk mencetak nota');
                document.location.href = 'output_pemesanan.php?nama=$nama';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('pemesanan gagal di lakukan klik ok untuk mencoba lagi');
                document.location.href = 'form_transaksi.php';
            </script>
        ";
    }
}

$data = query("SELECT * FROM menu");

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
                        <label for="no_hp">no handphone</label>
                        <input name="no_hp" id="no_hp" type="number" class="form-control"
                        placeholder="masukkan no handphone">
                    </div>
                    
                    <div class="col-sm-4 col-form-label">
                        <label for="">nama menu</label>
                        <select class="form-control" name="nm_menu">
                            <?php foreach($data as $hasil) : ?>
                            <option value=""><?= $hasil["nm_menu"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-sm-4 col-form-label">
                        <label for="">nama menu</label>
                        <select class="form-control" name="harga">
                            <?php foreach($data as $hasil) : ?>
                            <option value=""><?= $hasil["harga"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-sm-4 col-form-label">
                        <label for="jumlah">Jumlah</label>
                        <input name="jumlah" id="jumlah" type="text" class="form-control" placeholder="jumlah">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
            </form>
            <!-- <a href="landing_page.php" class="text-center py-2">kembali</a> -->
        </div>
</body>
</html>