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
                    <input type="hidden" name="id_ormas" value="<?= $id_ormas ?>" class="form-control" />
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Organisasi</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_organisasi" value="<?= $modelOrmas[0]['nama_organisasi'] ?>" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Bidang</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_bidang" value="<?= $modelOrmas[0]['nama_bidang'] ?>" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nomor Akte Pendirian</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="no_akte_pendirian" value="<?= $modelOrmas[0]['no_akte_pendirian'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nomor SK. Kepengurusan</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="no_sk_kepengurusan" value="<?= $modelOrmas[0]['no_sk_kepengurusan'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">NO. SKT / NO. SKHU</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="no_induk" value="<?= $modelOrmas[0]['no_induk'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">NO. Keberadaan</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="no_keberadaan" value="<?= $modelOrmas[0]['no_keberadaan'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Ketua</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_ketua" value="<?= $modelOrmas[0]['nama_ketua'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Sekretaris</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_sekretaris" value="<?= $modelOrmas[0]['nama_sekretaris'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Bendahara</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_bendahara" value="<?= $modelOrmas[0]['nama_bendahara'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Berakhirnya</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="berakhirnya" value="<?= $modelOrmas[0]['berakhirnya'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Alamat</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="alamat" value="<?= $modelOrmas[0]['alamat'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Tahun</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="tahun" value="<?= $modelOrmas[0]['tahun'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Email</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="email" value="<?= $modelOrmas[0]['email'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nomor Hp</label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nomor_hp" value="<?= $modelOrmas[0]['nomor_hp'] ?>" class="form-control" autofocus required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">SK. SKT
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="skt" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['skt'] == '') {
                                    echo '<b>File Tidak Ada</b>';
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
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="sk_keberadaan" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['sk_keberadaan'] == '') {
                                    echo '<b>File Tidak Ada</b>';
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
                            <label class="col-md-3 col-xs-12 control-label">SK. Pengurus
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="sk_pengurus" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['sk_pengurus'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['sk_pengurus'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['sk_pengurus']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Surat Keterangan Domisili
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="domisili" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['domisili'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['domisili'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['domisili']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">AD / ART
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="ad_art" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['ad_art'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['ad_art'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['ad_art']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Pas Foto Ketua 4x6
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="foto_ketua" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['foto_ketua'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['foto_ketua'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['foto_ketua']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Pas Foto Ketua Sekretaris 4x6
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="foto_sekretaris" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['foto_sekretaris'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['foto_sekretaris'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['foto_sekretaris']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Pas Foto Bendahara 4x6
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="foto_bendahara" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['foto_bendahara'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['foto_bendahara'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['foto_bendahara']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Akte Pendirian
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="akte_pendirian" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['akte_pendirian'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['akte_pendirian'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['akte_pendirian']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Progrram Kerja
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="program_kerja" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['program_kerja'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['program_kerja'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['program_kerja']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Kartu Ormas
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="kartu_ormas" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['kartu_ormas'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['kartu_ormas'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['kartu_ormas']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">KTP Ketua
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="ktp_ketua" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['ktp_ketua'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['ktp_ketua'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['ktp_ketua']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">KTP Sekretaris
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="ktp_sekretaris" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['ktp_sekretaris'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['ktp_sekretaris'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['ktp_sekretaris']) ?>">Download</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">KTP Bendahara
                                <span style="color:red;">*</span>
                                <sub style="color:red;">(Wajib di Isi)</sub>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">

                                <input type="file" name="ktp_bendahara" class="form-control" autofocus oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />

                                <?php
                                if ($modelOrmas[0]['ktp_bendahara'] == '') {
                                    echo '<b>File Tidak Ada</b>';
                                } else {
                                ?>
                                    <p class="pull-right"><?= $modelOrmas[0]['ktp_bendahara'] ?></p>

                                    <a style="margin-top: 2%;" class="btn btn-primary pull-left" target="_blank" href="<?= base_url('/upload/' . $modelOrmas[0]['ktp_bendahara']) ?>">Download</a>
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