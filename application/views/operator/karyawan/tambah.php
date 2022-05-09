 <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Operator</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $title?></a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <?php echo form_open_multipart(base_url('Operator/Karyawan/tambah'));?>
                                        <div class="row">
                                            <!-- Row Kiri -->
                                            <div class="col-md-6">
                                              <!-- /.form-group NIK -->
                                              <div class="form-group">
                                                <label style="color: black">NIK <small style="color: red">*</small></label>
                                                <input type="text" class="form-control" name="nik" value="<?php echo set_value('nik')?>" placeholder="Masukkan NIK" required>
                                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>')?>
                                              </div>
                                              <!-- /.form-group NAMA -->
                                              <div class="form-group">
                                                <label style="color: black">Nama<small style="color: red">*</small></label>
                                                <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama')?>" placeholder="Masukkan Nama" required>
                                              </div>
                                              <!-- /.form-group Upload Foto -->
                                              <div class="form-group">
                                                 <label style="color: black">Foto<small style="color: red">*</small></label>
                                                    <input class="form-control" name="foto" type="file" value="<?php echo set_value('foto') ?>" required>      
                                              </div>
                                               <!-- /.form-group TTL -->
                                             <div class="row">
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                    <label style="color: black">Tempat Lahir<small style="color: red">*</small></label>
                                                    <input type="text" class="form-control" name="tmpt_lahir" value="<?php echo set_value('tmpt_lahir') ?>" placeholder="Masukkan Tempat Lahir" required>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                    <label style="color: black">Tanggal Lahir<small style="color: red">*</small></label>
                                                    <input type="date" class="form-control" name="tgl_lahir" value="<?php echo set_value('tgl_lahir') ?>" required>
                                                  </div>
                                                </div>
                                              </div>
                                              <!-- Form Group Usia -->
                                              <div class="form-group">
                                                <label style="color: black">Usia<small style="color: red">*</small></label>
                                                
                                                <input type="text" class="form-control" name="umur" value="<?php echo set_value('umur')?>" placeholder="Masukkan Usia" required>
                                              </div>
                                              <!--Form Group Jenis Kelamin-->
                                               <div class="form-group">
                                                  <label style="color: black">Jenis Kelamin<small style="color: red">*</small></label>
                                                  <select  name="jekel" class="form-control select2" style="width: 100%;" required>
                                                    <option>--Pilih Jenis Kelamin--</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                  </select>
                                                </div>
                                              <!-- /.form-group Agama -->
                                              <div class="form-group">
                                                  <label style="color: black">Agama<small style="color: red">*</small></label>
                                                  <select  name="agama" class="form-control select2" style="width: 100%;" required>
                                                    <option>--Pilih Data Agama--</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                  </select>
                                                </div>
                                              <!-- /.form-group Pendidikan -->
                                                <div class="form-group">
                                                  <label style="color: black">Pendidikan Terakhir<small style="color: red">*</small></label>
                                                  <select  name="pendidikan" class="form-control select2" style="width: 100%;" required>
                                                    <option>--Pilih Pendidikan--</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="SMK">SMK</option>
                                                    <option value="D1">D1</option>
                                                    <option value="D2">D2</option>
                                                    <option value="D3">D3</option>
                                                    <option value="D4">D4</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="Apoteker">Apoteker</option>
                                                  </select>
                                                </div>
                                              <!-- /.form-group Tgl join -->
                                              <div class="form-group">
                                                <label style="color: black">Tanggal Join<small style="color: red">*</small></label>
                                                <input name="tgl_join" type="date" class="form-control" value="<?php echo set_value('tgl_join')?>" required>
                                              </div>
                                              <!-- /.form-group Tgl Tetap -->
                                              <div class="form-group">
                                                <label style="color: black">Tanggal Tetap<small style="color: red">*</small></label>
                                                <input name="tgl_tetap" type="date" class="form-control" value="<?php echo set_value('tgl_tetap')?>">
                                              </div>
                                              <!-- /.form-group Tgl Resign -->
                                              <div class="form-group">
                                                <label style="color: black">Tanggal Resign<small style="color: red">*</small></label>
                                                <input name="tgl_resign" type="date" class="form-control" value="<?php echo set_value('tgl_resign')?>">
                                              </div>
                                              <!-- /.form-group Departemen -->
                                              <div class="form-group">
                                                  <label style="color: black">Departemen<small style="color: red">*</small></label>
                                                  <select id="single-select" name="departemen" class="form-control select2" style="width: 100%;" required>
                                                    <option>--Pilih Departemen--</option>
                                                    <option value="Atsiri">Atsiri</option>
                                                    <option value="Ayak">Ayak</option>
                                                    <option value="Bioetanol">Bioetanol</option>
                                                    <option value="GA">GA</option>
                                                    <option value="Gudang">Gudang</option>
                                                    <option value="HR">HR</option>
                                                    <option value="IPA">IPA</option>
                                                    <option value="IPAL">IPAL</option>
                                                    <option value="K3">K3</option>
                                                    <option value="LAB">LAB</option>
                                                    <option value="LP">LP</option>
                                                    <option value="Marketing">Marketing</option>
                                                    <option value="Pabrik">Pabrik</option>
                                                    <option value="Pelet">PELET</option>
                                                    <option value="Produksi">Produksi</option>
                                                    <option value="QA">QA</option>
                                                    <option value="QC">QC</option>
                                                    <option value="R&D">R&D</option>
                                                    <option value="Teknik">Teknik</option>
                                                    <option value="Finance">Finance</option>
                                                    <option value="HRGA-K3">HRGA-K3</option>
                                                  </select>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <!-- /.form-group  Jabatan-->
                                                  <div class="form-group">
                                                    <label style="color: black">Jabatan<small style="color: red">*</small></label>
                                                    <select id="single-select" name="jabatan" class="form-control select2" style="width: 100%;" required>
                                                      <option>--Pilih Jabatan--</option>
                                                      <option value="Admin">Admin</option>
                                                      <option value="Analis">Analis</option>
                                                      <option value="Assisten Analis">Assisten Analis</option>
                                                      <option value="Assisten IPC">Assisten IPC</option>
                                                      <option value="Assisten Supervisor">Assiten Supervisor</option>
                                                      <option value="Cleaning Services">Cleaning Services</option>
                                                      <option value="Driver">Driver</option>
                                                      <option value="Ekstrak">Ekstrak</option>
                                                      <option value="Ekspeditor">Ekspeditor</option>
                                                      <option value="Helper">Helper</option>
                                                      <option value="Koordinator">Koordinator</option>
                                                      <option value="Manajer">Manajer</option>
                                                      <option value="Operator">Operator</option>
                                                      <option value="RT">RT</option>
                                                      <option value="Supervisor">Supervisor</option>
                                                      <option value="Staff">Staff</option>
                                                      <option value="Staff HR">Staff HR</option>
                                                      <option value="Staff K3">Staff K3</option>
                                                      <option value="Teknisi">Teknisi</option>
                                                      <option value="IPC">IPC</option>
                                                      <option value="Accounting">Accounting</option>
                                                      <option value="PG">PG</option>
                                                      <option value="PG">QC</option>
                                                    </select>
                                                  </div>  
                                                </div>
                                                <div class="col-md-6">
                                                   <!-- /.form-group  Level-->
                                                  <div class="form-group">
                                                    <label style="color: black">Level Karyawan<small style="color: red">*</small></label>
                                                    <select name="level" class="form-control select2" style="width: 100%;" required>
                                                      <option>--Pilih Level Karyawan--</option>
                                                      <option value="Operator Level">Operator Level</option>
                                                      <option value="Unit Level">Unit Level</option>
                                                      <option value="Section Head">Section Head</option>
                                                    </select>
                                                  </div>  
                                                </div>   
                                              </div>
                                            
                                              <!-- /.form-group Lokasi Kerja -->
                                              <div class="form-group">
                                                  <label style="color: black">Lokasi Kerja<small style="color: red">*</small></label>
                                                  <select id="single-select" name="lok_kerja" class="form-control select2" style="width: 100%;" required>
                                                    <option>--Pilih Lokasi Kerja--</option>
                                                    <option value="Atsiri">Atsiri</option>
                                                    <option value="Ayak">Ayak</option>
                                                    <option value="Bioetanol">Bioetanol</option>
                                                    <option value="Bioseptik">Bioseptik</option>
                                                    <option value="Boiler">Boiler</option>
                                                    <option value="Cleaning Service">Cleaning Service</option>
                                                    <option value="GA">GA</option>
                                                    <option value="Gudang">Gudang</option>
                                                    <option value="HR">HR</option>
                                                    <option value="IPA">IPA</option>
                                                    <option value="IPAL">IPAL</option>
                                                    <option value="IPC">IPC</option>
                                                    <option value="K3">K3</option>
                                                    <option value="LAB">LAB</option>
                                                    <option value="Laboratorium">Laboratorium</option>
                                                    <option value="LP">LP</option>
                                                    <option value="Marketing">Marketing</option>
                                                    <option value="Pabrik">Pabrik</option>
                                                    <option value="Pelet">PELET</option>
                                                    <option value="Produksi">Produksi</option>
                                                    <option value="Proper">Proper</option>
                                                    <option value="QA">QA</option>
                                                    <option value="QC">QC</option>
                                                    <option value="R&D">R&D</option>
                                                    <option value="Teknik">Teknik</option>
                                                    <option value="Telepon">Telepon</option>
                                                    <option value="Timbang">Timbang</option>
                                                    <option value="Teknik">Teknik</option>
                                                    <option value="Pilot Plant">Pilot Plant</option>
                                                    <option value="Menara">Menara</option>
                                                  </select>
                                              </div>
                                            </div>
                                             <!-- Row Kanan -->
                                            <div class="col-md-6">
                                              <!-- /.form-group Status Kerja -->
                                              <div class="form-group">
                                                <label style="color: black">Status Kerja Karyawan<small style="color: red">*</small></label>
                                                 <select id="single-select" name="status_kerja" class="form-control select2" style="width: 100%;" required>
                                                    <option>--Pilih Status Kerja Karyawan--</option>
                                                    <option value="Harian">Harian</option>
                                                    <option value="Bulanan">Bulanan</option>
                                                 </select>
                                              </div>
                                              <!-- /.form-group Status Karyawan -->
                                              <div class="form-group">
                                                <label style="color: black">Status Karyawan<small style="color: red">*</small></label>
                                                 <select id="single-select" name="status_karyawan" class="form-control select2" style="width: 100%;" required>
                                                    <option>--Pilih Status Karyawan--</option>
                                                    <option value="Tetap">Tetap</option>
                                                    <option value="Kontrak">Kontrak</option>
                                                 </select>
                                              </div>
                                              <!-- /.form-group Status Menikah -->
                                              <div class="form-group">
                                                <label style="color: black">Status Martial<small style="color: red">*</small></label>
                                                 <select class="status_m" name="status_menikah" id="status_menikah" class="form-control select2" style="width: 100%;" required>
                                                    <option value="#">--Pilih Status--</option>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Janda">Janda</option>
                                                    <option value="Duda">Duda</option>
                                                 </select>
                                              </div>
                                               <!-- /.form-group Anak -->
                                               <div class="hide">
                                                  <div class="form-group">
                                                    <label style="color: black">Jumlah Anak<small style="color: red">*</small></label>
                                                    <input name="jml_anak" type="text" class="form-control" placeholder="Masukkan Jumlah Anak" value="<?php echo set_value('jml_anak')?>">
                                                    *<small>Isi Jika Menikah/Janda/Duda</small>
                                                  </div>
                                               </div>
                                              <!-- /.form-group Alamat -->
                                              <div class="form-group">
                                                <label style="color: black">Alamat Sesuai KTP<small style="color: red">*</small></label>
                                                <textarea name="alamat_ktp" class="form-control" rows="2" name="alamat_ktp" value="<?php echo set_value('alamat_ktp')?>" required></textarea>
                                              </div>
                                              <!-- /.form-group Alamat Domisili -->
                                              <div class="form-group">
                                                <label style="color: black">Alamat Domisili<small style="color: red">*</small></label>
                                                <textarea name="alamat_dom" class="form-control" rows="2" name="alamat_dom" value="<?php echo set_value('alamat_dom')?>" required></textarea>
                                              </div>
                                              <!-- /.form-group No HP -->
                                              <div class="form-group">
                                                <label style="color: black">Contact Person<small style="color: red">*</small></label>
                                                <input name="cp" type="text" class="form-control" id="" placeholder="Masukkan No Telepon" value="<?php echo set_value('cp')?>" required>
                                              </div>
                                              <!-- /.form-group Email -->
                                              <div class="form-group">
                                                <label style="color: black">Email<small style="color: red">*</small></label>
                                                <input name="email" type="email" class="form-control" placeholder="Masukkan email" value="<?php echo set_value('email')?>" required>
                                              </div>
                                              <!-- /.form-group No Rekening -->
                                              <div class="form-group">
                                                <label style="color: black">No Rekening<small style="color: red">*</small></label>
                                                <input name="rekening" type="text" class="form-control" placeholder="Masukkan No Rekening" value="<?php echo set_value('rekening')?>">
                                              </div>
                                              <!-- /.form-group No KTP -->
                                              <div class="form-group">
                                                <label style="color: black">No KTP<small style="color: red">*</small></label>
                                                <input name="ktp" type="text" class="form-control"  placeholder="Masukkan No KTP" value="<?php echo set_value('ktp')?>" required>
                                              </div>
                                              <!-- /.form-group NPWP -->
                                              <div class="form-group">
                                                <label style="color: black">NPWP<small style="color: red">*</small></label>
                                                <input name="npwp" type="text" class="form-control" placeholder="Masukkan No NPWP" value="<?php echo set_value('npwp')?>">
                                              </div>
                                              <!-- /.form-group Domisili -->
                                              <div class="form-group">
                                                <label style="color: black">Domisili<small style="color: red">*</small></label>
                                                 <select name="domisili" class="form-control select2" style="width: 100%;" required>
                                                    <option>--Pilih Domisili--</option>
                                                    <option value="Dalam Kota">Dalam Kota</option>
                                                    <option value="Luar Kota">Luar Kota</option>
                                                 </select>
                                              </div>
                                              <!-- /.form-group Resign -->
                                              <div class="form-group">
                                                <label style="color: black">Alasan Resign<small style="color: red">*</small></label>
                                                <input name="resign" type="text" class="form-control" id="" placeholder="Cth : . . . ." value="<?php echo set_value('resign')?>">
                                              </div>
                                              <!-- /.form-group Resign -->
                                              <div class="form-group">
                                                <label style="color: black">Pekerjaan Terakhir<small style="color: red">*</small></label>
                                                <textarea name="pekerjaan" class="form-control" rows="2" value="<?php echo set_value('pekerjaan')?>"></textarea>
                                              </div>
                                            </div>
                                          <!-- Row Kanan -->
                                            <div class="col-12" style="text-align: center">
                                                <button type="submit" class="btn btn-rounded btn-primary">Simpan</button>
                                                <button type="reset" class="btn btn-rounded btn-dark">Batal</button>
                                            </div>
                                        </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>