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
                    <div class="card ">
                        <div class="card-header">
                            <div class="card-title">Edit Mahasiswa</div>
                            <div class="card-category">Masukan data mahasiswa </div>
                        </div>
                        <div class="card-body">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?php base_url('mahasiswa/edit') ?>" method="post" class="forms-sample">
                                <input type="hidden" name="id" value="<?php echo $Mahasiswa->id ?>" />
                                <div class="form-group row">
                                    <label for="exampleInputName2" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?> " type="text" name="nama" id="exampleInputName2" value="<?php echo $Mahasiswa->nama ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputemail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9"><input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="text" name="email" id="exampleInputemail" value="<?php echo $Mahasiswa->email ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('email') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputnim" class="col-sm-3 col-form-label">Nim</label>
                                    <div class="col-sm-9">
                                        <input class="form-control <?php echo form_error('nim') ? 'is-invalid' : '' ?>" type="text" name="nim" id="exampleInputnim" value="<?php echo $Mahasiswa->nim ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nim') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputjurusan" class="col-sm-3 col-form-label">Jurusan</label>
                                    <div class="col-sm-9">
                                        <input class="form-control <?php echo form_error('jurusan') ? 'is-invalid' : '' ?>" type="text" name="jurusan" id="exampleInputjurusan" value="<?php echo $Mahasiswa->jurusan ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jurusan') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputkampus" class="col-sm-3 col-form-label">Kampus</label>
                                    <div class="col-sm-9">
                                        <input class="form-control <?php echo form_error('kampus') ? 'is-invalid' : '' ?>" type="text" name="kampus" id="exampleInputkampus" value="<?php echo $Mahasiswa->kampus ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kampus') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputdivisi" class="col-sm-3 col-form-label">Departemen Divisi</label>
                                    <div class="col-sm-9">
                                        <input class="form-control <?php echo form_error('divisi') ? 'is-invalid' : '' ?>" type="text" name="divisi" id="exampleInputdivisi" value="<?php echo $Mahasiswa->divisi ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('divisi') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputjudul" class="col-sm-3 col-form-label">Judul Proyek</label>
                                    <div class="col-sm-9">
                                        <input class="form-control <?php echo form_error('judul') ? 'is-invalid' : '' ?>" type="text" name="judul" id="exampleInputjudul" value="<?php echo $Mahasiswa->judul ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('judul') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputno" class="col-sm-3 col-form-label">No Hp</label>
                                    <div class="col-sm-9">
                                        <input class="form-control <?php echo form_error('no') ? 'is-invalid' : '' ?>" type="text" name="no" id="exampleInputno" value="<?php echo $Mahasiswa->no ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('no') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputalamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" id="exampleInputalamat" value="<?php echo $Mahasiswa->alamat ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('alamat') ?>
                                        </div>
                                    </div>
                                </div>
                                <div align=center>
                                    <input class="bg-gradient btn btn-info" type="submit" name="btn" value="Save" />
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