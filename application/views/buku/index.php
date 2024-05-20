<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#bukuBaruModal"><i class="fas fa-file-signature"></i></i>Tambah Buku</a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cover</th>
                            <th>Judul</th>
                            <th>Genre</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>ISBN</th>
                            <th>Stok</th>
                            <th>Di pinjam</th>
                            <th>Di booking</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $a = 1;
                        foreach ($buku as $b) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/upload/') . $b['image'];?>" class="img-fluid" alt="...">
                                </picture>
                            </td>
                            <td><?= $b['judul_buku']; ?></td>
                            <td><?= $b['id_kategori']; ?></td>
                            <td><?= $b['pengarang']; ?></td>
                            <td><?= $b['penerbit']; ?></td>
                            <td><?= $b['tahun_terbit']; ?></td>
                            <td><?= $b['isbn']; ?></td>
                            <td><?= $b['stok']; ?></td>
                            <td><?= $b['dipinjam']; ?></td>
                            <td><?= $b['dibooking']; ?></td>
                            <td>
                                <a href="<?= base_url('buku/ubahbuku/').$b['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i>Edit</a>
                                <a href="<?= base_url('buku/hapusbuku/').$b['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$b['judul_buku'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>   
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
             </div>
         </div>
    </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Modal Tambah buku baru-->
<div class="modal fade" id="bukuBaruModal" tabindex="-1" role="dialog" aria-labelledby="bukuBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bukuBaruModalLabel">Tambah Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('buku'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku">
                    </div>
                    <div class="form-group">
                        <select name="id_kategori" class="form-control form-control-user">
                            <option value="">Pilih genre</option>
                            <?php foreach ($kategori as $k) { ?>
                            <option value="<?= $k['id'];?>"><?= $k['kategori'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit">
                    </div>
                    <div class="form-group">
                        <select name="tahun" class="form-control form-control-user">
                            <option value="">Pilih Tahun</option>
                            <?php for ($i=date('Y'); $i > 1000 ; $i--) { ?>
                            <option value="<?= $i;?>"><?= $i;?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="image" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="far fa-times-circle"></i></button>
                    <button type="submit" class="btn btn-info"><i class="fas fa-folder-plus"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Mneu -->