<div class="content-body" style="margin-bottom: -420px">
    <div class="container-fluid">
    	<div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
    				      <p style="color: black"><?= $title?></p>
                </div>
            </div>
        </div>
        <?php
        echo form_open_multipart(base_url('Operator/Pelanggaran/add/'.$karyawan->id_karyawan));
         ?>
        <div class="card">
        	<div class="card-body">
        		<div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-2 col-form-label" style="color: black">Tanggal</label>
                    <div class="col-md-10 p-0 text-center">
                      <input type="date" class="form-control" name="tgl_pelanggaran" value="<?php echo set_value('tgl_pelanggaran')?>">
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2 col-form-label" style="color: black">No Surat</label>
                    <div class="col-md-10 p-0 text-center">
                      <input type="text" class="form-control" name="no_surat" value="<?php echo set_value('no_surat')?>" placeholder=".../60/SPIII/HRD/SHI/.../20">
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2 col-form-label" style="color: black">Keterangan</label>
                    <div class="col-md-10 p-0 text-center">
                      <input type="text" class="form-control" name="keterangan" value="<?php echo set_value('keterangan')?>" >
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2 col-form-label" style="color: black">Sanksi</label>
                    <div class="col-md-10 p-0 text-center">
                      <select name="sanksi" class="form-control" id="single-select">
                          <option value="" style="color: black">--Pilih Sanksi--</option>
                          <option value="STT1" style="color: black">STT 1</option>
                          <option value="STT2" style="color: black">STT 1</option>
                          <option value="STT3" style="color: black">STT 1</option>
                          <option value="SP1" style="color: black">SP 1</option>
                          <option value="SP2" style="color: black">SP 2</option>
                          <option value="SP3" style="color: black">SP 3</option>
                          <option value="Skorsing" style="color: black">Skorsing</option>
                          <option value="Tertulis" style="color: black">Tertulis</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-12" style="text-align: center">
                    <input type="submit" name="submit" class="btn btn-primary btn-primary" style="width: 80px" value="Simpan">&nbsp
                    <a href="<?php echo base_url()?>Operator/Pelanggaran" class="btn btn-danger btn-danger" style="width: 80px"> Batal</a>
                </div>
              </div>
            </div>
        	</div>
        </div>
        <?php echo form_close();?>
    </div>
</div>
<br><br>
<?php include('list.php')?>