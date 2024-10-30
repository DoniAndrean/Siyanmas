<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<ul class="breadcrumb">
  <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
  <li class="active"><?= $judul ?></li>
</ul>

<div class="page-content-wrap">
  <div style="background: url('images/faces/employe.png');">
    <div style="background: #0095FF91; height: 350px;border-bottom-left-radius:5%;border-bottom-right-radius:5%;"></div>
  </div>
  <div style="margin-top: -300px; color: white;margin-left: 30px;" class="row">
    <div class="col-sm-12">
      <h3 class="panel-title"><strong><?= $judul ?></strong></h3>
      <h4><?= date('d-M-Y') ?></h4>
      <div class="" style="overflow-x: scroll; width: 100%; display: flex; overflow-y: hidden; white-space: normal;">
        <!-- start -->
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #00FF157E;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>TOTAL ORMAS</strong></h4>
              <h4><?= count($modelTotalOrmas) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #00FFFFB1;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;">
              </div><br>
              <h4><strong>BIDANG AGAMA</strong></h4>
              <h4><?= count($modelAgama) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #FF0088A1;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG ANTI KORUPSI</strong></h4>
              <h4><?= count($modelAntiKorupsi) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #FF00D9A4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG ANTI NARKOBA</strong></h4>
              <h4><?= count($modelAntiNarkoba) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #FF8400A4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG BUDAYA</strong></h4>
              <h4><?= count($modelBudaya) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #0044FFA4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG KEMANUSIAAN</strong></h4>
              <h4><?= count($modelKemanusiaan) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #15FF00A4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG LINGKUNGAN HIDUP</strong></h4>
              <h4><?= count($modelLingkunganHidup) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #1100FFA4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG OLAHRAGA</strong></h4>
              <h4><?= count($modelOlahRaga) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #FF00AEA4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG PENDIDIKAN</strong></h4>
              <h4><?= count($modelPendidikan) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #07FA89A4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG PENGAWASAN</strong></h4>
              <h4><?= count($modelPengawasan) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #EEFF00A4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG SENI BUDAYA</strong></h4>
              <h4><?= count($modelSeniBudaya) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #FF4400A4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG SOSIAL</strong></h4>
              <h4><?= count($modelSosial) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #FF0D00A4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG SWADAYA MASYARAKAT</strong></h4>
              <h4><?= count($modelSwadayaMasyarakat) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #2600FFA4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BIDANG UMKN</strong></h4>
              <h4><?= count($modelUMKN) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
            <div style="background: #FF0000A4;height: 165px;padding: 5%; border-radius: 5%;">
              <div style="background: white; border-radius: 50%; width: 40px; height: 40px;"></div><br>
              <h4><strong>BERBADAN HUKUM</strong></h4>
              <h4><?= count($modelSKT) ?></h4>
            </div>
          </div>
        </div>
        <div style=" width: 350px; padding: 1%; display: inline-block; margin-top: 140px;">
          <div style="background: url('images/faces/background.jpg');  background-size: cover;border-radius: 5%; width: 320px;">
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
  <!-- START WIDGETS -->

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="panel-body panel-body-table">
          <div class="page-content-wrap" style="margin-bottom: 100px;display:none3;">
            <!-- START WIDGETS -->
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-body panel-body-table">
                    <!-- <img src="<?= base_url() ?>/public/adhitama.jpg" alt="Flashsoft Indonesia" width="50%"/> -->
                    <div id="chart"></div>
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script>
                      Highcharts.chart('chart', {
                        title: {
                          text: 'Laporan Grafik'
                        },
                        xAxis: {
                          categories: [
                            '2017',
                            '2018',
                            '2019',
                            '2020',
                            '2021',
                            '2022',
                            '2023',
                            '2024'
                          ]
                        },
                        labels: {
                          items: [{
                            html: '',
                            style: {
                              left: '50px',
                              top: '18px',
                              color: ( // theme
                                Highcharts.defaultOptions.title.style &&
                                Highcharts.defaultOptions.title.style.color
                              ) || 'black'
                            }
                          }]
                        },
                        series: [{
                          type: 'column',
                          name: 'Ormas',
                          data: [
                            <?= count($model2017) ?>,
                            <?= count($model2018) ?>,
                            <?= count($model2019) ?>,
                            <?= count($model2020) ?>,
                            <?= count($model2021) ?>,
                            <?= count($model2022) ?>,
                            <?= count($model2023) ?>,
                            <?= count($model2024) ?>,
                          ]
                        }]
                      });
                    </script>
                  </div>
                </div>
              </div>
            </div>
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
                  <input type="text" name="cari" class="form-control" autofocus placeholder="Cari" />
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
                    <option value="2023">2023</option>
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
              <div class="col-md-3 col-xs-12 control-label">
                <div class="input-group">
                  <input style="width: 30%;" type="submit" value="CARI" class="btn btn-info pull-right">
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
        <h4 class="text-center"><?= $judul ?></h4>
        <div class="panel-body panel-body-table">
          <form class="form-horizontal" method="POST" action="<?= base_url('/' . $url . '/ubah') ?>">
            <div class="table-responsive pt-3">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th width="50px" style="background-color: #3B9AE1; color: white;">NO</th>
                    <th style="text-align: center; background-color: #3B9AE1; color: white;">NAMA ORGANISASI</th>
                    <!-- <th>NO. SKT / NO. HUKUM HAM</th> -->
                    <th colspan="2" style="text-align:center ;width:350px; background-color: #3B9AE1; color: white;"">NAMA PENGURUS</th>
                    <th style=" text-align:center ; background-color: #3B9AE1; color: white;">ALAMAT</th>
                    <th style="text-align: center; background-color: #3B9AE1; color: white;">NAMA BIDANG</th>
                    <th style="background-color: #3B9AE1; color: white;">TAHUN</th>
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
                      <td style="text-align:left; width : 10%">
                        Ket1ua
                        <br>
                        Sekretaris
                        <br>
                        Bendahara
                        <br>
                        Berakhirnya
                      </td>
                      <td style="text-align: left; width : 100px">
                        <?= $v['nama_ketua'] ?><br>
                        <?= $v['nama_sekretaris'] ?><br>
                        <?= $v['nama_bendahara'] ?><br>
                        <?= $v['berakhirnya'] ?><br>
                      </td>
                      <td><?= $v['alamat'] ?></td>
                      <td style="text-align: center ;"><?= $v['nama_bidang'] ?></td>
                      <td style="text-align: center ;"><?= $v['tahun'] ?></td>

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