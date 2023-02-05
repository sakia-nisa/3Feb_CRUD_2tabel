<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Edit</title>
</head>
<body>
    <?php
    include("koneksi.php");

    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_peserta INNER JOIN tb_jurusan
    ON tb_peserta.jurusan_id=tb_jurusan.jurusan_id WHERE tb_peserta.id='$id'");
    
    while ($row = mysqli_fetch_array($query)){
    ?>
    <table border="0">
        <form action="proses-edit.php" method="POST">
            <tr><h2>EDIT DATA</h2></tr>
            <input type="hidden" name="id" value="<?php echo $row['id']?>" />

            <tr>
                <td><label for="nama" value="<?php $row['nama']; ?>">Nama</label></td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td><label for="gender" value="<?php $row['gender']; ?>">Jenis Kelamin</label></td>
                <td><input type="text" name="gender" value="<?php $row['gender']; ?>"></td>
            </tr>

            <tr>
                <td><label for="asalsekolah" value="<?php $row['asalsekolah']; ?>">Asal Sekolah</label></td>
                <td><input type="text" name="asalsekolah" value="<?php $row['asalsekolah']; ?>"></td>
            </tr>

            <tr>
                <td><label for="tempat_lahir" value="<?php $row['tempat_lahir']; ?>">Tempat Lahir</label></td>
                <td><input type="text" name="tempat_lahir" value="<?php $row['tempat_lahir']; ?>"></td>
            </tr>

            <tr>
                <td><label for="tanggal_lahir" value="<?php $row['tanggal_lahir']; ?>">Tanggal Lahir</label></td>
                <td><input type="date" name="tanggal_lahir" value="<?php $row['tanggal_lahir']; ?>"b></td>
            </tr>
            <tr>
                <td><label for="jurusan" value="<?php $row['jurusan']; ?>">Jurusan</label></td>
                <td><input type="text" name="jurusan" value="<?php $row['jurusan']; ?>"b></td>
            </tr>
            <tr>
                <td><label for="kapasitas" value="<?php $row['kapasitas']; ?>">Kapasitas</label></td>
                <td><input type="text" name="kapasitas" value="<?php $row['kapasitas']; ?>"b></td>
            </tr>
            <tr>
                <td><label for="terisi" value="<?php $row['terisi']; ?>">terisi</label></td>
                <td><input type="text" name="terisi" value="<?php $row['terisi']; ?>"b></td>
            </tr>

            <button type="submit" value="edit" name="edit">Simpan</button>
        </form>
    </table>
    <?php
    }
    ?>
</body>
</html>