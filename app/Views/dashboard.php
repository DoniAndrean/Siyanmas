<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

  <!-- START WIDGETS -->
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
  <div style="margin-top: 30px; color : white; margin-left: 30px;" class="row">
    <div class="col-sm-12">
      <img style="border-radius: 10px; width: 97%;" src="<?= base_url('/images/faces/dashboard1.jpg') ?>" alt="">
    </div>
  </div>
  <div class="col-md-12 pull-left" style="margin-top:3% ;">
    <div class="card" style="padding:2%;" width="200px">
      <div class="card-body">
        <div class="row">
          <div class="col-md-9" style="padding: 1%;">
            <h1><strong>Kesbangpol Provinsi Riau (Bidang 3)</strong></h1>
            <h4>A. TUGAS</h4>
            <p>Berdasarkan Peraturan Gubernur DIY Nomor 98 Tahun 2021 Tentang Kedudukan, Susunan Organisasi, Tugas, Fungsi dan Tata Kerja Badan Kesatuan Bangsa dan Politik, Badan Kesatuan Bangsa dan Politik mempunyai tugas menyelenggarakan fungsi penunjang urusan pemerintahan bidang kesatuan bangsa dan politik.</p>

            <h4>B. FUNGSI</h4>
            <p>Badan Kesatuan Bangsa dan Politik mempunyai fungsi:</p>
            <p>1. Penyusunan program Badan.</p>
            <p>2. Perumusan kebijakan teknis dan pembinaan urusan bina ideologi, wawasan kebangsaan, karakter bangsa, politik dalam negeri, ketahanan ekonomi, sosial, budaya, agarna, organisasi kemasyarakatan, penanganan konflik, dan kewaspadaan nasional.</p>
            <p>3. Pelaksanaan fasilitasi dan koordinasi penyelenggaraan urusan bina ideologi, wawasan kebangsaan, karakter bangsa, politik dalam negeri, ketahanan ekonomi, sosial, budaya, agama, organisasi kemasyarakatan, penanganan konflik, dan kewaspadaan nasional.</p>
            <p>4. Pemantauan, evaluasi, dan pelaporan pelaksanaan kebijakan bidang bina ideologi, wawasan kebangsaan, karakter bangsa, politik dalam negeri, ketahanan ekonomi, sosial, budaya, agama, organisasi kemasyarakatan, penanganan konflik, dan kewaspadaan nasional.</p>
            <p>5. Penyelenggaraan kegiatan kesekretariatan.</p>
            <p>6. Penyusunan laporan pelaksanaan tugas Badan dan.</p>
            <p>7. Pelaksanaan tugas lain yang diberikan oleh Gubemur sesuai dengan tugas dan fungsi Badan.</p>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="btn btn-inverse-primary">
                  <h6 style="text-align: center;"><strong>KEPALA BADAN KESBANGPOL</strong></h6>
                </div>
                <div class="panel-body panel-body-table" style="text-align: center; margin-top: 20px;">
                  <img src="<?= base_url('/images/faces/kaban.jpeg') ?>" width="90%" style="text-align :center;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 pull-left" style="margin-top:3% ;">
    <div style="background-color:white; padding: 2%;" class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-9" style="padding: 1%;">
            <h5><strong>Jalan Thamrin No. 93 Sail, Kota Pekanbaru, Provinsi Riau</strong></h5>
            <h5 style="margin-top: 50px; margin-left: 198px;"><strong>Sosial Media</strong></h5>
            <hr style="width: 57%; margin-left: -5px;">
            <a href="https://www.facebook.com/kesbangpol.riau">
              <img style="width: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png" alt="">
            </a>
            <a href="https://twitter.com/SIKUBKESBANRIAU">
              <img style="width: 50px; margin-left: 100px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/2491px-Logo_of_Twitter.svg.png" alt="">
            </a>
            <a href="https://www.instagram.com/bakesbangpolkabbdg/">
              <img style="width: 50px; margin-left: 120px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png" alt="">
            </a>
            <a href="https://www.youtube.com/channel/UCC3m3hnUcW8tljq5n1kOeTg">
              <img style="width: 50px; margin-left: 115px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/YouTube_social_white_square_%282017%29.svg/640px-YouTube_social_white_square_%282017%29.svg.png" alt="">
            </a>
            <h5 style="margin-top: 50px; margin-left: 198px;"><strong>Kontak Kami</strong></h5>
            <hr style="width: 57%; margin-left: -5px;">
            <img style="width: 50px; margin-left: 110px;" src="<?= base_url('images/faces/telepon.png') ?>" alt="">
            <img style="width: 62px; margin-left: 190px;" src="<?= base_url('images/faces/email.png') ?>" alt="">
            <h6 style="margin-left: 55px;">(0761) 23740 / 38736 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp kesbangpol@riau.go.id</h6>
          </div>
          <div class="col-md-3" style="margin-left: 54%;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.65638223672!2d101.46084127456197!3d0.5162226636889973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5aec1876043d5%3A0x331684eb54aa6060!2sBadan%20Kesatuan%20Bangsa%20dan%20Politik%20Provinsi%20Riau!5e0!3m2!1sid!2sid!4v1694796324356!5m2!1sid!2sid" width="600" height="350" style="border:0; margin-top: -90%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="col-md-12 pull-left" style="margin-top: 3%;">
    <div class="card" style="background-color: white; padding: 3%;">
      <div class="card-body">
        <div class="row">
          <div class="col-md-9" style="padding: 1%;"> -->
            <!-- Slide -->
            <!-- <div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel"> -->
              <!-- indicators -->
              <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol> -->
              <!-- Wrapper For Slides -->
              <!-- <div class="carousel-inner">
                <div class="item active">
                  <img src="<?= base_url('/images/faces/gambar.jpg') ?>" alt="" style="width: 100px;">
                </div>
                <div class="item">
                  <img src="<?= base_url('/images/faces/gambar.jpg') ?>" alt="" style="width: 100px;">
                </div>
                <div class="item">
                  <img src="<?= base_url('/images/faces/gambar.jpg') ?>" alt="" style="width: 100px;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>

<?= $this->endSection() ?>