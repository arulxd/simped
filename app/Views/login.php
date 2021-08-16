<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; SIMPED</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/font-awesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->

    <link rel="stylesheet" href="<?= base_url() ?>/public/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/assets/css/components.css">

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class=" p-4 m-1">
                        <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Simped</span></h4>
                        <h5 class="text-dark font-weight-normal"><span class="font-weight-bold">Sistem Informasi Pengembalian Dokumen Rekam Medis</span></h5>



                        <form action="auth/cekLogin" method="post">
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="username" class="control-label">Username</label>
                                </div>
                                <input id="username" type="text" class="form-control" name="username" tabindex="2" required>
                                <div class="invalid-feedback">
                                    Silakan Masukan Password Anda
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                    Silakan Masukan Password Anda
                                </div>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                    Login
                                </button>
                            </div>

                        </form>

                        <div class="text-center mt-5 text-small">
                            Copyright &copy; rmkoesma. Made with 💙

                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>



                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?= base_url() ?>/public/template/assets/img/unsplash/login-bg.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">Selamat Bekerja, Semangat!!!!!!!!!!!</h1>
                                <h5 class="font-weight-normal text-muted-transparent">Tuban, Indonesia</h5>
                            </div>
                            Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/public/template/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
    <script src="<?= base_url() ?>/public/template/node_modules/popper.js/dist/umd/popper.min.js"></script>


    <script src="<?= base_url() ?>/public/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/selectric/public/jquery.selectric.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/public/template/node_modules/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>/public/template/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/public/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/public/template/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>