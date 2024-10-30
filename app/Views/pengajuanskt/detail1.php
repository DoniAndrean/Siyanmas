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
                            <label class="col-md-3 col-xs-12 control-label">Nama Bidang</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div style="text-align: center;" class="input-group">
                                    <?= $modelOrmas[0]['nama_bidang'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nomor Akte Pendirian</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div style="text-align: center;" class="input-group">
                                    <?= $modelOrmas[0]['no_akte_pendirian'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nomor SK. Kepengurusan</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div style="text-align: center;" class="input-group">
                                    <?= $modelOrmas[0]['no_sk_kepengurusan'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Ketua</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div style="text-align: center;" class="input-group">
                                    <?= $modelOrmas[0]['nama_ketua'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama sekretaris</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div style="text-align: center;" class="input-group">
                                    <?= $modelOrmas[0]['nama_sekretaris'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Bendahara</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div style="text-align: center;" class="input-group">
                                    <?= $modelOrmas[0]['nama_bendahara'] ?>
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
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['surat_permohonan_skt']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">SK. Pengurus</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['sk_pengurus'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['sk_pengurus'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['sk_pengurus']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Pas Foto Ketua 4x6</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['foto_ketua'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['foto_ketua'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['foto_ketua']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Pas Foto Sekretaris 4x6</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['foto_sekretaris'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['foto_sekretaris'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['foto_sekretaris']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Pas Foto Bendahara 4x6</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['foto_bendahara'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['foto_bendahara'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['foto_bendahara']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">KTP Ketua</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['ktp_ketua'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['ktp_ketua'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['ktp_ketua']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">KTP Sekretaris</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['ktp_sekretaris'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['ktp_sekretaris'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['ktp_sekretaris']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">KTP Bendahara</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['ktp_bendahara'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['ktp_bendahara'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['ktp_bendahara']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">AD/ART</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['ad_art'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['ad_art'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['ad_art']) ?>">Download</a>
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
                                    <?= $modelOrmas[0]['akte_pendirian'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['akte_pendirian'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['akte_pendirian']) ?>">Download</a>
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
                                    <?= $modelOrmas[0]['program_kerja'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['program_kerja'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['program_kerja']) ?>">Download</a>
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
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['susunan_pengurus']) ?>">Download</a>
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
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['domisili']) ?>">Download</a>
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
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['surat_pernyataan_kesanggupan']) ?>">Download</a>
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
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['formulir_isian']) ?>">Download</a>
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
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['surat_pernyataan']) ?>">Download</a>
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
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['surat_rekomendasi']) ?>">Download</a>
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
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['surat_pernyataan_kesediaan']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="card-body">
                            <a href="<?= base_url('/pengajuanskt/index1') ?>" class="btn btn-inverse-primary">Kembali</a>
                            <a href="<?= base_url('/pengajuanskt/verify1/' . $modelOrmas[0]['id_ormas'] . '/2') ?>" class="btn btn-inverse-warning pull-right">Verifikasi</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>