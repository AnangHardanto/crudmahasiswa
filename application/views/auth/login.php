<div class="container-fluid" style="text-align: center;">
    <h1 class="h3 mb-4 text-gray-800"></h1>
    <link href="<?= base_url('assets/css/styles.css')?>" rel="stylesheet" />
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header"><br><br>
                    <h1>LOGIN</h1><br><br>
                </div>
                <?= $this->session->flashdata('message');?>
                <form class="user" method="post" action="<?= base_url('auth');?>">
                    <div class="card-body">
                        <form action="<?=base_url('Mahasiswa'); ?>" method="POST">
                            <label for="email">Email</label>
                            <input type="text" value="<?=set_value('email'); ?>" name="email" 
                                    class="form-control" id="email" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" value="<?= set_value('nama'); ?>" name="password" 
                                        class="form-control" id="password" placeholder="Password"><br><br>
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <a href="<?= base_url('#') ?>" class="btn btn-danger">LUPA PASSWORD??</a>
                            <button type="submit" name="login" class="btn btn-primary float-right">LOGIN</button>
                            <a href="<?= base_url('Auth/registrasi') ?>" class="btn btn-primary float-right">DAFTAR</a>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
