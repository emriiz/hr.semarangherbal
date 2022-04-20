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
                     <div class="col-12">
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
                          <div class="card-body">
                                <form method="GET" action="">  
                                <div class="row">
                                    <div class="col-3">
                                        <input type="date" class="form-control" name="tglawal">
                                    </div>
                                    <div class="col-3">
                                        <input type="date" class="form-control" name="tglakhir">
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-success btn-sm">Cari</button>
                                         <?php 
                                            $tglawal  = $this->input->get('tglawal');
                                            $tglakhir = $this->input->get('tglakhir');
                                        ?>
                                        <?php if($tglawal && $tglakhir){?>
                                            <a href="<?= base_url('operator/karyawan/export?tglawal=' . $tglawal . '&tglakhir=' . $tglakhir);?>" class="btn btn-secondary btn-sm">Export</a>
                                        <?php }else{?>
                                            <a href="<?= base_url('operator/karyawan/export')?>" class="btn btn-secondary btn-sm">Export</a>
                                        <?php }?>  
                                    </div>
                               </form>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>#</th>
                                                <th width="30%">Foto</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Tanggal Resign</th>
                                                <th>Alasan resign</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                             <?php $i=1; foreach($karyawan as $user){?>
                                            <tr style="text-align: center">
                                                <td style="color: black"><?= $i ?></td>
                                                 <?php if(($user['foto'])== NULL){?>
                                                    <td><img src="<?php echo base_url();?>assets/images/default.jpg" width="20%"></td>
                                                  <?php }else{?>
                                                    <td><img src="<?php echo base_url();?>assets/foto/<?php echo $user->foto;?>" width="60"></td>
                                                  <?php }?>
                                                <td style="color: black"><?= $user['nik']; ?></td>
                                                <td style="color: black"><?= $user['nama'] ?></td>
                                                <td style="color: black"><?= $user['jabatan'] ?></td>
                                                <td style="color: black"><?= date('d-m-Y', strtotime($user['tgl_resign']))?></td>
                                                <td style="color: black"><?= $user['resign'] ?></td>
                                                <td><a href="<?= base_url('operator/karyawan/detail/'.$user['id_karyawan'])?>" class="btn btn-info" value="Detail"><i class="fa fa-eye"></i></a></td>
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