       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
               <h1 class="h3 mb-0 text-gray-800">Riwayat Pengajuan</h1>
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
                                   <th>Status Jaminan</th>
                                   <th>Mulai Pinjam</th>
                                   <th>Batas Pengembalian</th>
                                   <th>Sisa Peminjaman</th>
                                   <th>Lain-lain</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>001</td>
                                   <td>Leslie Alexander</td>
                                   <td>Belum Selesai</td>
                                   <td>22 Maret 2021</td>
                                   <td>23 April 2021</td>
                                   <td>Rp 1.000.000</td>
                                   <td><a href="<?php echo base_url('Dashboard/detailriwayatpengajuan') ?>">Detail</a></td>
                               </tr>
                               <tr>
                                   <td>002</td>
                                   <td>Darlene Robertson</td>
                                   <td>Belum Selesai</td>
                                   <td>22 Maret 2021</td>
                                   <td>23 April 2021</td>
                                   <td>Rp 3.000.000</td>
                                   <td><a href="detail_riwayat.html">Detail</a></td>
                               </tr>
                               <tr>
                                   <td>003</td>
                                   <td>Arlene McCoy</td>
                                   <td>Selesai</td>
                                   <td>24 Maret 2021</td>
                                   <td>29 April 2021</td>
                                   <td>Rp 0</td>
                                   <td><a href="detail_riwayat.html">Detail</a></td>
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