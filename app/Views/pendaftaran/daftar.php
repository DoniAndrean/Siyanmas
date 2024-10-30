<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START WIDGETS -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card-body">
            <?php if (count($modelakses) > 0) : ?>
                <h4 class="text-center"><?= $judul ?></h4>
                <?php foreach ($model as $v) : ?>
                    <a style="width: 31%; text-align: center; margin-top: 20px;" class="btn btn-inverse-primary" href="<?= base_url('/pendaftaran/detailormas/' . $v['id_ormas']) ?>">Riwayat</a>
                    <a style="width : 31%; margin-left: 40px; text-align: center; margin-top: 20px;" class="btn btn-inverse-success" href="<?= base_url('/pendaftaran/ubahormas/' . $v['id_ormas']) ?>">Ubah Data</a>
                    <a style="width : 31%; margin-left: 40px; text-align: center; margin-top: 20px;" class="btn btn-inverse-warning" href="<?= base_url('/proses/index1/' . $v['id_ormas']) ?>">Proses</a>
                <?php endforeach; ?>
            <?php else : ?>
                <?php if (count($model) > 0) : ?>
                    <div class="text-center">
                        <h4><b>File Anda Sudah Terisi</b></h4>
                    </div> <br>
                    <?php foreach ($model as $v) : ?>
                        <?php if ($v['proses'] == 1) : ?>
                            <h5 class="text-center"><b>Data anda telah diisi melalui pengajuan Surat Keterangan Terdaftar.</b></h5>
                        <?php else : ?>
                            <a style="width: 49%; text-align: center; margin-top: 20px;" class="btn btn-inverse-primary" href="<?= base_url('/pendaftaran/detailormas/' . $v['id_ormas']) ?>">Riwayat</a>
                            <a style="width : 49%; margin-left: 10px; text-align: center; margin-top: 20px;" class="btn btn-inverse-warning" href="<?= base_url('/proses/index1/' . $v['id_ormas']) ?>">Proses</a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <h4 class="text-center"><?= $judul ?></h4>
                    <form class="form-horizontal" method="POST" action="<?= base_url('/' . $url) ?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Nama Organisasi
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12">
                                <div class="input-group">
                                    <input type="text" name="nama_organisasi" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Nama Bidang
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_bidang" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                NO. SKT / NO. SKAHU
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="no_induk" class="form-control" autofocus placeholder="Nomor, Hari, dan Tanggal" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Nomor SK. Kepengurusan
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="no_sk_kepengurusan" class="form-control" autofocus placeholder="Nomor, Hari, dan Tanggal" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Nomor Akte Pendirian
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="no_akte_pendirian" class="form-control" autofocus placeholder="Nomor, Hari, dan Tanggal" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Nama Ketua
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_ketua" class="form-control" autofocus placeholder="" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Nama Bendahara
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_bendahara" class="form-control" autofocus placeholder="" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Nama Sekretaris
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_sekretaris" class="form-control" autofocus placeholder="" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Alamat
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="alamat" class="form-control" autofocus placeholder="" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Tanggal
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="date" name="tanggal" class="form-control" autofocus placeholder="" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">
                                Email
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="email" class="form-control" autofocus placeholder="" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
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
                                    <input type="text" name="nomor_hp" class="form-control" autofocus placeholder="" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">SK. SKT / SKAHU
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="skt" class="form-control" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">SK. Pengurus
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="sk_pengurus" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Program Kerja Organisasi
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="program_kerja" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Surat Keterangan Domisili
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="domisili" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Akte Pendirian
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="akte_pendirian" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">AD / ART
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="ad_art" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Pas Foto Ketua 4x6
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="foto_ketua" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Pas Foto Sekretaris 4x6
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="foto_sekretaris" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Pas Foto Bendahara 4x6
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="foto_bendahara" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">KTP Ketua
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="ktp_ketua" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">KTP Sekretaris
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="ktp_sekretaris" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">KTP Bendahara
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-8 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="ktp_bendahara" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="card-body">
                                <input type="submit" value="SIMPAN" class="btn btn-inverse-info pull-right">
                            </div>
                        </div>
                    </form>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>