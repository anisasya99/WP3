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
            <div class="card shadow mb-4">
                <div class="card-header py-4">
                    <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
                </div>
                    <div class="card-body">
                            <table id="datatable"  class="table table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profile</th>
                                    <th>Nama Anggota</th>
                                    <th>Email</th>
                                    <th>Role Id</th>
                                    <th>Tahun Login</th>
                            </thead>
            <?php 
                $i = 1;
                foreach ($anggota as $a) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td>
                        <picture>
                            <source srcset="" type="image/svg+xml">
                            <img src="<?= base_url('assets/img/profile/') . $a['image']; ?>" class="img-fluid"  style="width: 80x; height: 80px">
                        </picture>
                    </td>
                    <td><?= $a['nama']; ?></td>
                    <td><?= $a['email']; ?></td>
                    <td><?= $a['role_id']; ?></td>
                    <td><?= date('Y', $a['tanggal_input']); ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>