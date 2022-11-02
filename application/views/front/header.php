<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-startup-image" href="images/apple-touch-startup-image-640x920.png">
    <title>Bar Association</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>front_assets/images/logo.png">
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/framework7.css">
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>front_assets/css/swipebox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>front_assets/css/animations.css">
    <link href="../../css.css?family=Roboto:100,300,400,900" rel="stylesheet">
    <script src="<?php echo base_url();?>front_assets/js/jquery-1.10.1.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
</head>

<body id="mobile_wrap">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-reveal">
        <div class="view view-subnav">
            <div class="pages">
                <div data-page="panel-leftmenu" class="page pagepanel">
                    <div class="page-content">
                        <nav class="main_nav_underline">
                            <ul>
                                <li><a href="<?php echo base_url();?>" class="close-panel" data-view=".view-main"><img
                                            src="<?php echo base_url();?>front_assets/images/icons/white/home.png"
                                            alt="" title=""><span>Home</span></a></li>
                                <li><a href="<?php echo base_url()?>home/member" class="close-panel"
                                        data-view=".view-main"><img
                                            src="<?php echo base_url();?>front_assets/images/icons/white/users.png"
                                            alt="" title=""><span>Search Entire City</span></a></li>
                                <li><a href="<?php echo base_url();?>admindefault/index" class="close-panel"
                                        data-view=".view-main"><img
                                            src="<?php echo base_url();?>front_assets/images/icons/white/features.png"
                                            alt="" title=""><span>Contact Diary</span></a></li>
                                <li><a href="<?php echo base_url();?>home/category" class="close-panel"
                                        data-view=".view-main"><img
                                            src="<?php echo base_url();?>/front_assets/images/icons/white/categories.png"
                                            alt="" title=""><span>Citizen Welfare Fund</span></a></li>



                                <li><a href="<?php echo base_url();?>home/event" class="close-panel"
                                        data-view=".view-main"><img
                                            src="<?php echo base_url();?>front_assets/images/icons/white/blog.png"
                                            alt="" title=""><span>Upload Complain/Suggestion/Apply</span></a></li>


                                <li><a href="<?php echo base_url(); ?>home/gallery_category"
                                        class="close-panel external" data-view=".view-main"><img
                                            src="<?php echo base_url();?>front_assets/images/icons/white/photos.png"
                                            alt="" title=""><span>Nagar Ka Gaurav</span></a></li>
                                <li><a href="<?php echo base_url(); ?>home/news_category" class="close-panel"
                                        data-view=".view-main"><img
                                            src="<?php echo base_url();?>front_assets/images/icons/white/blog.png"
                                            alt="" title=""><span>Download Information</span></a></li>
                                <li><a href="<?php echo base_url();?>home/register" class="close-panel"
                                        data-view=".view-main"><img
                                            src="<?php echo base_url();?>front_assets/images/icons/white/blog.png"
                                            alt="" title=""><span>Register</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-right panel-reveal">
        <div class="user_login_info">

            <div class="user_thumb">
                <img src="<?php echo base_url();?>front_assets/images/page_photo.jpg" alt="" title="">
                <div class="user_details">
                    <p>Welcome, <span>User</span></p>
                </div>
                <div class="user_avatar"><img src="<?php echo base_url();?>front_assets/images/avatar.jpg" alt=""
                        title=""></div>
            </div>

            <nav class="user-nav">
                <ul>
                    <li><a href="<?php echo base_url();?>home/register" class="close-panel"><img
                                src="<?php echo base_url();?>front_assets/images/icons/white/user.png" alt=""
                                title=""><span>Registration</span></a></li>
                    <!-- <li><a href="#" class="close-panel"><img src="<?php echo base_url();?>front_assets/images/icons/white/briefcase.png" alt="" title=""><span>My Account</span></a></li>
                      
                      <li><a href="#" class="close-panel"><img src="<?php echo base_url();?>front_assets/images/icons/white/lock.png" alt="" title=""><span>Logout</span></a></li> -->
                </ul>
            </nav>
        </div>
    </div>

    <style>
    .home_line {
        padding: 0.6em;
        background: black;
        overflow: auto;
    }
    .help_header{
        float: left;
        background:blue;
        padding: 1em;
        border-radius: 1em;

    }
    .help_header1{
        float: right;
        background:yellow;
        padding: 1em;
        border-radius: 1em;
    }
    
    </style>

    <div class="views">
        <!-- <h1 style="background:green;">hello</h1> -->

        <div class="view view-main">

            <div class="home_line">
                 
                    <div class="help_header"> <span style="color:white;">Help +91 9084804156</span>    <img src="<?php echo base_url();?>front_assets/images/whatapp.png" alt="" width="20">  </div>
                     
                    <div class="help_header1"> 

                    <a href="<?php echo base_url();?>home/personal_details" style="color:black;text-decoration:none"> 
                                            <span>Citizen/Business Registration</span></a>

                     
                    </div>
                
            </div>
            <div class="pages">

                <div data-page="index" class="page  ">


                    <div class="page-content ">



                        <div class="navbarpages navbarpagesbg">
                            <div class="navbar_left">
                                <div class="logo_text"><a href="<?php echo base_url();?>home/index"><img
                                            src="<?php echo base_url();?>front_assets/images/logo.png" width="100"
                                            alt="" title=""></a></div>
                            </div>
                            <div class="navbar_right navbar_right_menu">
                                <a href="#" data-panel="left" class="open-panel"><img
                                        src="<?php echo base_url();?>front_assets/images/icons/white/menu.png" alt=""
                                        title=""></a>

                                         
                            </div>
                            <div class="navbar_right">
                                <a href="#" data-panel="right" class="open-panel"><img
                                        src="<?php echo base_url();?>front_assets/images/icons/white/user.png" alt=""
                                        title=""></a>
                            </div>
                        </div>