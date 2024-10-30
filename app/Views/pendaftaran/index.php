<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div style="background: url('../images/faces/employe.png');">
        <div style="background: #0095FF91; height: 350px;border-bottom-left-radius:5%;border-bottom-right-radius:5%;"></div>
    </div>
    <div style="margin-top: -300px; color: white;margin-left: 30px;" class="row">
        <div class="col-sm-12">
            <h3 class="panel-title"><strong><?= $judul ?></strong></h3>
            <h4><?= date('d-M-Y') ?></h4>
            <div class="" style="overflow-x: scroll; width: 100%; display: flex; overflow-y: hidden; white-space: normal;">
                <!-- start -->
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #00FF157E;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>TOTAL ORMAS</strong></h4>
                            <h4><?= count($modelTotalOrmas) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #00FFFFB1;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;">
                            </div><br>
                            <h4><strong>BIDANG AGAMA</strong></h4>
                            <h4><?= count($modelAgama) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #FF0088A1;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG ANTI KORUPSI</strong></h4>
                            <h4><?= count($modelAntiKorupsi) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #FF00D9A4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG ANTI NARKOBA</strong></h4>
                            <h4><?= count($modelAntiNarkoba) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #FF8400A4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG BUDAYA</strong></h4>
                            <h4><?= count($modelBudaya) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #0044FFA4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG KEMANUSIAAN</strong></h4>
                            <h4><?= count($modelKemanusiaan) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #15FF00A4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG LINGKUNGAN HIDUP</strong></h4>
                            <h4><?= count($modelLingkunganHidup) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #1100FFA4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG OLAHRAGA</strong></h4>
                            <h4><?= count($modelOlahRaga) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #FF00AEA4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG PENDIDIKAN</strong></h4>
                            <h4><?= count($modelPendidikan) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #07FA89A4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG PENGAWASAN</strong></h4>
                            <h4><?= count($modelPengawasan) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #EEFF00A4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG SENI BUDAYA</strong></h4>
                            <h4><?= count($modelSeniBudaya) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #FF4400A4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG SOSIAL</strong></h4>
                            <h4><?= count($modelSosial) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #FF0D00A4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG SWADAYA MASYARAKAT</strong></h4>
                            <h4><?= count($modelSwadayaMasyarakat) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #2600FFA4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BIDANG UMKN</strong></h4>
                            <h4><?= count($modelUMKN) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #FF0000A4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>BERBADAN HUKUM</strong></h4>
                            <h4><?= count($modelSKT) ?></h4>
                        </div>
                    </div>
                </div>
                <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
                    <div style="background: url('../images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
                        <div style="background: #00EEFFA4;height: 165px;padding: 5%; border-radius: 5%;">
                            <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
                            <h4><strong>TIDAK BERBADAN HUKUM</strong></h4>
                            <h4><?= count($modelSKHU) ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 30px;" class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="background: url('https://images.vexels.com/media/users/3/144435/raw/9c5af286a9bf9bb8ef5240f179601e04-abstract-background-with-colorful-squares-and-lines.jpg'); background-size: cover;">
                <form class="form-horizontal" method="GET" action="">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 control-label"><br>
                                <div class="input-group">
                                    <input type="text" name="cari" class="form-control" autofocus placeholder="Nama Ormas" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-search"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-xs-12 control-label">
                            <div class="input-group">
                                <input style="width: 300px; margin-top: 20px;" type="submit" value="CARI" class="btn btn-inverse-info">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="text-align: center;" class="panel-title"><strong>Tabel Informasi Pendaftaran</strong></h4>
                <div class="panel-body panel-body-table">
                    <form class="form-horizontal" method="POST" action="<?= base_url('/' . $url . '/ubah') ?>">
                        <div class="table-responsive pt-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th width="50px" style="background-color: #3B9AE1; color: white;">NO</th>
                                        <th style="text-align: center; background-color: #3B9AE1; color: white;">NAMA ORGANISASI</th>
                                        <th style=" text-align:center ; background-color: #3B9AE1; color: white;">NAMA BIDANG</th>
                                        <th style=" text-align:center ; background-color: #3B9AE1; color: white;">ALAMAT</th>
                                        <th style="text-align: center; background-color: #3B9AE1; color: white;">EMAIL</th>
                                        <th style="text-align: center; background-color: #3B9AE1; color: white;">NOMOR HP</th>
                                        <th style="background-color: #3B9AE1; text-align: center; color: white;">TANGGAL</th>
                                        <th style="background-color: #3B9AE1; text-align: center; color: white;">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($modelOrmas as $v) {
                                        $no++;
                                    ?>
                                        <tr style="text-align: center;" id="trow_<?= $no ?>">
                                            <td class="text-center"><?= $no ?></td>
                                            <td><?= $v['nama_organisasi'] ?></td>
                                            <td><?= $v['nama_bidang'] ?></td>
                                            <td><?= $v['alamat'] ?></td>
                                            <td style="text-align: center ;"><?= $v['email'] ?></td>
                                            <td style="text-align: center ;"><?= $v['nomor_hp'] ?></td>
                                            <td style="text-align: center ;"><?= $v['tanggal'] ?></td>
                                            <td>
                                                <a class="btn btn-inverse-primary" style="width: 50%; text-align: center; margin-bottom: 5%;" href="<?= base_url('/pendaftaran/detail/' . $v['id_ormas']) ?>">Detail</a>
                                                <a class="btn btn-inverse-success" style="width: 50%; text-align: center; margin-bottom: 5%;" href="<?= base_url('/pendaftaran/ubah/' . $v['id_ormas']) ?>">Ubah</a>
                                                <a class="btn btn-inverse-danger" style="width: 50%; text-align: center;" href="<?= base_url('/pendaftaran/hapus/' . $v['id_ormas']) ?>" onClick="return confirm('Hapus Data Ini ?')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>