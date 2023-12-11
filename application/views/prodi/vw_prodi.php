<section class="content-section bg-primary text-white text-center" id="service">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Data Kaprodi</h3>
            <h2 class="mb-5">Daftar Kaprodi</h2>
        </div>
        <?= $this->session->flashdata('message');?>
        <table class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Prodi</th>
                    <th>Ruangan</th>
                    <th>Jurusan</th>
                    <th>Akreditasi</th>
                    <th>Nama Kaprodi</th>
                    <th>Tahun Berdiri</th>
                    <th>Output lulusan</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($prodi as $us) : ?>
                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td><?= $us['nama']; ?></td>
                        <td><?= $us['ruangan']; ?></td>
                        <td><?= $us['jurusan']; ?></td>
                        <td><?= $us['akreditasi']; ?></td>
                        <td><?= $us['nama_kaprodi']; ?></td>
                        <td><?= $us['tahun_berdiri']; ?></td>
                        <td><?= $us['output_lulusan']; ?></td>
                            <td>
                                <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="btn btn-danger btn-l">Hapus</a> 
                                <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="btn btn-dark btn-l">Edit</a> 
                                <a href="<?= base_url('Prodi/detail/') . $us['id']; ?>" class="btn btn-dark btn-l">Detail</a> 
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</section>