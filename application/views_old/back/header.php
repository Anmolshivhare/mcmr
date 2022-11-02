<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Gwella Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Holy trip advisor Admin" name="description" />
      <meta content="Holy trip advisor" name="author" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="<?php echo base_url();?>admin_assets/images/favicon.ico">
      <!-- DataTables -->
      <link href="<?php echo base_url();?>admin_assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url();?>admin_assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <!-- Responsive datatable examples -->
      <link href="<?php echo base_url();?>admin_assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <!-- Bootstrap Css -->
      <link href="<?php echo base_url();?>admin_assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="<?php echo base_url();?>admin_assets/css/icons.min.css" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="<?php echo base_url();?>admin_assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- <body data-layout="horizontal" data-topbar="colored"> -->
      <!-- Begin page -->

      <div id="layout-wrapper">
      <header id="page-topbar">
         <div class="navbar-header">
            <div class="d-flex">
               <!-- LOGO -->
               <div class="navbar-brand-box">
                  <a href="<?php echo base_url();?>" class="logo logo-dark">
                  <span class="logo-sm">
                  <img src="http://localhost/mushroom/upload_images/4a9cd38fe5cb780151273f3aa4d6d72c.png" alt="" height="40">
                  </span>
                  <span class="logo-lg">
                  <img src="http://localhost/mushroom/upload_images/4a9cd38fe5cb780151273f3aa4d6d72c.png" alt="" height="65">
                  </span>
                  </a>
                  <a href="<?php echo base_url();?>" class="logo logo-light">
                  <span class="logo-sm">
                  <img src="http://localhost/mushroom/upload_images/4a9cd38fe5cb780151273f3aa4d6d72c.png" alt="" height="40">
                  </span>
                  <span class="logo-lg">
                  <img src="http://localhost/mushroom/upload_images/4a9cd38fe5cb780151273f3aa4d6d72c.png" alt="" height="65">
                  </span>
                  </a>
               </div>
               <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
               <i class="fa fa-fw fa-bars"></i>
               </button>
               <!-- App Search-->
               <form class="app-search d-none d-lg-block">
                  <div class="position-relative">
                     <input type="text" class="form-control" placeholder="Search...">
                     <span class="uil-search"></span>
                  </div>
               </form>
            </div>
            <div class="d-flex">
               <div class="dropdown d-inline-block d-lg-none ms-2">
                  <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="uil-search"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-search-dropdown">
                     <form class="p-3">
                        <div class="m-0">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                              <div class="input-group-append">
                                 <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
			   
			   	  <?php 
					$admin = $this->session->all_userdata() ;
					  foreach($admin as $adminview);
					 
					  ?>  
					 
			   
			   
               <div class="dropdown d-none d-lg-inline-block ms-1">
                  <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                  <i class="uil-minus-path"></i>
                  </button>
               </div>
                
               <div class="dropdown d-inline-block">
                  <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 <img class="rounded-circle header-profile-user" src="<?php echo base_url();?>upload_images/<?php echo $adminview[0]->image;?>"
                      >
                  <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"> <?php echo $adminview[0]->name;?></span>
                  <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                     <!-- item-->
                    
					<a class="dropdown-item" href="<?php echo base_url();?>admin/changepassword/1"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">Change Password</span></a>
					
					                    
                     <a class="dropdown-item" href="<?php echo base_url();?>admin/logout"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
					 
					 
                  </div>
               </div>
			   
			   
                
            </div>
         </div>
      </header>
	 
	   
	  
      <!-- ========== Left Sidebar Start ========== -->
      <div class="vertical-menu">
         <!-- LOGO -->
         <div class="navbar-brand-box">
            <a href="<?php echo base_url();?>/admin/dashboard" class="logo logo-dark">
            <span class="logo-sm">
            <img src="http://localhost/mushroom/upload_images/4a9cd38fe5cb780151273f3aa4d6d72c.png" alt="" height="30">
            </span>
            <span class="logo-lg">
            <img src="http://localhost/mushroom/upload_images/4a9cd38fe5cb780151273f3aa4d6d72c.png" alt="" height="30">
            </span>
            </a>
            <a href="<?php echo base_url();?>" class="logo logo-light">
            <span class="logo-sm">
            <img src="http://localhost/mushroom/upload_images/4a9cd38fe5cb780151273f3aa4d6d72c.png" alt="" height="30">
            </span>
            <span class="logo-lg">
            <img src="http://localhost/mushroom/upload_images/4a9cd38fe5cb780151273f3aa4d6d72c.png" alt="" height="30">
            </span>
            </a>
         </div>
         <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
         <i class="fa fa-fw fa-bars"></i>
         </button>
         <div data-simplebar class="sidebar-menu-scroll">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
               <!-- Left Menu Start -->
               <ul class="metismenu list-unstyled" id="side-menu">
                  <li class="menu-title">
				  
				  
				   
				  Product Section</li>
				  
                  <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                     <i class="uil-window-section"></i>
                     <span>Strains</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="true">
                      
                        <li> <a href="<?php echo base_url();?>adminproduct" class="">Strains</a> </li>
                     </ul>
                  </li>
                  <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                     <i class="uil-window-section"></i>
                     <span>User Management</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="true">
                        <li> <a href="<?php echo base_url();?>adminusers" class="">User</a> </li>
                     </ul>
                  </li>
                  <li class="menu-title">Other Services</li>
                  <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-window-section"></i>
                                    <span>Enquiry</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li> <a href="<?php echo base_url();?>adminenquiry/general" class="">General</a> </li>
                                     
                                     
                                </ul>
                            </li>
							
							
							 <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-window-section"></i>
                                    <span>Other</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li> <a href="<?php echo base_url();?>adminservices/index" class="">Pages</a> </li>
                                     <li> <a href="<?php echo base_url();?>adminslider" class="">Slider</a> </li>
                                     <li> <a href="<?php echo base_url();?>admininnerslider" class="">Sub-Slider</a> </li>
                                     <li> <a href="<?php echo base_url();?>admin/web_setting/1" class="">Web Setting</a> </li>
                                       <li> <a href="<?php echo base_url();?>admin/changepassword/1" class="">changepassword</a> </li>
                                     
                                </ul>
                            </li>
							
               </ul>
            </div>
            <!-- Sidebar -->
         </div>
      </div>
      <!-- Left Sidebar End -->
      <div class="main-content">