<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<!-- Breadcrumb -->
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div style="background: url('images/faces/employe.png');">
        <div style="background: #0095FF91; height: 350px;border-bottom-left-radius:5%;border-bottom-right-radius:5%;"></div>
    </div>
   
    <!-- START WIDGETS -->
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="panel-body panel-body-table">
                    <div class="page-content-wrap" style="margin-bottom: 100px;display:none3;">
                        <!-- START WIDGETS -->
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: -100px;" class="col-lg-12 grid-margin stretch-card">
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
                        <br>
                        <div class="row">
                            <div class="col-md-3 col-xs-12 control-label">
                                <div class="">
                                    <select class="form-control" name="bidang">
                                        <option value="">Bidang . . .</option>
                                        <option value="Agama">Agama</option>
                                        <option value="Budaya">Budaya</option>
                                        <option value="Lingkungan Hidup">Lingkungan Hidup</option>
                                        <option value="Olah Raga">Olah Raga</option>
                                        <option value="Pendidikan">Pendidikan</option>
                                        <option value="Pengawasan">Pengawasan</option>
                                        <option value="Sosial">Sosial</option>
                                        <option value="Kemanusiaan">Kemanusiaan</option>
                                        <option value="Swadaya Masyarakat">Swadaya Masyarakat</option>
                                        <option value="-">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 control-label">
                                <div class="">
                                    <select class="form-control" name="tahun">
                                        <option value="">Tahun . . .</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 control-label">
                                <div class="">
                                    <select class="form-control" name="jenis">
                                        <option value="">Jenis . . .</option>
                                        <option value="AHU-">Nomor SKHU</option>
                                        <option value="ABD-">Nomor SKT</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1 col-xs-12 control-label">
                                <div class="input-group">
                                    <input style="width: 100%;" type="submit" value="CARI" class="btn btn-info">
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12 control-label">
                                <div class="input-group">
                                    <a style="width : 50%;" class="btn btn-primary pull-left" href="<?= base_url('/informasikelolaskt/cetakdetail/') ?>">Cetak</a>
                                </div>
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
                <h4 style="text-align: center;" class="panel-title"><strong>Tabel Mahasiswa</strong></h4>
                <div class="panel-body panel-body-table">
                    <form class="form-horizontal" method="POST" action="<?= base_url('/' . $url . '/ubah') ?>">
                        <div class="table-responsive pt-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="50px" style="background-color: #3B9AE1; color: white;">NO</th>
                                        <th style="text-align: center; background-color: #3B9AE1; color: white;">NAMA MAHASISWA</th>
                                        <th colspan="2" style="text-align:center ;width:350px; background-color: #3B9AE1; color: white;">NPM</th>
                                        <th style=" text-align:center ; background-color: #3B9AE1; color: white;">NOMOR HP</th>
                                        
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
                                            <td><?= $v['nama_mahasiswa'] ?></td>
                                            <td style="text-align: center ;"><?= $v['npm'] ?></td>
                                            <td style="text-align: center ;"><?= $v['nomor_hp'] ?></td>
                                            
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