<div class="container">
    <div class="row justify-content-center">
        <!-- Nested Row within Card Body -->
        <div class="col-lg-5 bg-dark d-flex flex-column align-items-end min-vh-100">
            <div class="px-lg-0 pt-lg-0 pb-lg-0 p-0 w-100 center">
            </div>
            <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                <h1 class="font-weight-bold mb-4">Sign Up</h1>
                    <form class="user" method="post" action="<?= base_url('autentifikasi/registrasi'); ?>">
                    <form class="mb-6">
                        <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label font-weight-bold">Username</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama"
                                    placeholder="nama kamu" value="<?= set_value('nama'); ?>">
                                <?= form_error('nama', '<small class="text-info pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label font-weight-bold">Email</label>
                        <input type="text" class="form-control form-control-user" id="email" name="email"
                                    placeholder="abcdfeg@email.com" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-info pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label font-weight-bold">Password</label>
                        <input type="password" class="form-control form-control-user" id="password1"
                                        name="password1" placeholder="Password">
                                    <?= form_error('password1','<small class="text-info pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label font-weight-bold">Konfirmasi Password</label>
                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                        </div>       
                        <button type="submit" class="btn btn-primary w-100">
                            Sign Up </button>

                    </form>
                        <div class="text-center mb-4">
                            <div class="text-center px-lg-5 pt-lg-4 pb-lg-4 p-4 mt-auto w-90">
                                <p class="d-inline-block mb-0">Sudah Punya akun Sign In disini?</p>
                                <a href="<?=base_url('autentifikasi'); ?>" class="text-light font-weight-bold">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>