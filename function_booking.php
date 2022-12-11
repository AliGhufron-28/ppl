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

function tambah_booking($data) {
    global $conn;

    $username = $data['username'];
    $email = $data['email'];
    $no_hp = $data['no_hp'];
    $tempat = $data['tempat'];

    $query = "INSERT INTO booking_tempat
                VALUES
                ('','$email','$username','$no_hp',now() , now() , '$tempat')
            ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function searchBoking($data){
    $query = "SELECT * FROM booking_tempat WHERE username = '$data'";

    return $query;
}

?>