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


<table border="0">

    <tr>
        <td style="padding : 100px;" width="250px">Nama Organisasi</td>
        <td><?= $modelOrmas[0]['nama_organisasi'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>Nama Bidang</td>
        <td><br><br><br><?= $modelOrmas[0]['nama_bidang'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>Nomor Akte Pendirian</td>
        <td><br><br><br><?= $modelOrmas[0]['no_akte_pendirian'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>Nomor SK. Kepengurusan</td>
        <td><br><br><br><?= $modelOrmas[0]['no_sk_kepengurusan'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>NO. SKT</td>
        <td><br><br><br><?= $modelOrmas[0]['no_induk'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>NO. Keberadaan</td>
        <td><br><br><br><?= $modelOrmas[0]['no_keberadaan'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>Nama Ketua</td>
        <td><br><br><br><?= $modelOrmas[0]['nama_ketua'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>Nama Sekretaris</td>
        <td><br><br><br><?= $modelOrmas[0]['nama_sekretaris'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>Nama Bendahara</td>
        <td><br><br><br><?= $modelOrmas[0]['nama_bendahara'] ?></td>
    </tr>

    <tr>
        <td><br><br>Berakhirnya<br></td>
        <td><br><br><br><?= $modelOrmas[0]['berakhirnya'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>Alamat</td>
        <td><br><br><br><?= $modelOrmas[0]['alamat'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>Tahun</td>
        <td><br><br><br><?= $modelOrmas[0]['tahun'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>Email</td>
        <td><br><br><br><?= $modelOrmas[0]['email'] ?></td>
    </tr>

    <tr>
        <td><br><br><br>Nomor Hp</td>
        <td><br><br><br><?= $modelOrmas[0]['nomor_hp'] ?></td>
    </tr>

</table>