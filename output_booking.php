<?php

require "function_booking.php";

session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['status']==""){
    header("Location: login.php?pesan=gagal");
}


if(!isset($_GET['nama']))
{
    header('location: form_booking.php');
}else{
    $query = searchBoking($_GET['nama']);
    $result = query($query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pemesanan Tempat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <style>
        .inp{
            background-color: white;
        }
    </style>

</head>
<body style="font-family: Courier New;">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-4 bg-light mt-5">
                <table>
                    <p class="text-center mt-4" style="font-size: 20px; font-weight: bold;">MemoriJingga Cafe</p>
                    <p class="text-center">Jl. Telang Indah No. 123 Blok. A23 Bangkalan, Jawa Timur</p>
                    <p class="text-center">Telp.087734248496</p>
                    <td colspan="3">-------------------------------------------</td>

                    <tr>
                        <td>username</td><td>:</td>
                        <td> <?php echo $result[0]['username'];?></td>
                    </tr>

                    <tr>
                        <td>no_hp</td><td>:</td>
                        <td><?php echo $result[0]['no_hp'];?></td>
                    </tr>

                    <tr>
                        <td>tanggal</td><td>:</td>
                        <td> <?php echo $result[0]['tanggal'];?></td>
                    </tr>

                    <tr>
                        <td>waktu</td><td>:</td>
                        <td><?php echo $result[0]['waktu'];?></td>
                    </tr>

                    <tr>
                        <td>kode tempat</td><td> : </td>
                        <td><?php echo $result[0]['tempat'];?></td>
                    </tr>

                    <td colspan="3">-------------------------------------------</td>

                </table>
                <p class="text-center mt-3">*Terimakasih telah memesan*</p>
            </div>
            <script>window.print();</script>
            <!-- <input type="button" class="inp text-center mt-4"  value="cetak"> -->
        </div>
    </div>
    
</body>
</html>