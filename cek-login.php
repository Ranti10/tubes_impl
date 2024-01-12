<?php
    session_start();
    include "db.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $qcek = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password' AND status='ON'");

    if (mysqli_num_rows($qcek) == 1) {
        $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' and password='$password'  and status='ON'");
        $q = mysqli_fetch_array($query);
        
        $nama = $q['nama'];

        if (isset($nama)) {
            $_SESSION['nama'] = $nama;
            echo say("Selamat datang", "index.php");
        }
    }else {
        echo say("Username atau Password anda salah, Silahkan ulangi lagi", "login.php");
    }
?>
