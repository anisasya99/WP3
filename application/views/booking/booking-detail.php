<div class="container-fluid">
    <table>
        <?php foreach ($agt_booking as $ab) { ?>
        <tr>
            <td>Data Anggota</td>
            <td>:</td>
            <th><?= $ab['nama']; ?></th>
        </tr>
        <tr>
            <td>ID Booking</td>
            <td>:</td>
            <th><?= $ab['id_booking']; ?></th>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable"  class="table table-bordered"  width="100%" cellspacing="0">
                                <tr>
                                    <th>No.</th>
                                    <th>ID Buku</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Tahun</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($detail as $d) 
                                { 
                                ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $d['id_buku']; ?></td>
                                        <td><?= $d['judul_buku']; ?></td>
                                        <td><?= $d['pengarang']; ?></td>
                                        <td><?= $d['penerbit']; ?></td>
                                        <td><?= $d['tahun_terbit']; ?></td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </td>
            <tr>
				<td align="center" colspan="3"><a href="#" onclick="window.history.go(-1)" class="btn btn-outline-dark"><i class="fas fa-fw fa-reply"></i> Kembali</a></td>
			</tr>
        </tr>
    </table>
</div>