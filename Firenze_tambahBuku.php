<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>TAMBAH BUKU - MODUL3 FIRENZE</title>
</head>

<body>
    <script src="js/bootsrap.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand"><img src="logo-ead.png" style="width: 130px;" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex">
                    <button class="btn btn-primary" type="submit">Tambah Buku</button>
                </form>
            </div>
        </nav>
    </header>
    <div class="container shadow mt-5 p-5">
        <form action="Firenze_Create.php" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Tambah Data Buku</h2>
            <div class="form-group mt-3">
                <label for="judul_buku"><b>Judul Buku</b> </label>
                <input type="text" class="form-control" id="judul_buku" placeholder="Contoh: Pemrograman web Bersama EAD" name="judul_buku">
            </div>
            <div class="form-group mt-3">
                <label for="penulis"><b>Penulis</b> </label>
                <input type="email" class="form-control" id="penulis" value="Firenze_120219401" readonly name="penulis">
            </div>
            <div class="form-group mt-3">
                <label for="tahun_terbit"><b>Tahun Terbit</b> </label>
                <input type="text" class="form-control" id="tahun_terbit" placeholder="Contoh: 1990" name="tahun_terbit">
            </div>
            <div class="form-group mt-3">
                <label for="deskripsi"><b>Deskripsi</b> </label>
                <textarea class="form-control" id="deskripsi" rows="3" placeholder="Contoh: Buku ini menjelaskan tentang ..." name="deskripsi"></textarea>
            </div>
            <div class="form-group mt-3">
                <label for="bahasa"><b>Bahasa</b></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bahasa" id="indonesia" value="indonesia">
                    <label class="form-check-label" for="indonesia">Bahasa Indonesia</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bahasa" id="lainnya" value="lainnya">
                    <label class="form-check-label" for="lainnya">Lainnya</label>
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="Tag"><b>Tag</b></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="pemrogaman" value="pemrogaman" name="tag[]">
                    <label class="form-check-label" for="pemrogaman">Pemrogaman</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="website" value="website" name="tag[]">
                    <label class="form-check-label" for="website">Website</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="java" value="java" name="tag[]">
                    <label class="form-check-label" for="java">Java</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="oop" value="oop" name="tag[]">
                    <label class="form-check-label" for="oop">OOP</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="mvc" value="mvc" name="tag[]">
                    <label class="form-check-label" for="mvc">MVC</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="kalkukus" value="kalkulus" name="tag[]">
                    <label class="form-check-label" for="kalkulus">Kalkulus</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="lainnya" value="lainnya" name="tag[]">
                    <label class="form-check-label" for="lainnya">Lainnya</label>
                </div>
            </div>

            <br>
            <div class="form - group">
                <label for="gambar"><b>Gambar</b></label>
                <input type="file" name="foto" class="form-control" id="inputGroupFile02" required="required">
            </div>
            <br><br>
            
            <center> <input style="width: 50%;" class="btn btn-primary" type="submit" name="upload" id="upload" value="+ Tambah Buku"></center>
        </form>
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