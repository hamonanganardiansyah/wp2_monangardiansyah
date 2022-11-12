<div class="container">
<<<<<<< HEAD

    <!-- Outer Row -->
    <div class="row justify-content-center">
 
        <div class="col-lg-7">
 
=======
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">
>>>>>>> 05703a7 (pertemuan 10)
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
<<<<<<< HEAD
                                    <h1 class="h4 text-gray-900 mb
4">Halaman Login!!</h1>
                                </div>
                                <?= $this->session-
>flashdata('pesan'); ?>
                                <form class="user" method="post"
action="<?= base_url('autentifikasi'); ?>">
                                    <div class="form-group">
                                    <input type="text"
class="form-control form-control-user" value="<?=
set_value('email'); ?>" id="email" placeholder="Masukkan Alamat 
Email" name="email">
                                    <?= form_error('email',
'<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
class="form-control form-control-user" id="password"
placeholder="Password" name="password">
                                        <?= form_error('password',
'<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn 
btn-primary btn-user btn-block">
                                        Masuk
                                    </button>
=======
                                    <h1 class="h4 text-gray-900 mb4">Halaman Login!!</h1>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" value="<?=set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
                                        <?= form_error(
                                            'email',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        <?= form_error(
                                            'password',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ); ?>
                                    </div>
                                    <button type="submit" class="btn-primary btn-user btn-block">Masuk</button>
>>>>>>> 05703a7 (pertemuan 10)
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?=
<<<<<<< HEAD
base_url('autentifikasi/lupaPassword'); ?>">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?=
base_url('autentifikasi/registrasi'); ?>">Daftar Member!</a>
=======
                                                            base_url('autentifikasi/lupaPassword'); ?>">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?=
                                                            base_url('autentifikasi/registrasi'); ?>">Daftar Member!</a>
>>>>>>> 05703a7 (pertemuan 10)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD

        </div>
 
    </div>

</div
=======
        </div>
    </div>
</div>
>>>>>>> 05703a7 (pertemuan 10)
