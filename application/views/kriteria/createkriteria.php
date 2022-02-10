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
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card ">
                        <div class="card-header" alt="Card image">
                            <div class="card-title">Tambah Kriteria</div>
                            <div class="card-category">Masukan Data kriteria dan bobot</div>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode Kriteria</label>
                                    <div class="col-2">
                                        <input type="text" class="form-control form-control-round" readonly="readonly" name="id_kriteria" value="<?php echo $gen; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Kriteria</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-round" placeholder="Masukan Nama Kriteria" name="nama_kriteria" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bobot</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-round" placeholder="Masukan Bobot" name="bobot" value="">
                                    </div>
                                </div>

                                <!--cepet seminar oi wkwkwk ~MyLogicalWorld-->
                                <br><br>
                                <div class="box-footer mt-15">
                                    <button type="submit" class="btn btn-primary " name="tambahkriteria" value="tambahkriteria">Simpan
                                        Data</button>
                                    <button type="submit" class="btn btn-warning " name="back" value="back">Kembali</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /.container-fluid -->