<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center"><?php echo 'Selamat Datang, '.$user['username']; ?></h1>
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
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $user['username']; ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Kata Sandi Lama</label>
                    <input type="password" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Kata Sandi Baru</label>
                    <input type="password" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="mb-3 ">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->