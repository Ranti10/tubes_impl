<?php
    session_start();
    include "db.php";

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $judul = $_POST['judul'];

    $con = mysqli_connect("localhost", "root", "", "perpustakaan");
    $q = mysqli_query($con, "INSERT INTO peminjaman (nama, kelas, judul)
        VALUES ('$nama', '$kelas', '$judul')");
    
    $q = mysqli_query($con, "UPDATE peminjaman SET tgl_kembali=NOW() WHERE id_peminjaman='$id_peminjaman'");
        if ($q) {
            echo say("Berhasil dimasukkan", "index.php?act=peminjaman");
        } else {
            echo say("Gagal memasukkan data", "index.php?act=peminjaman");
        }
?>