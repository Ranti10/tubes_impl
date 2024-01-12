<div class="container" style:"margin-top: 64px;">
    <table align="center" cellspacing="0" width="70%" style="margin-top: 64px;">
        <form action="simpan-edit-buku.php" method="post">
            <tr>
                <td colspan="2"><h1 align="center">Edit Buku</h1></td>
            </tr>
            <?php
                $no_buku = $_GET['editBUku'];
                $q = mysqli_query($connect, "SELECT * FROM buku where no_buku='$no_buku'");
                $a = mysqli_fetch_array($q);
            ?>
            <input type="hidden" name="no_buku" value="<?=$a['no_buku']?>">
            <tr>
                <td>No Buku</td>
                <td><input type="text" name="no_buku" class="input" value="<?= $a['no_buku']?>"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" class="input" value="<?= $a['judul']?>"></td>
            </tr>
            <td>Pengarang</td>
                <td><input type="text" name="pengarang" class="input" value="<?= $a['pengarang']?>"></td>
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