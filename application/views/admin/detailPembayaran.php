<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php echo base_url('Pembayaran/tambahPembayaran'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ">
            <i class="fa fa-plus fa-sm text-white-100 mx-2">
            </i> Tambah</a>
    </div>
    <?php if ($this->session->flashdata('message')) : ?>
        <div class="alert alert-success" role="alert">
            Data pembayaran nasabah, Berhasil <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>

    <h1 class="h3 mb-4 text-gray-800 text-left"><?php echo 'Detail Pembayaran, ' . $pembayaran['nama_nasabah']; ?></h1>

    <!-- DataTable -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Catatan Pembayaran Nasabah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Bayar</th>
                            <th>Nominal Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($catatanpembayaran as $catatan) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $catatan['tanggal_bayar']; ?></td>
                                <td><?php echo "Rp " . number_format($catatan['nominal_bayar'], 0, ",", ".")  ?></td>
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