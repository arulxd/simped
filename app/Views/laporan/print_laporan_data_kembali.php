<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/public/template/node_modules/font-awesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">

<body>
  <div>
    <div id="content-wrapper" style="margin-top:50px">
      <div class="container-fluid">
        <div class="card mb-3" id="">
          <div class="card-header">
            <center>
              <h4><?php echo $title ?> </h4>
              <h5><?php echo $subtitle ?> </h5>
              <h5><?php echo $status_dokumen ?> </h5>
            </center>
          </div>
          <div class="card-body card-block">

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="" ellspacing="0">
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



</body>

</html>