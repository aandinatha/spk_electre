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
                        <div class="card-header ">
                            <h3>Membentuk Perbandingan Berpasangan (X)</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="base_1" class="display table table-striped table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th>alternatif</th>
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

                        <div class="card-header">
                            <br>
                            <h3>Perbandingan Berpasangan Ternormalisasi (R)</h3>
                            <br>
                            <button class="btn btn-primary mb-3" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
                                Keterangan
                            </button>
                            <div class="collapse" id="collapse1">
                                <div class="card card-body">
                                    <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/1.png" alt="Card image" overflow="hidden" width="40%" height="auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="base_2" class="display table table-striped table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th>alternatif</th>
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
                            <h3 class="">Menentukan Bobot tiap-tiap Kriteria (W)</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="base_3" width="100%" cellspacing="0">
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

                        <div class="card-header">
                            <br>
                            <h3>Membentuk Matrik Preferensi (V)</h3>
                            <br>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
                                Keterangan
                            </button>
                            <div class="collapse" id="collapse2">
                                <div class="card card-body">
                                    <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/2.png" alt="Card image" overflow="hidden" width="40%" height="auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="base_4" class="display table table-striped table-hover" width="100%">
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

                        <div class="card-header">
                            <br>
                            <h3>Menentukan Concordance Index (Ckl)</h3>
                            <br>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">
                                Keterangan
                            </button>
                            <div class="collapse" id="collapse3">
                                <div class="card card-body">
                                    <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/3.png" alt="Card image" overflow="hidden" width="40%" height="auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_1" class="display table table-striped table-hover" width="100%">
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

                        <div class="card-header">
                            <br>
                            <h3>Menentukan Discordance Index (Dkl)</h3>
                            <br>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseExample">
                                Keterangan
                            </button>
                            <div class="collapse" id="collapse4">
                                <div class="card card-body">
                                    <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/4.png" alt="Card image" overflow="hidden" width="40%" height="auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="table_2" width="100%" cellspacing="0">
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

                        <div class="card-header">
                            <br>
                            <h3>Membentuk Matriks Concordance (C)</h3>
                            <br>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseExample">
                                Keterangan
                            </button>
                            <div class="collapse" id="collapse5">
                                <div class="card card-body">
                                    <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/5.png" alt="Card image" overflow="hidden" width="30%" height="auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="table_3" width="100%" cellspacing="0">
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

                        <div class="card-header">
                            <br>
                            <h3>Membentuk Matriks Discordance (D)</h3>
                            <br>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseExample">
                                Keterangan
                            </button>
                            <div class="collapse" id="collapse6">
                                <div class="card card-body">
                                    <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/6.png" alt="Card image" overflow="hidden" width="30%" height="auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="table_4" width="100%" cellspacing="0">
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

                        <div class="card-header">
                            <br>
                            <h3>Membentuk Matrik Concordance Dominan(F)</h3>
                            <br>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseExample">
                                Keterangan
                            </button>
                            <div class="collapse" id="collapse7">
                                <div class="card card-body">
                                    <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/7.png" alt="Card image" overflow="hidden" width="30%" height="auto">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="table_5" width="100%" cellspacing="0">
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

                    <div class="card shadow mb-4" id="tb19">

                        <div class="card-header">
                            <br>
                            <h3>Membentuk Matrik Discordance Dominan(G)</h3>
                            <br>
                            <button class="btn btn-primary mb-3" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseExample">
                                Keterangan
                            </button>
                            <div class="collapse" id="collapse8">
                                <div class="card card-body">
                                    <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/8.png" alt="Card image" overflow="hidden" width="30%" height="auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_6" class="display table table-striped table-hover" width="100%">
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
                            <h3>Agregat Matriks E</h3>
                            <br>

                            <button class="btn btn-primary mb-3" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseExample">
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