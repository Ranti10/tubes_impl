<?php
    session_start();
    include "db.php";

    $NIS = $_POST['NIS'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $con = mysqli_connect("localhost", "root", "", "perpustakaan");
    $q = mysqli_query($con, "INSERT INTO siswa (NIS, nama, jenis_kelamin, kelas, alamat)
        VALUES ('$NIS', '$nama', '$jenis_kelamin', '$kelas', '$alamat')");
        
    if ($query) {
        echo say("Berhasil dimasukkan", "index.php?act=siswa");
    } else {
        echo say("Gagal memasukkan data", "index.php?act=siswa");
    }
?>