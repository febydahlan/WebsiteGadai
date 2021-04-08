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

    <h1 class="h3 mb-4 text-gray-800 text-center"><?php echo 'Selamat Datang, ' . $user['username']; ?></h1>
    <div class="col-xl-6 col-md-6 mb-4 mx-auto">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="mb-3">
                    <img class="mx-auto d-block img-profile rounded-circle" style="width:15%" src="<?php echo base_url('assets/img/profile/') . $user['image']; ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $user['email']; ?>" disabled>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->