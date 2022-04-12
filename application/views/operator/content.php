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
                        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                        </ol> -->
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
                                    <div class="stat-digit"><?= $totalKaryawan?></div>
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
                                    <div class="stat-text">Referral</div>
                                    <div class="stat-digit">2,781</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                </div>
                <div class="row">
                </div>
            </div>
        </div>