<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Places|Create<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <form method="post" action=<?= base_url('admin/places/create') ?> enctype="multipart/form-data">
        <?= csrf_field() ?>

        <!-- <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="image" class="form-label">File</label>
                <input type="file" name="file" class="form-control" accept="image/png, image/jpeg, image/jpg, application/pdf">
            </div>
        </div> -->



        <div class="mb-3">
            <label for="state" class="form-label">Choose State</label>
            <select name="state" class="form-control">
                <option selected disabled>---Select---</option>

                <option value="maharashtra">Maharashtra</option>
                <option value="gujarat">Gujarat</option>
                <option value="delhi">Delhi</option>
                <option value="kolkata">Kolkata</option>
                <option value="supreme">Supreme Court</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="title" class="form-label">Place Name</label>
            <input type="text" name="place" class="form-control" value="<?= esc(set_value('place')) ?>">
        </div>


        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</main>

<?= $this->endSection() ?>
<!-- /.content -->