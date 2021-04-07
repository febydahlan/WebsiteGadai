<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar</h1>
        <a href="<?php echo base_url('PengajuanGadai/tambahPengajuan'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fa fa-plus fa-sm text-white-100 mx-2">
            </i> Tambah</a>
    </div>
    <?php if ($this->session->flashdata('message')) : ?>
        <div class="alert alert-success" role="alert">
            Data pengajuan gadai nasabah, Berhasil <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>
    <!-- DataTable -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengajuan Nasabah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Nasabah</th>
                            <th>Alamat</th>
                            <th>Mulai Pinjam</th>
                            <th>Batas Pengembalian</th>
                            <th>Jumlah Peminjaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pengajuan as $ajuan) { ?>
                            <tr>
                                <td></td>
                                <td><?php echo $ajuan->nama_nasabah ?></td>
                                <td><?php echo $ajuan->alamat ?></td>
                                <td><?php echo $ajuan->tanggal_pinjam ?></td>
                                <td><?php echo $ajuan->batas_pengembalian ?></td>
                                <td><?php echo $ajuan->jumlah_peminjaman ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->