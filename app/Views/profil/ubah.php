<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>
<?php
$error_message = ""; // Inisialisasi variabel $error_message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password !== $password2) {
        $error_message = "Konfirmasi password baru tidak sesuai.";
    } else {
        // Lakukan proses penyimpanan data ke database jika password sesuai
    }
}
?>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- START WIDGETS -->
    <div class="col-md-12 grid-margin stretch-card">
        <?php if (!empty($error_message)) : ?>
            <div class="alert alert-warning">
                <?= $error_message ?>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <h4 class="text-center"><?= $judul ?></h4>
            <form class="form-sample" method="post" action="<?= base_url('/' . $url) ?>" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" name="id_user" value="<?= $model[0]['id_user'] ?>" class="form-control" />
                        <input type="hidden" name="level_user" value="<?= $model[0]['level_user'] ?>" class="form-control" />
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Pengguna</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="username" value="<?= $model[0]['nama_user'] ?>" class="form-control" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Email/No. HP</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_user" value="<?= $model[0]['username'] ?>" class="form-control" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Password Baru</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" required />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Konfirmasi Password Baru</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="password" name="password2" class="form-control" required oninvalid="this.setCustomValidity('Konfirmasi password baru tidak sesuai.')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Foto Profil
                                <span style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="file" name="foto" class="form-control" autofocus required oninvalid="this.setCustomValidity('Kolom Wajib di Isi')" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="SIMPAN" class="btn btn-inverse-info">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>