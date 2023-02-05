<?php
include ("koneksi.php");

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM tb_jurusan WHERE id_jurusan='$id'");
mysqli_query($koneksi, "DELETE FROM tb_peserta WHERE id='$id'");

header("location:tampil.php");
?>