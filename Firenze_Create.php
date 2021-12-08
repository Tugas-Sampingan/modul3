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
}

// if (!in_array($ext, $ekstensi)) {
//     header("location:index.php?alert=gagal_ekstensi");
// } else {
//     if ($ukuran < 100000) {
//         $xx = $rand . '_' . $filename;
//         move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
//         mysqli_query($conn, "INSERT INTO buku_table VALUES(NULL,'$judul','$penulis','$tTerbit','$desk','$xx','$tag', '$bahasa')");
//         header("location:index.php?alert=berhasil");
//     } else {
//         header("location:index.php?alert=gagal_ukuran");
//     }
// }
