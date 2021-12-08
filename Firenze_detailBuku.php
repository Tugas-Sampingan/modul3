<?php

include 'Firenze_Connection.php';


$id_buku = $_GET['id_buku'];
$selected = mysqli_query($conn, "SELECT * FROM buku_table WHERE id_buku = '$id_buku'");



?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>DETAIL BUKU - MODUL3 FIRENZE</title>
</head>

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
                <form class="d-flex">
                    <button class="btn btn-primary" type="submit">Tambah Buku</button>
                </form>
            </div>
        </nav>
    </header>


    <!-- books details -->
    <div class="container shadow-lg p-3 mb-5 bg-body rounded mt-5">
        <h2 class="text-center"><b>Detail Buku</b></h2>
        <div class="text-center"> <img src="https://www.bukukita.com/babacms/displaybuku/101149_f.jpg" alt="website" width="350"></div>
        <hr class="my-5" style="height: 5px;color:blue">
        <table>
            <?php
            if (mysqli_num_rows($selected) > 0) {
                while ($row = mysqli_fetch_array($selected)) {
            ?>
                    <tr>
                        <td><b>Judul:</b></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['judul_buku']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Penulis:</b></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['penulis_buku']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Tahun Terbit:</b></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['tahun_terbit']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Deskripsi:</b></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['deskripsi']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Bahasa:</b></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['bahasa']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Tag:</b></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['tag']; ?></td>
                    </tr>



        </table>
        <div class="d-flex align-items-center justify-content-center m-5">
            <a href="" type="submit" class="btn btn-primary me-2" style="width: 50%;"><b>Sunting</b></a>
            <a href="Firenze_detailBuku.php?id_buku=<?= $row["id_buku"]; ?>" type="submit" class="btn btn-danger" style="width: 50%;"><b>Hapus</b></a>
        </div>
<?php
                }
            }
?>

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