<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Sub service|Create<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <form method="post" action=<?= base_url('admin/sub-services/create') ?> enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="image" class="form-label">Sub Service Image</label>
                <input type="file" name="image" class="form-control" accept="image/png, image/jpeg, image/jpg">
            </div>
        </div>

        <div class="mb-3">
            <label for="cars" class="form-label">Choose Service</label>
            <select name="services" id="services" class="form-control">
                <option disabled selected>Select</option>
                <?php foreach ($services as $service) : ?>
                    <option value="<?= esc($service['id']); ?>"><?= esc($service['name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>


        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" name="subservice_name" class="form-control" value="<?= esc(set_value('subservice_name')) ?>">
        </div>


        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea class="form-control" name="details" cols="30" rows="10" cols="30" rows="10"><?= esc(set_value('details')); ?></textarea>
            <script>
                CKEDITOR.replace('details');
            </script>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</main>

<?= $this->endSection() ?>
<!-- /.content -->