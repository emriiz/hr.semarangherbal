 <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                           
                    
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $title?></a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="<?= base_url('admin/user/edit/'.$user->id_user)?>" method="post">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" style="color: black">NIK
                                                     <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" value="<?= $user->nik?>">
                                                    </div>
                                                </div>
                                                 <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" style="color: black">Nama 
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?= $user->nama?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" style="color: black">Email 
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="email" class="form-control" name="email" placeholder="example@gmail.com" value="<?= $user->email?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-5 col-form-label" style="color: black">Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control"  name="password" placeholder="Password minimal 3 huruf" value="<?= set_value('password')?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-5 col-form-label" style="color: black">Konfirmasi Password <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" name="password" placeholder="Ketik Ulang Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-5 col-form-label" style="color: black">Hak Akses
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control" name="hak_akses">
                                                            <option value="1"<?php if($user->hak_akses=="1"){echo 'selected';}?>>Admin</option>
                                                            <option value="2"<?php if($user->hak_akses=="2"){echo 'selected';}?>>HR</option>
                                                            <option value="3"<?php if($user->hak_akses=="3"){echo 'selected';}?>>5R</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" style="text-align: center">
                                                <button type="submit" class="btn btn-rounded btn-primary">Simpan</button>
                                                <button type="reset" class="btn btn-rounded btn-dark">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>