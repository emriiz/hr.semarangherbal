 <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                          <h4><?= $title?></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('operator/karyawan')?>">Operator</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Edit</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $karyawan->nama?></a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <?php echo form_open_multipart(base_url('operator/karyawan/edit/'.$karyawan->id_karyawan));?>
                                        <div class="row">
                                        <!-- Row Kiri -->
                                          <div class="col-md-6">
                                            <!-- /.form-group NIK -->
                                            <div class="form-group">
                                              <label style="color: black">NIK</label>
                                              <input type="text" class="form-control" name="nik" value="<?php echo $karyawan->nik?>" placeholder="Masukkan NIK">
                                            </div>
                                            <!-- /.form-group NAMA -->
                                            <div class="form-group">
                                              <label style="color: black">Nama</label>
                                              <input type="text" class="form-control" name="nama" value="<?php echo $karyawan->nama?>" placeholder="Masukkan Nama">
                                            </div>
                                            <!-- /.form-group Upload Foto -->
                                            <div class="form-group">
                                               <label style="color: black">Foto</label>
                                                  <input class="form-control" name="foto" type="file" value="<?php echo set_value('foto') ?>">      
                                            </div>
                                             <!-- /.form-group TTL -->
                                           <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label style="color: black">Tempat Lahir</label>
                                                  <input type="text" class="form-control" name="tmpt_lahir" value="<?php echo $karyawan->tmpt_lahir ?>" placeholder="Masukkan Tempat Lahir">
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label style="color: black">Tanggal Lahir</label>
                                                  <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $karyawan->tgl_lahir ?>">
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Form Group Usia -->
                                            <div class="form-group">
                                              <label style="color: black">Usia</label>
                                              <input type="text" class="form-control" name="umur" value="<?php echo $karyawan->umur?>" placeholder="Masukkan Usia">
                                            </div>
                                            <!--Form Group Jenis Kelamin-->
                                             <div class="form-group">
                                                <label style="color: black">Jenis Kelamin</label>
                                                <select name="jekel" class="form-control select2" style="width: 100%;">
                                                  <option>--Pilih Jenis Kelamin--</option>
                                                  <option value="Laki-laki" <?php if($karyawan->jekel=="Laki-laki"){echo 'selected';}?>>Laki-laki</option>
                                                  <option value="Perempuan" <?php if($karyawan->jekel=="Perempuan"){echo 'selected';}?>>Perempuan</option>
                                                </select>
                                              </div>
                                            <!-- /.form-group Agama -->
                                            <div class="form-group">
                                                <label style="color: black">Agama</label>
                                                <select name="agama" class="form-control select2" style="width: 100%;">
                                                  <option>--Pilih Data Agama--</option>
                                                  <option value="Islam" <?php if($karyawan->agama=="Islam"){echo 'selected';}?>>Islam</option>
                                                  <option value="Kristen" <?php if($karyawan->agama=="Kristen"){echo 'selected';}?>>Kristen</option>
                                                  <option value="Katolik" <?php if($karyawan->agama=="Katolik"){echo 'selected';}?>>Katolik</option>
                                                  <option value="Hindu" <?php if($karyawan->agama=="Hindu"){echo 'selected';}?>>Hindu</option>
                                                  <option value="Budha" <?php if($karyawan->agama=="Budha"){echo 'selected';}?>>Budha</option>
                                                </select>
                                              </div>
                                            <!-- /.form-group Pendidikan -->
                                              <div class="form-group">
                                                <label style="color: black">Pendidikan Terakhir</label>
                                                <select name="pendidikan" class="form-control select2" style="width: 100%;">
                                                  <option>--Pilih Pendidikan--</option>
                                                  <option value="SD" <?php if($karyawan->pendidikan=="SD"){echo 'selected';}?>>SD</option>
                                                  <option value="SMP" <?php if($karyawan->pendidikan=="SMP"){echo 'selected';}?>>SMP</option>
                                                  <option value="SMA" <?php if($karyawan->pendidikan=="SMA"){echo 'selected';}?>>SMA</option>
                                                  <option value="SMK" <?php if($karyawan->pendidikan=="SMK"){echo 'selected';}?>>SMK</option>
                                                  <option value="D1" <?php if($karyawan->pendidikan=="D1"){echo 'selected';}?>>D1</option>
                                                  <option value="D2" <?php if($karyawan->pendidikan=="D2"){echo 'selected';}?>>D2</option>
                                                  <option value="D3" <?php if($karyawan->pendidikan=="D3"){echo 'selected';}?>>D3</option>
                                                  <option value="D4" <?php if($karyawan->pendidikan=="D4"){echo 'selected';}?>>D4</option>
                                                  <option value="S1" <?php if($karyawan->pendidikan=="S1"){echo 'selected';}?>>S1</option>
                                                  <option value="S2" <?php if($karyawan->pendidikan=="S2"){echo 'selected';}?>>S2</option>
                                                  <option value="Apoteker" <?php if($karyawan->pendidikan=="Apoteker"){echo 'selected';}?>>Apoteker</option>
                                                </select>
                                              </div>
                                            <!-- /.form-group Tgl join -->
                                            <div class="form-group">
                                              <label style="color: black">Tanggal Join</label>
                                              <input name="tgl_join" type="date" class="form-control" value="<?php echo $karyawan->tgl_join?>">
                                            </div>
                                            <!-- /.form-group Tgl Tetap -->
                                            <div class="form-group">
                                              <label style="color: black">Tanggal Tetap</label>
                                              <input name="tgl_tetap" type="date" class="form-control" value="<?php echo $karyawan->tgl_tetap?>">
                                            </div>
                                            <!-- /.form-group Tgl Resign -->
                                            <div class="form-group">
                                              <label style="color: black">Tanggal Resign</label>
                                              <input name="tgl_resign" type="date" class="form-control" value="<?php echo $karyawan->tgl_resign?>">
                                            </div>
                                            <!-- /.form-group Departemen -->
                                            <div class="form-group">
                                                <label style="color: black">Departemen</label>
                                                <select name="departemen" class="form-control select2" style="width: 100%;">
                                                  <option>--Pilih Departemen--</option>
                                                  <option value="Atsiri" <?php if($karyawan->departemen=="Atsiri"){echo 'selected';}?>>Atsiri</option>
                                                  <option value="Ayak" <?php if($karyawan->departemen=="Ayak"){echo 'selected';}?>>Ayak/option>
                                                  <option value="Bioetanol" <?php if($karyawan->departemen=="Bioetanol"){echo 'selected';}?>>Bioetanol</option>
                                                  <option value="GA" <?php if($karyawan->departemen=="GA"){echo 'selected';}?>>GA</option>
                                                  <option value="Gudang" <?php if($karyawan->departemen=="Gudang"){echo 'selected';}?>>Gudang</option>
                                                  <option value="HR" <?php if($karyawan->departemen=="HR"){echo 'selected';}?>>HR</option>
                                                  <option value="HR" <?php if($karyawan->departemen=="HRGA-K3"){echo 'selected';}?>>HRGA-K3</option>
                                                  <option value="IPA" <?php if($karyawan->departemen=="IPA"){echo 'selected';}?>>IPA</option>
                                                  <option value="IPAL" <?php if($karyawan->departemen=="IPAL"){echo 'selected';}?>>IPAL</option>
                                                  <option value="K3" <?php if($karyawan->departemen=="K3"){echo 'selected';}?>>K3</option>
                                                  <option value="LAB" <?php if($karyawan->departemen=="LAB"){echo 'selected';}?>>LAB</option>
                                                  <option value="LP" <?php if($karyawan->departemen=="LP"){echo 'selected';}?>>LP</option>
                                                  <option value="Marketing" <?php if($karyawan->departemen=="Marketing"){echo 'selected';}?>>Marketing</option>
                                                  <option value="Pabrik" <?php if($karyawan->departemen=="Pabrik"){echo 'selected';}?>>Pabrik</option>
                                                  <option value="Pelet" <?php if($karyawan->departemen=="Pelet"){echo 'selected';}?>>PELET</option>
                                                  <option value="Produksi" <?php if($karyawan->departemen=="Produksi"){echo 'selected';}?>>Produksi</option>
                                                  <option value="QA" <?php if($karyawan->departemen=="QA"){echo 'selected';}?>>QA</option>
                                                  <option value="QC" <?php if($karyawan->departemen=="QC"){echo 'selected';}?>>QC</option>
                                                  <option value="R&D" <?php if($karyawan->departemen=="R&D"){echo 'selected';}?>>R&D</option>
                                                  <option value="Teknik" <?php if($karyawan->departemen=="Teknik"){echo 'selected';}?>>Teknik</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <!-- /.form-group  Jabatan-->
                                                <div class="form-group">
                                                  <label style="color: black">Jabatan</label>
                                                  <select name="jabatan" class="form-control select2" style="width: 100%;">
                                                    <option>--Pilih Jabatan--</option>
                                                    <option value="Admin" <?php if($karyawan->jabatan=="Admin"){echo 'selected';}?>>Admin</option>
                                                    <option value="Analis"<?php if($karyawan->jabatan=="Analis"){echo 'selected';}?>>Analis</option>
                                                    <option value="Assisten Analis"<?php if($karyawan->jabatan=="Assiten Analis"){echo 'selected';}?>>Assisten Analis</option>
                                                    <option value="Assisten IPC"<?php if($karyawan->jabatan=="Assiten IPC"){echo 'selected';}?>>Assisten IPC</option>
                                                    <option value="Assisten Supervisor"<?php if($karyawan->jabatan=="Assisten Supervisor"){echo 'selected';}?>>Assisten Supervisor</option>
                                                    <option value="Cleaning Service"<?php if($karyawan->jabatan=="Cleaning Service"){echo 'selected';}?>>Cleaning Service</option>
                                                    <option value="Driver"<?php if($karyawan->jabatan=="Driver"){echo 'selected';}?>>Driver</option>
                                                    <option value="Ekstrak"<?php if($karyawan->jabatan=="Ekstrak"){echo 'selected';}?>>Ekstrak</option>
                                                    <option value="Ekspeditor"<?php if($karyawan->jabatan=="Ekspeditor"){echo 'selected';}?>>Ekspeditor</option>
                                                    <option value="Helper"<?php if($karyawan->jabatan=="Helper"){echo 'selected';}?>>Helper</option>
                                                    <option value="Koordinator"<?php if($karyawan->jabatan=="Koordinator"){echo 'selected';}?>>Koordinator</option>
                                                    <option value="Manajer"<?php if($karyawan->jabatan=="Manajer"){echo 'selected';}?>>Manajer</option>
                                                    <option value="Operator"<?php if($karyawan->jabatan=="Operator"){echo 'selected';}?>>Operator</option>
                                                    <option value="RT"<?php if($karyawan->jabatan=="RT"){echo 'selected';}?>>RT</option>
                                                    <option value="Supervisor"<?php if($karyawan->jabatan=="Supervisor"){echo 'selected';}?>>Supervisor</option>
                                                    <option value="Staff"<?php if($karyawan->jabatan=="Staff"){echo 'selected';}?>>Staff</option>
                                                    <option value="Staff HR"<?php if($karyawan->jabatan=="Staff HR"){echo 'selected';}?>>Staff HR</option>
                                                    <option value="Staff K3"<?php if($karyawan->jabatan=="Staff K3"){echo 'selected';}?>>Staff K3</option>
                                                    <option value="Teknisi"<?php if($karyawan->jabatan=="Teknisi"){echo 'selected';}?>>Teknisi</option>
                                                    <option value="IPC"<?php if($karyawan->jabatan=="IPC"){echo 'selected';}?>>IPC</option>
                                                    <option value="Accounting"<?php if($karyawan->jabatan=="Accounting"){echo 'selected';}?>>Accounting</option>
                                                    <option value="PG"<?php if($karyawan->jabatan=="PG"){echo 'selected';}?>>PG</option>
                                                    <option value="QC"<?php if($karyawan->jabatan=="QC"){echo 'selected';}?>>QC</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                 <div class="form-group">
                                                  <label style="color: black">Level Karyawan</label>
                                                  <select name="level" class="form-control select2" style="width: 100%;">
                                                    <option>--Pilih Level Karyawan--</option>
                                                    <option value="Operator Level" <?php if($karyawan->level=="Operator Level"){echo 'selected';}?>>Operator Level</option>
                                                    <option value="Unit Level" <?php if($karyawan->level=="Unit Level"){echo 'selected';}?>>Unit Level</option>
                                                    <option value="Section Head" <?php if($karyawan->level=="Section Head"){echo 'selected';}?>>Section Head</option>
                                                  </select>
                                                </div>  
                                              </div>
                                            </div>
                                            <!-- /.form-group Lokasi Kerja -->
                                            <div class="form-group">
                                                <label style="color: black">Lokasi Kerja</label>
                                                <select name="lok_kerja" class="form-control select2" style="width: 100%;">
                                                  <option>--Pilih Lokasi Kerja--</option>
                                                  <option value="Atsiri" <?php if($karyawan->lok_kerja=="Atsiri"){echo 'selected';}?>>Atsiri</option>
                                                  <option value="Ayak" <?php if($karyawan->lok_kerja=="Ayak"){echo 'selected';}?>>Ayak/option>
                                                  <option value="Bioetanol" <?php if($karyawan->lok_kerja=="Bioetanol"){echo 'selected';}?>>Bioetanol</option>
                                                  <option value="Bioseptik" <?php if($karyawan->lok_kerja=="Bioseptik"){echo 'selected';}?>>Bioseptik</option>
                                                  <option value="Boiler" <?php if($karyawan->lok_kerja=="Boiler"){echo 'selected';}?>>Boiler</option>
                                                  <option value="Cleaning Services" <?php if($karyawan->lok_kerja=="Cleaning Services"){echo 'selected';}?>>Cleaning Services</option>
                                                  <option value="Ekstrak" <?php if($karyawan->lok_kerja=="Ekstrak"){echo 'selected';}?>>Ekstrak</option>
                                                  <option value="GA" <?php if($karyawan->lok_kerja=="GA"){echo 'selected';}?>>GA</option>
                                                  <option value="Gudang" <?php if($karyawan->lok_kerja=="Gudang"){echo 'selected';}?>>Gudang</option>
                                                  <option value="HR" <?php if($karyawan->lok_kerja=="HR"){echo 'selected';}?>>HR</option>
                                                  <option value="IPA" <?php if($karyawan->lok_kerja=="IPA"){echo 'selected';}?>>IPA</option>
                                                  <option value="IPAL" <?php if($karyawan->lok_kerja=="IPAL"){echo 'selected';}?>>IPAL</option>
                                                  <option value="IPC" <?php if($karyawan->lok_kerja=="IPC"){echo 'selected';}?>>IPC</option>
                                                  <option value="K3" <?php if($karyawan->lok_kerja=="K3"){echo 'selected';}?>>K3</option>
                                                  <option value="LAB" <?php if($karyawan->lok_kerja=="LAB"){echo 'selected';}?>>LAB</option>
                                                  <option value="Laboratorium" <?php if($karyawan->lok_kerja=="Laboratorium"){echo 'selected';}?>>Laboratorium</option>
                                                  <option value="LP" <?php if($karyawan->lok_kerja=="LP"){echo 'selected';}?>>LP</option>
                                                  <option value="Marketing" <?php if($karyawan->lok_kerja=="Marketing"){echo 'selected';}?>>Marketing</option>
                                                  <option value="Pabrik" <?php if($karyawan->lok_kerja=="Pabrik"){echo 'selected';}?>>Pabrik</option>
                                                  <option value="Pelet" <?php if($karyawan->lok_kerja=="Pelet"){echo 'selected';}?>>Pelet</option>
                                                  <option value="Produksi" <?php if($karyawan->lok_kerja=="Produksi"){echo 'selected';}?>>Produksi</option>
                                                  <option value="Proper" <?php if($karyawan->lok_kerja=="Proper"){echo 'selected';}?>>Proper</option>
                                                  <option value="QA" <?php if($karyawan->lok_kerja=="QA"){echo 'selected';}?>>QA</option>
                                                  <option value="QC" <?php if($karyawan->lok_kerja=="QC"){echo 'selected';}?>>QC</option>
                                                  <option value="R&D" <?php if($karyawan->lok_kerja=="R&D"){echo 'selected';}?>>R&D</option>
                                                  <option value="Teknik" <?php if($karyawan->lok_kerja=="Teknik"){echo 'selected';}?>>Teknik</option>
                                                  <option value="Telepon" <?php if($karyawan->lok_kerja=="Telepon"){echo 'selected';}?>>Telepon</option>
                                                  <option value="Timbang" <?php if($karyawan->lok_kerja=="Timbang"){echo 'selected';}?>>Timbang</option>
                                                  <option value="Teknik" <?php if($karyawan->lok_kerja=="Teknik"){echo 'selected';}?>>Teknik</option>
                                                </select>
                                            </div>
                                            <!-- /.form-group Status Kerja -->
                                            <div class="form-group">
                                              <label style="color: black">Status Kerja Karyawan</label>
                                               <select name="status_kerja" class="form-control select2" style="width: 100%;">
                                                  <option>--Pilih Status Kerja Karyawan--</option>
                                                  <option value="Harian" <?php if($karyawan->status_kerja=="Harian"){echo 'selected';}?>>Harian</option>
                                                  <option value="Bulanan" <?php if($karyawan->status_kerja=="Bulanan"){echo 'selected';}?>>Bulanan</option>
                                               </select>
                                            </div>
                                          </div>
                                        <!-- Row Kiri -->
                                        <!-- Row Kanan -->
                                          <div class="col-md-6">
                                            <!-- /.form-group Status Karyawan -->
                                            <div class="form-group">
                                              <label style="color: black">Status Karyawan</label>
                                               <select name="status_karyawan" class="form-control select2" style="width: 100%;">
                                                  <option>--Pilih Status Karyawan--</option>
                                                  <option value="Tetap" <?php if($karyawan->status_karyawan=="Tetap"){echo 'selected';}?>>Tetap</option>
                                                  <option value="Kontrak" <?php if($karyawan->status_karyawan=="Kontrak"){echo 'selected';}?>>Kontrak</option>
                                               </select>
                                            </div>
                                            <!-- /.form-group Status Menikah -->
                                            <div class="form-group">
                                              <label style="color: black">Status Martial</label>
                                               <select name="status_menikah" id="status_menikah" class="form-control select2" style="width: 100%;">
                                                  <option>--Pilih Status--</option>
                                                  <option value="Belum Menikah" <?php if($karyawan->status_menikah=="Belum Menikah"){echo 'selected';}?>>Belum Menikah</option>
                                                  <option value="Menikah" <?php if($karyawan->status_menikah=="Menikah"){echo 'selected';}?>>Menikah</option>
                                                  <option value="Janda" <?php if($karyawan->status_menikah=="Janda"){echo 'selected';}?>>Janda</option>
                                                  <option value="Duda" <?php if($karyawan->status_menikah=="Duda"){echo 'selected';}?>>Duda</option>
                                               </select>
                                            </div>
                                             <!-- /.form-group Anak -->
                                            <div class="form-group">
                                              <label id="label1" style="color: black">Jumlah Anak</label>
                                              <input name="jml_anak" type="text" class="form-control" placeholder="Masukkan Jumlah Anak" value="<?php echo set_value('jml_anak')?>">
                                              *<small>Isi Jika Menikah/Janda/Duda</small>
                                            </div>
                                            <!-- /.form-group Alamat -->
                                            <div class="form-group">
                                              <label style="color: black">Alamat Sesuai KTP</label>
                                              <!-- <textarea class="form-control" rows="3" value="<?php echo $karyawan->alamat_ktp?>"><?php echo $karyawan->alamat_ktp?></textarea> -->
                                              <input type="text" name="alamat_ktp" class="form-control" rows="2" value="<?php echo $karyawan->alamat_ktp?>">
                                            </div>
                                            <!-- /.form-group Alamat Domisili -->
                                            <div class="form-group">
                                              <label style="color: black">Alamat Domisili</label>
                                             <!-- <textarea class="form-control" rows="3" value="<?php echo $karyawan->alamat_dom?>"><?php echo $karyawan->alamat_dom?></textarea> -->
                                             <input type="text" name="alamat_dom" class="form-control" rows="2" value="<?php echo $karyawan->alamat_dom?>">
                                            </div>
                                            <!-- /.form-group No HP -->
                                            <div class="form-group">
                                              <label style="color: black">Contact Person</label>
                                              <input name="cp" type="text" class="form-control" id="" placeholder="Masukkan No Telepon" value="<?php echo $karyawan->cp?>">
                                            </div>
                                            <!-- /.form-group Email -->
                                            <div class="form-group">
                                              <label>Email</label>
                                              <input name="email" type="email" class="form-control" placeholder="Masukkan email" value="<?php echo $karyawan->email?>">
                                            </div>
                                            <!-- /.form-group No Rekening -->
                                            <div class="form-group">
                                              <label style="color: black">No Rekening</label>
                                              <input name="rekening" type="text" class="form-control" placeholder="Masukkan No Rekening" value="<?php echo $karyawan->rekening?>">
                                            </div>
                                            <!-- /.form-group No KTP -->
                                            <div class="form-group">
                                              <label style="color: black">No KTP</label>
                                              <input name="ktp" type="text" class="form-control"  placeholder="Masukkan No KTP" value="<?php echo $karyawan->ktp?>">
                                            </div>
                                            <!-- /.form-group NPWP -->
                                            <div class="form-group">
                                              <label style="color: black">NPWP</label>
                                              <input name="npwp" type="text" class="form-control" placeholder="Masukkan No NPWP" value="<?php echo $karyawan->npwp?>">
                                            </div>
                                            <!-- /.form-group Domisili -->
                                            <div class="form-group">
                                              <label style="color: black">Domisili</label>
                                               <select name="domisili" class="form-control select2" style="width: 100%;">
                                                  <option>--Pilih Domisili--</option>
                                                  <option value="Dalam Kota" <?php if($karyawan->domisili=="Dalam Kota"){echo 'selected';}?>>Dalam Kota</option>
                                                  <option value="Luar Kota" <?php if($karyawan->domisili=="Luar Kota"){echo 'selected';}?>>Luar Kota</option>
                                               </select>
                                            </div>
                                            <!-- /.form-group Resign -->
                                            <div class="form-group">
                                              <label style="color: black">Alasan Resign</label>
                                              <input name="resign" type="text" class="form-control" id="" placeholder="Cth : . . . ." value="<?php echo $karyawan->resign?>">
                                            </div>
                                            <!-- /.form-group Resign -->
                                             <div class="form-group">
                                              <label style="color: black">Status Aktif</label>
                                               <select name="status_aktif" class="form-control select2" style="width: 100%;">
                                                  <option>--Pilih Status Karyawan--</option>
                                                  <option value="1" <?php if($karyawan->status_aktif=="1"){echo 'selected';}?>>Aktif</option>
                                                  <option value="2" <?php if($karyawan->status_aktif=="2"){echo 'selected';}?>>Non Aktif</option>
                                               </select>
                                            </div>
                                            <div class="form-group">
                                              <label style="color: black">Pekerjaan Terakhir</label>
                                              <input name="pekerjaan" class="form-control" rows="2" value="<?php echo $karyawan->pekerjaan?>">
                                            </div>
                                          </div>
                                        <!-- Row Kanan -->
                                            <div class="col-12" style="text-align: center">
                                                <button type="submit" class="btn btn-rounded btn-primary">Simpan</button>
                                                <a href="<?= base_url('operator/karyawan')?>" class="btn btn-rounded btn-dark">Kembali</a>
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