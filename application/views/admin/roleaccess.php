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
                <div class="col-8">

                    <?= $this->session->flashdata('message'); ?>

                    <h5 class="mb-4">Role : <?= $role['role'] ?></h5>
                    <div class="card ">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class=" table-bordered display table table-striped table-hover" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Menu</th>
                                            <th scope="col">Access</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($menu as $m) : ?> <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $m['menu']; ?></td>
                                                <td>

                                                    <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">


                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div align='center'>

                                    <a class="btn btn-warning " href="<?= base_url('admin/role') ?>">Kembali</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>