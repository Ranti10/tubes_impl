<?php
    session_start();
    include "db.php";

    $no_buku = $_POST['no_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $thn_terbit = $_POST['thn_terbit'];

    $con = mysqli_connect("localhost", "root", "", "perpustakaan");
    $q = mysqli_query($con, "INSERT INTO buku (no_buku, judul, pengarang, penerbit, thn_terbit)
        VALUES ('$no_buku', '$judul', '$pengarang', '$penerbit', '$thn_terbit')");
        
    if ($query) {
        echo say("Berhasil dimasukkan", "index.php?act=buku");
    }else {
        echo say("Gagal memasukkan data", "index.php?act=buku");
    }
?>
?>