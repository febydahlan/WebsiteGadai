<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Pembayaran Nasabah</h1>

    <!-- DataTable -->
    <div class="card shadow mb-4 mr-5 ml-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Pembayaran</h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="id" class="form-label mt-2 ml-2">Id Pengajuan Gadai</label>
                    <input class="form-control" type="number" id="jumlah" name="id" value="<?php echo $pembayaran['id_pengguna']; ?>">
                    <?php echo form_error('jumlah', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class=" form-group">
                    <label for="tanggal_bayar" class="form-label mt-2 ml-2">Tanggal Bayar</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                    <?php echo form_error('tanggal', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jumlah" class="form-label mt-2 ml-2">Nominal Bayar</label>
                    <input class="form-control" type="number" id="jumlah" name="jumlah">
                    <?php echo form_error('jumlah', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="bukti" class="form-label mt-2 ml-2">Bukti Jaminan</label>
                    <input class="form-control" type="file" id="bukti" multiple name="bukti">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-secondary mr-2" type="submit" name="batal">Batal</button>
                    <button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->