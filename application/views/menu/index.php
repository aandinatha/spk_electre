<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-4 mt-2">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <h3 class=" mt-1 text-white"><?= $title ?></h3>
                </div>
            </div>
        </div>

        <div class="page-inner ">
            <div class="row mt-2 justify-content-center">
                <div class="col-lg-8">
                    <!-- <?= form_error('menu', '<div class="alert alert-danger" role="alert">', ' </div>') ?>

                      <?php if ($this->session->flashdata('menu_baru')) : ?>
                        <div role="alert" class="alert alert-success alert-dismissible ">
                            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times">
                                </span></button>
                            <p> <?= $this->session->flashdata('menu_baru'); ?></p>
                        </div>
                    <?php endif; ?> -->

                    <div class="card full-height">
                        <div class="card-header py-3">
                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal"> Add New Menu </a>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="display table table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Menu</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $i = 1; ?>
                                            <?php foreach ($menu as $m) : ?>
                                        <tr>

                                            <td><?= $m['id']; ?></td>
                                            <td><?= $m['menu']; ?></td>
                                            <td>
                                                <a href="<?= base_url('menu/editmenu/') . $m['id'] ?>" class="btn btn-info">Edit Menu</a>
                                                <a href="<?= base_url('menu/delete_menu/') . $m['id'] ?>" class="btn btn-danger">Delete</a>
                                            </td>

                                        </tr>

                                    <?php endforeach; ?>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <!-- Modal -->
    <div class=" modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('menu'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="menu" name="menu" placeholder="Name Menu">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>