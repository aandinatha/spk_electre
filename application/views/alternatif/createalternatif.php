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
            <div class="row mt-2">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="card-title">Tambah Penilaian</div>
                            <div class="card-category">Masukan data mahasiswa dan Penilaiannya</div>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-round" name="id_alternatif" readonly="readonly" value="<?php echo $gen; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_alternatif" class="col-sm-3 col-form-label">Pilih Mahasiswa Magang</label>
                                    <div class="col-sm-7">
                                        <select name="nama_alternatif" id="nama_alternatif" class="form-control form-control-round" required>
                                            <option value="">--Pilih Mahasiswa--</option>
                                            <?php foreach ($mahasiswa as $ma) : ?>
                                                <option value="<?= $ma['nama'] ?>"><?= $ma['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                </div>
                                <!-- <div class=" form-group row">
                                                    <label class="col-sm-3 col-form-label">Email</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control form-control-round" placeholder="Masukan Email" name="email">
                                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Kampus</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control form-control-round" placeholder="Masukan Nama Kampus" name="kampus">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jurusan</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control form-control-round" placeholder="Masukan Jurusan" name="jurusan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-7">
                                            <select class="form-control form-control" placeholder="Masukan Nilai" name="jengkel">
                                                <option value="">Masukan Jenkel</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor handphone</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control form-control-round" placeholder="Masukan Nomor Handphone" name="no_hp">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control form-control-round" placeholder="Masukan Alamat" name="alamat">
                                        </div>
                                    </div> -->


                                <h4 class="center mb-4 mt-4" align='center'>Masukan Penilaian Mahasiswa Magang</h4>

                                <div class="form-group row">
                                    <?php
                                    foreach ($form as $row) : ?>
                                        <label class="col-sm-3 col-form-label mb-2"><?= $row->nama_kriteria ?></label>
                                        <div class="col-sm-7">
                                            <select class="form-control form-control" placeholder="Masukan Nilai" name="ID-<?= $row->id_kriteria ?>">
                                                <option value="">Masukan Nilai</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                                <option value="2">Kurang Baik </option>
                                                <option value="3">Cukup baik</option>
                                                <option value="4">Baik</option>
                                                <option value="5">Sangat Baik</option>

                                            </select>
                                        </div>
                                    <?php endforeach ?>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary " name="createalternatif" value="createalternatif">Simpan
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