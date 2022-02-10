<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-4 mt-2">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <h3 class=" mt-1 text-white"><?= $title ?></h3>
                </div>
            </div>
        </div>

        <div class="page-inner bg-gradient-white ">
            <div class="row mt-2  justify-content-center">

                <div class="col-lg-7 mr--5 ">
                    <div class="card full-height">
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table id="" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Mahasiswa</th>
                                            <th>Total</th>
                                            <th>Rank</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $rank = $rank;
                                    foreach ($rank as $key => $val) : ?>
                                        <tr>
                                            <td><?= $alt[$key] ?></td>
                                            <td><?= $electre->total[$key] ?></td>
                                            <td><?= $rank[$key] ?></td>

                                        </tr>
                                    <?php endforeach; ?>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 ml--5">
                    <div class="card full-height">
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table id="" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>KETERANGAN REKOMENDASI</th>

                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>Mahasiswa direkomendasikan menjadi karyawan</td>
                                    </tr>
                                    <tr>
                                        <td>Mahasiswa mendapat bonus 300.000 </td>
                                    </tr>
                                    <tr>
                                        <td>Mahasiswa mendapat bonus 300.000</td>
                                    </tr>
                                    <tr>
                                        <td>Mahasiswa mendapat bonus 100.000</td>
                                    </tr>
                                    <tr>
                                        <td>Mahasiswa mendapat bonus 100.000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- <div class="col-md-8">
                    <div class="card full-height bg-primary-gradient">
                        <div class="card-body">
                            <div class="card-title text-white" align="center">KETERANGAN REKOMENDASI</div>
                            <hr>
                            <p class="text-white">
                                Mahasiswa Magang dengan peringkat 1
                                dapat direkomendasikan menjadi karyawan di PT Mulya Kusuma Grup Unit Bergital</p>
                            <p class="text-white">
                                Mahasiswa Magang dengan peringkat 2 dan 3
                                mendapatkan bonus sebesar 300.000</p>

                        </div>
                    </div>


                </div> -->

            </div>
        </div>



    </div>
    <!-- /.container-fluid -->


    <!-- End of Main Content -->