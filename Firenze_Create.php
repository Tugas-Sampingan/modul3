<?php
include "Firenze_Connection.php";

$judul = $_POST["judul_buku"];
$penulis = $_POST["penulis"];
$tTerbit = $_POST["tahun_terbit"];
$desk = $_POST["deskripsi"];
$bahasa = $_POST["bahasa"];
$tag = $_POST["tag"];
$tagline = implode("; ",$tag);


if (isset($_POST['upload'])) {
    $dir = 'buku/';
    $filename = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir . $filename);
    mysqli_query($conn, "INSERT INTO buku_table VALUES('','$judul','$penulis','$tTerbit','$desk','$filename','$tagline', '$bahasa')");

    header("location:Firenze_home.php?");
} else if (isset($_POST['update'])) {
    $id = 
    $dir = 'buku/';
    $filename = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir . $filename);
    mysqli_query($conn, "UPDATE buku_table VALUES(judul_buku='$judul', penulis_buku='$penulis', tahun_terbit='$tTerbit', deskripsi='$desk', gambar='$filename', tag='$tagline', bahasa='$bahasa') WHERE id_buku='$id'");

    header("location:Firenze_home.php?");
}

