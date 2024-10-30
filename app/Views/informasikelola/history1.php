<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<!-- Breadcrumb -->
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home &gt;&nbsp;</a></li>
    <li><a href="<?= base_url('/informasikelolaskt') ?>">Informasi Pencatatan Keberadaan &gt;&nbsp;</a></li>
    <?php if (!empty($modelOrmasRiwayat) && isset($modelOrmasRiwayat[0])) : ?>
        <li><a href="<?= base_url('/informasikelolaskt/detail/' . $modelOrmasRiwayat[0]['id_ormas']) ?>">Detail &gt;&nbsp;</a></li>
    <?php else : ?>
        <li>Data tidak tersedia</li>
    <?php endif; ?>
    <li class="active"><?= $judul ?></li>
</ul>

<div style="text-align: center;" class="panel panel-default">
    <?php if (empty($modelOrmasRiwayat) || !isset($modelOrmasRiwayat[0])) : ?>
        <h1>Belum Ada Perubahan Data</h1>
    <?php else : ?>
        <div class="page-content-wrap">
            <!-- START WIDGETS -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 style="text-align: center;" class="panel-title"><strong>Data Riwayat</strong></h4>
                        <div class="panel-body panel-body-table">
                            <div class="table-responsive pt-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="50px" style="background-color: #3B9AE1; color: white;">NO</th>
                                            <th style="background-color: #3B9AE1; color: white; text-align: center;">NAMA ORGANISASI</th>
                                            <th style="text-align: center; background-color: #3B9AE1; color: white;">NAMA BIDANG</th>
                                            <th style="background-color: #3B9AE1; color: white;">AKTE PENDIRIAN</th>
                                            <th style="background-color: #3B9AE1; color: white;">SK KEPENGURUSAN</th>
                                            <th style="text-align: center; background-color: #3B9AE1; color: white;">NO. SKT / NO. HUKUM HAM</th>
                                            <th style="background-color: #3B9AE1; color: white; text-align: center; width: 5%;">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        foreach ($modelOrmasRiwayat as $v) {
                                            $no++;
                                        ?>
                                            <tr id="trow_<?= $no ?>">
                                                <td class="text-center"><?= $no ?></td>
                                                <td style="text-align: center;"><?= $v['nama_organisasi'] ?></td>
                                                <td style="text-align: center;"><?= $v['nama_bidang'] ?></td>
                                                <td style="text-align: center;"><?= $v['no_akte_pendirian'] ?></td>
                                                <td style="text-align: center;"><?= $v['no_sk_kepengurusan'] ?></td>
                                                <td style="text-align: center;" width="200px"><?= $v['no_induk'] ?></td>
                                                <td style="text-align: center;">
                                                    <a style="width: 100%;" class="btn btn-primary width" href="<?= base_url('/informasikelolaskt/detailhistory/' . $v['id_ormas_riwayat']) ?>">Detail</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>