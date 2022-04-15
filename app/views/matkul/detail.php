<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['matkul']['nama_matkul']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?= "Jumlah Mahasiswa " . $row; ?>
            </h6>
            <!-- <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p> -->
            <a href="<?= BASEURL; ?>/matkul" class="card-link">Kembali</a>
        </div>
    </div>

</div>