<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sistem Informasi HRGA-K3</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon"  href="<?= base_url()?>assets/images/logo-shi2.png">
    <link href="<?= base_url()?>assets/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/vendor/select2/css/select2.min.css" rel="stylesheet" >
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">

     <!-- Datatable -->
    <link href="<?= base_url()?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

     <!-- Pick date -->
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/pickadate/themes/default.date.css">
    <style type="text/css" media="screen">
        .jam {
        font-size: 1em;
        border: 1px solid #d35400;
        border-radius: 5px;
        padding: 5px;
     }
    </style>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
    <a href="<?= base_url('welcome')?>" class="brand-logo">
        <span style="text-align: center">HRGA-K3</span>
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"> <?= $this->session->userdata('nama');?></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?= base_url('operator/home/ubah_password')?>" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">Ubah Password </span>
                            </a>
                            <a href="<?= base_url('login/logout')?>" class="dropdown-item">
                             <i class="fa fa-sign-out" aria-hidden="true"></i>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        <!--**********************************
            Sidebar start
        ***********************************-->
       <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a href="<?= base_url('operator/home')?>" aria-expanded="false">
                        <i class="icon icon-home"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <?php if($this->session->userdata('hak_akses')==2){?>
                    <li class="nav-label">Kelola Karyawan</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-users" aria-hidden="true"></i><span class="nav-text">Karyawan</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('operator/karyawan')?>">Data Karyawan</a></li>
                            <li><a href="<?= base_url('operator/karyawan/tambah')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('operator/karyawan/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i><span class="nav-text">Kontrak Karyawan</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('operator/kontrak')?>">Data Kontrak Karyawan</a></li>
                            <li><a href="<?= base_url('operator/kontrak/list_karyawan')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('operator/kontrak/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-calendar" aria-hidden="true"></i><span class="nav-text">Cuti</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('operator/cuti')?>">Data Cuti</a></li>
                            <li><a href="<?= base_url('operator/cuti/list')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('operator/cuti/laporan')?>">Laporan</a></li>
                            <!-- <li><a href="#">Setting</a></li> -->
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="nav-text">Izin</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('operator/ijin')?>">Data Izin</a></li>
                            <li><a href="<?= base_url('operator/ijin/list')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('operator/ijin/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('operator/absensi')?>" aria-expanded="false">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i><span class="nav-text">Absensi</span></a>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i><span class="nav-text">Pelanggaran</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('operator/pelanggaran')?>">Data Pelanggaran</a></li>
                            <li><a href="<?= base_url('operator/pelanggaran/list')?>">Tambah Data</a></li>                            
                            <li><a href="<?= base_url('operator/pelanggaran/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                     <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-calculator" aria-hidden="true"></i><span class="nav-text">Lembur</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('operator/lembur')?>">Data Lembur</a></li>
                            <li><a href="<?= base_url('operator/lembur/list')?>">Tambah Data</a></li>                            
                            <li><a href="<?= base_url('operator/lembur/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <?php }else{?>
                         <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-calendar" aria-hidden="true"></i><span class="nav-text">Cuti</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('operator/cuti')?>">Data Cuti</a></li>
                            <li><a href="<?= base_url('operator/cuti/list')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('operator/cuti/laporan')?>">Laporan</a></li>
                           <!--  <li><a href="#">Setting</a></li> -->
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="nav-text">Izin</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('operator/ijin')?>">Data Izin</a></li>
                            <li><a href="<?= base_url('operator/ijin/list')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('operator/ijin/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('operator/absensi')?>" aria-expanded="false">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i><span class="nav-text">Absensi</span></a>
                    </li>
                     <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-calculator" aria-hidden="true"></i><span class="nav-text">Lembur</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('operator/lembur')?>">Data Lembur</a></li>
                            <li><a href="<?= base_url('operator/lembur/list')?>">Tambah Data</a></li>                            
                            <li><a href="<?= base_url('operator/lembur/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <?php }?>    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
       <?php $this->load->view($page)?>
        <!--**********************************
            Content body end
        ***********************************-->
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p style="color: black">Copyright © <a href="https://www.semarangherbal.co.id/">Semarang Herbal Indoplant</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url()?>assets/vendor/global/global.min.js"></script>
    <script src="<?= base_url()?>assets/js/quixnav-init.js"></script>
    <script src="<?= base_url()?>assets/js/custom.min.js"></script>

    <script src="<?= base_url()?>assets/vendor/chartist/js/chartist.min.js"></script>

    <script src="<?= base_url()?>assets/vendor/moment/moment.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="<?= base_url()?>assets/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

     <!-- Datatable -->
    <script src="<?= base_url()?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url()?>assets/js/plugins-init/datatables.init.js"></script>

    <!-- Jquery Validation -->
    <script src="<?= base_url()?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="<?= base_url()?>assets/js/plugins-init/jquery.validate-init.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url()?>assets/vendor/select2/js/select2.full.min.js"></script>
    <script src="<?= base_url()?>assets/js/plugins-init/select2-init.js"></script>

     <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="<?= base_url()?>assets/vendor/moment/moment.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="<?= base_url()?>assets/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="<?= base_url()?>assets/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="<?= base_url()?>assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="<?= base_url()?>assets/vendor/pickadate/picker.js"></script>
    <script src="<?= base_url()?>assets/vendor/pickadate/picker.time.js"></script>
    <script src="<?= base_url()?>assets/vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="<?= base_url()?>assets/js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="<?= base_url()?>assets/js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="<?= base_url()?>assets/js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="<?= base_url()?>assets/js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="<?= base_url()?>assets/js/plugins-init/pickadate-init.js"></script>

    <script>
     window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
    }, 2000);
  </script>

  <script>
            $(document).ready(function() {
                $(function() {
                    $('.sembunyikan').hide();
         
                    $('.ijin').change(function(){
         
                        if($("option[value='Pribadi 2 Jam']").is(":checked")){
                            $('.sembunyikan').show();
         
                        }else if ($("option[value='Pribadi Setengah Hari']").is(":checked")) {
                            $('.sembunyikan').show(); 
                            }
                            else{
                                 $('.sembunyikan').hide(); 
                            }
                    });
                });
         
            });

             $(document).ready(function() {
                $(function() {
                    $('.hide').hide();
         
                    $('.status_m').change(function(){
         
                        if($("option[value='Belum Menikah']").is(":checked")){
                            $('.hide').hide();
         
                        }else {
                            $('.hide').show(); 
                            }
    
                    });
                });
         
            });
    </script>
    <script>
        function jam() {
    var time = new Date(),
        hours = time.getHours(),
        minutes = time.getMinutes(),
        seconds = time.getSeconds();
    document.querySelectorAll('.jam')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
      
    function harold(standIn) {
        if (standIn < 10) {
          standIn = '0' + standIn
        }
        return standIn;
        }
    }
    setInterval(jam, 1000);
    </script>  

</body>

</html>