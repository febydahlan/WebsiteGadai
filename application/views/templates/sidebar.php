<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Dashboard/index') ?>">
        <div class="sidebar-brand-icon">
            <i class="fa fa-balance-scale"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Gadai</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Dashboard') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
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
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Dashboard/pengajuan'); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Pengajuan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Dashboard/riwayat'); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Riwayat</span> </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Dashboard/catatanpembayaran'); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Pembayaran</span> </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Dashboard/riwayatpembayaran');  ?>">
            <i class="fas fa-fw fa-chart-area"></i>
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