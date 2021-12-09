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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://localhost/modul3/Firenze_home.php?"><img src="logo-ead.png" style="width: 130px;" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="my-auto" action="Firenze_tambahBuku.php">
                    <button class="btn btn-primary" type="submit">Tambah Buku</button>
                </form>
            </div>
        </nav>
    </header>

    <!-- MODAL -->

    <!-- The Modal -->
    <div class="modal" id="suntingModal">
        <div class="modal-dialog" style="max-width: 60%;">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Sunting</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <?php
                if (mysqli_num_rows($selected) > 0) {
                    while ($row = mysqli_fetch_array($selected)) {
                ?>
                        <form action="Firenze_Update.php?id_buku=<?= $row["id_buku"]; ?>" method="post" enctype="multipart/form-data">
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container mt-5 p-5">

                                    <div class="form-group mt-3">
                                        <label for="judul_buku"><b>Judul Buku</b> </label>
                                        <input type="text" class="form-control" id="judul_buku" placeholder="Contoh: Pemrograman web Bersama EAD" name="judul_buku" value="<?php echo $row['judul_buku']; ?>">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="penulis"><b>Penulis</b> </label>
                                        <input type="email" class="form-control" id="penulis" value="Firenze_120219401" readonly name="penulis">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="tahun_terbit"><b>Tahun Terbit</b> </label>
                                        <input type="text" class="form-control" id="tahun_terbit" placeholder="Contoh: 1990" name="tahun_terbit" value=<?php echo $row['tahun_terbit']; ?>>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="deskripsi"><b>Deskripsi</b> </label>
                                        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"><?php echo $row['deskripsi']; ?></textarea>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="bahasa"><b>Bahasa</b></label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bhs" id="indonesia" value="indonesia" <?php if($row['bahasa']=='indonesia') echo 'checked'?>>
                                            <label class="form-check-label" for="indonesia">Bahasa Indonesia</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bhs" id="lainnya" value="lainnya" <?php if($row['bahasa']=='lainnya') echo 'checked'?>>
                                            <label class="form-check-label" for="lainnya">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <?php $arr_tag = explode ("; ",$row['tag']); ?>
                                        <label for="Tag"><b>Tag</b></label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="pemrogaman" value="pemrograman" name="tag[]" <?php if(in_array("pemrograman", $arr_tag)) echo "checked"; ?> >
                                            <label class="form-check-label" for="pemrograman">Pemrogaman</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="website" value="website" name="tag[]" <?php if(in_array("website", $arr_tag)) echo "checked"; ?> >
                                            <label class="form-check-label" for="website">Website</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="java" value="java" name="tag[]" <?php if(in_array("java", $arr_tag)) echo "checked"; ?> >
                                            <label class="form-check-label" for="java">Java</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="oop" value="oop" name="tag[]" <?php if(in_array("oop", $arr_tag)) echo "checked"; ?> >
                                            <label class="form-check-label" for="oop">OOP</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="mvc" value="mvc" name="tag[]" <?php if(in_array("mvc", $arr_tag)) echo "checked"; ?> >
                                            <label class="form-check-label" for="mvc">MVC</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="kalkulus" value="kalkulus" name="tag[]" <?php if(in_array("kalkulus", $arr_tag)) echo "checked"; ?> >
                                            <label class="form-check-label" for="kalkulus">Kalkulus</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="lainnya" value="lainnya" name="tag[]" <?php if(in_array("lainnya", $arr_tag)) echo "checked"; ?> >
                                            <label class="form-check-label" for="lainnya">Lainnya</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form - group">
                                        <label for="foto"><b>Gambar</b></label>
                                        <input type="file" name="foto" class="form-control" id="inputGroupFile02" required="required">
                                    </div>
                                    <br><br>

                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="simpan" value="Simpan Perubahan">
                            </div>
                        </form>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

    <!-- books details -->
    <div class="container shadow-lg p-3 mb-5 bg-body rounded mt-5">
        <h2 class="text-center"><b>Detail Buku</b></h2>
        <div class="text-center">
            <img src="buku/<?= $row['gambar'];  ?>" alt="website" width="350">
        </div>
        <hr class="my-5" style="height: 5px;color:blue">
        <table>

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
            <button id="sunting" type="button" class="btn btn-primary" data-toggle="modal" data-target="#suntingModal" style="width: 50%;">
                Sunting
            </button>
            <a href="Firenze_Delete.php?id_buku=<?= $row["id_buku"]; ?>" type="submit" class="btn btn-danger" style="width: 50%;"><b>Hapus</b></a>
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


    <script src="js/bootsrap.js"></script>
    <script src="js/popper.min.js"></script>

</body>

</html>