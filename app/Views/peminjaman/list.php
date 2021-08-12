<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1 style="font-size: 18px;">Daftar Peminjaman Dokumen Rekam Medis</h1>

    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
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

                                            <td>


                                                <button type="button" data-id=" <?= $k['id_peminjaman']; ?>" class="btn btn-sm btn-success" data-toggle="modal" data-target="#TableDenda"><i class="fas fa-check"></i> </button>

                                                <!-- <a href="detail/<?= $k['id_peminjaman']; ?>" class="btn btn-sm btn-primary">Lihat</a> -->

                                                <?php if (session()->get('level') == 1) { ?>
                                                    <a href="delete/<?= $k['id_peminjaman']; ?>" class="btn btn-sm  btn-danger btn-delete"><i class="fas fa-trash"></i></a>
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
    </div>
</section>

<div class="modal" tabindex="-1" role="dialog" id="TableDenda">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pengembalian Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../peminjaman/update/<?= $k['id_peminjaman']; ?>" method="post">
                    <input type="hidden" class="form-control datetimepicker" id="tanggal" name="tanggal" value="<?= $k['tanggal']; ?>">
                    <input type="hidden" class="form-control" id="no_rm" name="no_rm" value="<?= $k['no_rm']; ?>">
                    <input type="hidden" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= $k['nama_pasien']; ?>" placeholder="">
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
                            <input type="text" class="form-control datetimepicker  " id="tanggal_kembali" name="tanggal_kembali" value="">
                        </div>
                    </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </div>
</div>


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
            "processing": true,

            "order": [
                [1, "desc"]
            ],

            "columnDefs": [{

                "sortable": true,
                "visible": false,
                "searchable": false
            }],


        });

    });
</script>

<!-- <script type="text/javascript">
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#table-2').DataTable({

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?= site_url('peminjaman/list') ?>",
                "type": "POST"
            },


            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        });

    });
</script> -->

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>



<?= $this->endSection() ?>