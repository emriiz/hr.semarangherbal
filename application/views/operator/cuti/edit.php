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
        echo form_open_multipart(base_url('operator/cuti/edit/'.$cuti->id_cuti));
         ?>
        <div class="card">
        	<div class="card-body">
        		<div class="row">
              <div class="col-md-12">
                <!-- /.form-group NIK -->
                <div class="form-group row">
                  <label class="col-md-2 col-form-label" style="color: black">Tanggal Awal</label>
                    <div class="col-md-10 p-0 text-center">
                       <input type="date" class="form-control" name="tgl_awal" value="<?php echo $cuti->tgl_awal?>">
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label" style="color: black">Tanggal Akhir</label>
                    <div class="col-md-10 p-0 text-center">
                        <input type="date" class="form-control" name="tgl_akhir" value="<?php echo $cuti->tgl_akhir?>">
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label" style="color: black">Jumlah Hari</label>
                    <div class="col-md-10 p-0 text-center">
                        <input type="text" class="form-control" name="jml_hari" value="<?php echo $cuti->jml_hari?>">
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label" style="color: black">Keterangan</label>
                    <div class="col-md-10 p-0 text-center">
                      <input type="text" class="form-control" name="keterangan" value="<?php echo $cuti->keterangan?>">
                    </div>
                </div>

                <div class="col-md-12" style="text-align: center">
                    <input type="submit" name="submit" class="btn btn-primary" style="width: 80px" value="Simpan">&nbsp
                    <a href="<?php echo base_url()?>operator/cuti" class="btn btn-danger btn-danger" style="width: 80px"> Batal</a>
                </div>
              </div>
            </div>
        	</div>
        </div>
        <?php echo form_close();?>
    </div>
</div>