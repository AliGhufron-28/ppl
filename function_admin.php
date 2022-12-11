<?php  

$conn = mysqli_connect("localhost","root","","sistem_kafe");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nm_menu = $data['nm_menu'];
    $harga = $data['harga'];
    $jenis_menu = $data['jenis_menu'];

    $gambar = upload();
    if( !$gambar){
        return false;
    }

    $query = "INSERT INTO menu
                VALUES
                ('','$nm_menu','$harga','$jenis_menu','$gambar')
            ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah ada gambar yang di upload
    if ($error === 4){
        echo"<script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yang diupload gambar?
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo"<script>
                alert('yang anda upload bukan gambar');
            </script>";
        return false;
    }

    //cek jika ukuran terlalu besar
    if( $ukuranFile > 100000){
        echo"<script>
                alert('ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    //lolos pengecekkan
    //generate nama baru 
    // $namaFileBaru = uniqid();
    // $namaFileBaru .= '.';
    // $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFile);

    return $namaFile;
}

function ubah($data) {
    global $conn;

    $id_menu = $data["id_menu"];
    $nm_menu = $data['nm_menu'];
    $harga = $data['harga'];
    $jenis_menu = $data['jenis_menu'];
    $gambar_lama = $data['gambar_lama'];

    //cek apakah admin pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4){
        $gambar = $gambar_lama;
    }else {
        $gambar = upload();
    }

    $query = "UPDATE menu SET
                nm_menu = '$nm_menu',
                harga = '$harga',
                jenis_menu = '$jenis_menu',
                gambar = '$gambar'
            WHERE id_menu = $id_menu
            ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn); 
}

function hapus($id_menu){
    global $conn;
    mysqli_query($conn,"DELETE FROM menu WHERE $id_menu = id_menu");

    return mysqli_affected_rows($conn);
}

function tambah_pesanan($data){
    global $conn;

    $nm_pembeli = $data['nm_pembeli'];
    $tlp = $data['tlp'];
    $pembayaran = $data['pembayaran'];
    
    $query = "INSERT INTO pembeli
                VALUES
                ('','$nm_pembeli','$tlp',now(),'$pembayaran')
            ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}


function tambah_transaksi($data){
    global $conn;

    $username = $data['username'];
    $no_hp = $data['no_hp'];
    $nm_menu = $data['nm_menu'];
    $harga = $data['harga'];
    $jumlah = $data['jumlah'];
    $total = $data['total'];
    

    $query = "INSERT INTO pemesanan
                VALUES
                ('','$username','$no_hp','$nm_menu','$harga','$jumlah','$total',now() , now())
            ";

    
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function searchpesan($data){
    $query = "SELECT * FROM pemesanan WHERE username = '$data'";

    return $query;
}

?>