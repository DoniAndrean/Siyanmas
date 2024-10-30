<table border="0">
    <tr>
        <td width="80px"><img src="<?= base_url('/images/faces/Riau.png') ?>" width="65px"></td>
        <td width="710px" style="text-align: center ;">
            <h1>PEMERINTAH PROVINSI RIAU</h1>
            <h1>BADAN KESATUAN BANGSA DAN POLITIK PROVINSI RIAU</h1>
            <h4>Jalan Thamrin No. 93, Telepon (0761) 23740 - 38736, Faximile (0761) 38736</h4>
            <h4>Website : kesbangpol.riau.go.id, Email : kesbangpol@riau.go.id</h4>
            <h4>P E K A N B A R U</h4>
            <hr style="width:100%;text-align:left;margin-left:0">
        </td>
        <td width="100px"><img src="<?= base_url('/images/faces/Kesbangpol.png') ?>" width="98px"></td>
    </tr>
</table><br><br>


<!-- <h4 style="text-align: center;"><strong><?= $judul ?></strong></h4><br><br> -->




<table class="table table-bordered table-striped table-actions" border="1">
    <thead>
        <tr>
            <th width="50px" style="background-color: #3B9AE1 ; color: white;">NO</th>
            <th style="background-color: #3B9AE1 ; color: white; text-align: center; width: 185px;">NAMA ORGANISASI</th>
            <th style="text-align: center; background-color: #3B9AE1 ; color: white;">NAMA BIDANG</th>
            <th width="350px" colspan="2" style="text-align:center; background-color: #3B9AE1; color: white;">NAMA PENGURUS</th>
            <th style="background-color: #3B9AE1 ; color: white; text-align: center;">NO. HP</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 0;
        foreach ($modelOrmas as $v) {
            $no++;
        ?>

            <tr id="trow_<?= $no ?>">
                <td width="50px" style="text-align: center;" class="text-center"><?= $no ?></td>
                <td style="text-align: center; width: 185px;"><?= $v['nama_organisasi'] ?></td>
                <td style="text-align: center; "><?= $v['nama_bidang'] ?></td>
                <td width="100px" style="text-align:left; width : 10%">
                    Ketua
                    <br>
                    Sekretaris
                    <br>
                    Bendahara
                </td>
                <td width="250px" style="text-align: left; width : 100px">
                    <?= $v['nama_ketua'] ?><br>
                    <?= $v['nama_sekretaris'] ?><br>
                    <?= $v['nama_bendahara'] ?><br>

                </td>
                <td style="text-align: center ;"><?= $v['nomor_hp'] ?></td>


            </tr>
        <?php
        }
        ?>
    </tbody>
</table>