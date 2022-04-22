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
                                            <a href="<?= base_url('Operator/Pelanggaran/export?tglawal=' . $tglawal . '&tglakhir=' . $tglakhir);?>" class="btn btn-secondary btn-sm">Export</a>
                                        <?php }else{?>
                                            <a href="<?= base_url('Operator/Pelanggaran/export')?>" class="btn btn-secondary btn-sm">Export</a>
                                        <?php }?> 
                                    </div>
                                </div>
                              </form> 
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
                                          </tr>
                                      </thead>
                                      <tbody>
                                         <?php $i=1; foreach($pelanggaran as $plg ) { ?> 
                                        <tr style="text-align: center; color: black">
                                          <th><?php echo date('d-m-Y', strtotime($plg['tgl_pelanggaran']))?></th>
                                          <th><?php echo $plg['no_surat']?></th>
                                          <th><?php echo $plg['nik']?></th>
                                          <th><?php echo $plg['nama']?></th>
                                          <th><?php echo $plg['keterangan']?></th>
                                          <th><?php echo $plg['sanksi']?></th>
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