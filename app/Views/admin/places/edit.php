<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Places|Edit<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <form method="post" action=<?= base_url('admin/places/edit/' . $place['id']) ?> enctype="multipart/form-data">
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
                <option value="maharashtra" <?= $place['state_name'] == 'maharashtra' ? 'selected' : '' ?>>Maharashtra</option>
                <option value="gujarat" <?= $place['state_name'] == 'gujarat' ? 'selected' : '' ?>>Gujarat</option>
                <option value="delhi" <?= $place['state_name'] == 'delhi' ? 'selected' : '' ?>>Delhi</option>
                <option value="kolkata" <?= $place['state_name'] == 'kolkata' ? 'selected' : '' ?>>Kolkata</option>
                
                <option value="supreme" <?= $place['state_name'] == 'supreme' ? 'selected' : '' ?>>Supreme Court</option>
            </select>
        </div>





        <div class="mb-3">
            <label for="title" class="form-label">Place Name</label>
            <input type="text" name="place" class="form-control" value="<?= $place['place_name'] ?>">
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</main>

<?= $this->endSection() ?>
<!-- /.content -->