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
            <div class="row justify-content-md-center">
                <div class="col-8 ">
                    <div class="card mb-2">

                        <?= $this->session->flashdata('message'); ?>

                        <form action="<?= base_url('user/changepassword'); ?>" method="post">
                            <div class="pl-lg-5">
                                <div class=" form-group row mt-lg-3 mb-2">
                                    <label for="current_password" class=" ml-lg-2 col-sm-3 col-form-label">Current Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="current_password" name="current_password">
                                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class=" form-group row mt-lg-3 mb-2">
                                    <label for="new_password1" class=" ml-lg-2 col-sm-3 col-form-label">New Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="new_password1" name="new_password1">
                                        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class=" form-group row mt-lg-3 mb-2">
                                    <label for="new_password2" class=" ml-lg-2 col-sm-3 col-form-label">Repeat Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="new_password2" name="new_password2">
                                        <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>


                                <div class="form-group row justify-content-end mb-3">
                                    <div class="col-sm-9">
                                        <a class="btn btn-warning " href="<?= base_url('user') ?>">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Change Password</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>