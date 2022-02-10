Begin Page Content -->

<div class="main-panel">
    <div class="content">
        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-gray-800"></h1> -->


        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold"><?= $title ?></h2>
                    </div>
                    <!-- <div class="ml-md-auto py-2 py-md-0">
                                <a href="<?= base_url('createUser'); ?>" class="btn btn-secondary btn-round">Tambah User</a>
                            </div> -->
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-sm-8 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-primary bubble-shadow-small">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Admin Terdaftar</p>
                                        <h4 class="card-title"><?php echo $record_admin->jumlah_admin; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="fa fa-tasks"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Jumlah Kriteria</p>
                                        <h4 class="card-title"><?php echo $record_kriteria->jumlah_kriteria; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-success bubble-shadow-small">
                                        <i class="fa fa-book"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Jumlah Alternatif</p>
                                        <h4 class="card-title"><?php echo $record_alternatif->jumlah_alternatif; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">User Terdaftar</p>
                                        <h4 class="card-title"><?php echo $record_user->jumlah_user; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-4 mt-3 mb-3">
                    <div class="card full-height">
                        <div class="card-body">
                            <div class="card-title">Tabel Perangkingan</div>
                            <div class="table-responsive">
                                <table id="rank" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nama Mahasiswa</th>
                                            <th>Rank</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $rank = $rank;
                                    foreach ($rank as $key => $val) : ?>
                                        <tr>
                                            <td><?= $alt[$key] ?></td>
                                            <td><?= $rank[$key] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-12">
                    <div class="card full-height bg-primary-gradient">
                        <div class="card-body">
                            <div class="card-title text-white" align="center">TENTANG ELECTRE</div>
                            <p class="text-white" align="center">Electre merupakan salah satu metode dari sistem pendukung keputusan yang berbasis multi kriteria, Elektre dapat digunakan dalam melakukan penilaian dan perankingan berdasarkan kelebihan dan kekurangan melalui perbandingan berpasangan pada kriteria yang sama.</p>
                            <H4 class="text-white" align=" center">LANGKAH-LANGKAH ELECTRE</H4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card full-height">
                                        <div class="card-body">
                                            <h5 class="text-primary" align="center">NORMALISASI</h5>
                                            <p class="mt-3" align="center">Normalisasi matrik keputusan. Dalam prosedur ini, setiap atribut diubah menjadi nilai yang comparable. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card full-height">
                                        <div class="card-body">
                                            <h5 class="text-primary" align="center">PEMBOBOTAN</h5>
                                            <p class="mt-3" align="center">Pembobotan pada matrik yang telah dinormalisasi
                                                Setelah dinormalisasi, setiap kolom dari matriks R dikalikan dengan bobot-bobot ( wi ) yang ditentukan oleh pembuat keputusan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card full-height">
                                        <div class="card-body">
                                            <h5 class="text-primary" align="center">Himpunan Corcondance & Discordance</h5>
                                            <p class="mt-3" align="center">Menetukan concordance dan discordance
                                                Untuk setiap pasang dari alternative</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card full-height">
                                        <div class="card-body">
                                            <h5 class="text-primary" align="center">Matriks Corcondance & Discordance</h5>
                                            <p class="mt-3" align="center">Dengan menjumlahkan bobot bobot yang termasuk di setiap himpunan terpilih</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card full-height">
                                        <div class="card-body">
                                            <h5 class="text-primary" align="center">Matriks Dominan</h5>
                                            <p class="mt-3" align="center">Matrik dominan Concordance dan Discordance dapat dibangun dengan bantuan nilai threshold</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card full-height">
                                        <div class="card-body">
                                            <h5 class="text-primary" align="center">Agregat</h5>
                                            <p class="mt-3" align="center">Hasil Perkalian dari matriks Concordance dan Discordance</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>

    </div>


    <!-- /.container-fluid -->

    <!-- End of Main Content