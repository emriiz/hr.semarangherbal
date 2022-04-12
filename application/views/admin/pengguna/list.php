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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Data User</a></li>
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
                                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                echo '</div>';
                            } else if($this->session->flashdata('success')){
                                echo '<div class="alert alert-success alert-dismissible fade show"> ';
                                echo $this->session->flashdata('success');
                                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                echo '</div>';
                            }
                        ?>      
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>#</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                             <?php $i=1; foreach($user as $pengguna){?>
                                            <tr style="text-align: center">
                                                <td style="color: black"><?= $i ?></td>
                                                <td style="color: black"><?= $pengguna->nik ?></td>
                                                <td style="color: black"><?= $pengguna->nama ?></td>
                                                <td style="color: black"><?= $pengguna->email ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/user/edit/'.$pengguna->id_user)?>" class="btn btn-primary btn-sm" value="Edit"><i class="fa fa-pencil"></i></a>
                                                     <a href="" class="btn btn-danger btn-sm" value="Hapus"><i class="fa fa-trash"></i></a>
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