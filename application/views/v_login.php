
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Sistem Informasi HRGA-K3 </title>
    <!-- Favicon icon -->
    <link rel="shortcut icon"  href="<?= base_url()?>assets/images/logo-shi2.png">
    <!-- <link rel="icon" type="image/png" sizes="16x16"> -->
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4"><?= $title?></h4>
                                    <?php
                                       if ($this->session->flashdata('alert')) {
                                              echo '<div class="alert alert-danger alert-dismissible fade show"> ';
                                              echo $this->session->flashdata('alert');
                                              echo '</div>';
                                            } else if($this->session->flashdata('success')){
                                              echo '<div class="alert alert-success alert-dismissible fade show"> ';
                                              echo $this->session->flashdata('success');
                                              echo '</div>';
                                            }
                                     ?>  
                                    <form method="post" action="<?php echo base_url('login/proses')?>">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">@</span>
                                              <input class="form-control" name="email" type="email"  value="<?= set_value('email')?>" required placeholder="example@gmail.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                              <input type="password" class="form-control" name="password" placeholder="Masukkan Password" value="<?= set_value('password')?>">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url()?>assets/vendor/global/global.min.js"></script>
    <script src="<?= base_url()?>assets/js/quixnav-init.js"></script>
    <script src="<?= base_url()?>assets/js/custom.min.js"></script>
    <script>
     window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
    }, 2000);
  </script>

</body>

</html>