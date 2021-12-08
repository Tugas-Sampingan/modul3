<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>HOME - MODUL3 FIRENZE</title>
</head>

<?php
include "Firenze_Connection.php";
$tabel = mysqli_query($conn, "SELECT * FROM buku_table");
$baris = mysqli_num_rows($tabel);
?>

<body>
    <script src="js/bootsrap.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="logo-ead.png" style="width: 130px;" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="my-auto" action="Firenze_tambahBuku.php">
                    <button class="btn btn-primary" type="submit">Tambah Buku</button>
                </form>
            </div>
        </nav>
    </header>

    <!-- CEK BUKU -->

    <main class="py-3">
        <?php
        if ($baris > 0) {
            include "Firenze_ShowBook.php";
        } else {
            include "Firenze_NoBooks.php";
        }
        ?>
    </main>

    <br><br><br><br><br>

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