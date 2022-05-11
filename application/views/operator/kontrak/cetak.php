<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>
<h3> Laporan Data Kontrak Karyawan SHI tanggal : <?= date('d F Y'); ?> </h3>
<?php if(!$tglawal && !$tglakhir && !$kontrak){?>
<?php } else {?>
    <h3> Periode : <?= date('d F Y', strtotime($tglawal))?> s/d <?= date('d F Y', strtotime($tglakhir))?></h3>
<?php }?>

 <table id="example" class="display" border="1" width="100%">
    <thead>
        <tr style="text-align: center">
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Join</th>
            <th>Kontrak 1</th>
            <th>Kontrak 2</th>
            <th>Kontrak 1</th>
            <th>Kontrak 2</th>
            <th>Kontrak 1</th>
            <th>Kontrak 2</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; 
        if(is_array($kontrak1)){
            foreach($kontrak1 as $user ) { ?> 
        <tr>
            <th style="color: black; text-align: center"><?= $user['nik']?></th>
            <th style="color: black; text-align: center"><?= $user['nama']?></th>
            <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['tgl_join']))?></th>
            <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt1_2']))?></th>
                <?php if($user['kt2_1']=="1970-01-01" && $user['kt2_2']=="1970-01-01" && $user['kt3_1']=="1970-01-01" && $user['kt3_2']=="1970-01-01" && $user['kt4_1']=="1970-01-01" && $user['kt4_2']=="1970-01-01" && $user['kt5_1']=="1970-01-01" && $user['kt5_2']=="1970-01-01" && $user['kt6_1']=="1970-01-01" && $user['kt6_2']=="1970-01-01") {?>
                    <th style="color: black; text-align: center">-</th>
                    <th style="color: black; text-align: center">-</th>
                    <th style="color: black; text-align: center">-</th>
                    <th style="color: black; text-align: center">-</th>
                    <th style="color: black; text-align: center">-</th>
                <?php }else if($user['kt3_1']=="1970-01-01" && $user['kt3_2']=="1970-01-01" && $user['kt4_1']=="1970-01-01" && $user['kt4_2']=="1970-01-01" && $user['kt5_1']=="1970-01-01" && $user['kt5_2']=="1970-01-01" && $user['kt6_1']=="1970-01-01" && $user['kt6_2']=="1970-01-01" ){?>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt2_2']))?></th>
                    <th style="color: black; text-align: center">-</th>
                    <th style="color: black; text-align: center">-</th>
                    <th style="color: black; text-align: center">-</th>
                    <th style="color: black; text-align: center">-</th>
                <?php }else if($user['kt4_1']=="1970-01-01" && $user['kt4_2']=="1970-01-01" && $user['kt5_1']=="1970-01-01" && $user['kt5_2']=="1970-01-01" && $user['kt6_1']=="1970-01-01" && $user['kt6_2']=="1970-01-01" ) {?>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt2_2']))?></th>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt3_2']))?></th>
                    <th style="color: black; text-align: center">-</th>
                    <th style="color: black; text-align: center">-</th>
                    <th style="color: black; text-align: center">-</th>
                <?php }else if($user['kt5_1']=="1970-01-01" && $user['kt5_2']=="1970-01-01" && $user['kt6_1']=="1970-01-01" && $user['kt6_2']=="1970-01-01"){?>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt2_2']))?></th>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt3_2']))?></th>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt4_2']))?></th>
                    <th style="color: black; text-align: center">-</th>
                    <th style="color: black; text-align: center">-</th>
                <?php }else if($user['kt6_1']=="1970-01-01" && $user['kt6_2']=="1970-01-01"){?>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt2_2']))?></th>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt3_2']))?></th>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt4_2']))?></th>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt5_2']))?></th>
                    <th style="color: black; text-align: center">-</th>
                <?php }else {?>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt2_2']))?></th>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt3_2']))?></th>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt4_2']))?></th>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt5_2']))?></th>
                    <th style="color: black; text-align: center"><?= date('d F Y', strtotime($user['kt6_2']))?></th>
                <?php }?>
                <?php if($kontrak=='kt1_2'){?>
                    <th style="color: black; text-align: center">
                        <?php 
                            $awal = date_create($user['kt1_2']);
                            $akhir = date_create();
                            $selisih = $awal->diff($akhir);
                            if($akhir > $awal){
                                echo '-';
                            }else{
                                echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                        }
                        ?>
                    </th>
                <?php }else if($kontrak=='kt2_2'){?>
                    <th style="color: black; text-align: center">
                        <?php 
                            $awal = date_create($user['kt2_2']);
                            $akhir = date_create();
                            $selisih = $awal->diff($akhir);
                            if($akhir > $awal){
                                echo '-';
                            }else{
                                echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                        }
                        ?>
                    </th>
                <?php }else if($kontrak=='kt3_2'){?>
                    <th style="color: black; text-align: center">
                        <?php 
                            $awal = date_create($user['kt3_2']);
                            $akhir = date_create();
                            $selisih = $awal->diff($akhir);
                            if($akhir > $awal){
                                echo '-';
                            }else{
                                echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                        }
                        ?>
                    </th>
                <?php }else if($kontrak=='kt4_2'){?>
                    <th style="color: black; text-align: center">
                        <?php 
                            $awal = date_create($user['kt4_2']);
                            $akhir = date_create();
                            $selisih = $awal->diff($akhir);
                            if($akhir > $awal){
                                echo '-';
                            }else{
                                echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                        }
                        ?>
                    </th>
                <?php }else if($kontrak=='kt5_2'){?>
                    <th style="color: black; text-align: center">
                        <?php 
                            $awal = date_create($user['kt5_2']);
                            $akhir = date_create();
                            $selisih = $awal->diff($akhir);
                            if($akhir > $awal){
                                echo '-';
                            }else{
                                echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                        }
                        ?>
                    </th>
                <?php }else{?>
                    <th style="color: black; text-align: center">
                        <?php 
                            $awal = date_create($user['kt6_2']);
                            $akhir = date_create();
                            $selisih = $awal->diff($akhir);
                            if($akhir > $awal){
                                echo '-';
                            }else{
                                echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                        }
                        ?>
                    </th>
        <?php }?>
        </tr>
            <?php $i++;}} ?>
    </tbody>
</table>