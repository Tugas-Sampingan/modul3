<?php
include "Firenze_Connection.php";

function insertGambar() {
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];

    if ($error === 4) {
        echo "<script>
                alert('Silahkan memilih gambar yang akan dimasukkan');
              </script>";
        return false;
    }

    $fileValid = ['jpg', 'jpeg', 'png'];
    $file_ext = explode('.', $namafile);
    $file_ext = strtolower(end($file_ext));

    if (!in_array($file_ext, $fileValid)) {
        echo "<script>
                alert('Masukkan gambar dengan format .jpg .jpeg atay .png !');
              </script>";
        return false;
    }

    if ($filesize > 100000) {
        echo "<script>
                alert('Kecilkan resolusi gambar! Resolusi Terlalu Besar!');
              </script>";
        return false;
    }

    $namafile_baru = uniqid();
    $namafile_baru .= '.';
    $namafile_baru .= $file_ext;

    move_uploaded_file('buku/'.$namafile_baru);
    return $namafile_baru;
}

function insertIsi($isi) {
    global $koneksi;
    $namaTabel = "buku_table";
    $kol1 = htmlspecialchars($isi["judulbuku"]);
    $kol2 = htmlspecialchars($isi["penulis"]);
    $kol3 = htmlspecialchars($isi["tahun"]);
    $kol4 = htmlspecialchars($isi["deskripsi"]);
    $kol6 = $isi["tag"];
    $kol7 = $isi["bahasa"];

    $kol5 = insertGambar();
    if (!$kol5) {
        return false;
    }

    $kol6_isi = implode(", ",$kol6);

    $query = "INSERT INTO $nama_tabel VALUES
              ('', '$kol1', '$kol2', '$kol3', '$kol4',
               '$kol5', '$kol6_isi', '$kol7')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
?>