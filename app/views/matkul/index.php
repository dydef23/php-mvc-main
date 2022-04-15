<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flashMatkul(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary addMataKuliah" data-toggle="modal" data-target="#formModal">
                Tambah Mata Kuliah
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/matkul/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari mata kuliah.." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-6">
            <h3>Daftar Mata Kuliah</h3 <ul class="list-group">
            <?php foreach ($data['matkul'] as $matkul) : ?>
                <li class="list-group-item">
                    <?= $matkul['nama_matkul']; ?>
                    <a href="<?= BASEURL; ?>/matkul/hapus/<?= $matkul['id']; ?>" class="badge badge-danger float-right btn" onclick="return confirm('yakin?');">hapus</a>
                    <a href="<?= BASEURL; ?>/matkul/detail/<?= $matkul['id']; ?>" class="badge badge-primary float-right btn detailBtn" id="detailBtn" data-id="<?= $matkul['id']; ?>" data-nama="<?= $matkul['nama_matkul']; ?>">Detail</a>
                    <!-- <a href="<?= BASEURL; ?>/matkul/tambah/<?= $matkul['id']; ?>" class="badge badge-success float-right tampilModalUbah btn" data-toggle="modal" data-target="#addModal" data-id="<?= $matkul['id']; ?>">Tambah</a> -->
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Detail Mata Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/matkul/detail" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama_matkul">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" readonly>
                    </div>

                    <div class="form-group">
                        <label for="jml_mhs">Jumlah Mahasiswa</label>
                        <input type="number" class="form-control" id="jml_mhs" name="jml_mhs" readonly>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Mata Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/matkul/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Pangan">Teknik Pangan</option>
                            <option value="Teknik Planologi">Teknik Planologi</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>