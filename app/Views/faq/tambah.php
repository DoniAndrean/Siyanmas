<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<!-- Breadcrumb -->
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li><a href="<?= base_url('/laporankerja') ?>">FAQ >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START WIDGETS -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card-body">
            <h4 class="text-center"><?= $judul ?></h4>
            <form class="form-horizontal" method="POST" action="<?= base_url('/' . $url) ?>" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    Judul
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="judul" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    Keterangan
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="keterangan" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    Detail 1
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="detail" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    Detail 2
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="detail1" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    Detail 3
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="detail2" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    Detail 4
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="detail3" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    Detail 5
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="detail4" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Gambar 1
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="gambar" class="form-control" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Gambar 2
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="gambar1" class="form-control" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Gambar 3
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="gambar2" class="form-control" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Gambar 4
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="gambar3" class="form-control" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Gambar 5
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="gambar4" class="form-control" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="card-body">
                                    <input type="submit" value="SIMPAN" class="btn btn-inverse-info pull-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>