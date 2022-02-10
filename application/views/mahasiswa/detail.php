<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-4 mt-2">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <h3 class=" mt-1 text-white"><?= $title ?></h3>
                </div>
            </div>
        </div>
        <div class="page-inner">
            <div class="row mt-2">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">detail data mahasiswa </div>
                        </div>
                        <div class="card-body ">
                            <form class="forms-sample">
                                <div class="row justify-content-md-center ">
                                    <div class="col-lg-5">
                                        <div class="form-group row">
                                            <label for="exampleInputName2" class="form-control-label">Nama</label>
                                            <input readonly="readonly" class="form-control" type="text" name="nama" id="exampleInputName2" value="<?= $Mahasiswa['nama']; ?>">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('nama') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group row">
                                            <label for="exampleInputemail" class="form-control-label">Email</label>
                                            <input readonly="readonly" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="text" name="email" id="exampleInputemail" value="<?= $Mahasiswa['email']; ?>">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('email') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-md-center">
                                    <div class="col-lg-5">
                                        <div class="form-group row">
                                            <label for="exampleInputnim" class="form-control-label">Nim</label>
                                            <input readonly="readonly" class="form-control <?php echo form_error('nim') ? 'is-invalid' : '' ?>" type="text" name="nim" id="exampleInputnim" value="<?= $Mahasiswa['nim']; ?>">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('nim') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group row">
                                            <label for="exampleInputjurusan" class="form-control-label">Jurusan</label>

                                            <input readonly="readonly" class="form-control <?php echo form_error('jurusan') ? 'is-invalid' : '' ?>" type="text" name="jurusan" id="exampleInputjurusan" value="<?= $Mahasiswa['jurusan']; ?>">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('jurusan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-md-center">
                                    <div class="col-lg-5">
                                        <div class="form-group row">
                                            <label for="exampleInputkampus" class="form-control-label">Kampus</label>

                                            <input readonly="readonly" class="form-control <?php echo form_error('kampus') ? 'is-invalid' : '' ?>" type="text" name="kampus" id="exampleInputkampus" value="<?= $Mahasiswa['kampus']; ?>">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('kampus') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group row">
                                            <label for="exampleInputdivisi" class="form-control-label">Departemen Divisi</label>

                                            <input readonly="readonly" class="form-control <?php echo form_error('divisi') ? 'is-invalid' : '' ?>" type="text" name="divisi" id="exampleInputdivisi" value="<?= $Mahasiswa['divisi']; ?>">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('divisi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center ">
                                    <div class="col-lg-5">
                                        <div class="form-group row">
                                            <label for="exampleInputjudul" class="form-control-label">Judul Proyek</label>

                                            <input readonly="readonly" class="form-control <?php echo form_error('judul') ? 'is-invalid' : '' ?>" type="text" name="judul" id="exampleInputjudul" value="<?= $Mahasiswa['judul']; ?>">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('judul') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group row">
                                            <label for="exampleInputno" class="form-control-label">No Hp</label>

                                            <input readonly="readonly" class="form-control <?php echo form_error('no') ? 'is-invalid' : '' ?>" type="text" name="no" id="exampleInputno" value="<?= $Mahasiswa['no']; ?>">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('no') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <div class="ml-5">
                                        <div class="row" class="ml-5">
                                            <div class="col-lg-5">
                                                <div class="form-group row">
                                                    <label for="exampleInputalamat" class="form-control-label">Alamat</label>

                                                    <input readonly="readonly" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" id="exampleInputalamat" value="<?= $Mahasiswa['alamat']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('alamat') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div align=center class="mt-3">
                                    <a class="btn btn-info" href="<?php echo base_url('Mahasiswa'); ?>">kembali</a>
                                </div>

                                <!--  <button class="btn btn-light">Cancel</button> -->
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /.container-fluid -->