<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['matkul']['nama_matkul']; ?></h5>
            <!-- <h6 class="card-subtitle mb-2 text-muted">
                <?= "Jumlah Mahasiswa " . $row['matkul_mhs']; ?>
            </h6> -->
            <p class="card-text"><?= $data['matkul']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/matkul" class="card-link">Kembali</a>
        </div>
    </div>

</div>