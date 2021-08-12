<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1 style="font-size: 18px;">Manajemen User</h1>
    </div>
    <div class="row">
        <div class="col-12 col-md-7 col-lg-6">
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambah User</h4>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>


                    </div>
                    <div class="card-body">
                        <form action="auth/register" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" autofocus required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary swal-8" id="swal-2">Submit</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>List User</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Level User</th>


                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>

<?= $this->endSection() ?>