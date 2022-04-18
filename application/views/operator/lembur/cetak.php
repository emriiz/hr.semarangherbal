<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>
<h3> Laporan Data Karyawan SHI : <?= date('d F Y'); ?> </h3>
<h3> Periode : <?= date('d-m-Y', strtotime($tglawal))?> s/d <?= date('d-m-Y', strtotime($tglakhir))?></h3>
<table border="1" width="100%">
    <thead>
      <tr style="text-align: center">
          <th>No</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Tanggal</th>
          <th>Jam Awal</th>
          <th>Jam Akhir</th>
          <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach($lembur as $lbr ) { ?> 
      <tr style="text-align: center; color: black">
          <th><?= $i?></th>
          <th><?php echo $lbr['nik']?></th>
          <th><?php echo $lbr['nama']?></th>
          <th><?php echo date('d-m-Y', strtotime($lbr['tanggal']))?></th>
          <th><?php echo date('H:i:s', strtotime($lbr['jam_awal']))?></th>
          <th><?php echo date('H:i:s', strtotime($lbr['jam_akhir']))?></th>
          <th><?php echo $lbr['keterangan']?></th>
      </tr> 
      <!-- -->
      <?php $i++;} ?>
      <!-- -->
    </tbody>
</table>