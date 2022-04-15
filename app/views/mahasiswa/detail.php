<div class="container mt-5">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
      <p class="card-text"><?= $data['mhs']['email']; ?></p>
      <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
      <p class="card-text">Mata kuliah yang diambil : </p>
      <?php foreach ($data['matkul_mhs'] as $matkul) : ?>
        <p class="card-text"><?= $matkul['id_matkul']; ?></p>
      <?php endforeach ?>
      <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
    </div>
  </div>

</div>