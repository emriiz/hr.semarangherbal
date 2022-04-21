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
                        <!-- <span class="jam"></span> -->
                       <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><h4 class="jam"></h4></a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Karyawan</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-child" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text"> Pria</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('jekel', 'Laki-laki');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></span></h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-female" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text"> Wanita</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('jekel', 'Perempuan');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></span></h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-link text-danger border-danger"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Tetap</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('status_karyawan', 'Tetap');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Kontrak</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('status_karyawan', 'Kontrak');
                                                            $this->db->like('status_aktif', '1');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Resign</div>
                                    <div class="stat-digit"><?php $this->db->select('*');
                                                            $this->db->from('tbl_karyawan');
                                                            $this->db->like('status_aktif', '2');
                                                            echo $this->db->count_all_results();?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">-</div>
                                    <div class="stat-digit">-</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">-</div>
                                    <div class="stat-digit">-</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <div class="year-calendar"></div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                </div>
            </div>
        </div>