<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li><a href="<?= base_url('/akses') ?>">Akses >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START WIDGETS -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card-body">
            <h4 class="text-center"><?= $judul ?></h4>
            <form class="form-sample" method="post" action="<?= base_url('/' . $url) ?>" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">ID User</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <select class="form-control" name="id_user">
                                        <option value="">ID User . . .</option>
                                        <?php
                                        foreach ($model as $key => $value) {
                                            print_r($value['nama_organisasi'])
                                        ?>
                                            <option value="<?= $value['id_user'] ?>"><?= $value['nama_organisasi'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Fitur</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <select class="form-control" name="fitur">
                                        <option value="">Fitur . . .</option>
                                        <option value="Pengajuan SKT">Pengajuan SKT</option>
                                        <option value="Pendaftaran Ormas">Pendaftaran</option>
                                    </select>
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
                                    <select class="form-control" name="status">
                                        <option value="">Status . . .</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tiidak Aktif">Tiidak Aktif</option>
                                    </select>
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