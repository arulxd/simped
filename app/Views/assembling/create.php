<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header ">
        <h1 class="" style="font-size: 18px;">Assembling</h1>
    </div>
    <div class="row">
        <div class="col-12 col-md-7 col-lg-12">
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambah Data Assembling</h4>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="card-body">
                        <form action="assembling/save" method="post">
                            <?= csrf_field(); ?>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="status">Nama Ruang</label>
                                    <select class="form-control select2" id="nama_ruang" name="nama_ruang" required>
                                        <option>ANGGREK</option>
                                        <option>ANYELIR</option>
                                        <option>ASOKA</option>
                                        <option>BOUGENVILE</option>
                                    </select>
                                </div>
                                <div class=" form-group col-md-2">
                                    <label>Nomor RM </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="no_rm" name="no_rm">
                                    </div>
                                </div>
                                <div class=" form-group col-md-3">
                                    <label>Nama Pasien </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
                                    </div>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="status">Cara Pasien Masuk</label>
                                    <select class="form-control" id="cara_masuk" name="cara_masuk" required>
                                        <option>IGD</option>
                                        <option>Poliklinik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class=" form-group col-md-2">
                                    <label>Tanggal Masuk</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control datepicker" id="tanggal_masuk" name="tanggal_masuk">
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Tanggal Pulang</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control datepicker" id="tanggal_keluar" name="tanggal_keluar">
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Selisih Hari Keterlambatan</label>
                                    <input type="text" class="form-control" id="keterlambatan" name="keterlambatan" readonly>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="status">Laporan Operasi</label>
                                    <select class="form-control" id="cara_masuk" name="cara_masuk" required>
                                        <option>Ya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="status"> Informed Consent</label>
                                    <select class="form-control" id="cara_masuk" name="cara_masuk" required>
                                        <option>Ada</option>
                                        <option>Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="status">Apakah Dokumen Lengkap ?</label>
                                    <select class="form-control" id="kelengkapan" name="kelengkapan" required>
                                        <option value="1" name="kelengkapan">lengkap</option>
                                        <option value="2" name="kelengkapan">tidak lengkap</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <button type="button" id="btn-edit" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal1"> Cari Formulir </button>
                                </div>
                            </div>
                            <div class="table-responsive col-md-8">
                                <table class="table table-striped " id="table-2">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Nama Formulir </th>
                                            <th>Item Ketidaklengkapan Formulir</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <div class="row">
                        <div class=" card-footer">
                            <button class="btn btn-primary " id="">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="modal" tabindex="-1" role="dialog" id="modal1">
    <div class="modal-dialog" role="document">
        <div class="modal-content col-md-8">
            <div class="modal-header">
                <h5 class="modal-title">Nama Formulir </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body col-lg">
                <div class="form-row">
                    <div class="form-group col-md-10" id="nama_formulir">
                        <label>Nama Formulir</label>
                        <select class="form-control select2" id="nama_formulir">
                            <option>F.RI.B.1a Persetujuan Tindakan Medik Rutin</option>
                            <option>F.RI.B.1b Persetujuan Tindakan Kedokteran</option>
                            <option>F.RI.B.1.1 Penolakan Tindakan Kedokteran </option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                            <option>Option 6</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10" id="item_tidaklengkap">
                        <label>Item Ketidaklengkapan Formulir</label>
                        <select class="form-control select2" id="item_tidaklengkap" multiple="">
                            <option>Dokumen tidak ada / kosong / tidak terisi lengkap</option>
                            <option>Tanggal, Jam, Tanda Tangan Nama Terang</option>
                            <option>Simbol dan Singkatan</option>
                            <option>Keterbacaan</option>
                            <option>Pembetulan Kesalahan</option>
                            <option>Identitas Pasien</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#kelengkapan').val(1);
        $('#btn-edit').hide()
        $('#table-2').hide()


        $('#kelengkapan').change(function() {
            var val = $(this).val();
            if (val == 2) {
                $('#btn-edit').show()
                $('#table-2').show()

            } else {

                $('#btn-edit').hide()
                $('#table-2').hide()

            }

        })


    })
</script>
<script>
    $('#tanggal_keluar').change(function() {

        var tgl_awal = $('#tanggal_masuk').val();
        var tgl_akhir = $('#tanggal_keluar').val();
        var tgl_aw = moment(tgl_awal)
        var tgl_ak = moment(tgl_akhir)
        var numYears, numMonths, numDays;

        numYears = tgl_ak.diff(tgl_aw, 'years');
        tgl_aw = tgl_aw.add(numYears, 'years');
        numMonths = tgl_ak.diff(tgl_aw, 'months');
        tgl_aw = tgl_aw.add(numMonths, 'months');
        numDays = tgl_ak.diff(tgl_aw, 'days');


        if (numYears == 0 && numMonths == 0) {
            if (numDays == 0) {
                var hasil = '0 Hari'
            } else {
                var hasil = numDays + ' Hari'
            }
        } else if (numYears == 0 && numMonths != 0) {
            if (numDays == 0) {
                var hasil = numMonths + ' Bulan'
            } else {
                var hasil = numMonths + ' Bulan, ' + numDays + ' Hari'
            }
        } else if (numYears != 0) {
            if (numMonths == 0 && numDays == 0) {
                var hasil = numYears + ' Tahun';
            } else if (numMonths != 0 && numDays == 0) {
                var hasil = numYears + ' Tahun, ' + numMonths + ' Bulan'
            } else if (numMonths == 0 && numDays != 0) {
                var hasil = numYears + ' Tahun, ' + numDays + ' Hari'
            } else if (numMonths != 0 && numDays != 0) {
                var hasil = numYears + ' Tahun, ' + numMonths + ' Bulan, ' + numDays + ' Hari'
            }
        }
        $('#keterlambatan').val(hasil)
    })
</script>


<?= $this->endSection() ?>