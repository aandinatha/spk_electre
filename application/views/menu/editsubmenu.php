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
                    <div class="card ">
                        <div class="card-header">


                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Id Menu</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control form-control-round" name="id" readonly="readonly" value="<?= $m->id; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Submenu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-round" placeholder="" name="title" value="<?= $m->title; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pilih Menu</label>
                                    <div class="col-sm-10">
                                        <select name="menu_id" id="menu_id" class="form-control" value="<?= $m->menu_id; ?>">
                                            <option value="<?= $m->menu_id; ?>"><?= $m->menu_id; ?></option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Url SubMenu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-round" placeholder="Masukan menu" name="url" value="<?= $m->url; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Icon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-round" placeholder="Masukan menu" name="icon" value="<?= $m->icon; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Active</label>
                                    <div class="col-sm-10">
                                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                        <label class="form-check-label" for="is_active">
                                            Apakah Ini Active ?
                                        </label>
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary btn-round" name="editsubmenu" value="editsubmenu">Simpan
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