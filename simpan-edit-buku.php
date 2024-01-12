<?php
    session_start();
    include "db.php";

    $no_buku = $_POST['no_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $thn_terbit = $_POST['thn_terbit'];

    $query = "UPDATE 'buku' SET 'judul' = '$judul', 'pengarang' = '$pengarang', 'penerbit' = '$penerbit', 'thn_terbit' = '$thn_terbit' WHERE 'buku','no_buku' = '$no_buku'";
    $result = mysqli_query($connect, $query);
        
    if ($result) {
        echo say("Berhasil memasukkan data", "index.php?act=buku");
    } else {
        echo say("Gagal memasukkan data", "index.php?act=buku");
    }
?>