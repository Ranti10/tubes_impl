<!DOCTYPE html>
<html>
    <head>
        <title>myPerpus</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'perpustakaan';

    $connect = mysqli_connect($host, $username, $password);

    if (!$connect) {
        die('Tidak terkoneksi: ' . mysqli_connect_error());
    }
    ?>
        <div class="container" style="margin-top: 64px;">
            <h1 align="center">Administrasi Peminjaman</h1>
            <table align="center" cellspacing="0" width="70%" style="margin:auto; margin-top: 64px;">
                <form action="simpan-pinjam.php" method="post">
                    <tr>
                        <td colspan="2"><h1 align="center">Tambah Peminjaman</h1></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td><input type="text" name="nama" class="input"></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td><input type="text" name="kelas" class="input"></td>
                    </tr>
                    <tr>
                    <td>Judul Buku</td>
                        <td><input type="text" name="judul" class="input"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-bottom: 16px;">
                            <input type="reset" class="submit" value="Reset">
                            <input type="submit" class="submit" value="Tambah">
                        </td>
                    </tr>
            </table>
            <div id="table">
            <table align="center" cellspacing="0" width="100%"style="margin-top: 32pt;">
                <tr>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>action</th>
                </tr>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "perpustakaan");
                    $q = mysqli_query($con, "SELECT * FROM peminjaman");
                    while($a = mysqli_fetch_array($q)){
                ?>
                <tr>
                    <td style="text-align: center;"><?= $a['id_peminjaman']?></td>
                    <td style="text-align: center;"><?= $a['nama']?></td>
                    <td style="text-align: center;"><?= $a['kelas']?></td>
                    <td style="text-align: center;"><?= $a['judul']?></td>
                    <td style="text-align: center;"><?= $a['tgl_pinjam']?></td>
                    <td style="text-align: center;"><?= $a['tgl_kembali']?></td>
                    <td style="text-align: center;"><a href="?actpeminjaman kon=<?=$a['id_peminjaman']?>">Konfirmasi</a></td>
                </tr>
                <?php 
                    } 
                ?>
            </table>
        </div>
    </body>
</html>

<?php
    if(isset($_GET['kon'])){
        $id_peminjaman = $_GET['kon'];
        $con = mysqli_connect("localhost", "root", "", "perpustakaan");
        $stmt = mysqli_prepare($con, "UPDATE peminjaman SET tgl_kembali=NOW() WHERE id_peminjaman=?");
        mysqli_stmt_bind_param($stmt, "i", $id_peminjaman);

        if (mysqli_stmt_execute($stmt)) {
            echo say("Berhasil dimasukkan", "index.php?act=peminjaman");
        } else {
            echo say("Gagal memasukkan data", "index.php?act=peminjaman");
        }

        mysqli_stmt_close($stmt);
        mysqli_close($con);
    }   
?>