<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>
        <?php echo config_item('company_name') ?> | Login
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>media/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="<?php echo base_url() ?>media/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="<?php echo base_url() ?>media/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="<?php echo base_url() ?>media/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <div class="account-pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="text-center mb-4">
                        <a href="<?php echo base_url() ?>" class="auth-logo">
                            <img src="<?php echo base_url() ?>media/images/logo-dark.png" alt="Logo Dark" width="20%" class="auth-logo-dark">
                            <img src="<?php echo base_url() ?>media/images/logo-light.png" alt="Logo Light" width="20%" class="auth-logo-light">
                        </a>
                        <p class="font-size-15 text-muted mt-2">Sign in to <b>start</b> your session</p>
                    </div>
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4"id="getMass">

                                    <div>
                                        <h5 class="text-primary">Forgot Password</h5>
                                    </div>
                                    <?php
                                    if ($_REQUEST['msg'] == 'invalid') {
                                        echo '<div class="alert alert-warning">
                                                Invalid Login Details!! Please Check Username, Password
                                            </div>';
                                    }elseif($this->uri->segment(2) == 'logout'){
                                        echo '<div class="alert alert-success">
                                                😎 Log Out Successfully ! 😎.
                                            </div>';
                                    }
                                    ?>
                                    <div class="mt-4 pt-3">
                                        <form action="javaScript:void(0);"  id="forget_pass" method="POST" data-id="<?php echo base_url('login/forgot'); ?>">

                                            <div class="mb-3">
                                                <label for="username" class="fw-semibold">Email Id</label>
                                                <span style="color:red;float:right;display:none;" id="errRemail"></span>
                                                <input type="email" class="form-control" name="email" placeholder="Enter Email Id">
                                            </div>

                                            <div class="mb-3 mb-4">
                                                <label for="userpassword" class="fw-semibold">Mobile Number</label>
                                                <span style="color:red;float:right;display:none;" id="errRmobile"></span>
                                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number">
                                            </div>
                                           

                                            <div class="row align-items-center">
                                               
                                                <div class="col-6">
                                                    <div class="text-end">
                                                        <a href="<?php echo base_url();?>login" class="text-muted"><span class="float-start"><i class="mdi mdi-lock me-1"></i>Login Now</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-6 float-end">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit" id="btn-reset">Reset Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4 bg-auth-for h-100 d-none d-lg-block">
                                    <div class="bg-overlay"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end card -->
                    <div class="mt-4 text-center">
                        <p>© <?php echo date('Y') ?> <b><?php echo config_item('company_name') ?></b>.
                        </p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end account page -->


    <!-- JAVASCRIPT -->
    <script src="<?php echo base_url() ?>media/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>media/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>media/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>media/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url() ?>media/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo base_url() ?>media/js/app.js"></script>
    <script>
        
        $("#forget_pass").on("submit", function(e) {
            e.preventDefault();
            let target = $(this).attr('data-id');
            $.ajax({
                url: target,
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function() {
                    $('#btn-reset').html('Please Wait.....');
                },
                complete: function() {
                    $('#btn-reset').html('Reset Password');
                },
                dataType: 'json',
                success: function(data) {

                    if (data.icon == 'errorText')
					{
						if(data.text.email!=""){$("#errRemail").html(data.text.email).fadeIn().delay(3000).fadeOut();}
						if(data.text.mobile!=""){$("#errRmobile").html(data.text.mobile).fadeIn().delay(3000).fadeOut();}
                        
                    } 
					 else if (data.icon == 'error')
					{
                        $("#heading").hide();
						$("#getMass").html(data.text).show();
                    }
					
					else{
                        $("#heading").hide();
                        $("#getMass").html(data.text).show();
                    }
                }
            });
        });

    </script>
</body>

</html>