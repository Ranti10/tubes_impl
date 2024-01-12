<!DOCTYPE html>
<html>
    <head>
        <title>myPerpus</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container" style:"margin-top: 64px;">
            <table align="center" cellspacing="0" width="70%" style="margin:auto; margin-top: 64px;">
                <form action="simpan-buku.php" method="post">
                    <tr>
                        <td colspan="2"><h1 align="center">Tambah Buku</h1></td>
                    </tr>
                    <tr>
                        <td>No Buku</td>
                        <td><input type="text" name="no_buku" class="input"></td>
                    </tr>
                    <tr>
                        <td>Judul Buku</td>
                        <td><input type="text" name="judul" class="input"</td>
                    </tr>
                    <tr>
                    <td>Pengarang</td>
                        <td><input type="text" name="pengarang" class="input"</td>
                    </tr>
                    <tr>
                    <td>Penerbit</td>
                        <td><input type="text" name="penerbit" class="input"</td>
                    </tr>
                    <tr>
                    <td>Tahun Penerbit</td>
                        <td><input type="date" name="thn_terbit" class="input"</td>
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
                    <th>No Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Action</th>
                </tr>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "perpustakaan");
                    $q = mysqli_query($con, "SELECT * FROM buku");
                    while($a = mysqli_fetch_array($q)){
                ?>
                <tr>
                    <td style="text-align: center;"><?= $a['no_buku']?></td>
                    <td style="text-align: center;"><?= $a['judul']?></td>
                    <td style="text-align: center;"><?= $a['pengarang']?></td>
                    <td style="text-align: center;"><?= $a['penerbit']?></td>
                    <td style="text-align: center;"><?= $a['thn_terbit']?></td>
                    <td style="text-align: center;"><a href="?editBuku=<?=$a['no_buku']?>"Edit</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>