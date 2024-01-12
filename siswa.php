<!DOCTYPE html>
<html>
    <head>
        <title>myPerpus</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container" style:"margin-top: 64px;">
            <h1 align="center">Administrasi Siswa</h1>
            <table align="center" cellspacing="0" width="70%" style="margin:auto; margin-top: 64px;">
                <form action="simpan-siswa.php" method="post">
                    <tr>
                        <td colspan="2"><h1 align="center">Tambah Siswa</h1></td>
                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td><input type="text" name="NIS" class="input"></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td><input type="text" name="nama" class="input"</td>
                    </tr>
                    <tr>
                    <td>Jenis Kelamin</td>
                        <td>
                            <select name="jenis_kelamin" class="input">
                                <option>Laki Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    <td>Kelas</td>
                        <td><input type="text" name="kelas" class="input"</td>
                    </tr>
                    <tr>
                    <td>Alamat</td>
                        <td>
                            <textarea class="text-area" name="alamat">
                        </textarea>
                        </td>
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
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "perpustakaan");
                    $q = mysqli_query($con, "SELECT * FROM siswa");
                    while($a = mysqli_fetch_array($q)){
                ?>
                <tr>
                    <td style="text-align: center;"><?= $a['NIS']?></td>
                    <td style="text-align: center;"><?= $a['nama']?></td>
                    <td style="text-align: center;"><?= $a['jenis_kelamin']?></td>
                    <td style="text-align: center;"><?= $a['kelas']?></td>
                    <td style="text-align: center;"><?= $a['alamat']?></td>
                    <td style="text-align: center;"><a href="?editSiswa=<?=$a['NIS']?>"Edit</a></td>
                </tr>
                <?php 
            } 
            ?>
            </table>
        </div>
    </body>
</html>