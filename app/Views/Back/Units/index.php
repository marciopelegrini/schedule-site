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

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?? 'Home do super Admin'; ?></h1>

       <!-- Page Heading -->
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($units as $unit): ?>
                                <tr>
                                    <td><?= $unit->name; ?></td>
                                    <td><?= $unit->email; ?></td>
                                    <td><?= $unit->phone; ?></td>
                                    <td><?= $unit->starttime; ?></td>
                                    <td><?= $unit->endtime; ?></td>
                                    <td><?= $unit->created_at; ?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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