<!-- Begin Page Content -->
<div class="container-fluid">

    <!--Breadcrumb-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard/riwayat') ?>">Riwayat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Riwayat Pengajuan</h1>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="namaNasabah" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="namaNasabah" value="Leslie Alexander">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamatNasabah" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="alamatNasabah" value="3891 Ranchview Dr. Richardson, California 62639">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Riwayat Pengajuan</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="mulaiPinjam" class="col-sm-2 col-form-label">Mulai Pinjam</label>
                    <div class="col-sm-10">
                        <p>22 Maret 2021</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mulaiPinjam" class="col-sm-2 col-form-label">Batas Pengembalian</label>
                    <div class="col-sm-10">
                        <p>23 April 2021</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mulaiPinjam" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10 text-danger">
                        <p>Belum Lunas</p>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->