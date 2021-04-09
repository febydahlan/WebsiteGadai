<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Pengajuan Gadai</h1>

    <!-- DataTable -->
    <div class="card shadow mb-4 mr-5 ml-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Pegadaian</h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="nama" class="form-label ml-2">Nama Nasabah</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $pengajuan['nama_nasabah'] ?>">
                    <?php echo form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-label mt-2 ml-2">Alamat Nasabah</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $pengajuan['alamat'] ?>">
                    <?php echo form_error('alamat', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="tanggal_pinjam" class="form-label mt-2 ml-2">Tanggal Gadai</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $pengajuan['tanggal_pinjam'] ?>">
                    <?php echo form_error('tanggal', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="batas_kembali" class="form-label mt-2 ml-2">Batas Pengembalian</label>
                    <input type="date" class="form-control" id="batas_kembali" name="batas" value="<?php echo $pengajuan['batas_pengembalian'] ?>">
                    <?php echo form_error('batas', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jumlah" class="form-label mt-2 ml-2">Jumlah Pinjaman</label>
                    <input class="form-control" type="number" id="jumlah" name="jumlah" value="<?php echo $pengajuan['jumlah_peminjaman'] ?>">
                    <?php echo form_error('jumlah', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jaminan" class="form-label mt-2 ml-2">Nama Jaminan</label>
                    <input type="text" class="form-control" id="jaminan" name="jaminan" value="<?php echo $pengajuan['nama_jaminan'] ?>">
                    <?php echo form_error('jaminan', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="bukti" class="form-label mt-2 ml-2">Bukti Jaminan</label>
                    <input class="form-control" type="file" id="bukti" multiple name="bukti">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href=""><button class="btn btn-secondary mr-2" type="button" name="batal">Batal</button></a>
                    <button class="btn btn-primary" type="submit" name="tambah">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->