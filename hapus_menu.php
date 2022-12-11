<?php
require "function_admin.php";
$id_menu = $_GET["id_menu"];

if ( hapus($id_menu) > 0 ){
    echo "
            <script>
                alert('data berhasil di hapus');
                document.location.href = 'halaman_admin.php';
            </script>
        ";
}else {
    echo "
        <script>
            alert('data gagal di hapus');
            document.location.href = 'halaman_admin.php';
        </script>
    ";
}



?>