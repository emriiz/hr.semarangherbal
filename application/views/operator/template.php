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
                            <a href="<?= base_url('Operator/Home/ubah_password')?>" class="dropdown-item">
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
                    <li><a href="<?= base_url('Operator/Home')?>" aria-expanded="false">
                        <i class="icon icon-home"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <?php if($this->session->userdata('hak_akses')==2){?>
                    <li class="nav-label">Kelola Karyawan</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"> 
                        <i class="fa fa-users" aria-hidden="true"></i><span class="nav-text">Kelola Karyawan</span></a>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Data Karyawan</a>
                                <ul aria-expanded="false">
                                    <li><a href="<?= base_url('Operator/Karyawan')?>">Aktif</a></li>
                                    <li><a href="<?= base_url('Operator/Karyawan/non_aktif')?>">Non Aktif</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('Operator/Karyawan/tambah')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('Operator/Karyawan/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i><span class="nav-text">Kontrak Karyawan</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Operator/Kontrak')?>">Data Kontrak Karyawan</a></li>
                            <li><a href="<?= base_url('Operator/Kontrak/list_karyawan')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('Operator/Kontrak/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-calendar" aria-hidden="true"></i><span class="nav-text">Cuti</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Operator/Cuti')?>">Data Cuti</a></li>
                            <li><a href="<?= base_url('Operator/Cuti/list')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('Operator/Cuti/laporan')?>">Laporan</a></li>
                            <!-- <li><a href="#">Setting</a></li> -->
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="nav-text">Izin</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Operator/Ijin')?>">Data Izin</a></li>
                            <li><a href="<?= base_url('Operator/Ijin/list')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('Operator/Ijin/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('Operator/Absensi')?>" aria-expanded="false">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i><span class="nav-text">Absensi</span></a>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i><span class="nav-text">Pelanggaran</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Operator/Pelanggaran')?>">Data Pelanggaran</a></li>
                            <li><a href="<?= base_url('Operator/Pelanggaran/list')?>">Tambah Data</a></li>                            
                            <li><a href="<?= base_url('Operator/Pelanggaran/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                     <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-calculator" aria-hidden="true"></i><span class="nav-text">Lembur</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Operator/Lembur')?>">Data Lembur</a></li>
                            <li><a href="<?= base_url('Operator/Lembur/list')?>">Tambah Data</a></li>                            
                            <li><a href="<?= base_url('Operator/Lembur/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <?php }else{?>
                         <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-calendar" aria-hidden="true"></i><span class="nav-text">Cuti</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Operator/Cuti')?>">Data Cuti</a></li>
                            <li><a href="<?= base_url('Operator/Cuti/list')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('Operator/Cuti/laporan')?>">Laporan</a></li>
                           <!--  <li><a href="#">Setting</a></li> -->
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="nav-text">Izin</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Operator/Ijin')?>">Data Izin</a></li>
                            <li><a href="<?= base_url('Operator/Ijin/list')?>">Tambah Data</a></li>
                            <li><a href="<?= base_url('Operator/Ijin/laporan')?>">Laporan</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('Operator/Absensi')?>" aria-expanded="false">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i><span class="nav-text">Absensi</span></a>
                    </li>
                     <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-calculator" aria-hidden="true"></i><span class="nav-text">Lembur</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Operator/Lembur')?>">Data Lembur</a></li>
                            <li><a href="<?= base_url('Operator/Lembur/list')?>">Tambah Data</a></li>                            
                            <li><a href="<?= base_url('Operator/Lembur/laporan')?>">Laporan</a></li>
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
                <p style="color: black">V.1.0</p>
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

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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

    <script type="text/javascript">
      window.onload = function () {
        var chart1 = new CanvasJS.Chart("chartContainer1", {
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
          title:{
            text: "Presentase Karyawan Berdasarkan jenis kelamin"              
          },
          data: [//array of dataSeries              
            { //dataSeries object
             /*** Change type "column" to "bar", "area", "line" or "pie"***/
             type: "pie",
             indexLabel: "{label} - {y}%",
             dataPoints: [
             { label: "Perempuan", y: <?php $this->db->select('*');
                                        $this->db->from('tbl_karyawan');
                                        $this->db->like('status_aktif', '1');
                                        $tot = $this->db->count_all_results();?>
                                        <?php $this->db->select('*');
                                        $this->db->from('tbl_karyawan');
                                        $this->db->like('jekel', 'Perempuan');
                                        $this->db->like('status_aktif', '1');
                                        $wanita = $this->db->count_all_results();
                                        $total = ($wanita/$tot)*100;
                                        echo number_format($total)?> },
             { label: "Laki-laki", y: <?php $this->db->select('*');
                                        $this->db->from('tbl_karyawan');
                                        $this->db->like('status_aktif', '1');
                                        $tot1 = $this->db->count_all_results();?> 
                                        <?php $this->db->select('*');
                                        $this->db->from('tbl_karyawan');
                                        $this->db->like('jekel', 'Laki-laki');
                                        $this->db->like('status_aktif', '1');
                                        $pria = $this->db->count_all_results();
                                        $total1 = ($pria/$tot)*100;
                                        echo number_format($total1)?> }
             ]
           }
           ]
         });
         var chart2 = new CanvasJS.Chart("chartContainer2", {
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
          title:{
            text: "Presentase Karyawan Berdasarkan Status Karyawan"              
          },
          data: [//array of dataSeries              
            { //dataSeries object
             /*** Change type "column" to "bar", "area", "line" or "pie"***/
             type: "pie",
             indexLabel: "{label} - {y}%",
             dataPoints: [
             { label: "Tetap", y: <?php $this->db->select('*');
                                    $this->db->from('tbl_karyawan');
                                    $this->db->like('status_aktif', '1');
                                    $tot = $this->db->count_all_results();?> 
                                    <?php $this->db->select('*');
                                    $this->db->from('tbl_karyawan');
                                    $this->db->like('status_karyawan', 'Tetap');
                                    $this->db->like('status_aktif', '1');
                                    $ttp = $this->db->count_all_results();
                                    $total2 = ($ttp/$tot)*100;
                                    echo number_format($total2)?> },
             { label: "Kontrak", y: <?php $this->db->select('*');
                                    $this->db->from('tbl_karyawan');
                                    $this->db->like('status_aktif', '1');
                                    $tot3 = $this->db->count_all_results();?>
                                    <?php $this->db->select('*');
                                    $this->db->from('tbl_karyawan');
                                    $this->db->like('status_karyawan', 'Kontrak');
                                    $this->db->like('status_aktif', '1');
                                    $ktk = $this->db->count_all_results();
                                    $total3 = ($ktk/$tot)*100;
                                    echo number_format($total3)?> }
             ]
           }
           ]
         });
         var chart3 = new CanvasJS.Chart("chartContainer3", {
            exportEnabled: true,
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Presentase Karyawan Berdasarkan Unit"
            },
            axisY: {
                title: "Jumlah Karyawan"
            },
            data: [{
            /*** Change type "column" to "bar", "area", "line" or "pie"***/        
                type: "pie",
                dataPoints: [      
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?>
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'Atsiri');
                        $this->db->like('status_aktif', '1');
                        $atsiri = $this->db->count_all_results();
                        $total3 = ($atsiri/$tot3)*100;
                        echo number_format($total3, '1')?>, 
                        indexLabel: "Atsiri - {y}%", label:"Atsiri " },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'Ayak');
                        $this->db->like('status_aktif', '1');
                        $ayak = $this->db->count_all_results();
                        $total3 = ($ayak/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        indexLabel: "Ayak - {y}%", label: " " },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?>  
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'Bioetanol');
                        $this->db->like('status_aktif', '1');
                        $bio= $this->db->count_all_results();
                        $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'Pelet');
                        $this->db->like('status_aktif', '1');
                        $pelet = $this->db->count_all_results();
                        $jmlh_bio = $bio+$pelet;
                        $total3 = ($jmlh_bio/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        indexLabel: "Bioetanol - {y}%", label: " " },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?>
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'Gudang');
                        $this->db->like('status_aktif', '1');
                        $gudang = $this->db->count_all_results();
                        $total3 = ($gudang/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        indexLabel: "Gudang - {y}%", label:" " },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->where('departemen', 'HR');
                        $this->db->like('status_aktif', '1');
                        $query= $this->db->count_all_results();
                        $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'GA');
                        $this->db->like('status_aktif', '1');
                        $query1 = $this->db->count_all_results();
                        $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'K3');
                        $this->db->like('status_aktif', '1');
                        $query2 =  $this->db->count_all_results();
                        $jmlh= $query+$query1+$query2;
                        $total3 = ($jmlh/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        indexLabel: "HRGA-K3 - {y}%", label :" " },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?>  
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->where('departemen', 'IPA');
                        $this->db->like('status_aktif', '1');
                        $ipa = $this->db->count_all_results();
                        $total3 = ($ipa/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        indexLabel: "IPA - {y}%", label:" " },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->where('departemen', 'IPAL');
                        $this->db->like('status_aktif', '1');
                        $ipal = $this->db->count_all_results();
                        $total3 = ($ipal/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        indexLabel: "IPAL - {y}%", label:" " },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'LP');
                        $this->db->like('status_aktif', '1');
                        $lp = $this->db->count_all_results();
                        $total3 = ($lp/$tot3)*100;
                        echo number_format($total3,"1")?>,  
                        indexLabel: "LP - {y}%", label: " " },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'Marketing');
                        $this->db->like('status_aktif', '1');
                        $marketing = $this->db->count_all_results();
                        $total3 = ($marketing/$tot3)*100;
                        echo number_format($total3,"1")?>,  
                        indexLabel: "Marketing - {y}%", label:" " },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'Pabrik');
                        $this->db->like('status_aktif', '1');
                        $pabrik = $this->db->count_all_results();
                        $total3 = ($pabrik/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        label:" ", indexLabel: "Pabrik - {y}%" },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?>  
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'Produksi');
                        $this->db->like('status_aktif', '1');
                        $produksi = $this->db->count_all_results();
                        $total3 = ($produksi/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        label:" ", indexLabel: "Produksi - {y}%" },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'QA');
                        $this->db->like('status_aktif', '1');
                        $qa = $this->db->count_all_results();
                        $total3 = ($qa/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        label:" ", indexLabel: "QA - {y}%" },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'QC');
                        $this->db->like('status_aktif', '1');
                        $qc = $this->db->count_all_results();
                        $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'LAB');
                        $this->db->like('status_aktif', '1');
                        $lab = $this->db->count_all_results();
                        $jmlh_qc = $qc+$lab;
                        $total3 = ($jmlh_qc/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        label:" ", indexLabel: "QC - {y}%" },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'R&D');
                        $this->db->like('status_aktif', '1');
                        $rnd = $this->db->count_all_results();
                        $total3 = ($rnd/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        label:" ", indexLabel: "R&D - {y}%" },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'Finance');
                        $this->db->like('status_aktif', '1');
                        $fin = $this->db->count_all_results();
                        $total3 = ($fin/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        label:" ", indexLabel: "Finance - {y}%" },
                    { y:<?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('status_aktif', '1');
                        $tot3 = $this->db->count_all_results();?> 
                        <?php $this->db->select('*');
                        $this->db->from('tbl_karyawan');
                        $this->db->like('departemen', 'Teknik');
                        $this->db->like('status_aktif', '1');
                        $teknik = $this->db->count_all_results();
                        $total3 = ($teknik/$tot3)*100;
                        echo number_format($total3,"1")?>, 
                        label:" ", indexLabel: "Teknik - {y}%" }
                ]
            }]
        });
        chart1.render();
        chart2.render();
        chart3.render();
      }
  </script>
</body>

</html>