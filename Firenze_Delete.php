<?php
include "Firenze_Connection.php";

$id_buku = $_GET['id_buku'];
$result = mysqli_query($conn, "DELETE FROM buku_table WHERE id_buku = '$id_buku'");

if ($result) {
    header("location:Firenze_home.php?");
}
