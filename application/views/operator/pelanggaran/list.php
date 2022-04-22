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
                                echo '<div class="alert alert-danger alert-dismissible fade show"> ';
                                echo $this->session->flashdata('alert');
                                echo '</div>';
                            } else if($this->session->flashdata('success')){
                                echo '<div class="alert alert-success alert-dismissible fade show"> ';
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
                                            <th>Tanggal</th>
                                            <th>No Surat</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                            <th>Sanksi</th>
                                            <?php if($this->uri->segment(3) == "") { ?>
                                            <th width="20%">Aksi</th>
                                            <?php }?>
                                          </tr>
                                      </thead>
                                      <tbody>
                                         <?php $i=1; foreach($pelanggaran as $plg ) { ?> 
                                        <tr style="text-align: center; color: black">
                                          <th><?php echo date('d-m-Y', strtotime($plg->tgl_pelanggaran))?></th>
                                          <th><?php echo $plg->no_surat?></th>
                                          <th><?php echo $plg->nik?></th>
                                          <th>
                                            <a href="<?php echo base_url('Operator/Pelanggaran/add/'.$plg->id_karyawan)?>" style="color: blue">
                                            <?php echo $plg->nama?>
                                            <sup class="fa fa-link"></sup>
                                            </a>
                                          </th>
                                          <th><?php echo $plg->keterangan?></th>
                                          <th><?php echo $plg->sanksi?></th>
                                          <?php if($this->uri->segment(3) == "") { ?>
                                          <th>
                                              <a href="<?= base_url('Operator/Pelanggaran/edit/'.$plg->id_pelanggaran)?>" class="btn btn-secondary" value="Edit Data"><i class="fa fa-pencil"></i></a>
                                             <?php include('delete.php');?>
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