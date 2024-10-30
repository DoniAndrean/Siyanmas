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
                <h4 style="text-align: center;" class="panel-title"><?= $judul ?></h4>
                <div class="panel-body panel-body-table">
                    <div class="table-responsive pt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="50" style="background-color: #3B9AE1 ; color:white; text-align: center;">No</th>
                                    <th style="background-color: #3B9AE1 ; color:white; text-align: center;">Username</th>
                                    <th style="background-color: #3B9AE1 ; color:white; text-align: center;">Alamat</th>
                                    <th style="background-color: #3B9AE1 ; color:white; text-align: center;">Tanggal</th>
                                    <th style="background-color: #3B9AE1 ; color:white; text-align: center;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($model as $v) {
                                    $no++;
                                ?>

                                    <tr style="text-align: center;" id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $v['username'] ?></td>
                                        <td><?= $v['alamat'] ?></td>
                                        <td><?= $v['tanggal'] ?></td>
                                        <td><?= $v['status'] ?></td>
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