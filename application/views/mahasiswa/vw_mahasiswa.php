<!-- About-->
        <section class="content-section bg-light" id="about">
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                <div class="row">
                    <div class="col-md-6"><a href="<?= base_url('Mahasiswa/Tambah') ?>"></a></div>
                </div>
                <div class="col-md-12">
                <?= $this->session->flashdata('message');?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Mahasiswa</th>
                            <th>NIM</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Prodi</th>
                            <th>Asal Sekolah</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($mahasiswa as $us) : ?>
                        <tr>
                            <td> <?= $i; ?>.</td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['nim']; ?></td>
                            <td><?= $us['jenis_kelamin']; ?></td>
                            <td><?= $us['email']; ?></td>
                            <td><?= $us['prodi']; ?></td>
                            <td><?= $us['asal_sekolah']; ?></td>
                            <td><?= $us['no_hp']; ?></td>
                            <td><?= $us['alamat']; ?></td>
                            <td>
                                <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger btn-l">Hapus</a> 
                                <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-dark btn-l">Edit</a> 
                                <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-dark btn-l">Detail</a> 
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>