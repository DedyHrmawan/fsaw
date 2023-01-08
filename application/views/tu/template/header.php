<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Skripsi" />
    <meta name="author" content />
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/logo-man2.WEBP" />
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <!-- Global JS -->

    <!-- datepicker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

    <!-- Plugin JS -->
    <script src="<?= base_url(); ?>assets/js/plugin/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
    <script data-search-pseudo-elements defer src="<?= base_url(); ?>assets/js/plugin/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <!-- CK editor JS harus di taruh sebelum, initialisasi editor pada textarea -->
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-primary" id="sidenavAccordion">
        <img style="width:2.5%" class="navbar-brand-img ml-3" src="<?= base_url(); ?>assets/img/logo-man2.WEBP"></img>
        <a class="navbar-brand text-white" href="<?php echo site_url('pegawai'); ?>">SPK MAN 2 Kediri</a>
        <button class="btn btn-icon text-white btn-transparent-white ml-n5 " id="sidebarToggle" href="assets/#"><i data-feather="menu"></i></button>
        <ul class="navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                <div class="btn text-white" id="navbarDropdownUserImage" href="assets/javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="assets/javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" /> <i data-feather="user" class="text-white"></i></a>
                    Tata Usaha
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <i data-feather="user"></i>
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">Tata Usaha</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <!-- <a class="dropdown-item" href="<?php echo site_url('Admin/ChangePassword'); ?>">
                            <div class="dropdown-item-icon"><i data-feather="key"></i></div>
                            Change Password
                        </a> -->
                        <a type="button" class="dropdown-item" data-toggle="modal" data-target="#KonfirmasiModal">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <!--Modal Konfirmasi-->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="KonfirmasiModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah anda yakin keluar ? </h5>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('login') ?>" type="button" class="btn btn-danger"><i class="fa fa-sign-out-alt mr-1"></i>Keluar</a>
                    <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!--Akhir Modal Konfirmasi-->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right bg-cyan">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <?php $this->load->view('tu/template/menu'); ?>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>