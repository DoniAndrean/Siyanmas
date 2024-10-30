<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li><a href="<?= base_url('/informasikelolaskt') ?>"><?= $judul ?> >&nbsp</a></li>
    <li class="active"><b>Detail</b></li>
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
                        <a href="<?= base_url('/informasikelolaskt/cetak/' . $id_ormas) ?>" class="btn btn-primary pull-right">Cetak</a>
                        <a style="margin;" href="<?= base_url('/informasikelolaskt/history1/' . $id_ormas) ?>" class="btn btn-danger">Riwayat</a>
                        <a style="margin;" href="<?= base_url('/laporankerja/ormas/' . $id_ormas) ?>" class="btn btn-warning">Laporan Kegiatan</a>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Organisasi</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div style="text-align: center;" class="input-group">
                                    <?= $modelOrmas[0]['nama_organisasi'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Bidang</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['nama_bidang'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nomor Akte Pendirian</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['no_akte_pendirian'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nomor SK. Kepengurusan</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['no_sk_kepengurusan'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">NO. SKT / NO. SKHU</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group" style="text-align:left ;">
                                    <?= $modelOrmas[0]['no_induk'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">NO. Keberadaan</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['no_keberadaan'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Ketua</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['nama_ketua'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Sekretaris</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['nama_sekretaris'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Bendahara</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['nama_bendahara'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Berakhirnya</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['berakhirnya'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Alamat</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group" style="text-align:left ;">
                                    <?= $modelOrmas[0]['alamat'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Tahun</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['tahun'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Email</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['email'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nomor Hp</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['nomor_hp'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">SK. SKT</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['skt'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['skt'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['skt']) ?>">Download</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">SK. Keberadaan</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['sk_keberadaan'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['sk_keberadaan'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['sk_keberadaan']) ?>">Download</a>
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
                            <label class="col-md-3 col-xs-12 control-label">Akte Pendirian</label>
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
                            <label class="col-md-3 col-xs-12 control-label">Program Kerja</label>
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
                            <label class="col-md-3 col-xs-12 control-label">Kartu Ormas</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <?= $modelOrmas[0]['kartu_ormas'] ?>
                                </div>
                            </div>
                            <?php
                            if ($modelOrmas[0]['kartu_ormas'] == '') {
                                echo '<div class="col-md-3 col-xs-12"<br><b>File Tidak Ada</b></div>';
                            } else {
                            ?>
                                <div class="col-md-3 col-xs-12">
                                    <a class="btn btn-primary" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['kartu_ormas']) ?>">Download</a>
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
                    <div class="panel-footer">
                        <div class="card-body">
                            <a href="<?= base_url('/informasikelolaskt') ?>" class="btn btn-inverse-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>