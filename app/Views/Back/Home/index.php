<?= $this->extend('Back/Layout/main'); ?>


<?= $this->section('title'); ?>
<?= $title ?? 'Home'; ?>
<?= $this->endSection(); ?>


<?= $this->section('css'); ?>
<?= $this->endSection(); ?>


<?= $this->section('content'); ?> <!-- Begin Page Content -->

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title ?? 'Home do super Admin'; ?></h1>
        <?= $user; ?>

    </div>

<?= $this->endSection(); ?> <!-- End Page Content -->


<?= $this->section('js'); ?>
<?= $this->endSection(); ?>