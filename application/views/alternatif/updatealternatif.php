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
            <div class="row mt--2">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="card-title">Edit Mahasiswa</div>
                            <div class="card-category">Ubah data Mahasiswa</div>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-round" name="id_alternatif" readonly="readonly" value="<?php echo $alt->id_alternatif; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-round" placeholder="Masukan Nama Mahasiswa" name="nama_alternatif" value="<?php echo $alt->nama_alternatif; ?>">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary btn-round" name="updatealternatif" value="updatealternatif">Simpan
                                        Data</button>
                                    <button type="submit" class="btn btn-warning btn-round" name="back" value="back">Kembali</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Main Content -->