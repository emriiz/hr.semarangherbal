<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>
<h3> Laporan Data Ijin Karyawan SHI : <?= date('d F Y'); ?> </h3>
<?php if(!$tglawal && !$tglakhir){?>
<?php } else {?>
    <h3> Periode : <?= date('d F Y', strtotime($tglawal))?> s/d <?= date('d F Y', strtotime($tglakhir))?></h3>
<?php }?>

<table border="1" width="100%">
    <thead>
        <tr style="text-align: center">
            <th style="width: 5%">No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Jenis Izin</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($ijin as $ij ) { ?> 
        <tr style="text-align: center; color: black">
            <th><?php echo $i?></th>
            <th><?php echo $ij['nik']?></th>
            <th><?php echo $ij['nama']?></th>
            <th><?php echo date('d-m-Y', strtotime($ij['tgl_ijin']))?></th>
            <th><?php echo $ij['jenis_ijin']?></th>
            <th><?php echo $ij['keterangan']?></th> 
        </tr>   
    <?php $i++;} ?>
    </tbody>
</table>