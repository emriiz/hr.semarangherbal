 <div class="content-body">
            <div class="container-fluid">
                <?php if($this->uri->segment(3) == "") { ?>
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Operator</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $title?></a></li>
                        </ol>
                    </div>
                </div>
                <?php }?>
                <div class="row">
                     <div class="col-12">
                        <div class="card">
                            <form method="GET" action="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <select name="kontrak" class="form-control">
                                            <option name="">-- Pilih Kontrak --</option>
                                            <option value="kt1_2">Kontrak 1 Pertama</option>
                                            <option value="kt2_2">Kontrak 2 Pertama</option>
                                            <option value="kt3_2">Kontrak 1 Kedua</option>
                                            <option value="kt4_2">Kontrak 2 Kedua</option>
                                            <option value="kt5_2">Kontrak 1 Ketiga</option>
                                            <option value="kt6_2">Kontrak 2 Ketiga</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <input type="date" class="form-control" name="tglawal">
                                    </div>
                                    <div class="col-1 mt-2" style="text-align: center;">
                                        <label style="color:black">s.d</label>
                                    </div>
                                    <div class="col-2">
                                        <input type="date" class="form-control" name="tglakhir">
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-success btn-sm">Cari</button>
                                        <?php
                                            $kontrak  = $this->input->get('kontrak'); 
                                            $tglawal  = $this->input->get('tglawal');
                                            $tglakhir = $this->input->get('tglakhir');
                                        ?>
                                        <?php if($tglawal && $tglakhir && $kontrak){?>
                                            <a href="<?= base_url('Operator/Kontrak/export?kontrak=' . $kontrak . '&tglawal=' . $tglawal . '&tglakhir=' . $tglakhir);?>" class="btn btn-secondary btn-sm">Export</a>
                                        <?php }else{?>
                                            <a href="<?= base_url('Operator/Kontrak/export')?>" class="btn btn-secondary btn-sm">Export</a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; 
                                            if(is_array($kontrak1)){
                                                foreach($kontrak1 as $user ) { ?> 
                                            <tr>
                                                <th style="color: black; text-align: center"><?= $user['nik']?></th>
                                                <th style="color: black; text-align: center"><?= $user['nama']?></th>
                                                <th style="color: black; text-align: center"><?= date('d-m-Y', strtotime($user['tgl_join']))?></th>
                                                <th style="color: black; text-align: center">
                                                    <?php 
                                                        $awal = new DateTime($user['kt1_1']);
                                                        $akhir = new DateTime($user['kt1_2']);
                                                        $selisih = $awal->diff($akhir);
                                                        echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                    ?>
                                                </th>
                                                <?php if($user['kt2_1']=="1970-01-01" && $user['kt2_2']=="1970-01-01" && $user['kt3_1']=="1970-01-01" && $user['kt3_2']=="1970-01-01" && $user['kt4_1']=="1970-01-01" && $user['kt4_2']=="1970-01-01" && $user['kt5_1']=="1970-01-01" && $user['kt5_2']=="1970-01-01" && $user['kt6_1']=="1970-01-01" && $user['kt6_2']=="1970-01-01") {?>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                <?php }else if($user['kt3_1']=="1970-01-01" && $user['kt3_2']=="1970-01-01" && $user['kt4_1']=="1970-01-01" && $user['kt4_2']=="1970-01-01" && $user['kt5_1']=="1970-01-01" && $user['kt5_2']=="1970-01-01" && $user['kt6_1']=="1970-01-01" && $user['kt6_2']=="1970-01-01" ){?>
                                                     <th style="color: black; text-align: center">
                                                         <?php 
                                                            $awal = new DateTime($user['kt2_1']);
                                                            $akhir = new DateTime($user['kt2_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                     </th>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                <?php }else if($user['kt4_1']=="1970-01-01" && $user['kt4_2']=="1970-01-01" && $user['kt5_1']=="1970-01-01" && $user['kt5_2']=="1970-01-01" && $user['kt6_1']=="1970-01-01" && $user['kt6_2']=="1970-01-01" ) {?>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt2_1']);
                                                            $akhir = new DateTime($user['kt2_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt3_1']);
                                                            $akhir = new DateTime($user['kt3_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                <?php }else if($user['kt5_1']=="1970-01-01" && $user['kt5_2']=="1970-01-01" && $user['kt6_1']=="1970-01-01" && $user['kt6_2']=="1970-01-01"){?>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt2_1']);
                                                            $akhir = new DateTime($user['kt2_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt3_1']);
                                                            $akhir = new DateTime($user['kt3_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt4_1']);
                                                            $akhir = new DateTime($user['kt4_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                <?php }else if($user['kt6_1']=="1970-01-01" && $user['kt6_2']=="1970-01-01"){?>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt2_1']);
                                                            $akhir = new DateTime($user['kt2_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt3_1']);
                                                            $akhir = new DateTime($user['kt3_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari';; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt4_1']);
                                                            $akhir = new DateTime($user['kt4_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt5_1']);
                                                            $akhir = new DateTime($user['kt5_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">-</th>
                                                <?php }else {?>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt2_1']);
                                                            $akhir = new DateTime($user['kt2_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt3_1']);
                                                            $akhir = new DateTime($user['kt3_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt4_1']);
                                                            $akhir = new DateTime($user['kt4_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt5_1']);
                                                            $akhir = new DateTime($user['kt5_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                    <th style="color: black; text-align: center">
                                                        <?php 
                                                            $awal = new DateTime($user['kt6_1']);
                                                            $akhir = new DateTime($user['kt6_2']);
                                                            $selisih = $awal->diff($akhir);
                                                            echo $selisih->m .' Bulan '. $selisih->d .' Hari'; 
                                                        ?>
                                                    </th>
                                                <?php }?>
                                            </tr>
                                             <?php $i++;}} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>