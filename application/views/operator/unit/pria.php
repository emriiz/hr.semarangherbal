 <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4><?= $title?></h4>
                            <!-- <p class="mb-0">Your business dashboard template</p> -->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Operator</a></li>
                             <li class="breadcrumb-item"><a href="javascript:void(0)">Unit</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $judul?></a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>#</th>
                                                <th width="30%">Foto</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                             <?php $i=1; foreach($pria as $user){?>
                                            <tr style="text-align: center">
                                                <td style="color: black"><?= $i ?></td>
                                                 <?php if(($user->foto)== NULL){?>
                                                    <td><img src="<?php echo base_url();?>assets/images/default.jpg" width="20%"></td>
                                                  <?php }else{?>
                                                    <td><img src="<?php echo base_url();?>assets/foto/<?php echo $user->foto;?>" width="60"></td>
                                                  <?php }?>
                                                <td style="color: black"><?= $user->nik ?></td>
                                                <td style="color: black"><?= $user->nama ?></td>
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