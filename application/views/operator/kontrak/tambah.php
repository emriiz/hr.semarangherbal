<div class="content-body" style="margin-bottom: -420px">
  <div class="container-fluid">
    	<div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
    				<p style="color: black"><?= $title?></p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                     
            </div>
        </div>
        <?php
        echo form_open_multipart(base_url('operator/kontrak/add/'.$karyawan->id_karyawan));
         ?>
        <div class="card">
        	<div class="card-body">
        		<div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                        <label class="col-md-3 col-form-label" style="color: black">Kontrak 1</label>
                         <div class="col-md-9 p-0 text-center">
                           <input type="date" class="form-control" name="kt1" value="<?php echo set_value('kt1')?>">
                         </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" style="color: black">Kontrak 2</label>
                         <div class="col-md-9 p-0 text-center">
                           <input type="date" class="form-control" name="kt2" value="<?php echo set_value('kt2')?>">
                         </div>
                      </div>          
                </div>
                <div class="col-6">
                  <div class="form-group row">
                        <label class="col-md-3 col-form-label" style="color: black">Kontrak 1</label>
                         <div class="col-md-9 p-0 text-center">
                           <input type="date" class="form-control" name="kt1_1" value="<?php echo set_value('kt1_1')?>">
                         </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" style="color: black">Kontrak 2</label>
                         <div class="col-md-9 p-0 text-center">
                           <input type="date" class="form-control" name="kt2_1" value="<?php echo set_value('kt2_1')?>">
                         </div>
                      </div>
                </div>
                <div class="col-md-12" style="text-align: center">
                    <input type="submit" name="submit" class="btn btn-primary" style="width: 80px" value="Simpan">&nbsp
                    <a href="<?php echo base_url()?>operator/kontrak" class="btn btn-danger btn-danger" style="width: 80px"> Batal</a>
                </div>
                 
            </div>
        	</div>
        </div>
        <?php echo form_close();?>
  </div>
</div>
<?php include('list.php')?>