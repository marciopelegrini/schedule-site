<?= $this->extend('Back/Layout/main'); ?>


<?= $this->section('title'); ?>
<?= $title ?? 'Home'; ?>
<?= $this->endSection(); ?>


<?= $this->section('css'); ?>
<!-- Custom styles for this page -->
<link href="<?= base_url('back/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

        <!-- DataTables -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
                <a href="<?= route_to('units.new'); ?>" class="btn btn-success btn-sm float-right">New Unit</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?= $units; ?>
                </div>
            </div>
        </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>


<?= $this->section('js'); ?>
    <!-- Page level plugins -->
    <script src="<?= base_url('back/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('back/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('back/'); ?>js/demo/datatables-demo.js"></script>
<?= $this->endSection(); ?>