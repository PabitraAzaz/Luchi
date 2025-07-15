<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Folder<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>


    <div>

        <a href="<?= base_url('admin/folder/create') ?>"><button type="button" class="btn btn-primary m-2">Add</button></a>

        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Folder</h3>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>State</th>
                            <th>Place Name</th>
                            <th>Folder Name</th>
                            <th>Actions</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $sub_services) : ?>

                            <tr>

                                <th scope="row"><?= $key + 1 ?></th>



                                <td><?= ucfirst($sub_services['state_name'])  ?></td>
                                <td><?= $sub_services['place_name'] ?></td>
                                <td><?= $sub_services['folder_name'] ?></td>


                               


                                <td><a href="<?= base_url("/admin/folder/list/" . $sub_services["folder_id"]) ?>" class="text-white"><button class="btn-warning btn">File List</button></a></td>
                            </tr>

                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>State</th>
                            <th>Place Name</th>
                            <th>Folder Name</th>
                            <th>Actions</th>
                           
                        </tr>
                    </tfoot>
                </table>
            </div>


        </div>
    </div>

</main>


<?= $this->endSection() ?>