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
                    
                        </div> 
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
                                                <th>Status</th>
                                                <?php if($this->uri->segment(3) == "") { ?>
                                                <th width="10%"> Aksi</th>
                                                <?php }?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($kontrak as $user ) { ?> 
                                            <tr>
                                                <th style="color: black; text-align: center"><?= $user->nik?></th>
                                                <th style="color: black; text-align: center"><?= $user->nama?></th>
                                                <th style="color: black; text-align: center"><?= date('d-m-Y', strtotime($user->tgl_join))?></th>
                                                <th style="color: black; text-align: center"><?= date('d-m-Y', strtotime($user->kt1))?></th>
                                                <?php if(($user->kt2=="1970-01-01" && $user->kt1_1=="1970-01-01" && $user->kt2_1=="1970-01-01" )) {?>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                    <th style="color: black; text-align: center">-</th>
                                                <?php }else{?>
                                                    <th style="color: black; text-align: center"><?= date('d-m-Y', strtotime($user->kt2))?></th>
                                                    <th style="color: black; text-align: center"><?= date('d-m-Y', strtotime($user->kt1_1))?></th>
                                                    <th style="color: black; text-align: center"><?= date('d-m-Y', strtotime($user->kt2_1))?></th>
                                                <?php }?>
                                                <th style="color: black; text-align: center"></th>
                                                <?php if($this->uri->segment(3) == "") { ?>
                                                <th>
                                                    <a href="<?php echo base_url('operator/kontrak/edit/'.$user->id_kontrak)?>" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                                                    <?php include('delete.php')?>
                                                </th>
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