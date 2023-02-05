<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>
<body>
    <h2>TABEL DATA</h2>
    <h3><a href="tambah.php">TAMBAH</a></h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis kelamin</th>
            <th>Asal Sekolah</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>jurusan</th>
            <th>Kapasitas</th>
            <th>Terisi</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $sql = mysqli_query ($koneksi, "SELECT * FROM tb_peserta INNER JOIN tb_jurusan ON tb_peserta.jurusan_id=tb_jurusan.jurusan_id");
        $no = 1;
        while($row = mysqli_fetch_array($sql)){
            ?>
            <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['gender']; ?></td>
            <td><?= $row['asalsekolah'];?></td>
            <td><?= $row['tempat_lahir'];?></td>
            <td><?= $row['tanggal_lahir'];?></td>
            <td><?= $row['jurusan']; ?></td>
            <td><?= $row['kapasitas']; ?></td>
            <td><?= $row['terisi']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']?>">Edit</a>||
                <a href="hapus.php?id=<?= $row['id']?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </html>