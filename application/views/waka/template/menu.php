<div class="nav accordion" id="accordionSidenav">
    <a class="nav-link text-white " href="<?php echo site_url('dashboard-waka'); ?>">
        <i class="fas fa-home ml-2 mr-2 fa-lg fa-fw"></i>
        Dashboard
    </a>
    <a class="nav-link text-white " href="<?php echo site_url('nilaipegawai'); ?>">
        <i class="fas fa-user ml-2 mr-2 fa-lg fa-fw"></i>
        Penilaian Pegawai
    </a>
    <a class="nav-link collapsed text-white" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePreprocessing" aria-expanded="false">
        <i class="fas fa-list-alt ml-2 mr-2 fa-lg fa-fw"></i>
        Data Kriteria
        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse show text-white" id="collapsePreprocessing" data-parent="#accordionSidenav">
        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
            <a class="nav-link text-white " href="<?php echo site_url('kriteria-pendidikan'); ?>">
                <i class="fas fa-list-alt ml-2 mr-2 fa-lg fa-fw"></i>
                Kriteria Pendidikan
            </a>
            <a class="nav-link text-white" href="<?php echo site_url('kriteria-testulis'); ?>">
                <i class="fas fa-list-alt ml-2 mr-2 fa-lg fa-fw"></i>
                Kriteria Tes Tulis
            </a>
            <a class="nav-link text-white" href="<?php echo site_url('kriteria-wawancara'); ?>">
                <i class="fas fa-list-alt ml-2 mr-2 fa-lg fa-fw"></i>
                Kriteria Wawancara
            </a>
            <a class="nav-link text-white" href="<?php echo site_url('kriteria-praktik'); ?>">
                <i class="fas fa-list-alt ml-2 mr-2 fa-lg fa-fw"></i>
                Kriteria Praktik Keahlian
            </a>
            <a class="nav-link text-white" href="<?php echo site_url('kriteria-btq'); ?>">
                <i class="fas fa-list-alt ml-2 mr-2 fa-lg fa-fw"></i>
                Kriteria Kemampuan BTQ
            </a>
        </nav>
    </div>
    <a class="nav-link text-white " href="<?php echo site_url('perangkingan'); ?>">
        <i class="fas fa-list-ol ml-2 mr-2 fa-lg fa-fw"></i>
        Perhitungan Perangkingan
    </a>
    <a class="nav-link text-white" href="<?php echo site_url('logout'); ?>">
        <i class="fas fa-sign-out-alt ml-2 mr-2 fa-lg fa-fw"></i>
        Logout
    </a>
</div>