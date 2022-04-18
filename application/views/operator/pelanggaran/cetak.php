<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>
<h3> Laporan Data Pelanggaran Karyawan SHI : <?= date('d F Y'); ?> </h3>
<?php if(!$tglawal && !$tglakhir){?>
<?php } else {?>
    <h3> Periode : <?= date('d F Y', strtotime($tglawal))?> s/d <?= date('d F Y', strtotime($tglakhir))?></h3>
<?php }?>

<table border="1" width="100%">
    <thead>
        <tr style="text-align: center">
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Sanksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($pelanggaran as $plg ) { ?> 
        <tr style="text-align: center; color: black">
            <th><?php echo $plg['nik']?></th>
            <th><?php echo $plg['nama']?></th>
            <th><?php echo date('d-m-Y', strtotime($plg['tgl_pelanggaran']))?></th>
            <th><?php echo $plg['keterangan']?></th>
            <th><?php echo $plg['sanksi']?></th>
        </tr> 
        <!-- -->
        <?php $i++;} ?>
        <!-- -->
    </tbody>
</table>