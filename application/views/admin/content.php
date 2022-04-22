<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back <?= $this->session->userdata('nama');?>!</h4>
                        <!-- <p class="mb-0">Your business dashboard template</p> -->
                    </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><h4 class="jam"></h4></a></li>
                        </ol>
                    </div>
                </div>
                <!-- Unit-unit -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-users text-success border-success"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Total Karyawan</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-child text-primary border-primary"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Karyawan Pria</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('jekel', 'Laki-laki');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-female text-danger border-danger"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Karyawan Perempuan</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('jekel', 'Perempuan');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-warning border-warning"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Karyawan Tetap</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('status_karyawan', 'Tetap');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-secondary border-secondary"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Karyawan Kontrak</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('status_karyawan', 'Kontrak');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-danger border-danger"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Karyawan Resign</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('status_aktif', '2');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Atsiri</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Atsiri');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Atsiri</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Atsiri');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Ayak</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Ayak');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Bioetanol</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Bioetanol');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit GA</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'GA');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Gudang</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Gudang');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit HR</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'HR');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit IPA</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'IPA');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit IPAL</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'IPAL');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit K3</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'K3');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit LAB</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'LAB');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit LP</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'LP');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Marketing</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Marketing');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Pabrik</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Pabrik');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Pelet</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Pelet');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Produksi</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Produksi');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit QA</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'QA');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit QC</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'QC');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit R&D</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'R&D');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Finance</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Finance');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-info border-info"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Unit Teknik</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('departemen', 'Teknik');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Unit -->
                <!-- Calender -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="year-calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Calender -->
            </div>
        </div>