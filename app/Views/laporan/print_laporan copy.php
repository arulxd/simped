<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">

<body>
  <div>

    <div id="content-wrapper" style="margin-top:50px">

      <div class="container-fluid">



        <!-- DataTables Example -->
        <div class="card mb-3" id="cardbayar">
          <div class="card-header">
            <center>
              <h3><?php echo $title ?> </h3>
              <h4><?php echo $subtitle ?> </h4>
            </center>
          </div>
          <div class="card-body card-block">

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="tabelbayar" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>No Rekam Medis</th>
                      <th>Nama Pasien</th>
                      <th>Nama Peminjam</th>
                      <th>Status</th>
                      <th>Tanggal Kembali</th>
                    </tr>
                  </thead>

                  <tbody <?php $no = 1;
                          foreach ($datafilter as $row) : ?> <tr>

                    <td><?= $no++; ?></td>
                    <td><?php echo $row->tanggal; ?></td>
                    <td><?php echo $row->no_rm; ?></td>
                    <td><?php echo $row->nama_pasien; ?></td>
                    <td><?php echo $row->nama_peminjam; ?></td>
                    <td><?php echo $row->status; ?></td>
                    <td><?php echo $row->tanggal_kembali; ?></td>

                    </tr>
                  <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="card-body card-block">
              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-9"><label for="select" class=" form-control-label"></label></div>
                <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Tuban, <?php echo date('d M Y') ?></label></div>

              </div>
              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-9"><label for="select" class=" form-control-label"></label></div>
                <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Petugas</label></div>

              </div>
              <br><br><br>
              <div class="row form-group">
                <div id="form-tanggal" class="col col-md-9"><label for="select" class=" form-control-label"></label></div>
                <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label"><?= session()->get('username') ?></label></div>

              </div>
            </div>

          </div>


        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
      <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>



      <!-- Bootstrap core JavaScript-->
      <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>