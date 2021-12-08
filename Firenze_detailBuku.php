<?php

include 'Firenze_Connection.php';


    $id_buku = $_GET['id_buku'];
    $select2 = mysqli_query($conn,"SELECT * FROM buku_table WHERE id_buku = '$id_buku'");
    $display = mysqli_fetch_assoc($select2);

    

?>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>DETAIL BUKU - MODUL3 FIRENZE</title>
    </head>

    <body>
        <script src= "js/bootsrap.js"></script>
        <script src="js/popper.min.js"></script>

    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="logo-ead.png" style="width: 130px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex">
                <button class="btn btn-primary" type="submit">Tambah Buku</button>
            </form>
            </div>
        </nav>
        </header>

    
    <!-- books details -->
    <br><br><br>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded">
        <h2 class="text-center"><b>Detail Buku</b></h2>
        <br><br>
        <div class="text-center"> <img src="https://www.bukukita.com/babacms/displaybuku/101149_f.jpg" alt="website" width="350"></div>
        <hr class="my-5" style="height: 5px;color:blue">
        <table>
            <tr>
                <td><b>Judul:</b></td>
            </tr>
            <tr>
                <td>Otodidak Desain dan Pemrograman Website</td>
            </tr>
            <tr>
                <td><b>Penulis:</b></td>
            </tr>
            <tr>
                <td>Firenze_1202194019</td>
            </tr>
            <tr>
                <td><b>Tahun Terbit:</b></td>
            </tr>
            <tr>
                <td>2017</td>
            </tr>
            <tr>
                <td><b>Deskripsi:</b></td>
            </tr>
            <tr>
                <td>Buku ini berisikan Buku ini membahas secara praktis pemrograman dan desain website yang memadukan Dreamweaver, HTML, CSS, dan PHP bagi pemula.</td>
            </tr>
            <tr>
                <td><b>Bahasa:</b></td>
            </tr>
            <tr>
                <td>Indonesia</td>
            </tr>
            <tr>
                <td><b>Tag:</b></td>
            </tr>
            <tr>
                <td>Pemrogaman,Website,OOP.</td>
            </tr>
        </table>
        <br>
        <br>
        <center>
            <form class="my-auto" action="Firenze_Modal.php">
                <button type="submit" class="btn btn-primary" style="width: 45%; margin-bottom"><b>Sunting</b></button>
            </form>
            <button type="submit" class="btn btn-danger" style="width: 45%; margin-bottom"><b>Hapus</b></button>
        </center>
        <br>
        <br>
        
    </div>


    <!-- footer -->
        <footer class="mt-4">
        <div class="container-fullwidth">
            <br><br><br>
            <div class="jumbotron" id="home" style="text-align: center;">
            <div class="container"></div>
            <div class="text-center">
            <img src="logo-ead.png" alt="logo" width="200" height="80">
            <h6 class="display-5"><b>Perpustakaan EAD</b></h6>
            <p>©Firenze_1202194019</p>
            </div>
        </div>
        </footer>
    </body>
</html>