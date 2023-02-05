<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tabel</title>
</head>
<body>
    <h2>FORM TAMBAH BARANG</h2>
    <table>
        <form action="proses-tambah.php" method="post">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><label for="gender">Jenis Kelamin</label></td>
                <td><input type="text" name="gender" ></td>
            </tr>
            <tr>
                <td><label for="asalsekolah">Asal Sekolah</label></td>
                <td><input type="text" name="asalsekolah"></td>
            </tr>
            <tr>
                <td><label for="tempat_lahir">Tempat Lahir</label></td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            </tr>
                <td><label for="kapasitas">Kapasitas</label></td>
                <td><input type="text" name="kapasitas"></td>
            </tr>
            </tr>
                <td><label for="terisi">Terisi</label></td>
                <td><input type="text" name="terisi"></td>
            </tr>
                <button type="submit" name="simpan"> Simpan</button><br>
            
        </form>
    </table>
</body>
</html>