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
            <div class="card">
                <div class="card-body">
                    <div class="panel-body panel-body-table">
                        <?php
                        $no = 0;
                        foreach ($model as $v) {
                            $no++;
                        ?>
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="text-center"> <?= $v['detail'] ?></h4>
                                </div><br>
                                <div class="row">
                                    <img src="<?= base_url('/upload/' . $v['gambar']); ?>" alt="" width="100%">
                                </div>
                            </div><br><br>

                            <div class="card-body">
                                <div class="row">
                                    <h4 class="text-center"> <?= $v['detail1'] ?></h4>
                                </div><br>
                                <div class="row">
                                    <img src="<?= base_url('/upload/' . $v['gambar1']); ?>" alt="" width="100%">
                                </div>
                            </div><br><br>

                            <div class="card-body">
                                <div class="row">
                                    <h4 class="text-center"> <?= $v['detail2'] ?></h4>
                                </div><br>
                                <div class="row">
                                    <img src="<?= base_url('/upload/' . $v['gambar2']); ?>" alt="" width="100%">
                                </div>
                            </div><br><br>

                            <div class="card-body">
                                <div class="row">
                                    <h4 class="text-center"> <?= $v['detail3'] ?></h4>
                                </div><br>
                                <div class="row">
                                    <img src="<?= base_url('/upload/' . $v['gambar3']); ?>" alt="" width="100%">
                                </div>
                            </div><br><br>

                            <div class="card-body">
                                <div class="row">
                                    <h4 class="text-center"> <?= $v['detail4'] ?></h4>
                                </div><br>
                                <div class="row">
                                    <img src="<?= base_url('/upload/' . $v['gambar4']); ?>" alt="" width="100%">
                                </div>
                            </div>
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