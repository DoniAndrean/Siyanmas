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
                                    Nama Mahasiswa
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="nama_mahasiswa" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    Nomor Hp
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="nomor_hp" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    NPM
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="npm" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
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