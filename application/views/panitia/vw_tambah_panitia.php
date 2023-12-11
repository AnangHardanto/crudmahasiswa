<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center"><br><br>
                Formulir Pendaftaran Calon Panitia
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?=set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" value="<?=set_value('nim'); ?>" class="form-control" id="nim" placeholder="nim">
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="devisi">Devisi</label>
                        <input type="text" name="devisi" value="<?=set_value('devisi'); ?>" class="form-control" id="devisi" placeholder="devisi">
                        <?= form_error('devisi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="cadangan">Devisi Cadangan</label>
                        <input type="text" name="cadangan" value="<?=set_value('cadangan'); ?>" class="form-control" id="cadangan" placeholder="cadangan">
                        <?= form_error('cadangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" name="prodi" value="<?=set_value('prodi'); ?>" class="form-control" id="prodi" placeholder="Prodi">
                        <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="generasi">Generasi</label>
                        <input type="text" name="generasi" value="<?=set_value('generasi'); ?>" class="form-control" id="generasi" placeholder="generasi">
                        <?= form_error('generasi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('panitia') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Panitia</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>