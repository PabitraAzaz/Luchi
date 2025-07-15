<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>File<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>


    <div>



        <a href="<?= base_url('admin/folder/') . $id . '/file/create' ?> "><button type="button" class="btn btn-primary m-2">Add</button></a>




        <div class="card">
            <div class="card-header">
                <h3 class="card-title">File List</h3>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Folder Name</th>
                            <th>Document Name</th>

                            <th>Actions</th>
                            <!-- <th>Actions</th> -->
                            <!-- <th>Actions</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $sub_services) : ?>

                            <tr>

                                <th scope="row"><?= $key + 1 ?></th>

                                <td><?= ucfirst($sub_services['p_w_f_name'])  ?></td>
                                <td><?= $sub_services['f_w_d_doc_name'] ?></td>

                                <td><a href="<?= base_url("uploads/files/" . $sub_services["file"]) ?>" class="text-white" target="_blank"><button class="btn-warning btn">View File</button></a></td>


                               

                            </tr>

                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Folder Name</th>
                            <th>Document Name</th>

                            <th>Actions</th>
                            <!-- <th>Actions</th> -->
                            <!-- <th>Actions</th> -->
                        </tr>
                    </tfoot>
                </table>
            </div>


        </div>
    </div>

</main>


<?= $this->endSection() ?>