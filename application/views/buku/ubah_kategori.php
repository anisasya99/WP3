<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if(validation_errors()){?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            

                <!-- KOnten -->
                <form action="<?= base_url('buku/ubahkategori') ?>" method='post'>
                    <div class='form_group'>
                        <input name='id' type='hidden' class='form-control' value="<?= $kategori['id'] ?>">
                        <input name='kategori' class='form-control' value="<?= $kategori['kategori'] ?>">
                        <?= form_error('kategori'); ?>
                    </div>
                    <div class="form-group row justify-content-left mt-2">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button>
                            <button class="btn btn-outline-secondary"  onclick="window.history.go(-1)"> <i class="far fa-caret-square-left"></i></button>
                        </div>
                    </div>
                </form>


        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->