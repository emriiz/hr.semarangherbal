<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sistem Informasi HRGA-K3</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon"  href="<?= base_url()?>assets/images/logo-shi2.png">
     <!-- Datatable -->
    <link href="<?= base_url()?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="<?= base_url()?>assets/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> -->
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
                            <a href="./app-profile.html" class="dropdown-item">
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
                    <li><a href="<?= base_url('admin/home')?>" aria-expanded="false">
                        <i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li>

                   
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon icon-single-04"></i><span class="nav-text">User</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/user')?>">Data User</a></li>
                            <li><a href="<?= base_url('admin/user/tambah')?>">Tambah Data</a></li> 
                        </ul>
                    </li>
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
                <p style="color: black">V.1.00</p>
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

     <script>
     window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
    }, 2000);
  </script>

</body>

</html>