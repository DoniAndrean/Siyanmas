<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Regal Admin</title>
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
    <link rel="shortcut icon" href="<?= base_url('../../images/favicon.png') ?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../../images/logo-dark.svg" alt="logo">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" method="post" action="<?= base_url('/newpassword') ?>">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-lg" name="nama_organisasi" value="<?= $nama_organisasi ?>" placeholder="Nama Organisasi">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-lg" name="no_induk" value="<?= $no_induk ?>" placeholder="Nomor SKT">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Masukkan Password Baru">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="passwordconfirm" placeholder="Masukkan Password Baru Kembali">
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