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

                        <?= form_open_multipart('user/edit'); ?>
                        <div class="pl-lg-5">
                            <div class=" form-group row mt-lg-3 mb-2">
                                <label for="inputEmail3" class=" ml-lg-2 col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-8 mr-3">
                                    <input type="email" class="form-control" id="email" name="email" name="email" value="<?= $user['email']; ?>" readonly>
                                </div>
                            </div>
                            <div class=" form-group row mb-3">
                                <label for="inputEmail3" class="ml-lg-2 col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class=" form-group row mb-3">
                                <label for="inputEmail3" class=" ml-lg-2 col-sm-2 col-form-label">Picture</label>

                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-end mb-3">
                                <div class="col-sm-9">
                                    <a class="btn btn-warning " href="<?= base_url('user') ?>">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Edit</button>

                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->