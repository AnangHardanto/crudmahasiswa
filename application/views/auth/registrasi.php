<div class="container-fluid" style="text-align: center;">
    <h1 class="h3 mb-4 text-gray-800"></h1>
    <link href="<?= base_url('assets/css/styles.css')?>" rel="stylesheet" />
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><br><br>
                    <h1>BUAT AKUN</h1><br><br>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Auth/registrasi'); ?>" method="POST">
                        <div class="form-group">
                            <label for="namalengkap">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?> required"
                             placeholder="Nama Lengkap">
                             <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>"
                            placeholder="Email" required>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password1" class="form-control" value="<?= set_value('password1'); ?> required"
                            placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password2">Masukan Password Sekali Lagi</label>
                            <input type="password" name="password2" class="form-control" placeholder="Password" required><br><br>
                        </div>
                        <button type="submit" class="btn btn-warning float-right">DAFTAR</button>
                        <a href="<?= base_url('Auth') ?>" class="btn btn-primary float-right">LOGIN</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
