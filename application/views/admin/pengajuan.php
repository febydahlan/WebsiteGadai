       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
               <h1 class="h3 mb-0 text-gray-800">Daftar</h1>
               <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus fa-sm text-white-100 mx-2"></i>Tambah</a>
               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalLabel">Pengajuan Nasabah</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body">
                               <div class="mb-3">
                                   <label for="formGroupExampleInput" class="form-label">Nama Nasabah</label>
                                   <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Nasabah">
                               </div>
                               <div class="mb-3">
                                   <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                                   <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat">
                               </div>
                               <div class="mb-3">
                                   <div class="row">
                                       <div class="col">
                                           <label for="formGroupExampleInput2" class="form-label" for="date">Tgl Pinjam</label>
                                           <input type="date" class="form-control" id="date" placeholder="MM/DD/YYYY">
                                       </div>
                                       <div class="col">
                                           <label for="formGroupExampleInput2" class="form-label" for="date">Tgl Pengembalian</label>
                                           <input type="date" class="form-control" id="date" placeholder="MM/DD/YYYY">
                                       </div>
                                   </div>
                               </div>
                               <div class="mb-3">
                                   <label for="formGroupExampleInput2" class="form-label">Jumlah Peminjaman</label>
                                   <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Minimal Rp100.000">
                               </div>
                               <div class="mb-3">
                                   <label for="formGroupExampleInput2" class="form-label">Nama Jaminan</label>
                                   <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Isi nama jaminan dan bukti jaminan">
                               </div>
                               <div class="mb-3">
                                   <label for="formFile" class="form-label">Bukti Jaminan</label>
                                   <input class="form-control" type="file" id="formFile">
                               </div>
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                               <button type="button" class="btn btn-primary">Tambah</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

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
                                   <th>ID</th>
                                   <th>Nama Nasabah</th>
                                   <th>Alamat</th>
                                   <th>Mulai Pinjam</th>
                                   <th>Batas Pengembalian</th>
                                   <th>Jumlah Peminjaman</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>001</td>
                                   <td>Leslie Alexander</td>
                                   <td>3891 Ranchview Dr. Richardson, California 62639</td>
                                   <td>22 Maret 2021</td>
                                   <td>23 April 2021</td>
                                   <td>Rp 3.000.000</td>
                               </tr>
                               <tr>
                                   <td>002</td>
                                   <td>Darlene Robertson</td>
                                   <td>2118 Thornridge Cir. Syracuse, Connecticut 35624</td>
                                   <td>22 Maret 2021</td>
                                   <td>23 April 2021</td>
                                   <td>Rp 4.000.000</td>
                               </tr>
                               <tr>
                                   <td>003</td>
                                   <td>Arlene McCoy</td>
                                   <td>3517 W. Gray St. Utica, Pennsylvania 57867</td>
                                   <td>24 Maret 2021</td>
                                   <td>29 April 2021</td>
                                   <td>Rp 2.000.000</td>
                               </tr>
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