<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1 style="font-size: 18px;">Detail Dokumen Rekam Medis</h1>
    </div>
    <div class="section-body">
        <div class="col-12 col-md-10 col-lg-10">
            <div class="card">
                <div class="card-body">

                    <div class="form-row">
                        <div class="form-group col-md-4 ">
                            <label for="">Tanggal Peminjaman</label>
                            <li class=""><?= $peminjamans['tanggal']; ?></li>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nomor RM</label>
                            <li class=""><?= $peminjamans['no_rm']; ?></li>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Nama Pasien</label>
                            <li class=""><?= $peminjamans['nama_pasien']; ?></li>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Nama Peminjam</label>
                            <li class=""><?= $peminjamans['nama_peminjam']; ?></li>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Tanggal Kembali</label>
                            <li class=""><?= $peminjamans['tanggal_kembali']; ?></li>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Keperluan Peminjaman</label>
                            <li class=""><?= $peminjamans['keperluan']; ?></li>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Status Dokumen</label>
                            <?php
                            if ($peminjamans['status'] == 'dipinjam') { ?>
                                <span class="badge badge-danger"><?= $peminjamans['status'] ?></span>
                            <?php } ?>
                            <?php
                            if ($peminjamans['status'] == 'dikembalikan') { ?>
                                <span class="badge badge-success"><?= $peminjamans['status'] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                    <a href="<?= site_url('peminjaman/list') ?>" class=" btn btn-primary">Kembali</a>
                </div>
            </div>
</section>

<?= $this->endSection() ?>