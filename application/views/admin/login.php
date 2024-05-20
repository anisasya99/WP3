<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>WP Univ. BSI | <?= $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href=<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,600;1,700&display=swap" rel="stylesheet"> 

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css"
rel="stylesheet">

</head>

<body class="bg-gradient-info">

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Halaman Login!</h1>
                                </div>
                                <?= $this->session->flashdata("pesan"); ?>
                                <form class="user" method="post"action="<?= base_url("autentifikasi"); ?>">
                                <div class="form-group">
                                <input type="text"class="form-control form-control-user" value="<?= set_value("email"); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
                                <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
class="form-control form-control-user" id="password"
placeholder="Password" name="password">
                                        <?= form_error('password',
'<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                <a class="small" href="<?=
base_url('autentifikasi/lupaPassword'); ?>">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?=
base_url('autentifikasi/registrasi'); ?>">Daftar Member!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); 
?>vendor/jquery/jquery.min.js"></script>

<script src="<?= base_url('assets/'); 
?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script>
    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

</body>

</html>