<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        
        <!-- START WIDGETS -->                                        
            
        <div class="row">
            <div class="col-md-12">                            
                <form class="form-horizontal" method="POST" action="<?= base_url('/riwayatlogin/tambah') ?>">
                    <?= csrf_field() ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?= $judul ?></h3>
                        </div>                                 
                        <div class="col-md-12">
                            <div class="panel-body">
                            </div>
                            <div class="panel-body form-group-separated">

                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label"></label>
                                    <div class="col-md-6 col-xs-12 control-label">             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="id_user" value="1" class="form-control" autofocus=""/>
                                        </div>                                 
                                    </div>
                                </div>                                               
                            </div>
                            <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label"></label>
                                    <div class="col-md-6 col-xs-12 control-label">             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="alamat" value="Panam" class="form-control" autofocus=""/>
                                        </div>                                 
                                    </div>
                                </div>                                               
                            </div>
                            <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label"></label>
                                    <div class="col-md-6 col-xs-12 control-label">             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="tanggal" value="12-02-2022" class="form-control" autofocus=""/>
                                        </div>                                 
                                    </div>
                                </div>                                               
                            </div>
                            <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label"></label>
                                    <div class="col-md-6 col-xs-12 control-label">             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="status" value="Login" class="form-control" autofocus=""/>
                                        </div>                                 
                                    </div>
                                </div>                                               
                            </div>
                        </div>                                
                        <div class="panel-footer">
                            <!-- <button class="btn btn-default">Kembali</button>                                     -->
                            <input type="submit" value="SIMPAN" class="btn btn-primary pull-right">
                        </div>
                    </div>
                </form>                        
            </div>
        </div>                        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->                                
<?= $this->endSection() ?>
