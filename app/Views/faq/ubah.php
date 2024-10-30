<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li><a href="<?= base_url('/dashboard') ?>"><?= $judul ?> >&nbsp</a></li>
    <li class="active"><b>Detail</b></li>
</ul>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START WIDGETS -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card-body">
            <h4 class="text-center"><?= $judul ?></h4>
            <form class="form-sample" method="post" action="<?= base_url('/' . $url) ?>" enctype="multipart/form-data">
                <div class="card">
                    <input type="hidden" name="id_ormas" value="<?= $id_faq ?>" class="form-control" />
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Judul
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="judul" value="<?= $modelFaq[0]['judul'] ?>" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Keterangan
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="keterangan" value="<?= $modelFaq[0]['keterangan'] ?>" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Detail 1
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="detail" value="<?= $modelFaq[0]['detail'] ?>" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Gambar 1
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="gambar" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelFaq[0]['gambar'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelFaq[0]['gambar'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/public/upload/' . $modelFaq[0]['gambar']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Detail 2</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="detail1" value="<?= $modelFaq[0]['detail1'] ?>" class="form-control" autofocus />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Gambar 2
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="gambar1" class="form-control" autofocus />

                                <?php
                                if ($modelFaq[0]['gambar1'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelFaq[0]['gambar1'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/public/upload/' . $modelFaq[0]['gambar1']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Detail 3</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="detail2" value="<?= $modelFaq[0]['detail2'] ?>" class="form-control" autofocus />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Gambar 3
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="gambar2" class="form-control" autofocus />

                                <?php
                                if ($modelFaq[0]['gambar2'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelFaq[0]['gambar2'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/public/upload/' . $modelFaq[0]['gambar2']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Detail 4</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="detail3" value="<?= $modelFaq[0]['detail3'] ?>" class="form-control" autofocus />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Gambar 4
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="gambar3" class="form-control" autofocus />

                                <?php
                                if ($modelFaq[0]['gambar3'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelFaq[0]['gambar3'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/public/upload/' . $modelFaq[0]['gambar3']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Detail 5</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="detail4" value="<?= $modelFaq[0]['detail4'] ?>" class="form-control" autofocus />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Gambar 5
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="gambar4" class="form-control" autofocus />

                                <?php
                                if ($modelFaq[0]['gambar4'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelFaq[0]['gambar4'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/public/upload/' . $modelFaq[0]['gambar4']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="card-body">
                                <a href="<?= base_url('/informasikelolaskt') ?>" class="btn btn-inverse-primary">Kembali</a>
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