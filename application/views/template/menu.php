<div class="nav accordion" id="accordionSidenav">
    <a class="nav-link text-white " href="<?php echo site_url('dashboard'); ?>">
        <i class="fas fa-home ml-2 mr-2 fa-lg fa-fw"></i>
        Dashboard
    </a>
    <a class="nav-link collapsed text-white" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePreprocessing" aria-expanded="false">
        <i class="fas fa-database ml-2 mr-2 fa-lg fa-fw"></i>
        Data Master
        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse show text-white" id="collapsePreprocessing" data-parent="#accordionSidenav">
        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
            <a class="nav-link text-white " href="<?php echo site_url('pegawai'); ?>">
                <i class="fas fa-database ml-2 mr-2 fa-lg fa-fw"></i>
                Data Pegawai
            </a>
            <a class="nav-link text-white" href="<?php echo site_url('kriteria'); ?>">
                <i class="fas fa-database ml-2 mr-2 fa-lg fa-fw"></i>
                Data Kriteria
            </a>
            <a class="nav-link text-white" href="<?php echo site_url('pembobotan'); ?>">
                <i class="fas fa-database ml-2 mr-2 fa-lg fa-fw"></i>
                Data Pembobotan Kriteria
            </a>
            <a class="nav-link text-white" href="<?php echo site_url('crisp'); ?>">
                <i class="fas fa-database ml-2 mr-2 fa-lg fa-fw"></i>
                Data Crisp
            </a>
            <a class="nav-link text-white" href="<?php echo site_url('user'); ?>">
                <i class="fas fa-database ml-2 mr-2 fa-lg fa-fw"></i>
                Data User
            </a>
            <a class="nav-link text-white" href="<?php echo site_url('perangkingan'); ?>">
                <i class="fas fa-database ml-2 mr-2 fa-lg fa-fw"></i>
                Data Perangkingan
            </a>
        </nav>
    </div>
    <a class="nav-link text-white" href="<?php echo site_url('laporan'); ?>">
        <i class="fas fa-download ml-2 mr-2 fa-lg fa-fw"></i>
        Laporan
    </a>
    <!-- <a class="nav-link " href="<?php echo site_url(''); ?>">
        <i class="fas fa-sign-out-alt ml-2 mr-2 fa-lg fa-fw"></i>
        Logout
    </a> -->

    <!-- <a class="nav-link " href="<?php echo site_url('Pengumuman'); ?>">
        <i class="fas fa-bullhorn ml-2 mr-2 fa-lg fa-fw"></i>
        Pengumuman
    </a> -->
</div>