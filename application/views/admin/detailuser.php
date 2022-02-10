<div class="main-panel">
    <div class="content">
        <div class="panel-header " style="min-height: 400px; background-image: url(<?= base_url('assets'); ?>/img/banner.png); background-size: cover; background-position: center top;">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <br><br><br><br><br>
                        <h1 class="display-3 text-white pb-2 fw-bold"><?= $title ?></h1>


                        <a href="<?php echo base_url('admin/edituser/' . $u['id']); ?>" class="btn btn-lg btn-white btn-round">Edit Profile</a>

                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row justify-content-md-center">
                <div class="col-5">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-primary bubble-shadow-small">
                                        <i class="flaticon-users"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Teregistrasi Sejak</p>
                                        <h4 class="card-title"><?= date('d F Y', $u['date']); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="flaticon-interface-6"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Hak Akses</p>
                                        <h4 class="card-title"><?php if ($u['role_id'] == 1) {
                                                                    echo 'Admin';
                                                                } else {
                                                                    echo 'User';
                                                                } ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-10">
                                    <h3 class="mb-0">Detail Pengguna</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <form>
                                    <h6 class="heading-small text-muted mb-4">Informasi Pengguna</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-username">Nama</label>
                                                    <input class="form-control" readonly="readonly" type="text" value="<?= $u['name']; ?>">
                                                    <?= form_error('name', '<small class="text-danger" pl-3>', '</small>') ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-email">Email</label>
                                                    <input class="form-control" readonly="readonly" type="text" value="<?= $u['email']; ?>">
                                                    <?= form_error('email', '<small class="text-danger" pl-3>', '</small>') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-first-name">Password</label>
                                                    <input class="form-control" id="password" name="password" readonly="readonly" type="password" value="<?= $u['password']; ?>">
                                                    <?= form_error('password', '<small class="text-danger" pl-3>', '</small>') ?>
                                                </div>
                                            </div>
                                            <div class=" col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-last-name">Jenis Akun</label>
                                                    <input class="form-control" readonly="readonly" type="text" value="<?php if ($u['role_id'] == 1) {
                                                                                                                            echo 'Admin';
                                                                                                                        } else {
                                                                                                                            echo 'User';
                                                                                                                        } ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>