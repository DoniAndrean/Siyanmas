<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- Breadcrumb -->
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="text-center"><?= $judul ?></h4>
                <div class="panel-body panel-body-table">
                    <div class="row">
                        <?php
                        $no = 0;
                        foreach ($model as $v) {
                            $no++;
                        ?>
                            <div style="margin-top: 2%;" class="col-md-12">
                                <div style="border-radius: 5px;" class="card">
                                    <div class="col-md-12" style="background: white ; padding : 3% ; border-radius:30px; margin-bottom : 3%;">
                                        <div>
                                            <h5 style="font-weight: bold; margin-top: 3%;"><?= $v['judul'] ?></h5>
                                        </div>
                                        <div>
                                            <h5 style="font-weight: bold; margin-top: 3%;"><?= $v['tanggal'] ?></h5>
                                        </div>
                                        <div>
                                            <img src="<?= base_url('/upload/' . $v['foto']); ?>" alt="test" width="30%">
                                            <img style="margin-left: 10px;" src="<?= base_url('/upload/' . $v['foto1']); ?>" alt="test" width="30%">
                                            <img style="margin-left: 10px;" src="<?= base_url('/upload/' . $v['foto2']); ?>" alt="test" width="30%">
                                        </div> <br>
                                        <div>
                                            <img src="<?= base_url('/upload/' . $v['foto3']); ?>" alt="test" width="30%">
                                            <img style="margin-left: 10px;" src="<?= base_url('/upload/' . $v['foto4']); ?>" alt="test" width="30%">
                                            <img style="margin-left: 10px;" src="<?= base_url('/upload/' . $v['foto5']); ?>" alt="test" width="30%">
                                        </div>
                                        <div> <br>
                                        
                                        <div> <br>
                                            <h5 style="font-weight: bold;">Keterangan Kegiatan :</h5>
                                            <h6 style="font-weight: bold;"><?= $v['keterangan'] ?></h6>
                                        </div>
                                        <div>
                                            <a style="margin-top: 40px;" href="<?= base_url('/laporankerja/ormas/' . $v['id_ormas']) ?>" class="btn btn-inverse-primary">Kembali</a>
                                        </div>
                                    </div>
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