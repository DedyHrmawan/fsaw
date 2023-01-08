<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="FSAW" />
    <meta name="author" content />
    <title><?= $title ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/logo-man2.WEBP" />
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                <div class="text-center">
                                    <img style="width:15%" class="navbar-brand-img ml-3" src="<?= base_url(); ?>assets/img/logo-man2.WEBP"></img>
                                    <h3 class="font-weight-light my-4 text-center">Welcome <br><br> Sistem Pendukung Keputusan MAN 2 Kediri</h3>
                                </div>    
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-group">
                                            <label class="small mb-1 required" for="inputUsername">Username</label>
                                            <input class="form-control py-4" id="inputUsername" type="text" placeholder="Masukan Username" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1 required" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="inputPassword" type="password" placeholder="Masukan Password" required />
                                        </div>
                                        <!-- Form Group (login box)-->
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="auth-password-basic.html">Forgot Password?</a>
                                            <a class="btn btn-primary" href="<?=site_url('dashboard-tu')?>">Login</a>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="card-footer text-center">
                                    <div class="small"><a href="auth-register-basic.html">Need an account? Sign up!</a></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small"> &#xA9; SPK Pegawai Honorer MAN 2 Kediri</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/scripts.js"></script>
  
</body>

</html>