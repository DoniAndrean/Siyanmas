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
            <h4 class="text-center"><?= $judul ?></h4>
            <form class="form-horizontal" method="POST" action="<?= base_url('/' . $url) ?>" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    Nama Organisasi
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
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
                                    Nomor Akte Pendirian
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="no_akte_pendirian" class="form-control" autofocus placeholder="Nomor, Hari dan Tanggal" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
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
                                        <input type="text" name="no_sk_kepengurusan" class="form-control" autofocus placeholder="Nomor, Hari dan Tanggal" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    NO. SKT
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="no_induk" class="form-control" autofocus placeholder="Nomor, Hari dan Tanggal" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">
                                    NO. Pencatatan Keberadaan
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="no_keberadaan" class="form-control" autofocus placeholder="Nomor, Hari dan Tanggal" required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Nama Ketua
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="nama_ketua" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Nama Sekretaris
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="nama_sekretaris" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Nama Bendahara
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="nama_bendahara" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Berakhirnya
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="berakhirnya" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Alamat
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="alamat" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Tahun
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="tahun" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Email
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="text" name="email" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                        <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-xs-12 control-label">Nomor Hp
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
                                <label class="col-md-3 col-xs-12 control-label">SK. SKT
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
                                <label class="col-md-3 col-xs-12 control-label">SK. Keberadaan
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="sk_keberadaan" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
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
                                <label class="col-md-3 col-xs-12 control-label">AD/ART
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
                                <label class="col-md-3 col-xs-12 control-label">Program Kerja
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
                                <label class="col-md-3 col-xs-12 control-label">Kartu Ormas
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-md-8 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="file" name="kartu_ormas" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
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
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>