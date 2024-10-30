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
            <form class="form-sample">
                <div class="card-body">
                        <a style="margin-bottom: -2%;" href="<?= base_url('/laporankerja/tambah/') ?>" class="btn btn-inverse-primary">Tambah Laporan Kerja</a>
                </div>
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
                                            <h5 style="font-weight: bold; margin-top: 3%;"><?= $v['tanggal'] ?></h5>
                                        </div>
                                        <img src="<?= base_url('/upload/' . $v['foto']); ?>" alt="test" width="30%">
                                        <img src="<?= base_url('/upload/' . $v['foto1']); ?>" alt="test" width="30%">
                                        <img src="<?= base_url('/upload/' . $v['foto2']); ?>" alt="test" width="30%">
                                        <div>
                                            <h5 style="font-weight: bold; margin-top: 3%;"><?= $v['judul'] ?></h5>
                                        </div>

                                        <a class="btn btn-success" href="<?= base_url() ?>/laporankerja/ubah/<?= $v['id_laporan_kerja'] ?>" class="btn btn-default btn-rounded btn-condensed btn-sm">Ubah</a>

                                        <a class="btn btn-danger" href="<?= base_url() ?>/laporankerja/delete/<?= $v['id_laporan_kerja'] ?>" onClick="return confirm('Hapus Data Ini ?')">Hapus</a>

                                        <a class="btn btn-warning" href="<?= base_url() ?>/laporankerja/detail/<?= $v['id_ormas'] ?>" class="btn btn-default btn-rounded btn-condensed btn-sm">Baca Selengkapnya</a>

                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>