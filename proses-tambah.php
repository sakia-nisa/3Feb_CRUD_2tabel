<?php
include("koneksi.php");

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $asalsekolah = $_POST['asalsekolah'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan = $_POST['jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "INSERT INTO tb_jurusan (jurusan,kapasitas, terisi) VALUES ('$jurusan','$kapasitas','$terisi')";
    $query = mysqli_query($koneksi, $sql);

    $sql = "SELECT MAX(jurusan_id)as jurusan_id FROM tb_jurusan LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    $data = mysqli_fetch_array($query);
    $jurusan_id = $data['jurusan_id'];

    $sql = "INSERT INTO tb_peserta(jurusan_id,nama, gender, asalsekolah, tempat_lahir, tanggal_lahir) VALUES ('$jurusan_id','$nama', '$gender','$asalsekolah','$tempat_lahir','$tanggal_lahir')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    } else {
        header('location:tampil.php?status=gagal');
    }
}
?>