<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1 style="font-size: 18px;">Laporan Peminjaman</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-6" id="bulanfilter">
                <div class="card">
                    <div class="card-header">
                        <h4>Kriterian Laporan</h4>
                    </div>
                    <form action="laporantest/filter" method="post" target="_blank">
                        <div class="card-body card-block">
                            <div class="row form-group" required>
                                <div class="col col-md-2">
                                    <label for="select" class=" form-control-label">Jenis Laporan</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="nilaifilter" name="nilaifilter" required>
                                        <option value="1" name="nilaifilter">Data Peminjaman Dokumen</option>
                                        <option value="3" name="nilaifilter">Jumlah Peminjaman Dokumen</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-2">
                                    <label for="select" class=" form-control-label">Periode</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="periode" name="periode">
                                        <option value="1">Bulanan</option>
                                        <option value="2">Tahunan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row col-12 form-group" id="divbulan">
                                <div class="col-md-2 col-form-label">Bulan</div>
                                <div class="col-md-4">
                                    <select id="bulanawal" name="bulanawal" class="form-control" required>
                                        <option value="">Pilih</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row col-12 form-group" id="divtahun">
                                <div class="col-md-2 col-form-label">Tahun</div>
                                <div class="col-md-4">
                                    <select id="tahun2" name="tahun2" class="form-control">
                                        <?php foreach ($tahun as $thn) : ?>
                                            <option value="<?php echo $thn->tahun; ?>"><?php echo $thn->tahun; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>



                            <div class="row form-group">
                                <div class="col col-md-2">
                                    <label for="select" class=" form-control-label">Status Peminjaman</label>
                                </div>
                                <div class="col col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="status" id="status">
                                            <option value="">Semua</option>
                                            <option value="dipinjam">dipinjam</option>
                                            <option value="dikembalikan">dikembalikan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Print</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        $('#periode').val(1);
        $('#divbulan').show()
        $('#divtahun').show()

        $('#periode').change(function() {
            var val = $(this).val();
            if (val == 2) {

                $('#divbulan').hide()
                $('#divtahun').show()

            } else {

                $('#divbulan').show()
                $('#divtahun').show()

            }

        })
        $('#status').val('dipinjam');

        $('#kembali').hide()

    })
</script>

<?= $this->endSection() ?>