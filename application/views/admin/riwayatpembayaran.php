<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Riwayat Pembayaran</h1>
    </div>

    <!-- DataTable -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Riwayat Nasabah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Nasabah</th>
                            <th>Status Pegadaian</th>
                            <th>Tanggal Awal Gadai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($riwayat as $rwyt) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $rwyt->nama_nasabah ?></td>
                                <td>
                                    <?php if ($rwyt->status) : ?>
                                        <?php echo 'Selesai' ?>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $rwyt->tanggal_pinjam ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->