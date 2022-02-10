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
            <?= $this->session->flashdata('message'); ?>
            <div class="row mt-2">


                <div class="col-12">


                    <div class="card full-height">
                        <div class="card-header py-3">
                            <a class="btn btn-primary" href="<?php echo base_url('Mahasiswa/add'); ?>">Tambah
                                Mahasiswa Magang</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="display table table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nim</th>
                                            <th>Jurusan</th>
                                            <!-- <th>Kampus</th>
                                            <th>Divisi</th>
                                            <th>Juduk</th>
                                            <th>No</th>
                                            <th>Juduk</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($mahasiswa as $k) : ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?= $k['nama']; ?></td>
                                                <td><?= $k['email']; ?></td>
                                                <td><?= $k['nim']; ?></td>
                                                <td><?= $k['jurusan']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('mahasiswa/edit/') . $k['id']; ?>" class="btn btn-info">Ubah</a>
                                                    <a href="<?= base_url('mahasiswa/detail/') . $k['id']; ?>" class="btn btn-info">detail</a>
                                                    <a href="<?= base_url('mahasiswa/delete/') . $k['id']; ?>" class="btn btn-danger" data-toggle="modal" data-target="#HapusModal">Hapus</a>
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
                <a class="btn btn-primary" href="<?= base_url('mahasiswa/delete/') . $k['id']; ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>