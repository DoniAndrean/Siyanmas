<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Siyanmas</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url('../../vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('../../vendors/feather/feather.css') ?>">
    <link rel="stylesheet" href="<?= base_url('../../vendors/base/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('../../css/style.css') ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('/images/faces/siyanmas2.png') ?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0" style="background-color:white ;">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <img style="width: 300px; margin-top: -120px;" src="<?= base_url('/images/faces/siyanmas3.png') ?>" alt="logo">
                        <div style="margin-top: -70px; border-radius: 30px ;">
                            <div class="brand-logo">
                            </div>
                            <h5><b>Selamat Datang di Siyanmas</b></h5>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" method="post" action="<?= base_url('/login/submit') ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" name="username" placeholder="Masukkan Email / Nomor Hp">
                                        <input type="hidden" class="form-control" name="alamat" id="alamat" />
                                        <input type="hidden" class="form-control" name="lat" id="lat" />
                                        <input type="hidden" class="form-control" name="lon" id="lon" />
                                    </div>
                                </div>
                                <label for="exampleInputPassword">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" name="password" id="myInput" placeholder="Password">
                                </div>
                                <label class="col-md-3 col-xs-12 control-label"></label>
                                <div class="col-md-6 col-xs-12 control-label">
                                    <div class="input-group">
                                        <input type="checkbox" name="password" onclick="myFunction()" /> Show Passwoord
                                    </div>
                                </div>
                                <?php if (session()->getFlashdata('error') !== NULL) : ?>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <?php echo session()->getFlashdata('error'); ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="mt-3">
                                    <input style="width: 100%;" type="submit" value="SIGN IN" class="btn btn-dark">
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="<?= base_url('/forgot') ?>" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="<?= base_url('/daftar') ?>" class="text-primary">Create</a>
                                </div>
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("myInput");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="../../vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <!-- endinject -->
    <p style="text-align: center;" id="demo"></p>
    <script>
        getLocation();
        var x = document.getElementById("demo");
        var xalamat = document.getElementById("alamat");
        var xlat = document.getElementById("lat");
        var xlon = document.getElementById("lon");


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
            x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
            displayLocation(lat, lon);
            xlat.value = lat;
            xlon.value = lon;
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
                    x.innerHTML = address.formatted_address;
                    xalamat.value = address.formatted_address;
                }
            };
            request.send();
        }
    </script>
</body>

</html>