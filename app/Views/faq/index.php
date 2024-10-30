<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card-body">
            <h4 class="text-center"><?= $judul ?></h4>
            <?php
            $a = session('userData')['level_user'];
            if ($a == 'superadmin') {
            ?>
                <a style="margin-bottom: 10px;" href="<?= base_url('/faq/tambah') ?>" class="btn btn-primary"> Tambah FAQ</a>

            <?php
            } elseif ($a == 'admin') {
            ?>
                <a style="margin-bottom: 10px;" href="<?= base_url('/faq/tambah') ?>" class="btn btn-primary"> Tambah FAQ</a>
            <?php
            } else {
            }
            ?>
            <div class="card">
                <div class="card-body">
                    <div class="panel-body panel-body-table">
                        <?php
                        $no = 0;
                        foreach ($model as $v) {
                            $no++;
                        ?>
                            <div class="row">
                                <div>
                                    <i><u>
                                            <h5 style="font-weight: bold;"> <a href="<?= base_url('/faq/detail/' . $v['id_faq']) ?>"><?= $v['judul'] ?></a></h5>
                                    </i></u>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <h6 style="text-align: right; margin-right: 50px;"><?= $v['keterangan'] ?></h6>
                                </div>
                            </div>

                            <?php
                            $a = session('userData')['level_user'];
                            if ($a == 'superadmin') {
                            ?>
                                <a style="margin-bottom: 1%;" class="btn btn-success" href="<?= base_url('/faq/ubah/' . $v['id_faq']) ?>">Ubah</a>
                                <a style="margin-bottom: 1%;"" class="btn btn-danger" href="<?= base_url('/faq/delete/' . $v['id_faq']) ?>" onClick="return confirm('Hapus Data Ini ?')">Hapus</a>

                            <?php
                            } elseif ($a == 'admin') {
                            ?>
                                <a style="margin-bottom: 10px;" class="btn btn-primary" href="<?= base_url('/faq/ubah/' . $v['id_faq']) ?>">Ubah</a>
                            <?php
                            } else {
                            }
                            ?>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>