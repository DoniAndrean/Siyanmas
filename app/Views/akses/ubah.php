<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>"><b>Home</b> >&nbsp</a></li>
    <li><a href="<?= base_url('/akses') ?>"><?= '<b>Akses</b>' ?> >&nbsp</a></li>
    <li><?= $judul ?></li>
</ul>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START WIDGETS -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card-body">
            <h4 class="text-center"><?= $judul ?></h4>
            <form class="form-sample" method="post" action="<?= base_url('/' . $url) ?>" enctype="multipart/form-data">
                <div class="card">
                    <input type="hidden" name="id_akses" value="<?= $id_akses ?>" class="form-control" />
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">ID User</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="id_user" class="form-control" value="<?= $akses['id_user'] ?>" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Fitur</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="fitur" class="form-control" value="<?= $akses['fitur'] ?>" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Tanggal Mulai</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="date" name="tanggal_mulai" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Tanggal Selesai</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="date" name="tanggal_selesai" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Status</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="status" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="card-body">
                                <a href="<?= base_url('/akses') ?>" class="btn btn-inverse-primary">Kembali</a>
                                <input type="submit" value="SIMPAN" class="btn btn-inverse-info pull-right">
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