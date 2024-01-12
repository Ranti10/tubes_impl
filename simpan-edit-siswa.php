<?php
    session_start();
    include "db.php";

    $NIS = $_POST['NIS'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE 'siswa' SET 'nama' = '$nama', 'kelas' = '$kelas', 'alamat' = '$alamat' WHERE 'siswa','NIS' = '$NIS'";
    $result = mysqli_query($connect, $query);
        
    if ($result) {
        echo say("Berhasil memasukkan data", "index.php?act=siswa");
    } else {
        echo say("Gagal memasukkan data", "index.php?act=siswa");
    }
?>