<?= $this->extend('Back/Layout/main'); ?>


<?= $this->section('title'); ?>
<?= $title ?? 'Home'; ?>
<?= $this->endSection(); ?>


<?= $this->section('css'); ?>


<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <?= $title ?>
            </h6>
        </div>
        <div class="card-body">

            <?= form_open(route_to('units.update', $unit->id), hidden:['_method' => 'PUT']); ?>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" value="<?= old('name', $unit->name); ?>" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter the unit name">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" value="<?= old('phone', $unit->phone); ?>" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Enter the unit phone">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="coordinator">Coordinator</label>
                        <input type="text" class="form-control" value="<?= old('coordinator', $unit->coordinator); ?>" id="coordinator" name="coordinator" aria-describedby="coordinatorHelp" 
                        placeholder="Enter the unit coordinator">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="starttime">Start Time</label>
                        <input type="time" class="form-control" value="<?= old('starttime', $unit->starttime); ?>" id="starttime" name="starttime" aria-describedby="starttimeHelp" placeholder="Enter the unit Start Time">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="endtime">End Time</label>
                        <input type="time" class="form-control" value="<?= old('endtime', $unit->endtime); ?>" id="endtime" name="endtime" aria-describedby="endtimeHelp" placeholder="Enter the unit End Time">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="servicetime">Service Time</label>
                        <?= $timesInterval; ?>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="<?= old('email', $unit->email); ?>" id="email"
                            name="email" aria-describedby="emailHelp" placeholder="Enter the unit Email">
                    </div>

                    <div class="form-group col-md-8">
                        <label for="address">Adress</label>
                        <input type="email" class="form-control" value="<?= old('address', $unit->address); ?>" id="address"
                            name="address" aria-describedby="addressHelp" placeholder="Enter the unit address">
                    </div>

                    <div class="col-md-12 mb-3 mt-4">
                        <div class="custom-control custom-checkbox">
                            <?= form_hidden('active', 0); ?>
                            <input type="checkbox" name="active" value="1" class="custom-control-input" id="active"
                            <?php if($unit->active): ?> checked <?php endif; ?>>
                            <label class="custom-control-label" for="active">Record is active</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            <?= form_close() ?>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>


<?= $this->section('js'); ?>

<?= $this->endSection(); ?>