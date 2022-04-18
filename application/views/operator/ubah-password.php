<div class="content-body">
	<div class="container-fluid">
		 <div class="row page-titles mx-0">
              <div class="col-sm-6 p-md-0">
                  <div class="welcome-text">
                           
                  </div>
              </div>
              <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Password</a></li>
                  </ol>
              </div>
          </div>
          <div class="row">
          	<div class="col-md-12">
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
          				<form action="<?= base_url('operator/home/ubah_password')?>" method="POST" accept-charset="utf-8">
          					<div class="row">
          						<div class="col-md-3">
          							<label style="color: black"><b>Password Lama</b><sup style="color: red">*</sup></label>
          						</div>
          						<div class="col-md-9">
          							<input type="password" name="pass_lama" class="form-control" value="<?php echo set_value('pass_lama')?>" required>
          						</div>
          					</div>
          					<div class="row">
          						<div class="col-md-3">
          							<label style="color: black"><b>Password Baru</b><sup style="color: red">*</sup></label>
          						</div>
          						<div class="col-md-9">
          							<input type="password" name="new_password" class="form-control" value="<?php echo set_value('new_password')?>">
          						</div>
          					</div>
          					<div class="row">
          						<div class="col-md-3">
          							<label style="color: black"><b>Konfirmasi Password Baru</b><sup style="color: red">*</sup></label>
          						</div>
          						<div class="col-md-9">
          							<input type="password" name="conf_pass" class="form-control" value="<?php echo set_value('conf_pass')?>">
          						</div>
          					</div>
          					<div class="row mt-3">
          						<div class="col-12" style="text-align: center">
          							<button type="submit" class="btn btn-secondary">Simpan</button>
          							<a href="<?= base_url('operator/home')?>" class="btn btn-dark ml-1">Kembali</a>
          						</div>
          					</div>
          				</form>
          			</div>
          		</div>
          	</div>
          </div>
	</div>

</div>