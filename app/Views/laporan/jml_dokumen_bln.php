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
                <div class="card mb-3" id="cardbayar">
                    <div class="card-header">
                        <center>
                            <h4><?php echo $title ?> </h4>
                            <h5><?php echo $subtitle ?> </h5>
                            <h5><?php echo $status_dokumen ?> </h5>
                        </center>
                    </div>
                    <div class="card-body card-block">

                        <div class="card-body">
                            <div class="table-responsive-sm col-4 mx-auto w-auto">
                                <table class="table table-bordered" id="" cellspacing="0">
                                    <thead width="10%">
                                        <tr width="10%">
                                            <th class="col-sm-1">No</th>
                                            <th class="col-sm-1">Bulan</th>
                                            <th class="col-sm-1">jumlah Dokumen</th>
                                        </tr>
                                    </thead>
                                    <?php $i = 1; ?>

                                    <td>
                                        <?= $i++; ?>
                                    </td>
                                    <td><?= $bulan; ?></td>
                                    <td><?= $datafilter; ?></td>
                                    </tr>
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