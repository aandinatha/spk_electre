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
                            <a class="btn btn-primary" href="<?php echo base_url('kriteria/createkriteria'); ?>">Tambah
                                kriteria</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class=" table-bordered display table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode kriteria</th>
                                            <th>Nama kriteria</th>
                                            <th>Bobot</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($kriteria as $item) : ?>
                                            <tr id="<?php echo $item->id_kriteria; ?>">
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->id_kriteria; ?></td>
                                                <td><?php echo $item->nama_kriteria; ?></td>
                                                <td><?php echo $item->bobot; ?></td>
                                                <td><a class="btn btn btn-info" href="<?php echo base_url('kriteria/updateKriteria/' . $item->id_kriteria); ?>">Ubah</a>
                                                    <a href="<?php echo base_url('kriteria/deleteKriteria/' . $item->id_kriteria); ?>" class="btn btn-danger" data-toggle="modal" data-target="#HapusModal">Hapus</a>

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
                    <a class="btn btn-primary" href="<?php echo base_url('kriteria/deleteKriteria/' . $item->id_kriteria); ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>