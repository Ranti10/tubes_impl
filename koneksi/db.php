<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'perpustakaan';

    $connect = mysqli_connect($host, $username, $password);

    if (!$connect) {
        die('Tidak terkoneksi: ' . mysqli_connect_error());
    }

    $select = mysqli_select_db($connect, $database); 

    if (!$select) {
        die('Tidak dapat membuka database: ' . mysqli_error($connect));
    }

    function say($pesan, $lokasi){
        echo "
            <script>
                window.alert('$pesan');
                window.location = '$lokasi';
            </script>
        ";
    }
?>