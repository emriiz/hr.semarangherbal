<div class="content-body" style="margin-bottom: -500px">
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
        echo form_open_multipart(base_url('operator/ijin/add/'.$karyawan->id_karyawan));
         ?>
        <div class="card">
        	<div class="card-body">
        		<div class="row">
                <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label style="color: black;">Tanggal</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <input type="date" class="form-control" name="tgl_ijin" value="<?php echo set_value('tgl_ijin') ?>">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label style="color: black;">Jenis Ijin</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <select class="ijin" name="jenis_ijin" class="form-control" >
                              <option value="">--Pilih Jenis Ijin--</option>
                              <option value="Sakit">Sakit</option>
                              <option value="Tidak Masuk Kerja">Tidak Masuk Kerja</option>
                              <option value="Dinas">Dinas</option>
                              <option value="Pribadi 2 Jam">Pribadi 2 Jam</option>
                              <option value="Pribadi Setengah Hari">Pribadi Setengah Hari</option>
                            </select>
                        </div>
                      </div>
                    </div>

                     <div class="sembunyikan">
                       <div class="row">
                          <div class="col-md-2">
                            <div class="form-group">
                              <label style="color: black;">Jam Awal</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                               <input type="time" class="form-control" name="jam_awal" value="<?php echo set_value('jam_awal') ?>">
                            </div>
                          </div>
                           <div class="col-md-2">
                            <div class="form-group">
                              <label style="color: black;">Jam Akhir</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                               <input type="time" class="form-control" name="jam_akhir" value="<?php echo set_value('jam_akhir') ?>">
                            </div>
                          </div>
                        </div>
                     </div> 
                      <div class="form-group row">
                        <label class="col-md-2 col-form-label" style="color: black;">Keterangan</label>
                         <div class="col-md-10 p-0 text-center">
                           <input type="text" class="form-control" name="keterangan" value="<?php echo set_value('keterangan')?>">
                         </div>
                      </div>
                      <div class="col-md-12" style="text-align: center">
                         <input type="submit" name="submit" class="btn btn-primary btn-primary" style="width: 80px" value="Simpan">&nbsp
                         <a href="<?php echo base_url()?>operator/ijin" class="btn btn-danger btn-danger" style="width: 80px"> Batal</a>
                      </div>
                    </div>
            </div>
        	</div>
        </div>
        <?php echo form_close();?>
    </div>
</div>
<?php include('list.php')?>