<li class="nav-item">
    <a href="<?= site_url('home') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
</li>
<li class="nav-item">
    <a href="<?= site_url('peminjaman') ?>" class="nav-link"><i class="far fa-plus-square"></i> <span>Peminjaman</span></a>
</li>
<li class=""><a class="nav-link" href="<?= site_url('peminjaman/list') ?>"><i class="far fa-square"></i> <span>Data Peminjaman</span></a></li>
<li class=""><a class="nav-link" href="<?= site_url('dokumenrusak') ?>"><i class="fas fa-truck"></i> <span>Dokumen Rusak</span></a></li>
<li class=""><a class="nav-link" href="<?= site_url('laporan') ?>"><i class="fas fa-book-medical"></i><span>Laporan</span></a></li>

<?php if (session()->get('level') == 1) { ?>
    <li class=""><a class="nav-link" href="<?= site_url('listuser') ?>"><i class="fas fa-user"></i><span>User Management</span></a></li>
<?php } ?>

<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="<?= base_url('auth/logout') ?>" class="btn btn-primary btn-md btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Keluar
    </a>
</div>