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
    <link rel="shortcut icon" href="<?= base_url('/images/faces/siyanmas3.png') ?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg" style="background: url('images/faces/login.jpg'); background-size: cover; background-position: center;">
                <div class="row w-100 mx-0">
                    <div style="margin-top: -3%;" class="col-lg-4 mx-auto">
                    <img style="width: 40%; margin-left: -105%;" src="<?= base_url('/images/faces/siyanmas3.png') ?>" alt="logo">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <h4>Lupa Password?</h4>
                            <h6 class="font-weight-light">Silahkan isi Langkah Berikut.</h6>
                            <form class="pt-3" method="post" action="<?= base_url('/forgot') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="nama_organisasi" placeholder="Nama Organisasi">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="no_induk" placeholder="Nomor SKT">
                                </div>
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            I agree to all Terms & Conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <input type="submit" class="btn btn-primary" value="SIGN UP">
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="<?= base_url('/login') ?>" class="text-primary">Login</a>
                                </div>
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
    <script src="<?= base_url('../../vendors/base/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?= base_url('../../js/off-canvas.js') ?>"></script>
    <script src="<?= base_url('../../js/hoverable-collapse.js') ?>"></script>
    <script src="<?= base_url('../../js/template.js') ?>"></script>
    <!-- endinject -->
</body>

</html>