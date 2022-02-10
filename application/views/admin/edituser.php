<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-4 mt-2">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <h3 class=" mt-1 text-white"><?= $title ?></h3>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Update Pengguna</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nama</label>
                                                <input class="form-control" id="name" name="name" placeholder="Nama" type="text" value="<?= $u['name']; ?>">
                                                <?= form_error('name', '<small class="text-danger" pl-3>', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Email</label>
                                                <input class="form-control" id="email" name="email" placeholder="Email" type="text" value="<?= $u['email']; ?>">
                                                <?= form_error('email', '<small class="text-danger" pl-3>', '</small>') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-first-name">Password</label>
                                                <input class="form-control" id="password" name="password" placeholder="Password" type="password" value="?= $u['password']; ?>">
                                                <?= form_error('password', '<small class="text-danger" pl-3>', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">Jenis Akun</label>
                                                <select class="form-control" name="role_id" value="<?php if ($u['role_id'] == 1) {
                                                                                                        echo 'Admin';
                                                                                                    } else {
                                                                                                        echo 'User';
                                                                                                    } ?>">
                                                    <option value="1">admin</option>
                                                    <option value="2">user</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" name="updateUser" value="updateUser" class="btn btn-primary ">Simpan Data</button>
                                    <a href="<?= base_url('admin/datauser'); ?>" class="btn btn-warning ">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>