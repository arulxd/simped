<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<!--modal import -->
<div class="modal fade" id="TableDenda">
    <div class="modal-dialog" style="width:70%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> Pengembalian Buku</h4>
            </div>
            <div id="modal_body" class="modal-body fileSelection1">
                <div class="card-body">
                    <form action="../update/<?= $peminjam['id_peminjaman']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Tanggal dan Jam Peminjaman</label>
                                <input type="text" class="form-control datetimepicker" id="tanggal" name="tanggal" value="<?= $peminjam['tanggal']; ?>" required>
                            </div>

                            <div class="form-group col-md-2">
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

                            <div class="form-group col-md-2">
                                <label for="status">Keperluan</label>
                                <select class="form-control select" id="keperluan" value="<?= $peminjam['keperluan']; ?>" name=" keperluan" required>
                                    <option value="klaim">klaim</option>
                                    <option value="lainnya">lainnya</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="status">Status Dokumen</label>
                                <select class="form-control select" id="status" name="status" required>
                                    <option value="dipinjam">dipinjam</option>
                                    <option value="dikembalikan">dikembalikan</option>
                                </select>
                            </div>
                        </div>


                </div>
                <div class="card-footer">
                    <button class="btn btn-primary " id="">Ubah Data</button>
                    <a href="<?= site_url('peminjaman/list') ?>" class=" btn btn-danger">Kembali</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <?= $this->endSection() ?>