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
            <div class="row mt-2">
                <div class="col-12">

                    <div class="card shadow mb-4" id="tb1">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Membentuk Perbandingan Berpasangan (X)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable " class="display table table-striped table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Kecamatan</th>
                                            <?php foreach ($electre->kriteria as $key => $val) : ?>
                                                <th><?= $krt[$key]['nama_kriteria'] ?></th>
                                            <?php endforeach ?>
                                        </tr>
                                    </thead>
                                    <?php foreach ($olah as $key => $val) : ?>
                                        <tr>
                                            <td><?= $alt[$key] ?></td>
                                            <?php foreach ($val as $k => $v) : ?>
                                                <td><?= $v ?></td>
                                            <?php endforeach ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Perbandingan Berpasangan Ternormalisasi (R) -->

                    <div class="card shadow mb-4" id="tb2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Perbandingan Berpasangan Ternormalisasi (R)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="display table table-striped table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Kecamatan</th>
                                            <?php foreach ($electre->kriteria as $key => $val) : ?>
                                                <th><?= $krt[$key]['nama_kriteria'] ?></th>
                                            <?php endforeach ?>
                                        </tr>
                                    </thead>
                                    <?php foreach ($electre->normal as $key => $val) : ?>
                                        <tr>
                                            <td><?= $alt[$key] ?></td>
                                            <?php foreach ($val as $k => $v) : ?>
                                                <td><?= round($v, 4) ?></td>
                                            <?php endforeach ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Menentukan Bobot tiap-tiap Kriteria (W) -->

                    <div class="card shadow mb-4" id="tb3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Menentukan Bobot tiap-tiap Kriteria (W)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive-lg">
                                <table class="display table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kriteria</th>
                                            <?php foreach ($electre->kriteria as $key => $val) : ?>
                                                <th><?= $krt[$key]['nama_kriteria'] ?></th>
                                            <?php endforeach ?>

                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>weight</td>
                                        <?php foreach ($electre->kriteria as $key => $val) : ?>
                                            <td><?= $krt[$key]['bobot'] ?></td>
                                        <?php endforeach ?>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Membentuk Matrik Preferensi (V) -->

                    <div class="card shadow mb-4" id="tb4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Membentuk Matrik Preferensi (V)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <?php foreach ($electre->kriteria as $key => $val) : ?>
                                                <th><?= $krt[$key]['nama_kriteria'] ?></th>
                                            <?php endforeach ?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($electre->terbobot as $key => $val) : ?>
                                            <tr>
                                                <td><?= $alt[$key] ?></td>
                                                <?php foreach ($val as $k => $v) : ?>
                                                    <td><?= round($v, 4) ?></td>
                                                <?php endforeach ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Menentukan Concordance Index (Ckl) -->

                    <div class="card shadow mb-4" id="tb5">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Menentukan Concordance Index (Ckl)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <?php foreach ($electre->concordance as $key => $val) : ?>
                                                <th><?= $alt[$key] ?></th>
                                            <?php endforeach ?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($electre->concordance as $key => $val) : ?>
                                            <tr>
                                                <td><?= $alt[$key] ?></td>
                                                <?php foreach ($val as $k => $v) : ?>
                                                    <td><?= $key == $k ? '-' : implode(', ', $v) ?></td>
                                                <?php endforeach ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Menentukan Discordance Index (Dkl) -->

                    <div class="card shadow mb-4" id="tb6">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Menentukan Discordance Index (Dkl)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <?php foreach ($electre->discordance as $key => $val) : ?>
                                                <th><?= $alt[$key] ?></th>
                                            <?php endforeach ?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($electre->discordance as $key => $val) : ?>
                                            <tr>
                                                <td><?= $alt[$key] ?></td>
                                                <?php foreach ($val as $k => $v) : ?>
                                                    <td><?= $key == $k ? '-' : implode(', ', $v) ?></td>
                                                <?php endforeach ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Membentuk Matriks Concordance (C) -->

                    <div class="card shadow mb-4" id="tb7">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Membentuk Matriks Concordance (C)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <?php foreach ($electre->m_concordance as $key => $val) : ?>
                                                <th><?= $alt[$key] ?></th>
                                            <?php endforeach ?>
                                        </tr>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($electre->m_concordance as $key => $val) : ?>
                                            <tr>
                                                <td><?= $alt[$key] ?></td>
                                                <?php foreach ($val as $k => $v) : ?>
                                                    <td><?= $key == $k ? '-' : $v ?></td>
                                                <?php endforeach ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Membentuk Matriks Discordance (D) -->

                    <div class="card shadow mb-4" id="tb8">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Membentuk Matriks Discordance (D)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <?php foreach ($electre->m_discordance as $key => $val) : ?>
                                                <th><?= $alt[$key] ?></th>
                                            <?php endforeach ?>
                                        </tr>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($electre->m_discordance as $key => $val) : ?>
                                            <tr>
                                                <td><?= $alt[$key] ?></td>
                                                <?php foreach ($val as $k => $v) : ?>
                                                    <td><?= $key == $k ? '-' : round($v, 4) ?></td>
                                                <?php endforeach ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Membentuk Matrik Concordance Dominan(F) -->

                    <div class="card shadow mb-4" id="tb9">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Membentuk Matrik Concordance Dominan(F)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <?php foreach ($electre->md_concordance as $key => $val) : ?>
                                                <th><?= $alt[$key] ?></th>
                                            <?php endforeach ?>
                                        </tr>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($electre->md_concordance as $key => $val) : ?>
                                            <tr>
                                                <td><?= $alt[$key] ?></td>
                                                <?php foreach ($val as $k => $v) : ?>
                                                    <td><?= $key == $k ? '-' : $v ?></td>
                                                <?php endforeach ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Membentuk Matrik Discordance Dominan(G) -->

                    <div class="card shadow mb-4" id="tb10">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Membentuk Matrik Discordance Dominan(G)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <?php foreach ($electre->md_discordance as $key => $val) : ?>
                                                <th><?= $alt[$key] ?></th>
                                            <?php endforeach ?>
                                        </tr>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($electre->md_discordance as $key => $val) : ?>
                                            <tr>
                                                <td><?= $alt[$key] ?></td>
                                                <?php foreach ($val as $k => $v) : ?>
                                                    <td><?= $key == $k ? '-' : round($v, 4) ?></td>
                                                <?php endforeach ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Membentuk Matrik Agregasi Dominan(E) -->

                    <div class="card" id="tb10">
                        <div class="card-header">
                            <br>
                            <h1>Agregat Matriks E</h1>
                            <br>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseExample">
                                Keterangan
                            </button>
                            <div class="collapse" id="collapse9">
                                <div class="card card-body">
                                    <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/9.png" alt="Card image" overflow="hidden" width="20%" height="auto">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_7" class="display table table-striped table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Kecamatan</th>
                                            <?php foreach ($electre->agregate as $key => $val) : ?>
                                                <th><?= $alt[$key] ?></th>
                                            <?php endforeach ?>
                                            <th>Total</th>
                                            <th>Rank</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $rank = $rank;
                                    foreach ($rank as $key => $val) : ?>
                                        <tr>
                                            <td><?= $alt[$key] ?></td>
                                            <?php foreach ($electre->agregate[$key] as $k => $v) : ?>
                                                <td><?= $key == $k ? '-' : round($v, 4) ?></td>
                                            <?php endforeach ?>
                                            <td><?= $electre->total[$key] ?></td>
                                            <td><?= $rank[$key] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->