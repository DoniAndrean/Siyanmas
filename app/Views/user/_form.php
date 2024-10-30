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
            <form class="form-sample" method="post" action="<?= base_url('/' . $url) ?>" enctype="multipart/form-data">
                <input type="hidden" name="id_user" value="<?= $id_user ?>" class="form-control" />
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Email</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="username" class="form-control" autofocus="" oninput="setCustomValidity('')" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Nama Pengguna</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="text" name="nama_user" class="form-control" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label">Password</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="password" name="password" id="myInput" class="form-control" />
                                    <span class="input-group-text bg-info text-white"><span class="fa fa-pencil"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-xs-12 control-label"></label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <div class="input-group">
                                    <input type="checkbox" name="password" onclick="myFunction()" /> Show Passwoord
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="status_User" value="1" class="form-control" />
                            <label class="col-md-3 col-xs-12 control-label">Level Akses</label>
                            <div class="col-md-6 col-xs-12 control-label">
                                <select class="form-control select" name="level_user">
                                    <?php if (isset($User['level_user'])) : ?>
                                        <option value="<?= $User['level_user'] ?>"><?= ucfirst($User['level_user']) ?></option>
                                    <?php endif; ?>
                                    <option value="superadmin">Super Admin</option>
                                    <option value="admin">Admin</option>
                                    <option value="pendaftar">Pendaftar</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url('/user') ?>" class="btn btn-inverse-primary">Kembali</a>
                            <input type="submit" value="SIMPAN" class="btn btn-inverse-info pull-right">
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
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>