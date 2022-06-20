<?= $this->extend('layout/menu') ?>

<?= $this->section('judul') ?>
<h3><i class="fa fa-fw fa-table"></i> Menu Penjualan</h3>
<?= $this->endSection() ?>


<?= $this->section('isi') ?>
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Input</h3>
                <p>Kasir</p>
            </div>
            <div class="icon">
                <i class="fa fa-tasks"></i>
            </div>
            <a href="<?= site_url('penjualan/input');?>" class="small-box-footer">Input Kasir <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

   

</div>



<?= $this->endSection() ?>