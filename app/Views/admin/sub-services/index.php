<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Sub-Services<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <div>
        <a href="<?= base_url('admin/sub-services/create') ?>"><button type="button" class="btn btn-primary m-2">
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
                            <th>Image</th>
                            <th>Service Name</th>
                            <th>Sub Service Name</th>
                            <th>Actions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sub_service as $key => $sub_services) : ?>

                            <tr>
                                <th scope="row"><?= $key + 1 ?></th>
                                <td> <img src="<?= base_url('/uploads/subservice/' . $sub_services['image']) ?>" class="img-circle elevation-2" style="height :50px ; width:50px"> </td>

                                <td><?= $sub_services['service_name'] ?></td>
                                <td><?= $sub_services['subservice_name'] ?></td>

                                <td><a href="<?= base_url("/admin/sub-service/edit/" . $sub_services["id"]) ?>" class="text-white"><button class="btn-success btn">View</button></a></td>
                                <td><a href="<?= base_url("/admin/sub-service/delete/" . $sub_services['id']) ?>" class="text-white" onclick="return confirm('Are you sure to delete <?= $sub_services['service_name']  ?>?')"><button class="btn-danger btn">Delete</button></a></td>
                            </tr>

                        <?php endforeach ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Service Name</th>
                            <th>Sub Service Name</th>
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