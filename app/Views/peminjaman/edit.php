<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>


<section class="section">
    <div class="section-header ">
        <h1 class="space" style="font-size: 18px;">Formulir Peminjaman Dokumen Rekam Medis</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4> Data Peminjaman</h4>
            </div>
            <div class="card-body">
                <form action="../update/<?= $peminjam['id_peminjaman']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-row">
                        <input type="hidden" class="form-control datetimepicker" id="tanggal" name="tanggal" value="<?= $peminjam['tanggal']; ?>">
                        <input type="hidden" class="form-control" id="no_rm" name="no_rm" value="<?= $peminjam['no_rm']; ?>">
                        <input type="hidden" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= $peminjam['nama_pasien']; ?>" placeholder="">
                        <input type="hidden" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $peminjam['nama_peminjam']; ?>" placeholder="">
                        <input type="hidden" id="keperluan" value="<?= $peminjam['keperluan']; ?>" name=" keperluan">

                        <div class="form-group col-md-2">
                            <label for="status">Status Dokumen</label>
                            <select class="form-control select" id="status" name="status" required>

                                <option value="dikembalikan">dikembalikan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group dikembalikan box">
                            <label>Tanggal Kembali</label>
                            <input type="text" class="form-control datetimepicker  " id="tanggal_kembali" name="tanggal_kembali" value="" required>
                        </div>
                    </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-primary " id="">Ubah Data</button>
                <a href="<?= site_url('peminjaman/list') ?>" class=" btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
            });
            h
        }).change();
    });
</script>


<?= $this->endSection() ?>