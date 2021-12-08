<div class="d-flex flex-wrap px-5">
    <?php foreach ($tabel as $row): ?>
    <div class="card" style="width: 300px; margin-right: 2rem; margin-bottom:2rem;">
        <img src="images/buku/<?= $row["gambar"]; ?>" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title"><?= $row["judul_buku"]; ?></h5>
            <p class="card-text"><?= $row["deskripsi"]; ?></p>
            <a href="Firenze_detailBuku.php?id_buku=<?= $row["id_buku"]; ?>" class="btn btn-primary">Tampilkan Lebih Lanjut</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
