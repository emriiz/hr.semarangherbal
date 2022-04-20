<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back <?= $this->session->userdata('nama');?>!</h4>
                    <!-- <p class="mb-0">Your business dashboard template</p> -->
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Operator</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $title?></a></li>
                </ol>
            </div>
        </div>

        <div class="row">
        	<div class="col-md-12">
        		<div class="card">
        			<?php
                        if ($this->session->flashdata('alert')) {
                                echo '<div class="alert alert-danger solid alert-dismissible fade show"> ';
                                echo $this->session->flashdata('alert');
                                echo '</div>';
                            } else if($this->session->flashdata('success')){
                                echo '<div class="alert alert-success solid alert-dismissible fade show"> ';
                                echo $this->session->flashdata('success');
                                echo '</div>';
                            }
                        ?>  
        			<div class="card-header">
        			<?= form_open_multipart('operator/absensi/uploaddata') ?>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="form-control-file" id="importexcel" name="importexcel" accept=".xlsx,.xls">  
                            </div>
                             <div class="input-group-prepend">
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </div>
                    <?= form_close(); ?>   
        			</div>
        			<div class="card-body">
        				 <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>#</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Duty On</th>
                                                <th>Duty Off</th>
                                                <th>Jam Masuk</th>
                                                <th>Jam Pulang</th>
                                                <th>Shift</th>
                                                <th>Kehadiran</th>
                                                <th>Jenis Ijin</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php $i=1; foreach($absensi as $user){?>
                                            <tr style="text-align: center">
                                                <td style="color: black"><?= $i ?></td>
                                                <td style="color: black"><?= $user['nik']?></td>
                                                <td style="color: black"><?= $user['nama'] ?></td>
                                                <td style="color: black"><?= date('d F Y', strtotime($user['tgl']))?></td>
                                                <?php if(($user['wh_in']=="00:00" && $user['wh_off']=="00:00" )){?>
                                                	<td style="color: black">-</td>
                                                	<td style="color: black">-</td>
                                                <?php }else{ ?>
                                                	<td style="color: black"><?= date('H:i', strtotime($user['wh_in'])) ?></td>
                                                	<td style="color: black"><?= date('H:i', strtotime($user['wh_off'])) ?></td>
                                                <?php }?>
                                                <?php if(($user['a_duty_on']=="0000-00-00 00:00:00" && $user['a_duty_off']=="0000-00-00 00:00:00" )){?>
                                                	<td style="color: black">-</td>
                                                	<td style="color: black">-</td>
                                                <?php }else{ ?>
                                                	<td style="color: black"><?= date('H:i', strtotime($user['a_duty_on'])) ?></td>
                                                	<td style="color: black"><?= date('H:i', strtotime($user['a_duty_off'])) ?></td>
                                                <?php }?>

                                                <td style="color: black"><?= $user['wh_shift'] ?></td>

                                                <?php if(($user['a_code']=='')){?>
                                                	<td style="color: black">-</td>
                                                <?php }else{?>
                                                	<td style="color: black"><?= $user['a_code'] ?></td>
                                                <?php }?>

                                                 <?php if(($user['permit']==null)){?>
                                                	<td style="color: black">-</td>
                                                <?php }else{?>
                                                	<td style="color: black"><?= $user['permit'] ?></td>
                                                <?php }?>

                                                <?php if(($user['permit_on']=="0000-00-00 00:00:00" && $user['permit_off']=="0000-00-00 00:00:00" )){?>
                                                	<td style="color: black">-</td>
                                                	<td style="color: black">-</td>
                                                <?php }else{ ?>
                                                	<td style="color: black"><?= date('d F Y H:i', strtotime($user['permit_on'])) ?></td>
                                                	<td style="color: black"><?= date('d F Y H:i', strtotime($user['permit_off'])) ?></td>
                                                <?php }?>

                                                <?php if(($user['a_code'] ==null)){?>
                                                	<td style="color: black">-</td>
                                                <?php } else if(($user['a_code'] == 'X'))  {?>
                                                	<td><a href="#" class="badge badge-rounded badge-danger">Alpha</a></td>
                                                <?php }else{?>
                                                    <?php if(($user['a_duty_on'] <= $user['wh_in'])){?>
                                                     <td><a href="#" class="badge badge-rounded badge-success">Tepat Waktu</a></td>
                                                    <?php }else if(($user['a_duty_on'] > $user['wh_in'])){?>
                                                         <td><a href="#" class="badge badge-rounded badge-warning">Terlambat</a></td>
                                                    <?php }?>
                                                <?php }?>
                                               
                                            </tr>
                                            <?php $i++;} ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
        			</div>
        		</div>
        	</div>
        </div>
	</div>
	
</div>