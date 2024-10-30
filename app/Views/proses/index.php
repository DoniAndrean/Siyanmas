<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- Breadcrumb -->
<ul class="breadcrumb">
    <li><a href="<?= base_url('/dashboard') ?>">Home >&nbsp</a></li>
    <li class="active"><?= $judul ?></li>
</ul>
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div style="margin-top: 30px;" class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="text-align: center;" class="panel-title"><?= $judul ?></h4>
                <div class="panel-body panel-body-table">
                    <div class="table-responsive pt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="50" style="background-color: #3B9AE1; color: white; text-align: center;">No</th>
                                    <th style="background-color: #3B9AE1; color: white; text-align: center;">Nama Organisasi</th>
                                    <th style="background-color: #3B9AE1; color: white; text-align: center;">Email</th>
                                    <th style="background-color: #3B9AE1; color: white; text-align: center;">Status</th>
                                    <th style="background-color: #3B9AE1; color: white; text-align: center;">Waktu Upload</th>
                                    <th style="background-color: #3B9AE1; color: white; text-align: center;">Alur Proses</th>
                                    <th style="background-color: #3B9AE1; color: white; text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;

                                foreach ($Ormas as $v) {
                                    $no++;
                                ?>

                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td class="text-center"><?= $v['nama_organisasi'] ?></td>
                                        <td class="text-center"><?= $v['email'] ?></td>
                                        <td class="text-center"><?= $v['status'] ?></td>
                                        <td class="text-center"><?= $v['tanggal'] ?></td>
                                        <td class="text-center"><?= $v['alur_proses'] ?></td>
                                        <td class="text-center">
                                            <?php if ($v['tracking'] == 7) : ?>
                                                <?php if (!empty($v['skt'])) : ?>
                                                    <a class="btn btn-success btn-rounded btn-condensed btn-sm" href="<?= base_url() ?>/upload/<?= $v['skt'] ?>">Download SKT</a> <br>
                                                <?php endif; ?>
                                                <?php if (!empty($v['kartu_ormas'])) : ?>
                                                    <a style="margin-top: 10px;" class="btn btn-success btn-rounded btn-condensed btn-sm" href="<?= base_url() ?>/upload/<?= $v['kartu_ormas'] ?>">Download Kartu Ormas</a>
                                                <?php endif; ?>
                                            <?php else : ?>
                                                Belum ada aksi
                                            <?php endif; ?>
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
<!-- END PAGE CONTENT WRAPPER -->
<?= $this->endSection() ?>