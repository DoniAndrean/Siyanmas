<!DOCTYPE html>
<html lang="en">
<?php
if (!isset(session('userData')['level_user'])) {
  echo '
  <script>
  window.location.replace("' . base_url('/login') . '");
  </script>
  ';
}
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIYANMAS RIAU</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url('/vendors/mdi/css/materialdesignicons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/vendors/feather/feather.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/vendors/base/vendor.bundle.base.css') ?>">

  <link rel="stylesheet" href="<?= base_url('/vendors/base/vendor.bundle.base.css') ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/vendors/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/vendors/jquery-bar-rating/fontawesome-stars-o.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/vendors/jquery-bar-rating/fontawesome-stars.css') ?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('/css/style.css') ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('/images/faces/riau.svg') ?>" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: #0096FF ;">
        <img style="width: 70%;" src="<?= base_url('/images/faces/siyanmas3.png') ?>" alt="logo" />
        <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <?php $session = session(); ?>
              <a href="<?= base_url('/profil/ubah/' . $session->get('userData')['id_user']) ?>" class="dropdown-item preview-item">
                <i class="icon-head"></i> Profile
              </a>
              <div data-sound="alert" id="mb-signout">
                <a href="<?= base_url('/login/logout') ?>" class="dropdown-item preview-item" id="logout">
                  <i class="icon-inbox" id="demo"></i> Logout
                </a>
                <div class="mb-footer">
                  <div class="pull-right">
                    <script>
                      getLocation();
                      var xlogout = document.getElementById("logout")
                      var x = document.getElementById("demo");


                      function getLocation() {
                        if (navigator.geolocation) {
                          navigator.geolocation.getCurrentPosition(showPosition);
                        } else {
                          x.innerHTML = "Geolocation is not supported by this browser.";
                        }
                      }

                      function showPosition(position) {
                        var lat = position.coords.latitude;
                        var lon = position.coords.longitude;
                        // x.innerHTML = "Latitude: " + position.coords.latitude +
                        // "<br>Longitude: " + position.coords.longitude;
                        displayLocation(lat, lon);
                      }

                      function displayLocation(latitude, longitude) {
                        var request = new XMLHttpRequest();

                        var method = 'GET';
                        var url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + latitude + ',' + longitude + '&sensor=true&key=AIzaSyD9-xRbyMcTIO6RL96myTGq7wfLzaLNUtg';
                        var async = true;

                        request.open(method, url, async);
                        request.onreadystatechange = function() {
                          if (request.readyState == 4 && request.status == 200) {
                            var data = JSON.parse(request.responseText);
                            var address = data.results[0];
                            console.log(address.formatted_address);
                            // x.innerHTML = address.formatted_address;
                            // xalamat.value = address.formatted_address;
                            // xlogout.href = "logout2/" + address.formatted_address;
                            temp = encodeURIComponent(address.formatted_address).replace('%20', '+');
                            xlogout.setAttribute('href', '<?= base_url() ?>/login/logout/' + temp + '/' + latitude + '/' + longitude);

                          }
                        };
                        request.send();
                      }
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
  </div>
  <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
    <span class="icon-menu"></span>
  </button>
  </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #0096FF;">
      <div class="user-profile">
        <?php $session = session(); ?>
        <div class="user-image">
          <?php if ($session->has('userData') && !empty($session->get('userData')['foto'])) : ?>
            <img src="<?= base_url('/upload/' . $session->get('userData')['foto']) ?>" alt="User Image">
          <?php else : ?>
            <img src="<?= base_url('/images/faces/login.png') ?>" alt="Default Image">
          <?php endif; ?>
        </div>
        <div class="user-name">
          <?php
          echo session('userData')['level_user']
          ?>
        </div>
        <div class="user-designation">
          <?php
          echo session('userData')['username']
          ?>
        </div>
        <!-- <div class="user-designation">
          <?php
          echo session('userData')['id_user']
          ?>
        </div> -->
      </div>
      <ul class="nav">
        <?php
        if ((session('userData')['level_user'] == 'superadmin' && session('userData')['username'] == 'Doni Andrean') || session('userData')['level_user'] == 1) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sisteminformasi') ?>">
              <i class="icon-bar-graph-2 menu-icon"></i>
              <span class="menu-title">Informasi Ormas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Pencatatan <br>Keberadaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skt/') ?>">SKT</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skhu/') ?>">SKAHU</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/informasikelolaskt') ?>">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi Pencatatan <br> Keberadaan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi <br>Pengajuan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pendaftaran/index/') ?>">Pendaftaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pengajuanskt/index/') ?>">Surat Keterangan <br> Terdaftar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/user') ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/akses') ?>">
              <i class="icon-esc menu-icon"></i>
              <span class="menu-title">Akses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/riwayatlogin') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Riwayat Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/faq') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Faq</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li> -->
        <?php
        }
        ?>
        <?php
        if ((session('userData')['level_user'] == 'superadmin' && session('userData')['username'] == 'Rizky Muhari Yahfiiz, S.STP., M,Si') || session('userData')['level_user'] == 1) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sisteminformasi') ?>">
              <i class="icon-bar-graph-2 menu-icon"></i>
              <span class="menu-title">Informasi Ormas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Pencatatan <br>Keberadaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skt/') ?>">SKT</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skhu/') ?>">SKAHU</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/informasikelolaskt') ?>">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi Pencatatan <br> Keberadaan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi <br>Pengajuan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pendaftaran/index1/') ?>">Pendaftaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pengajuanskt/index1/') ?>">Surat Keterangan <br> Terdaftar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/user') ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/akses') ?>">
              <i class="icon-esc menu-icon"></i>
              <span class="menu-title">Akses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/riwayatlogin') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Riwayat Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/faq') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Faq</span>
            </a>
          </li>
        <?php
        }
        ?>
        <?php
        if ((session('userData')['level_user'] == 'admin' && session('userData')['username'] == 'Murnis') || session('userData')['level_user'] == 1) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sisteminformasi') ?>">
              <i class="icon-bar-graph-2 menu-icon"></i>
              <span class="menu-title">Informasi Ormas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Pencatatan <br>Keberadaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skt/') ?>">SKT</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skhu/') ?>">SKAHU</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/informasikelolaskt') ?>">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi Pencatatan <br> Keberadaan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi <br>Pengajuan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pendaftaran/index2/') ?>">Pendaftaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pengajuanskt/index2/') ?>">Surat Keterangan <br> Terdaftar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/user') ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/akses') ?>">
              <i class="icon-esc menu-icon"></i>
              <span class="menu-title">Akses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/riwayatlogin') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Riwayat Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/faq') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Faq</span>
            </a>
          </li>
        <?php
        }
        ?>
        <?php
        if ((session('userData')['level_user'] == 'superadmin' && session('userData')['username'] == 'Jendri Salmon Ginting, AP., M.si') || session('userData')['level_user'] == 1) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sisteminformasi') ?>">
              <i class="icon-bar-graph-2 menu-icon"></i>
              <span class="menu-title">Informasi Ormas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Pencatatan <br>Keberadaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skt/') ?>">SKT</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skhu/') ?>">SKAHU</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/informasikelolaskt') ?>">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi Pencatatan <br> Keberadaan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi <br>Pengajuan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pendaftaran/index3/') ?>">Pendaftaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pengajuanskt/index3/') ?>">Surat Keterangan <br> Terdaftar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/user') ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/akses') ?>">
              <i class="icon-esc menu-icon"></i>
              <span class="menu-title">Akses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/riwayatlogin') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Riwayat Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/faq') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Faq</span>
            </a>
          </li>
        <?php
        }
        ?>
        <?php
        if ((session('userData')['level_user'] == 'superadmin' && session('userData')['username'] == 'Lil Fadly Jamil, S.STP., M.Si') || session('userData')['level_user'] == 1) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sisteminformasi') ?>">
              <i class="icon-bar-graph-2 menu-icon"></i>
              <span class="menu-title">Informasi Ormas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Pencatatan <br>Keberadaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skt/') ?>">SKT</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skhu/') ?>">SKAHU</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/informasikelolaskt') ?>">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi Pencatatan <br> Keberadaan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi <br>Pengajuan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pendaftaran/index4/') ?>">Pendaftaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pengajuanskt/index4/') ?>">Surat Keterangan <br> Terdaftar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/user') ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/akses') ?>">
              <i class="icon-esc menu-icon"></i>
              <span class="menu-title">Akses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/riwayatlogin') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Riwayat Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/faq') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Faq</span>
            </a>
          </li>
        <?php
        }
        ?>
        <?php
        if ((session('userData')['level_user'] == 'admin' && session('userData')['username'] == 'Indra Prayoga, S.STP') || session('userData')['level_user'] == 1) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sisteminformasi') ?>">
              <i class="icon-bar-graph-2 menu-icon"></i>
              <span class="menu-title">Informasi Ormas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Pencatatan <br>Keberadaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skt/') ?>">SKT</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skhu/') ?>">SKAHU</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/informasikelolaskt') ?>">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi Pencatatan <br> Keberadaan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi <br>Pengajuan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pendaftaran/index5/') ?>">Pendaftaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pengajuanskt/index5/') ?>">Surat Keterangan <br> Terdaftar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/user') ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/akses') ?>">
              <i class="icon-esc menu-icon"></i>
              <span class="menu-title">Akses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/riwayatlogin') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Riwayat Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/faq') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Faq</span>
            </a>
          </li>
        <?php
        }
        ?>
        <?php
        if ((session('userData')['level_user'] == 'superadmin' && session('userData')['username'] == 'Nerry Cloudio Popindo S.STP') || session('userData')['level_user'] == 1) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sisteminformasi') ?>">
              <i class="icon-bar-graph-2 menu-icon"></i>
              <span class="menu-title">Informasi Ormas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Pencatatan <br>Keberadaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skt/') ?>">SKT</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skhu/') ?>">SKAHU</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/informasikelolaskt') ?>">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi Pencatatan <br> Keberadaan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi <br>Pengajuan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pendaftaran/index/') ?>">Pendaftaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pengajuanskt/index/') ?>">Surat Keterangan <br>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pendaftaran/index6/') ?>">Pendaftaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pengajuanskt/index6/') ?>">Surat Keterangan <br> Terdaftar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/user') ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/akses') ?>">
              <i class="icon-esc menu-icon"></i>
              <span class="menu-title">Akses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/riwayatlogin') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Riwayat Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/faq') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Faq</span>
            </a>
          </li>
        <?php
        }
        ?>
        <?php
        if (session('userData')['level_user'] == 'admin' || session('userData')['level_user'] == 1) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sisteminformasi') ?>">
              <i class="icon-bar-graph-2 menu-icon"></i>
              <span class="menu-title">Informasi Ormas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Pencatatan <br>Keberadaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skt/') ?>">SKT</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skhu/') ?>">SKHU</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/informasikelolaskt') ?>">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Informasi Pencatatan <br> Keberadaan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pengajuanskt/index') ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Informasi Pendaftaran</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pengajuanskt/index') ?>">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Informasi Pengajuan <br> SKT</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/akses') ?>">
              <i class="icon-esc menu-icon"></i>
              <span class="menu-title">Akses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/faq') ?>">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Faq</span>
            </a>
          </li>
        <?php
        }
        ?>
        <?php
        if (session('userData')['level_user'] == 'pendaftar' || session('userData')['level_user'] == 1) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sisteminformasi') ?>">
              <i class="icon-bar-graph-2 menu-icon"></i>
              <span class="menu-title">Informasi Ormas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pengajuanskt/skt') ?>">
              <i class="icon-pie-graph menu-icon"></i>
              <span class="menu-title">Pengajuan SKT</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pendaftaran/daftar') ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Pendaftaran Ormas</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Riwayat</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/pengajuanskt/detail/') ?>">SKT</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/kelola/skhu/') ?>">Pendaftaran</a></li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/laporankerja') ?>">
              <i class="icon-archive menu-icon"></i>
              <span class="menu-title">Laporan Kerja</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/faq') ?>">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">FAQ</span>
            </a>
          </li>
        <?php
        }
        ?>
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <?= $this->renderSection('content') ?>
      <footer class="footer">
        <div class="footer-wrap">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Developer © <a href="https://www.bootstrapdash.com/" target="_blank">Doni Andrean </a>2024</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Email <a href="https://kesbangpol.riau.go.id/media.php?p=home" target="_blank"> kesbangpol.riau.go.id </a></span>
          </div>
        </div>
      </footer>

    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="<?= base_url('/vendors/base/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url('/js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('/js/hoverable-collapse.js') ?>"></script>
  <script src="<?= base_url('/js/template.js') ?>"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?= base_url('/vendors/chart.js/Chart.min.js') ?>"></script>
  <script src="<?= base_url('/vendors/jquery-bar-rating/jquery.barrating.min.js') ?>"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('/js/dashboard.js') ?>"></script>
  <!-- End custom js for this page-->
</body>

</html>