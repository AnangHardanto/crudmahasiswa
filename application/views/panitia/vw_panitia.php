<section class="content-section bg-primary text-white text-center" id="service">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Data Calon Panitia</h3>
            <h2 class="mb-5">Daftar Panitia</h2>
        </div>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url('panitia/tambah'); ?>" class="btn btn-info mb-2">Tambah Panitia</a></div>
        </div>
        <?= $this->session->flashdata('message');?>
        <table class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Devisi</th>
                    <th>Devisi Cadangan</th>
                    <th>Prodi</th>
                    <th>Generasi</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($panitia as $us) : ?>
                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td><?= $us['nama']; ?></td>
                        <td><?= $us['nim']; ?></td>
                        <td><?= $us['devisi']; ?></td>
                        <td><?= $us['cadangan']; ?></td>
                        <td><?= $us['prodi']; ?></td>
                        <td><?= $us['generasi']; ?></td>
                            <td>
                                <a href="<?= base_url('panitia/hapus/') . $us['id']; ?>" class="btn btn-danger btn-l">Hapus</a> 
                                <a href="<?= base_url('panitia/edit/') . $us['id']; ?>" class="btn btn-dark btn-l">Edit</a> 
                                <a href="<?= base_url('panitia/detail/') . $us['id']; ?>" class="btn btn-dark btn-l">Detail</a> 
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</section>