<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>
<h3> Laporan Data Karyawan : <?= date('d F Y'); ?> </h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Join</th>
        </tr>
    </thead>
    <tbody>
       <?php $i=1; foreach($karyawan as $user){?>
        <tr style="text-align: center">
            <td style="color: black"><?= $i ?></td>
            <td style="color: black"><?= $user['nik']; ?></td>
            <td style="color: black"><?= $user['nama'] ?></td>
            <td style="color: black"><?= date('d-m-Y', strtotime($user['tgl_join']))?></td>
        </tr>
        <?php $i++;} ?>
    </tbody>

</table>