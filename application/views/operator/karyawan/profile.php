  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4><?= $title?></h4>
                        </div>
                    </div>
                     <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('operator/karyawan')?>">< Kembali</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    <div class="profile-photo">
                                    <?php if(($karyawan->foto)== NULL){?>
                                    <img src="<?php echo base_url();?>assets/images/default.jpg" class="img-fluid rounded-circle" alt="">
                                    <?php }else{?>
                                    <img src="<?php echo base_url();?>assets/foto/<?php echo $karyawan->foto;?>" class="img-fluid rounded-circle" alt="">
                                    <?php }?>
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-12 col-sm-12 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary ml-5"><?= $karyawan->nama?></h4>
                                                        <p class="ml-5"><?= $karyawan->jabatan?> / <?= $karyawan->departemen?></p>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Tentang</a>
                                            </li>
                                            <!-- <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">Kontrak</a>
                                            </li> -->
                                            <li class="nav-item"><a href="#cuti-settings" data-toggle="tab" class="nav-link">Cuti</a>
                                            </li>
                                           <!--   <li class="nav-item"><a href="#absensi-settings" data-toggle="tab" class="nav-link">Absensi</a>
                                            </li> -->
                                             <li class="nav-item"><a href="#pelanggaran-settings" data-toggle="tab" class="nav-link">Pelanggaran</a>
                                            </li>
                                             <li class="nav-item"><a href="#lembur-settings" data-toggle="tab" class="nav-link">Lembur</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
                                                <div class="my-post-content pt-3">
                                                	 <div class="table-responsive">
                                                	 	  <div class="profile-personal-info">
                                                   
                                                    <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">NIK <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->nik?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Tempat, Tanggal Lahir <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->tmpt_lahir?>, <?= date('j F Y', strtotime($karyawan->tgl_lahir))?></span>
                                                        </div>
                                                    </div>
                                                     <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Usia <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->umur?> Tahun</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Jenis Kelamin <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->jekel?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->email?></span>
                                                        </div>
                                                    </div>
                                                     <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">No Handphone <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->cp?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Agama <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->agama?></span>
                                                        </div>
                                                    </div>
                                                     <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Status Martial <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->status_menikah?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Pendidikan Terakhir<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->pendidikan?></span>
                                                        </div>
                                                    </div>
                                                     <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Status Kerja <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->status_kerja?></span>
                                                        </div>
                                                    </div>
                                                     <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Status Karyawan <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->status_karyawan?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-8">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Lokasi Kerja<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= $karyawan->lok_kerja?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Tanggal Join<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span style="color: black"><?= date('j F Y', strtotime($karyawan->tgl_join));?></span>
                                                        </div>
                                                    </div>
                                                </div>
					                                    
					                                </div>
                                                </div>
                                            </div>
                                            <div id="about-me" class="tab-pane fade">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table style="min-width: 845px">
                                                            <thead>
                                                                <tr style="text-align: center">
                                                                    <th>No</th>
                                                                    <th>Kontrak 1</th>
                                                                    <th>Kontrak 2</th>
                                                                    <th>Kontrak 1</th>
                                                                    <th>Kontrak 2</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i=1; foreach($kontrak as $user ) { ?> 
                                                                <tr>
                                                                    <th style="color: black; text-align: center"><?= $i?></th>
                                                                    <th style="color: black; text-align: center"><?= date('d-m-Y', strtotime($user->kt1))?></th>
                                                                    <?php if(($user->kt2 && $user->kt1_1 && $user->kt2_1 )== NULL) {?>
                                                                        <th style="color: black; text-align: center">-</th>
                                                                        <th style="color: black; text-align: center">-</th>
                                                                        <th style="color: black; text-align: center">-</th>
                                                                    <?php }else{?>
                                                                        <th style="color: black; text-align: center"><?= date('d-m-Y', strtotime($user->kt2))?></th>
                                                                        <th style="color: black; text-align: center"><?= date('d-m-Y', strtotime($user->kt1_1))?></th>
                                                                        <th style="color: black; text-align: center"><?= date('d-m-Y', strtotime($user->kt2_1))?></th>
                                                                    <?php }?>
                                                                </tr>
                                                                 <?php $i++;} ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="cuti-settings" class="tab-pane fade">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table style="min-width: 845px;" >
                                                            <thead>
                                                            <tr style="text-align: center">
                                                                <th>No</th>
                                                                <th>Tanggal Cuti</th>
                                                                <th>Tanggal Akhir Cuti</th>
                                                                <th>Jumlah Hari</th>
                                                              
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php $i=1; foreach($cuti as $user ) { ?> 
                                                            <tr style="text-align: center; color: black">
                                                                <th><?= $i?></th>
                                                                <th><?php echo date('d-m-Y', strtotime($user->tgl_awal))?></th>
                                                                <th><?php echo date('d-m-Y', strtotime($user->tgl_akhir))?></th>
                                                                <th><?php echo $user->jml_hari?></th>
                                                            </tr>   
                                                          <!-- -->
                                                          <?php $i++;} ?>
                                                          <!-- -->
                                                        </tbody>   
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="absensi-settings" class="tab-pane fade">
                                                
                                            </div>
                                            <div id="pelanggaran-settings" class="tab-pane fade">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="display" style="min-width: 845px">
                                                           <thead>
                                                              <tr style="text-align: center">
                                                                <th>No</th>
                                                                <th>Tanggal</th>
                                                                <th>Keterangan</th>
                                                                <th>Sanksi</th>
                                                              </tr>
                                                          </thead>
                                                          <tbody>
                                                             <?php $i=1; foreach($pelanggaran as $plg ) { ?> 
                                                            <tr style="text-align: center; color: black">
                                                              <th><?= $i?></th>
                                                              <th><?php echo date('d-m-Y', strtotime($plg->tgl_pelanggaran))?></th>
                                                              <th><?php echo $plg->keterangan?></th>
                                                              <th><?php echo $plg->sanksi?></th>
                                                              
                                                            </tr> 
                                                            <!-- -->
                                                            <?php $i++;} ?>
                                                            <!-- -->
                                                          </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="lembur-settings" class="tab-pane fade">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="display" style="min-width: 845px">
                                                          <thead>
                                                              <tr style="text-align: center">
                                                                <th>No</th>
                                                                <th>Tanggal</th>
                                                                <th>Jam Awal</th>
                                                                <th>Jam Akhir</th>
                                                              </tr>
                                                          </thead>
                                                          <tbody>
                                                            <?php $i=1; foreach($lembur as $lbr ) { ?> 
                                                            <tr style="text-align: center; color: black">
                                                              <th><?= $i?></th>
                                                              <th><?php echo date('d-m-Y', strtotime($lbr->tanggal))?></th>
                                                              <th><?php echo date('H:i:s', strtotime($lbr->jam_awal))?></th>
                                                              <th><?php echo $lbr->jam_akhir?></th>
                                                            </tr> 
                                                            <!-- -->
                                                            <?php $i++;} ?>
                                                            <!-- -->
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
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->