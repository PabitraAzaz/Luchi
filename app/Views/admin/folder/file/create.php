<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>File|Create<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <form method="post" action=<?= base_url('admin/folder/' . $id . '/file/create') ?> enctype="multipart/form-data">

        <?= csrf_field() ?>

        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="image" class="form-label">File</label>
                <input type="file" name="file" class="form-control" accept="application/pdf">
            </div>
        </div>



        <div class="mb-3">
            <label for="title" class="form-label">Document Name</label>
            <input type="text" name="document_name" class="form-control" value="<?= esc(set_value('document_name')) ?>">
        </div>



        <button type="submit" class="btn btn-primary">Create</button>



    </form>
</main>

<?= $this->endSection() ?>
<!-- /.content -->