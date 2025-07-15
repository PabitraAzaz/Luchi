<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Sub-Services<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <div>
        <a href="<?= base_url('admin/documents/create') ?>"><button type="button" class="btn btn-primary m-2">
                Add
            </button></a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sub Services</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Document Name</th>
                            <th>State</th>
                            <th>Place</th>

                            <th>Actions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $sub_services) : ?>

                            <tr>
                                <th scope="row"><?= $key + 1 ?></th>
                                <td><?= $sub_services['doc_name'] ?></td>
                                <td><?= $sub_services['state_name'] ?></td>
                                <td><?= $sub_services['place_name'] ?></td>

                                <td><a href="<?= base_url("/admin/documents/edit/" . $sub_services["doc_id"]) ?>" class="text-white"><button class="btn-success btn">View</button></a></td>
                                <td><a href="<?= base_url("/admin/documents/delete/" . $sub_services['doc_id']) ?>" class="text-white" onclick="return confirm('Are you sure to delete <?= $sub_services['doc_name']  ?>?')"><button class="btn-danger btn">Delete</button></a></td>
                            </tr>

                        <?php endforeach ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Document Name</th>
                            <th>State</th>
                            <th>Place</th>

                            <th>Actions</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</main>

<?= $this->endSection() ?>