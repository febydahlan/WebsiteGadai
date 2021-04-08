<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Dashboard/index') ?>">
        <div class="sidebar-brand">
            <img class="img-responsive mx-2" style="width: 80%" src="<?php echo base_url('assets/'); ?>img/Logo_White.png">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- $submenu = $this->db->get_where('user_sub_menu', 'id')->row_array();  -->
    <!-- <php foreach ($submenu as $sm) : ?> -->

    <!-- <li class="nav-item active">
            <a class="nav-link" href="<php echo base_url($sm['url']); ?>">
                <i class="<php echo base_url($sm['icon']); ?>"></i>
                <span><php echo base_url($sm['tittle']); ?></span></a>
        </li>-->
    <!-- <php endforeach; ?>  -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin Tool
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('PengajuanGadai'); ?>">
            <i class="fas fa-fw fa fa-desktop"></i>
            <span>Pengajuan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Pembayaran'); ?>">
            <i class="fas fa-fw fa fa-table"></i>
            <span>Pembayaran</span> </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Dashboard/riwayatpembayaran');  ?>">
            <i class="fas fa-fw fa fa-history"></i>
            <span>Riwayat</span> </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->