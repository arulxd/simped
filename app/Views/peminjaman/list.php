<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1 style="font-size: 18px;">Daftar Peminjaman Dokumen Rekam Medis</h1>

    </div>
    <?php

    use function PHPSTORM_META\type;

    if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped " id="table-2">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Nomor RM</th>
                                        <th>Nama Pasien</th>
                                        <th>Nama Peminjam</th>
                                        <th>Status</th>
                                        <th>Keperluan</th>
                                        <th>Tanggal Kembali</th>
                                        <?php if (session()->get('level') == 1) { ?>
                                            <th>User</th>
                                        <?php } ?>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($peminjaman as $k) : ?>
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
                                            <td><?= $k['keperluan']; ?></td>
                                            <td><?= $k['tanggal_kembali']; ?></td>

                                            <?php if (session()->get('level') == 1) { ?>
                                                <td><?= $k['username']; ?></td>
                                            <?php } ?>

                                            <td>



                                                <?php if ($k['status'] == 'dikembalikan') {
                                                    echo '<a href="#" class="btn btn-sm  btn-danger btn-light disabled">Kembali</a>';
                                                } else {
                                                ?> <button type="button" id="btn-edit" data-id_peminjaman="<?= $k['id_peminjaman']; ?>" data-no_rm="<?= $k['no_rm']; ?>" data-status="<?= $k['status']; ?>" data-nama_pasien="<?= $k['nama_pasien']; ?>" data-nama_peminjam="<?= $k['nama_peminjam']; ?>" data-tanggal="<?= $k['tanggal']; ?>" data-keperluan="<?= $k['keperluan']; ?>" data-tanggal_kembali="<?= $k['tanggal_kembali']; ?>" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal1"> Kembali </button>
                                                <?php } ?>

                                                <a href="edit/<?= $k['id_peminjaman']; ?>" class="btn btn-sm  btn-danger btn-dark">Edit</a>

                                                <?php if (session()->get('level') == 1) { ?>
                                                    <a href="delete/<?= $k['id_peminjaman']; ?>" class="btn btn-sm  btn-danger btn-delete"> Hapus</a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="modal" tabindex="-1" role="dialog" id="modal1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pengembalian Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('peminjaman/update/'); ?>" method="post">
                    <input type="hidden" class="form-control" id="id_peminjaman" name="id_peminjaman" value="<?= $k['id_peminjaman']; ?>">
                    <input type="hidden" class="form-control datetimepicker" id="tanggal" name="tanggal" value="<?= $k['tanggal']; ?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="no_rm"> No. Rekam Medis</label>
                            <input type="text" class="form-control" id="no_rm" name="no_rm" value="<?= $k['no_rm']; ?>" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_rm"> Nama Pasien</label>
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= $k['nama_pasien']; ?>" readonly>
                        </div>
                    </div>

                    <input type="hidden" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $k['nama_peminjam']; ?>" placeholder="">
                    <input type="hidden" id="keperluan" value="<?= $k['keperluan']; ?>" name=" keperluan">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="status">Status Dokumen</label>
                            <select class="form-control select" id="status" name="status">
                                <option value="dikembalikan">dikembalikan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 dikembalikan box">
                            <label>Tanggal Kembali</label>
                            <input type="text" class="form-control datepicker  " id="tanggal_kembali" name="tanggal_kembali" value="">
                        </div>
                    </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '#btn-edit', function() {
        $('.modal-body #id_peminjaman').val($(this).data('id_peminjaman'));
        $('.modal-body #tanggal').val($(this).data('tanggal'));
        $('.modal-body #no_rm').val($(this).data('no_rm'));
        $('.modal-body #nama_pasien').val($(this).data('nama_pasien'));
        $('.modal-body #nama_peminjam').val($(this).data('nama_peminjam'));
        $('.modal-body #status').val($(this).data('status' == 'dikembalikan'));
        $('.modal-body #keperluan').val($(this).data('keperluan'));
        $('.modal-body #tanggal_kembali').val($(this).data('tanggal_kembali'));
    })
</script>


<script>
    $('.btn-delete').on('click', function(e) {

        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Data Yang Dihapus Tidak Dapat Dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;

            }
        })
    })
</script>
<script>
    $(document).ready(function() {
        $('#table-2').DataTable({
            // "serverSide": true,
            "responsive": true,
            "processing": false,

            "order": [
                [1, "desc"]
            ],

            "columnDefs": [{
                "targets": 0, //first column
                "orderable": false, //set not orderable
            }]


        });

    });
</script>



<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>


<?= $this->endSection() ?>