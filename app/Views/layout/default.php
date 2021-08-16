<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>SIMPED RM</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/font-awesome/css/all.min.css">

    <!-- CSS Libraries -->
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/selectric/public/selectric.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/assets/css/components.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/assets/css/custom.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/sweetalert2/dist/sweetalert2.min.css">


    <script src="<?= base_url() ?>/public/template/node_modules/jquery/dist/jquery.min.js"></script>

    <!-- <script src="<?= base_url() ?>/public/template/node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script> -->
    <script src="<?= base_url() ?>/public/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/chart.js/dist/Chart.min.js"></script>
    <!-- <script src="<?= base_url() ?>/template/assets/js/page/modules-chartjs.js"></script> -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>

                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url() ?>/public/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= session()->get('username') ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= site_url('home') ?>">SIMPED</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= site_url('home') ?>">SPDRM </a>
                    </div>
                    <ul class="sidebar-menu">
                        <?= $this->include('layout/sidebar') ?>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <?= $this->renderSection('content') ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 Instalasi Rekam Medis
                </div>
                <div class="footer-right">
                    V.0.0.1
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->

    <script src="<?= base_url() ?>/public/template/node_modules/popper.js/dist/umd/popper.min.js"></script>

    <script src="<?= base_url() ?>/public/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>/public/template/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/public/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/public/template/assets/js/custom.js"></script>


    <!-- JS Libraies -->
    <script src="<?= base_url() ?>/public/template/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/selectric/public/jquery.selectric.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/sweetalert/dist/sweetalert.min.js"></script>




    <!-- Page Specific JS File -->
    <!-- <script src="<?= base_url() ?>/public/template/assets/js/page/forms-advanced-forms.js"></script> -->
    <script src="<?= base_url() ?>/public/template/assets/js/page/bootstrap-modal.js"></script>
    <script src="<?= base_url() ?>/public/template/assets/js/page/modules-sweetalert.js"></script>
</body>

</html>