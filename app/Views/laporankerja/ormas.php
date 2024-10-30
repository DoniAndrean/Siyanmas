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
            <?php
            $no = 0;
            $hasData = false; // Flag untuk mengecek apakah ada data dengan status 1
            foreach ($model as $v) {
                if ($v['status'] == 1) { // Pengecekan nilai status
                    $no++;
                    $hasData = true;
                    break; // Keluar dari loop setelah menemukan data dengan status 1
                }
            }
            ?>
            <?php if ($hasData) : ?>
                <h4 class="text-center"><?= $judul ?></h4>
            <?php endif; ?>

            <form class="form-sample">
                <div class="card-body"></div>
                <div class="panel-body panel-body-table">
                    <div class="row">
                        <?php
                        foreach ($model as $v) {
                            if ($v['status'] == 1) { // Pengecekan nilai status
                        ?>
                                <div style="margin-top: 2%;" class="col-md-12">
                                    <div style="border-radius: 5px;" class="card">
                                        <div class="col-md-12" style="background: white ; padding : 3% ; border-radius:30px; margin-bottom : 3%;">
                                            <div>
                                                <h5 style="font-weight: bold; margin-top: 3%;"><?= $v['tanggal'] ?></h5>
                                            </div>
                                            <img src="<?= base_url('/upload/' . $v['foto']); ?>" alt="test" width="30%">
                                            <img style="margin-left: 10px;" src="<?= base_url('/upload/' . $v['foto1']); ?>" alt="test" width="30%">
                                            <img style="margin-left: 10px;" src="<?= base_url('/upload/' . $v['foto2']); ?>" alt="test" width="30%">
                                            <div>
                                                <h5 style="font-weight: bold; margin-top: 3%;"><?= $v['judul'] ?></h5>
                                            </div>

                                            <a class="btn btn-danger" href="<?= base_url() ?>/laporankerja/delete/<?= $v['id_laporan_kerja'] ?>" onClick="return confirm('Hapus Data Ini ?')">Hapus</a>

                                            <a class="btn btn-warning" href="<?= base_url() ?>/laporankerja/detail/<?= $v['id_laporan_kerja'] ?>" class="btn btn-default btn-rounded btn-condensed btn-sm">Baca Selengkapnya</a>

                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        if (!$hasData) { // Jika tidak ada data dengan status 1
                            echo '<div style="margin-top: 2%;" class="col-md-12">';
                            echo '<div style="border-radius: 5px;" class="card">';
                            echo '<div class="col-md-12" style="background: white ; padding : 3% ; border-radius:30px; margin-bottom : 3%;">';
                            echo '<h5 style="font-weight: bold; margin-top: 3%; text-align: center;">Laporan kerja belum ada</h5>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
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