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
                            <th>Jaminan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pengajuan as $ajuan) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $ajuan->nama_nasabah ?></td>
                                <td><?php echo $ajuan->alamat ?></td>
                                <td><?php echo $ajuan->tanggal_pinjam ?></td>
                                <td><?php echo $ajuan->batas_pengembalian ?></td>
                                <td><?php echo "Rp " . number_format($ajuan->jumlah_peminjaman, 0, ",", ".") ?></td>
                                <td><?php echo $ajuan->nama_jaminan ?>
                                </td>
                                <?php if ($ajuan->status == 0) : ?>
                                    <td> Belum Lunas </td>
                                <?php else : ?>
                                    <td> Lunas </td>
                                <?php endif; ?>
                                <td><a href="<?php echo base_url('PengajuanGadai/editPengajuan') . "/" . $ajuan->id; ?>"><button type="button" class="btn btn-primary mb-1">Edit</button></a>
                                    <a href="<?php echo base_url('PengajuanGadai/hapusPengajuan') . "/" . $ajuan->id; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                </td>

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