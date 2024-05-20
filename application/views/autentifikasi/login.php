<div class="container">
    <div class="row justify-content-center">
        <!-- Nested Row within Card Body -->
        <div class="col-lg-5 bg-dark d-flex flex-column align-items-end min-vh-90">
            <div class="px-lg-0 pt-lg-0 pb-lg-0 p-0 w-100 center">
                <img src="assets/logo.png" class="img-fluid"  style="width: 120x; height: 120px"/>
            </div>
                <div class="align-self-center  w-100 px-lg-5 py-lg-1 p-4">
                    <h1 class="font-weight-bold mb-4">Sign In</h1>   
                    <?= $this->session->flashdata("pesan"); ?>
                    <form class="user" method="post"action="<?= base_url("autentifikasi"); ?>">
                    <form class="mb-6">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label font-weight-bold">Email</label>
                            <input type="email" class="form-control bg-dark-x border-0"  value="<?= set_value("email"); ?>" id="email" placeholder="abcdefg@email.com" name="email" aria-describedby="emailHelp">
                        </div>
                        <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                                                    
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label font-weight-bold">Password</label>
                        <input type="password" class="form-control bg-dark-x border-0 mb-2" id="password" placeholder="Password" name="password">
                        <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            Sign In
                        </button>
                    </form>
                    <div class="text-center">
                        <div class="text-center px-lg-5 pt-lg-4 pb-lg-4 p-4 mt-auto w-90">
                        <p class="d-inline-block mb-0">Belum punya akun registrasi disini?</p>
                        <a href="<?=base_url('autentifikasi/registrasi'); ?>" class="text-light font-weight-bold">Sign Up</a>
                    </div>
                </div>                                   
        </div>
    </div>             
</div>
                        