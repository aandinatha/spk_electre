<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-4">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <h3 class=" mt-1 text-white"><?= $title ?></h3>
                </div>
            </div>
        </div>

        <div class="page-inner ">
            <div class="row mt--2">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="card-title">Ubah Nilai &raquo; <h4><?= $selectalt->nama_alternatif ?></div>

                        </div>
                        <div class="card-body">

                            <form method="post">
                                <div class="form-group row">
                                    <?php
                                    foreach ($form as $row) : ?>
                                        <label class="col-sm-5 col-form-label mb-2"><?= $row->nama_kriteria ?></label>
                                        <div class="col-sm-4">
                                            <select class="form-control form-control" placeholder="Masukan Nilai" name="ID-<?= $row->id_kriteria ?>">
                                                <option value="<?php echo $row->nilai; ?>"><?php echo $row->nilai; ?></option>
                                                <option value="1">1. Sangat Kurang Baik</option>
                                                <option value="2">2. Kurang Baik </option>
                                                <option value="3">3. Cukup baik</option>
                                                <option value="4">4. Baik</option>
                                                <option value="5">5. Sangat Baik</option>
                                            </select>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary btn-round" name="updaterelasi" value="updaterelasi">Simpan
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
    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
            <div class="title">Keterangan</div>
            <div class="custom-content">
                <div class="switcher">
                    <div class="switch-block">
                        <table class="display table table-striped table-hover" cellspacing="0" width="100%">
                            <thead>
                                <th>Kode</th>
                                <th>Keterangan</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sangat Kurang Baik</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kurang Baik </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cukup baik</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Baik</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sangat Baik</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <div class="col-8 col-md-4">
                            <div class="nav flex-column nav-pills nav-secondary nav-no-bd" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">

                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="custom-toggle">
                    <i class="flaticon-settings"></i>
                </div>
            </div>
       

        </div>
             <!-- End Custom template -->

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->