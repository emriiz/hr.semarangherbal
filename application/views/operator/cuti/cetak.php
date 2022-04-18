<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>
<h3> Laporan Data Cuti Karyawan SHI : <?= date('d F Y'); ?> </h3>
<?php if(!$tglawal && !$tglakhir){?>
<?php } else {?>
    <h3> Periode : <?= date('d F Y', strtotime($tglawal))?> s/d <?= date('d F Y', strtotime($tglakhir))?></h3>
<?php }?>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Cuti</th>
    </thead>
    <tbody>
       <?php $i=1; foreach($cuti as $ct){?>
        <tr style="text-align: center">
            <td style="color: black"><?= $i ?></td>
            <td style="color: black"><?= $ct['nik']; ?></td>
            <td style="color: black"><?= $ct['nama'] ?></td>
            <td style="color: black"><?= date('d-m-Y', strtotime($ct['tgl_awal']))?></td>
        </tr>
        <?php $i++;} ?>
    </tbody>

</table>