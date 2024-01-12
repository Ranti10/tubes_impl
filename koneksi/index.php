<?php
    session_start();
    include"db.php";
    if(!isset($_SESSION['nama'])){
        echo "
        <script>
        window.location='login.php';
        </script>
        ";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>myPerpus</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="kiri">
                <h1 align="center" style="color:#fff; padding: 8px;">MyPerpus</h1>
                <u1>
                    <a href="buku.php?act=buku"><li>Buku</li></a>
                    <a href="peminjaman.php?act=peminjaman"><li>Peminjaman</li></a>
                    <a href="siswa.php?act=siswa"><li>Siswa</li></a>
                </u1>
            </div>
            <div class="kanan">
                <div class="hal">
                    <?php
                        if(isset($_GET['act'])){
                            if($_GET['act'] == 'buku')
                            include 'buku.php';
                        else
                            if($_GET['act'] == 'peminjaman')
                            include 'peminjaman.php';
                        else
                            if($_GET['act'] == 'siswa')
                            include 'siswa.php';
                        }else if(isset($_GET['editBuku'])){
                            include 'editBuku.php';
                        }else if(isset($_GET['editSiswa'])){
                            include 'editSiswa.php';
                        }else include 'depan.php';
                    ?>

                </div>
            </div>
        </div>
    </body>
</html>
