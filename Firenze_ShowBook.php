<div class="container">
    <div class="row">
        <?php foreach ($tabel as $row) : ?>
            <div class="col-6 col-md-4">
                <div class="m-2 border">
                    <img src="<?= 'buku/' . $row["gambar"]; ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row["judul_buku"]; ?></h5>
                        <p class="card-text"><?= $row["deskripsi"]; ?></p>
                        <a href="Firenze_detailBuku.php?id_buku=<?= $row["id_buku"]; ?>" class="btn btn-primary">Tampilkan Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>