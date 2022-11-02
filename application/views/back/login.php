<!doctype html>
<html lang="en">

    <head>
        
     <meta charset="utf-8" />
        <title>Login | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Admin" name="description" />
        <meta content="Admin" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>front_assets/images/logo.png">
  
        <!-- Bootstrap Css -->
        <link href="<?php echo base_url();?>admin_assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url();?>admin_assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url();?>admin_assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="#" class="mb-5 d-block auth-logo">
                                <img src="<?php echo base_url(); ?>front_assets/images/logo.png" alt="" width="150px" height="100" class="logo logo-dark">
                                <!-- <img src="http://localhost/mushroom/upload_images/4a9cd38fe5cb780151273f3aa4d6d72c.png" alt="" height="80" class="logo logo-light"> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                           
                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to Bar association</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form  method="POST" action="<?php echo base_url(); ?>Admin/index" >
        
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter username">
                                        </div>
                
                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="auth-recoverpw.html" class="text-muted">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                                        </div>
                
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>
                                        
                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                        </div>
            
                                        

                                      
 
                                    </form>
                                </div>
            
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <p>© 2022 | Gwella Strains  </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

       <!-- JAVASCRIPT -->
        <script src="<?php echo base_url();?>admin_assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url();?>admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>admin_assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>admin_assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url();?>admin_assets/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url();?>admin_assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url();?>admin_assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- apexcharts -->
        <script src="<?php echo base_url();?>admin_assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="<?php echo base_url();?>admin_assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>admin_assets/js/app.js"></script>

    </body>
</html>


 