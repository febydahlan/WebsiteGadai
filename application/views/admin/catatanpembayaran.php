<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar</h1>

    </div>

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
                            <th>ID</th>
                            <th>Nama Nasabah</th>
                            <th>Alamat</th>
                            <th>Mulai Pinjam</th>
                            <th>Batas Pengembalian</th>
                            <th>Sisa Pinjaman</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pembayaran as $bayar) { ?>
                            <tr>
                                <td></td>
                                <td><?php echo $bayar->nama_nasabah ?></td>
                                <td><?php echo $bayar->alamat ?></td>
                                <td><?php echo $bayar->tanggal_pinjam ?></td>
                                <td><?php echo $bayar->batas_pengembalian ?></td>
                                <td><?php echo "Rp " . number_format($bayar->jumlah_peminjaman, 0, ",", ".")  ?></td>
                                <td>
                                    <a href="<?php echo base_url('Pembayaran/detailPembayaran') ?>" class="fa fa-search-plus fa-sm text-white-100 mx-2"></a>
                                </td>
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