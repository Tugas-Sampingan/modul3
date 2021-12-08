<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>TAMBAH BUKU - MODUL3 FIRENZE</title>
    </head>

    <?php
    include "Firenze_Create.php";
    if (isset($_POST["submit"])) {
        if (insertIsi($_POST) > 0) {
            echo "
                    <script>
                        alert('Buku berhasil ditambahkan!');
                        document.location.href = 'Firenze_tambahBuku.php';
                    </script>
                ";
        } else {
            echo "
                    <script>
                        alert('Gagal untuk menambahkan buku ! ');
                        document.location.href = 'Firenze_tambahBuku.php';
                    </script>
                ";
        }
    }
    ?>

    <body>
        <script src= "js/bootsrap.js"></script>
        <script src="js/popper.min.js"></script>

        <!-- navbar -->
        <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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

        <br><br><br><br>
        <!-- add books -->
        <div class="container shadow shadow-intensity-lg">
        <h2 class="text-center"><b>Tambah Data Buku</b></h2>
        <form method="POST" action="Firenze_Create.php" >
        <br><br>
            <div class="form-group">
              <label for="judulBuku"><b>Judul Buku</b></label>
              <input type="text" class="form-control" id="judulBuku" placeholder="Masukkan Judul Buku. Ex: Kalkulus IA" name="judulBuku">
            </div>
            
            <div class="form-group">
                <label for="penulis"><b>Penulis</b></label>
                <input type="text" class="form-control" id="penulis" placeholder="Firenze_1202194019" name="penulis" value="Firenze_1202194019" required>
            </div>

            <div class="form-group">
                <label for="tahunTerbit"><b>Tahun Terbit</b></label>
                <input type="text" class="form-control" id="tahunTerbit" placeholder="Masukkan Tahun Terbit. Ex: 1990" name="tahunTerbit">
            </div>

            <div class="form-group">
                <label for="deskripsi"><b>Deskripsi</b></label>
                <textarea type="text" class="form-control" rows="5" id="deskripsi" placeholder="Masukkan Deskripsi Buku. ex: buku ini berisi tentang..." name="Deskripsi"></textarea>
            </div>
            <br>
            <div class="form-group " >
                <label for="Bahasa" ><b>Bahasa</b></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="indonesia" id="indonesia" value="indonesia">
                    <label class="form-check-label" for="indonesia">Bahasa Indonesia</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="lainnya" id="lainnya" value="lainnya">
                    <label class="form-check-label" for="lainnya">Lainnya</label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="Tag"><b>Tag</b></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="pemrogaman" value="pemrogaman">
                    <label class="form-check-label" for="pemrogaman">Pemrogaman</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="website" value="website">
                    <label class="form-check-label" for="website">Website</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="java" value="java">
                    <label class="form-check-label" for="java">Java</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="oop" value="oop">
                    <label class="form-check-label" for="oop">OOP</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="mvc" value="mvc">
                    <label class="form-check-label" for="mvc">MVC</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="kalkukus" value="kalkulus">
                    <label class="form-check-label" for="kalkulus">Kalkulus</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="lainnya" value="lainnya">
                    <label class="form-check-label" for="lainnya">Lainnya</label>
                </div>
            </div>
            <br>
            <div class="form - group">
                <label for="gambar"><b>Gambar</b></label>
                <input type="file" class="form-control" id="inputGroupFile02">
            </div>
            <br>
            <br>
            <center><button type="submit" class="btn btn-primary" style="width: 50%; margin-bottom">+ TAMBAH</button></center>
          </form>
          <br>
          <br>
       
        </div>
        <br><br><br><br>

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