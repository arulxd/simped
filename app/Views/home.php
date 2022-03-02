<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1 style="font-size: 18px; ">Dashboard Peminjaman Dokumen Rekam Medis</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Dokumen Sedang Dipinjam</h4>
                    </div>
                    <div class="card-body">
                        <?= $jml_dokumen_dipinjam ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Dokumen Kembali</h4>
                    </div>
                    <div class="card-body">
                        <?= $jml_dokumen_kembali ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Dokumen </h4>
                    </div>
                    <div class="card-body">
                        <?= $jml_dokumen ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4> Total Dokumen Rusak</h4>
                    </div>
                    <div class="card-body">
                        <?= $jml_dokumen_rusak ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-7 col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h4>Dokumen Terakhir Ditambahkan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Nomor RM</th>
                                <th>Nama Pasien</th>
                                <th>Nama Peminjam</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <?php $i = 1; ?>
                                <?php foreach ($peminjaman->getResult('array')  as $k) : ?>
                            <tr>
                                <td>
                                    <?= $i++; ?>
                                </td>
                                <td><?= $k['tanggal']; ?></td>
                                <td><?= $k['no_rm']; ?></td>
                                <td><?= $k['nama_pasien']; ?></td>
                                <td><?= $k['nama_peminjam']; ?></td>
                                <td>
                                    <?php
                                    if ($k['status'] == 'dipinjam') { ?>
                                        <span class="badge badge-danger"><?= $k['status'] ?></span>
                                    <?php } ?>
                                    <?php
                                    if ($k['status'] == 'dikembalikan') { ?>
                                        <span class="badge badge-success"><?= $k['status'] ?></span>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4>Update Versi</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="" style="font-weight: bold;">V.0.0.1 </li>

                        <li>Fitur aplikasi akan diupdate secara berkala.</li>
                        <li class="" style="font-weight: bold;">V.0.1.1 </li>

                        <li style="font-weight: bold; ">penambahan fitur :</li>
                        <li style="font-style: italic;">8 Januari 2022 </li>
                        <li>Pencatatan penggantian dokumen rusak </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</section>

<?= $this->endSection() ?>