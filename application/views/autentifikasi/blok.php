<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pustaka-booking</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesomefree/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content" >

    

    <!-- Begin Page Content -->
    <div class="container-fluid" style='height: 100vh !important; display: flex; align-items: center; justify-content: center;'>

        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="403">403</div>
            <p class="lead text-gray-800 mb-5">Akses Dihentikan</p>
            <p class="text-gray-500 mb-0">Anda dilarang mengakses halaman ini</p>
            <a href="<?= base_url('user'); ?>">&larr; Kembali ke Dashboard</a>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1"role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal"aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>