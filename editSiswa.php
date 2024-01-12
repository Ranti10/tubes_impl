<div class="container" style:"margin-top: 64px;">
    <table align="center" cellspacing="0" width="70%" style="margin-top: 64px;">
        <form action="simpan-edit-siswa.php" method="post">
            <tr>
                <td colspan="2"><h1 align="center">Edit Siswa</h1></td>
            </tr>
            <?php
                $NIS = $_GET['editSiswa'];
                $q = mysqli_query($connect, "SELECT * FROM siswa where NIS='$NIS'");
                $a = mysqli_fetch_array($q);
            ?>
            <input type="hidden" name="NIS" value="<?=$a['NIS']?>">
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama" class="input" value="<?= $a['nama']?>"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" class="input" value="<?= $a['kelas']?>"></td>
            </tr>
            <td>Alamat</td>
                <td><textarea class="text-area" name="alamat"><?= $a['alamat']?></textarea>></td>
            </tr>
            <td>Penerbit</td>
                <td><input type="text" name="penerbit" class="input" value="<?= $a['penerbit']?>"></td>
            </tr>
            <td>Tahun Terbit</td>
                <td><input type="data" name="thn_terbit" class="input"value="<?= $a['thn_terbit']?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-bottom: 16px;">
                    <input type="reset" class="submit" value="Reset">
                    <input type="submit" class="submit" value="Selesai">
                </td>
            </tr>
    </table>
</div>