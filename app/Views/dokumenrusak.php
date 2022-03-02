<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>


<section class="section">
    <div class="section-header ">
        <h1 class="" style="font-size: 18px;">Formulir Peminjaman Dokumen Rekam Medis</h1>
    </div>
    <div class="row">
        <div class="col-12 col-md-7 col-lg-6">
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambah Data Penggantian Dokumen Rusak</h4>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="card-body">
                        <form action="dokumenrusak/save" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Tanggal Penggantian</label>
                                    <input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tanggal" name="tanggal" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="norm">No. Rekam Medis</label>
                                    <input type="text" class="form-control" id="no_rm" name="no_rm" autofocus required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nama">Nama Pasien</label>
                                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nama_pengganti">Nama Pengganti</label>
                                    <input type="text" class="form-control" id="nama_pengganti" name="nama_pengganti" placeholder="" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="status">Status Dokumen</label>
                                    <select class="form-control select2" id="status" name="status" required>
                                        <option>Rusak</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary " id="">Submit</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Terakhir Ditambahkan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Nomor RM</th>
                                <th>Nama Pasien</th>
                                <th>Status</th>
                                <th>Nama Pengganti</th>
                            </tr>
                            <tr>
                                <?php $i = 1; ?>
                                <?php foreach ($dokumenrusak->getResult('array')  as $k) : ?>
                            <tr>
                                <td>
                                    <?= $i++; ?>
                                </td>
                                <td><?= $k['tanggal']; ?></td>
                                <td><?= $k['no_rm']; ?></td>
                                <td><?= $k['nama_pasien']; ?></td>
                                <td><?= $k['status']; ?></td>
                                <td><?= $k['nama_pengganti']; ?></td>
                            </tr>
                        <?php endforeach; ?>
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