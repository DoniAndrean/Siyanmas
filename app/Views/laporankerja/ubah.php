<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<!-- Breadcrumb -->
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li><a href="<?= base_url('/laporankerja') ?>">Laporan Kerja >&nbsp</a></li>
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
                        <input type="hidden" name="id_laporan_kerja" value="<?= $id_laporan_kerja ?>" class="form-control" />
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Foto 1
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="foto" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Foto 2
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="foto1" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Foto 3
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="foto2" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Foto 4
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="foto3" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Foto 5
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="foto4" class="form-control" autofocus oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Foto 6
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="foto5" class="form-control" autofocus oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    Judul
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="judul" value="<?= $modelLaporanKerja[0]['judul'] ?>" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
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
                                        <textarea name="keterangan" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="this.setCustomValidity('')" rows="5"></textarea>
                                        <span class="input-group-text bg-info text-white">
                                            <span class="fa fa-pencil"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="card-body">
                                    <a class="btn btn-inverse-primary" href="<?= base_url() ?>/laporankerja/" class="btn btn-default btn-rounded btn-condensed btn-sm">Kembali</a>
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