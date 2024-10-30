<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li><a href="<?= base_url('/pengajuanskt/index') ?>">Informasi Pengajuan SKT>&nbsp</a></li>
    <li class="active"><b> Kirim surat</b></li>
</ul>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START WIDGETS -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card-body">
            <h4 class="text-center"><?= $judul ?></h4>
            <form class="form-sample" method="POST" action="<?= base_url('/' . $url) ?>" enctype="multipart/form-data">
                <div class="card">
                    <input type="hidden" name="id_ormas" value="<?= $id_ormas ?>" class="form-control" />
                    <input type="hidden" name="nama_organisasi" value="<?= $modelOrmas[0]['nama_organisasi'] ?>" />
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Organisasi
                                <span style="color:red;"></span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <p class="form-control" readonly style="border:none; background:transparent;"><?= $modelOrmas[0]['nama_organisasi'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Nomor Keberadaan
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="no_keberadaan" value="<?= $modelOrmas[0]['no_keberadaan'] ?>" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                NO. SKT / NO. SKHU
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="no_induk" value="<?= $modelOrmas[0]['no_induk'] ?>" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Tahun
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="tahun" value="<?= $modelOrmas[0]['tahun'] ?>" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Berakhirnya
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="berakhirnya" value="<?= $modelOrmas[0]['berakhirnya'] ?>" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Surat Keterangan Terdaftar
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="skt" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['skt'] == '') {
                                    echo '';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['skt'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['skt']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">SK. Keberadaan
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="sk_keberadaan" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['sk_keberadaan'] == '') {
                                    echo '';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['sk_keberadaan'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['sk_keberadaan']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Kartu Ormas
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="kartu_ormas" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['kartu_ormas'] == '') {
                                    echo '';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['kartu_ormas'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['kartu_ormas']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="card-body">
                                <a href="<?= base_url('/pengajuanskt/index6') ?>" class="btn btn-inverse-primary">Kembali</a>
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