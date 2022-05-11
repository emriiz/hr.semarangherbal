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
                                            <a href="<?= base_url('Operator/Karyawan/exportExcel?tglawal=' . $tglawal . '&tglakhir=' . $tglakhir);?>" class="btn btn-secondary btn-sm">Export</a>
                                        <?php }else{?>
                                            <a href="<?= base_url('Operator/Karyawan/exportExcel')?>" class="btn btn-secondary btn-sm">Export</a>
                                        <?php }?>  
                                    </div>
                                </div>
                               </form>
                                
                            </div>
                        </div>
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>#</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tanggal Join</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                             <?php $i=1; foreach($karyawan as $user){?>
                                            <tr style="text-align: center">
                                                <td style="color: black"><?= $i ?></td>
                                                
                                                <td style="color: black"><?= $user['nik']; ?></td>
                                                <td style="color: black"><?= $user['nama'] ?></td>
                                                <td style="color: black"><?= date('d-m-Y', strtotime($user['tgl_join']))?></td>
                                            </tr>
                                            <?php $i++;} ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer" style="text-align: right">
                                
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>