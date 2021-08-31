<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header ">
        <h1 class="space" style="font-size: 18px;">Formulir Peminjaman Dokumen Rekam Medis</h1>
    </div>
    <div class="row">
        <div class="col-12 col-md-7 col-lg-6">
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4> Edit Data Peminjaman Dokumen</h4>
                    </div>

                    <div class="card-body">
                        <form action="../updatefull/<?= $peminjam['id_peminjaman']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Tanggal Peminjaman</label>
                                    <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" value="<?= $peminjam['tanggal']; ?>" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="norm">No. Rekam Medis</label>
                                    <input type="text" class="form-control" id="no_rm" name="no_rm" value="<?= $peminjam['no_rm']; ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nama">Nama Pasien</label>
                                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= $peminjam['nama_pasien']; ?>" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="peminjam">Nama Peminjam</label>
                                    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $peminjam['nama_peminjam']; ?>" placeholder="" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="status">Keperluan</label>
                                    <select class="form-control" id="keperluan" name="keperluan" required>
                                        <option value="Klaim" <?php if ($peminjam["keperluan"] == "Klaim") echo "selected"; ?>>Klaim</option>
                                        <option value="Visum" <?php if ($peminjam["keperluan"] == "Visum") echo "selected"; ?>>Visum</option>
                                        <option value="SKM" <?php if ($peminjam["keperluan"] == "SKM") echo "selected"; ?>>SKM</option>
                                        <option value="lainnya" <?php if ($peminjam["keperluan"] == "lainnya") echo "selected"; ?>>Lainnya</option>

                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="status">Status Dokumen</label>
                                    <select class="form-control select" id="status" name="status" value="<?= $peminjam['status']; ?>">
                                        <option value="dipinjam" <?php if ($peminjam["status"] == "dipinjam") echo "selected"; ?>>dipinjam</option>
                                        <option value="dikembalikan" <?php if ($peminjam["status"] == "dikembalikan") echo "selected"; ?>>dikembalikan</option>
                                    </select>
                                </div>
                                <?php if ($peminjam['status'] == 'dipinjam') {
                                    echo '<input type="hidden" class="form-control datepicker  " id="tanggal_kembali" name="tanggal_kembali" value="">';
                                } else {
                                ?>
                                    <div class="form-group col-md-4 box">
                                        <label>Tanggal Kembali</label>
                                        <input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tanggal_kembali" name="tanggal_kembali" value="<?= $peminjam["tanggal_kembali"]; ?>">
                                    </div>
                                <?php } ?>

                            </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="id_peminjaman" id="id_peminjaman" value="<?php echo $peminjam["id_peminjaman"]; ?>" />
                        <button class="btn btn-primary " id="">Ubah Data</button>
                        <a href="<?= site_url('peminjaman/list') ?>" class=" btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>


<?= $this->endSection() ?>