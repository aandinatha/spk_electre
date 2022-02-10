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
            <div class="row mt-2">
                <div class="col-12">



                    <?= $this->session->flashdata('message'); ?>


                    <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newuserModal"> Add New User </a> -->
                    <div class="card">

                        <div class="card-header py-3">
                            <a class="btn btn-primary" href="<?php echo base_url('admin/createuser') ?>">Tambah User</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class=" table-bordered display table table-striped table-hover" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <!-- <th scope="col">Image</th>
                                            <th scope="col">Date</th> -->
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i = 1; ?>
                                        <?php foreach ($datauser as $du) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $du['name']; ?></td>
                                                <td><?= $du['email']; ?></td>
                                                <!-- <td><?= $du['image']; ?></td>
                                                <td><?= $du['date']; ?></td> -->


                                                <td>
                                                    <a href="<?php echo base_url('admin/detailUser/' . $du['id']); ?>" class="btn btn-info">Detail</a>

                                                    <a href="<?php echo base_url('admin/deleteuser/' . $du['id']); ?>" class="btn btn-danger">Hapus</a>
                                                </td>


                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
    <!-- Modal -->
    <!-- <div class=" modal fade" id="newuserModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New SubMenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?Php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?Php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="SubMenu url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="SubMenu icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Apakah Ini Active ?
                            </label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> -->