<?= $this->extend('layout/main') ?>

<?= $this->section('menu') ?>
<li class="nav-item">
    <a href="<?= site_url('layout/index') ?>" class="nav-link">
        <i class="nav-icon fa fa-house"></i>
        <p>
            Home
        </p>
    </a>
</li>
<li class="nav-header">Master</li>
<li class="nav-item">
    <a href="<?= site_url('kategori/index') ?>" class="nav-link">
        <i class="nav-icon fa fa-tasks"></i>
        <p>
            Kategori
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?= site_url('satuan/index') ?>" class="nav-link">
        <i class="nav-icon fa fa-solid fa-money-check-dollar"></i>
        <p>
            Satuan
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?= site_url('produk/index') ?>" class="nav-link">
        <i class="nav-icon fa fa-solid fa-basket-shopping"></i>
        <p>
            Produk
        </p>
    </a>
</li>
<li class="nav-header">Transaksi</li>
<li class="nav-item">
    <a href="<?= site_url('Penjualan/index') ?>" class="nav-link">
        <i class="nav-icon fa fa-brands fa-sellcast"></i>
        <p>
            Penjualan
        </p>
    </a>
</li>

<?= $this->endSection(); ?>