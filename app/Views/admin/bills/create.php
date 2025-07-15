<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Documents|Create<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <form method="post" action=<?= base_url('admin/documents/create') ?> enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="image" class="form-label">File</label>
                <input type="file" name="file" class="form-control" accept="image/png, image/jpeg, image/jpg, application/pdf">
            </div>
        </div>



        <div class="mb-3">
            <label for="cars" class="form-label">Choose Place</label>
            <select name="place_id" id="place_id" class="form-control">
                <option selected disabled>---Select---</option>

                <?php foreach ($getPlace as $place) : ?>
                    <option value="<?= $place['id'] ?>"><?= $place['place_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>


        <div class="mb-3">
            <label for="title" class="form-label">Document Name</label>
            <input type="text" name="document_name" class="form-control" value="<?= esc(set_value('document_name')) ?>">
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