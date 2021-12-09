<?php
include "Firenze_Connection.php";


$id_buku = $_GET['id_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis_buku = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$deskripsi = $_POST['deskripsi'];
$bahasa = $_POST['bhs'];
$tag = $_POST['tag'];
$gambar = $_FILES['foto']['name'];

$query = "UPDATE buku_table SET 
    judul_buku = '$judul_buku',
    penulis_buku = '$penulis_buku',
    tahun_terbit = '$tahun_terbit',
    deskripsi = '$deskripsi',
    gambar = '$gambar',
    tag = '$tag',
    bahasa = '$bahasa'
    
    WHERE id_buku = '$id_buku'
";
$result = mysqli_query($conn, $query);
if ($result) {
    header("location:Firenze_detailBuku.php?id_buku=$id_buku");
}
