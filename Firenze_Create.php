<?php
include "Firenze_Connection.php";

$judul = $_POST["judul_buku"];
$penulis = $_POST["penulis"];
$tTerbit = $_POST["tahun_terbit"];
$desk = $_POST["deskripsi"];
$bahasa = $_POST["bahasa"];
$tag = implode("; ", $_POST["tag"]);


if (isset($_POST['upload'])) {
    $dir = 'buku/';
    $filename = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir . $filename);
    mysqli_query($conn, "INSERT INTO buku_table VALUES('','$judul','$penulis','$tTerbit','$desk','$filename','$tag', '$bahasa')");

    header("location:Firenze_home.php?");
} 
