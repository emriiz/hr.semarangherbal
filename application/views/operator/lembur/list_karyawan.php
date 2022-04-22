 <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
        
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Operator</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Cuti</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $title?></a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                     <div class="col-12">
                        <div class="card">
                        <?php
                        if ($this->session->flashdata('alert')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show"> ';
                                echo $this->session->flashdata('alert');
                                echo '</div>';
                            } else if($this->session->flashdata('success')){
                                echo '<div class="alert alert-success alert-dismissible fade show"> ';
                                echo $this->session->flashdata('success');
                                echo '</div>';
                            }
                        ?>   
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>#</th>
                                                <th>Foto</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th width="20%">Aksi</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                             <?php $i=1; foreach($karyawan as $user){?>
                                            <tr style="text-align: center">
                                                <td style="color: black"><?= $i ?></td>
                                                <?php if(($user->foto)== NULL){?>
                                                    <td><img src="<?php echo base_url();?>assets/images/default.jpg" width="20%"></td>
                                                  <?php }else{?>
                                                    <td><img src="<?php echo base_url();?>assets/foto/<?php echo $user->foto;?>" width="60"></td>
                                                  <?php }?>
                                                <td style="color: black"><?= $user->nik ?></td>
                                                <td style="color: black"><?= $user->nama ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('Operator/Lembur/add/'.$user->id_karyawan);?>" class="btn btn-secondary">Pilih</a>
                                                </td>
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