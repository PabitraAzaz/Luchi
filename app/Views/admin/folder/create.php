<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Folder|Create<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <form method="post" action=<?= base_url('admin/folder/create') ?> enctype="multipart/form-data">

        <?= csrf_field() ?>

        <!-- <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="image" class="form-label">File</label>
                <input type="file" name="file" class="form-control" accept="image/png, image/jpeg, image/jpg, application/pdf">
            </div>
        </div> -->



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
            <label for="title" class="form-label">Folder Name</label>
            <input type="text" name="folder_name" class="form-control" value="<?= esc(set_value('folder_name')) ?>">
        </div>



        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</main>

<?= $this->endSection() ?>
<!-- /.content -->