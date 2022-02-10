<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-4 mt-2">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <h3 class=" mt-1 text-white"><?= $title ?></h3>
                </div>
            </div>
        </div>

        <div class="page-inner  ">
            <div class="row mt-2  justify-content-center">
                <div class="col-lg-8 ">
                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', ' </div>') ?>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card ">
                        <div class="card-header py-3">
                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal"> Add New Role </a>
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table id="" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $i = 1; ?>
                                            <?php foreach ($role as $r) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $r['role']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-warning">access</a>
                                                <a href="<?= base_url('admin/delete_role/') . $r['id']; ?>" class="btn btn-danger" data-toggle="modal" data-target="#HapusModal">Delete</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
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


    </div>

    <!-- Modal -->
    <div class=" modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Add New Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/role'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="role" name="role" placeholder="Nama Role">
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

    <div class="modal fade" id="HapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Menghapus File</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda Yakin Menghapus File</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('admin/delete_role/') . $r['id']; ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>