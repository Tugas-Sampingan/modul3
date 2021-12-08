<?php

$conn = mysqli_connect("localhost", "root", "", "modul3");

if (!$conn) {
    echo "Database Tidak Dapat Terhubung!";
}
