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

function registrasi($data){
    global $conn;

    $nama = ($data["nama"]);
    $email = ($data["email"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);


    // cek username sama
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' ");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('username sudah terdaftar');
                </script>";
        return false;
    }

    //konfirmasi password
    // if (password != password2) {
    //     echo "<script>
    //             alert('konfirmasi password tidak sesuai!');
    //         </script>";
    //      return false;
    // }

    // encripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan user ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$nama', '$email', '$username', '$password','user')");

    return mysqli_affected_rows($conn);
    
}

?>