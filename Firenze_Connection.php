<?php

$koneksi = mysqli_connect("localhost:3307", "root", "", "modul3");

if(!$koneksi){
    echo "Database Tidak Dapat Terhubung!";
}
?>