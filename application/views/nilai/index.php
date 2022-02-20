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
            <?= $this->session->flashdata('message'); ?>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card full-height">

                        <div class="card-header py-3">
                            <a class="btn btn-primary" href="<?php echo base_url('alternatif/createalternatif'); ?>">
                                Penilaian Mahasiswa Magang</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="base_4" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Kode Alternatif</th>
                                            <th>Nama Alternatif</th>
                                            <?php
                                            if ($count > 0) :
                                                for ($a = 1; $a <= $count; $a++) {
                                                    echo "<th>C0$a</th>";
                                                }
                                            endif;
                                            ?>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($alternatif as $item) : ?>
                                            <tr>
                                                <td><?php echo $item->id_alternatif; ?></td>
                                                <td><?php echo $item->nama_alternatif; ?></td>
                                                <?php foreach ($nilai[$item->id_alternatif] as $k => $v) : ?>
                                                    <td><?= $v; ?></td>
                                                <?php endforeach; ?>
                                                <td>
                                                    <a class="btn btn-info" href="<?php echo base_url('nilai/updateNilai/' . $item->id_alternatif); ?>">Ubah</a>
                                                    <a href="<?php echo base_url('alternatif/deleteAlternatif/' . $item->id_alternatif); ?>" class="btn btn-danger" data-toggle="modal" data-target="#HapusModal">Hapus</a>
                                                </td>

                                            </tr>
                                        <?php $i++;
                                        endforeach; ?>
                                    </tbody>

                                </table>
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
                                <?php
                                foreach ($kriteria as $row) : ?>
                                    <td><?php echo $row->id_kriteria; ?></td>
                                    <td><?php echo $row->nama_kriteria; ?></td>
                                    <tr></tr>
                                    <tr>

                                        <a href="#v-<?php echo $row->id_kriteria ?>" role="tab" aria-controls="v-pills-home-nobd" aria-selected="true"></a>

                                    </tr>
                                <?php endforeach ?>
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
</div>
<div class=" modal fade" id="HapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Menghapus File</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah Anda Yakin Menghapus File</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url('alternatif/deleteAlternatif/' . $item->id_alternatif); ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>