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



                    <?php echo $this->session->flashdata('message'); ?>
                    <div class="card full-height">
                        <div class="card-header py-3">
                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal"> Add New SubMenu </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">


                                <table class=" table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Menu</th>
                                            <th scope="col">Url</th>
                                            <th scope="col">Icon</th>
                                            <!-- <th scope="col">Active</th> -->
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i = 1; ?>
                                        <?php foreach ($subMenu as $sm) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $sm['title']; ?></td>
                                                <td><?= $sm['menu']; ?></td>
                                                <td><?= $sm['url']; ?></td>
                                                <td><?= $sm['icon']; ?></td>
                                                <!-- <td><?= $sm['is_active']; ?></td> -->
                                                <td>
                                                    <a href="<?= base_url('menu/editsubmenu/') . $sm['id']; ?>" class="btn btn btn-info">Edit</a>
                                                    <a href="<?= base_url('menu/delete_submenu/') . $sm['id']; ?>" class="btn btn btn-danger">Delete</a>
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
            <!-- /.container-fluid -->
        </div>
    </div>
    <!-- End of Main Content -->
    <!-- Modal -->
    <div class=" modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
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
                            <div class="">
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
    </div>