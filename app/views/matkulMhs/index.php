<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-6">
            <h3>Mata Kuliah yang Diikuti Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['matkul_mhs'] as $matkulMhs) : ?>
                    <li class="list-group-item">
                        <?php foreach ($dataMhs['mhs'] as $mhs) : ?>
                            <?php if ($matkulMhs['nrp_mhs'] == $mhs['nrp']) {
                                echo $dataMatkul['nama_matkul'];
                            } ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right btn" onclick="return confirm('yakin?');">hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right tampilModalUbah btn" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right btn">detail</a>
                    </li>
                <?php endforeach; ?>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>