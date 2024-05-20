<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Illustrations -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
        </div>
        <div class="card-body">
            <div style="display: flex; align-items: center;">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 right" style="width: 17rem;" 
                    src="assets\undraw_bibliophile_re_xarc.svg" alt="deskripsi gambar">
                <p>"Jelajahi dunia tak terbatas melalui halaman-halaman buku. Di sana, petualangan dan pengetahuan menggenggammu. Mulailah membaca, temukan keajaiban kata-kata yang membuka pintu imajinasi dan pengetahuan baru".</p>
            </div>                         
    </div>
    </div>
 <!-- row ux-->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Anggota</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$this->ModelUser->getUserWhere(['role_id'])->num_rows(); ?></div>
        </div>
        <div class="col-auto">
            <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-2x text-gray-500"></i></a>
                </div>
            </div>
        </div>
     </div>
</div>
 
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Stok Buku</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            $where = ['stok != 0'];
                            $totalstok = $this->ModelBuku->total('stok', $where);
                            echo $totalstok;
                            ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('buku'); ?>"><i class="fas fa-book fa-2x text-gray-500"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Buku yang dipinjam</div>
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            <?php
                            $where = ['dipinjam != 0'];
                            $totaldipinjam = $this->ModelBuku->total('dipinjam', $where);
                            echo $totaldipinjam;
                            ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user'); ?>"><i class="fas fa-user-tag fa-2x text-gray-500"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Buku yang dibooking</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $where = ['dibooking !=0'];
                                $totaldibooking = $this->ModelBuku->total('dibooking', $where);
                                echo $totaldibooking;
                                ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="<?= base_url('user'); ?>"><i class="fas fa-shopping-cart fa-2x text-gray-500"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- end row ux-->
 
<!-- Divider -->
<hr class="sidebar-divider">
 
<!-- row table-->
<div class="row">
    <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
        <div class="page-header">
            <span class="fas fa-users text-info mt-2 "> Data User</span>
            <a class="text-danger" href="<?php echo base_url('user/anggota'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
        </div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Anggota</th>
                    <th>Email</th>
                    <th>Role ID</th>
                    <th>Aktif</th>
                    <th>Member Sejak</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($anggota as $a) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $a['nama']; ?></td>
                    <td><?= $a['email']; ?></td>
                    <td><?= $a['role_id']; ?></td>
                    <td><?= $a['is_active']; ?></td>
                    <td><?= date('Y', $a['tanggal_input']); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
        <div class="page-header">
            <span class="fas fa-book text-info mt-2"> Data Buku</span>
            <a href="<?= base_url('buku'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
        </div>
        <div class="table-responsive">
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>ISBN</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($buku as $b) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $b['judul_buku']; ?></td>
                        <td><?= $b['pengarang']; ?></td>
                        <td><?= $b['penerbit']; ?></td>
                        <td><?= $b['tahun_terbit']; ?></td>
                        <td><?= $b['isbn']; ?></td>
                        <td><?= $b['stok']; ?></td>
                    </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
 <!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
