<div class="content-body" >
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
        echo form_open_multipart(base_url('Operator/Kontrak/edit/'.$kontrak->id_kontrak));
         ?>
        <div class="card">
          <div class="card-body">
            <div class="row">
                <div class="col-12">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label" style="color: black">Kontrak 1</label>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt1_1" value="<?php echo $kontrak->kt1_1?>">
                      </div>
                      <div class="col-md-1 p-0 text-center">
                        <p style="color:black">s.d</p>
                      </div>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt1_2" value="<?php echo $kontrak->kt1_2?>">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label" style="color: black">Kontrak 2</label>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt2_1" value="<?php echo $kontrak->kt2_1?>">
                      </div>
                      <div class="col-md-1 p-0 text-center">
                        <p style="color:black">s.d</p>
                      </div>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt2_2" value="<?php echo $kontrak->kt2_2?>">
                      </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label" style="color: black">Kontrak 1</label>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt3_1" value="<?php echo $kontrak->kt3_1?>">
                      </div>
                      <div class="col-md-1 p-0 text-center">
                        <p style="color:black">s.d</p>
                      </div>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt3_2" value="<?php echo $kontrak->kt3_2?>">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label" style="color: black">Kontrak 2</label>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt4_1" value="<?php echo $kontrak->kt4_1?>">
                      </div>
                      <div class="col-md-1 p-0 text-center">
                        <p style="color:black">s.d</p>
                      </div>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt4_2" value="<?php echo $kontrak->kt4_2?>">
                      </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label" style="color: black">Kontrak 1</label>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt5_1" value="<?php echo $kontrak->kt5_1?>">
                      </div>
                      <div class="col-md-1 p-0 text-center">
                        <p style="color:black">s.d</p>
                      </div>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt5_2" value="<?php echo $kontrak->kt5_2?>">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label" style="color: black">Kontrak 2</label>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt6_1" value="<?php echo $kontrak->kt6_1?>">
                      </div>
                      <div class="col-md-1 p-0 text-center">
                        <p style="color:black">s.d</p>
                      </div>
                      <div class="col-md-3 p-0 text-center">
                        <input type="date" class="form-control" name="kt6_2" value="<?php echo $kontrak->kt6_2?>">
                      </div>
                  </div>
                </div>
                <div class="col-md-12" style="text-align: center">
                    <input type="submit" name="submit" class="btn btn-primary" style="width: 80px" value="Simpan">&nbsp
                    <a href="<?php echo base_url()?>Operator/Kontrak" class="btn btn-danger btn-danger" style="width: 80px"> Batal</a>
                </div>
                 
            </div>
          </div>
        </div>
        <?php echo form_close();?>
  </div>
</div>

