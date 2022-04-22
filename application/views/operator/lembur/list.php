 <div class="content-body">
            <div class="container-fluid">
                <?php if($this->uri->segment(3) == "") { ?>
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        
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
                            <?php if($this->uri->segment(3) == "") { ?>
                              <?php }else {?>
                              <p style="color: black">Jumlah <?php echo $title?> : <b><?= $jml;?></b> kali  <??></p>
                             <?php }?>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                      <thead>
                                          <tr style="text-align: center">
                                              <!-- <th>No</th> -->
                                              <th>NIK</th>
                                              <th>Nama</th>
                                              <th>Tanggal</th>
                                              <th>Jam Awal</th>
                                              <th>Jam Akhir</th>
                                              <!-- <th>Yang Dikerjakan</th> -->
                                            <?php if($this->uri->segment(3) == "") { ?>
                                              <th>Aksi</th>
                                            <?php }?>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php $i=1; foreach($lembur as $lbr ) { ?> 
                                        <tr style="text-align: center; color: black">
                                         <!--  <th><?= $i?></th> -->
                                          <th><?php echo $lbr->nik?></th>
                                          <th>
                                            <a href="<?php echo base_url('Operator/Lembur/add/'.$lbr->id_karyawan)?>" style="color: blue">
                                            <?php echo $lbr->nama?>
                                            <i class="fa fa-link"></i>
                                            </a>
                                          </th>
                                          <th><?php echo date('d-m-Y', strtotime($lbr->tanggal))?></th>
                                          <th><?php echo date('H:i:s', strtotime($lbr->jam_awal))?></th>
                                          <th><?php echo $lbr->jam_akhir?></th>
                                          <!-- <th><?php echo $lbr->keterangan?></th> -->
                                        <?php if($this->uri->segment(3) == "") { ?>
                                          <th>
                                            <a href="<?php echo base_url('Operator/Lembur/edit/'.$lbr->id_lembur)?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                            <?php include('delete.php')?>
                                          </th>
                                        <?php }?>
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