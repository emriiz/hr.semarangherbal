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
        echo form_open_multipart(base_url('operator/pelanggaran/edit/'.$pelanggaran->id_pelanggaran));
         ?>
        <div class="card">
        	<div class="card-body">
        		<div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label" style="color: black">Tanggal</label>
                        <div class="col-md-10 p-0 text-center">
                          <input type="date" class="form-control" name="tgl_pelanggaran" value="<?php echo $pelanggaran->tgl_pelanggaran?>">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label" style="color: black">Keterangan</label>
                        <div class="col-md-10 p-0 text-center">
                          <input type="text" class="form-control" name="keterangan" value="<?php echo $pelanggaran->keterangan?>">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label" style="color: black">Sanksi</label>
                        <div class="col-md-10 p-0 text-center">
                          <input type="text" class="form-control" name="sanksi" value="<?php echo $pelanggaran->sanksi?>">
                        </div>
                    </div>
                    <div class="col-md-12" style="text-align: center">
                        <input type="submit" name="submit" class="btn btn-primary btn-primary" style="width: 80px" value="Simpan">&nbsp
                        <a href="<?php echo base_url()?>operator/pelanggaran" class="btn btn-danger btn-danger" style="width: 80px"> Batal</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <?php echo form_close();?>
    </div>
</div>