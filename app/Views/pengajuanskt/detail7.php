<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li><a href="<?= base_url('/pengajuanskt/skt') ?>">Pengajuan SKT >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START WIDGETS -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card-body">
            <h4 class="text-center"><?= $judul ?></h4>
            <form class="form-sample">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Organisasi</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div style="text-align: center;" class="input-group">
                                    <?= $modelOrmas[0]['nama_organisasi'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Alamat</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['alamat'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Tanggal</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['tanggal'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Email</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['email'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nomor HP</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group" style="text-align:left ;">
                                    <?= $modelOrmas[0]['nomor_hp'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Surat Permohonan SKT</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['surat_permohonan_skt'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['surat_permohonan_skt'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('vendors/upload/' . $modelOrmas[0]['surat_permohonan_skt']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Salinan Akte Pendirian</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['salinan_akte_pendirian'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['salinan_akte_pendirian'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/public/upload/' . $modelOrmas[0]['salinan_akte_pendirian']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Program Kerja Organisasi</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['program_kerja_organisasi'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['program_kerja_organisasi'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/public/upload/' . $modelOrmas[0]['program_kerja_organisasi']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Susunan Pengurus</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['susunan_pengurus'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['susunan_pengurus'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/public/upload/' . $modelOrmas[0]['susunan_pengurus']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Surat Keterangan Domisili</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['domisili'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['domisili'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/public/upload/' . $modelOrmas[0]['domisili']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Surat Pernyataan Kesanggupan Melaporkan Kegiatan</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['surat_pernyataan_kesanggupan'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['surat_pernyataan_kesanggupan'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/public/upload/' . $modelOrmas[0]['surat_pernyataan_kesanggupan']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Formulir Isian</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['formulir_isian'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['formulir_isian'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/public/upload/' . $modelOrmas[0]['formulir_isian']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Surat Pernyataan Yang di Tandatangani Oleh Ketua dan Sekretari</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['surat_pernyataan'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['surat_pernyataan'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/public/upload/' . $modelOrmas[0]['surat_pernyataan']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Surat Rekomendasi</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['surat_rekomendasi'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['surat_rekomendasi'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/public/upload/' . $modelOrmas[0]['surat_rekomendasi']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Surat Pernyataan Kesediaan atau Persetujuan dari Pejabat Negara</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['surat_pernyataan_kesediaan'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['surat_pernyataan_kesediaan'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/public/upload/' . $modelOrmas[0]['surat_pernyataan_kesediaan']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="card-body">
                            <a href="<?= base_url('/pengajuanskt/index7') ?>" class="btn btn-inverse-primary">Kembali</a>
                            <a href="<?= base_url('/pengajuanskt/verify7/'.$modelOrmas[0]['id_ormas'].'/8' ) ?>" class="btn btn-inverse-warning">Verifikasi</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>