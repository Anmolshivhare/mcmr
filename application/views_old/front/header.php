<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php $user  = $this->User->getRows(array('id'=>$this->session->userdata('userId'))); 
$websetting = $this->Adminmodel->select('web_setting',['id'=>'1']); 
foreach($websetting as $setting);
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $setting->title; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
		<link rel="icon" href="<?php echo base_url();?>upload_images/<?php echo $setting->fevicon; ?>">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="<?php echo base_url();?>front_assets/css/css2.css?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<!-- CSS
	============================================ -->
	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url();?>front_assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- FontAwesome CSS -->
	<link href="<?php echo base_url();?>front_assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Elegent CSS -->
	<link href="<?php echo base_url();?>front_assets/css/elegent.min.css" rel="stylesheet">

	<!-- Plugins CSS -->
	<link href="<?php echo base_url();?>front_assets/css/plugins.css" rel="stylesheet">

	<!-- Helper CSS -->
	<link href="<?php echo base_url();?>front_assets/css/helper.css" rel="stylesheet">

	<!-- Main CSS -->
	<link href="<?php echo base_url();?>front_assets/css/main.css" rel="stylesheet">

	<!-- Modernizer JS -->
	<script src="<?php echo base_url();?>front_assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body style="padding:0">

	 
	
	
		<header>
		 
		 
		<div class="header-bottom header-bottom-other header-sticky">
			<div class="container">
				<div class="row">
					 
					<div class="col-md-9 col-sm-12 col-xs-12 d-none d-sm-block d-md-none">
						<div class="menubar-top d-flex justify-content-between align-items-center flex-sm-wrap flex-md-wrap flex-lg-nowrap mt-sm-15">
							<!-- header phone number  
							<div class="header-contact d-flex">
								<div class="phone-icon">
									<img width="40" height="35" src="<?php echo base_url();?>front_assets/images/icon-phone.webp" class="img-fluid" alt="">
								</div>
								<div class="phone-number">
									Phone: <span class="number"><?php echo $setting->phone; ?></span>
								</div>
							</div>
							<!-- end of header phone number -->
							<!-- search bar -->
							<!--<div class="header-advance-search">
								<form action="<?php echo base_url();?>home/search" method="post">
									<input type="text" name="search" placeholder="Search for a Strain">
									<button type="submit"><span class="icon_search"></span></button>
								</form>
							</div> 
							<!-- end of search bar -->
						 
						</div>

						<!--=============================================
						=            navigation menu         =
						=============================================-->

						<!-- navigation section -->
						<div class="main-menu main-menu-other-homepage">
							<nav>
								<ul>
									 
									<li class="active"><a href="<?php echo base_url();?>"><img width="100"   src="<?php echo base_url();?>upload_images/<?php echo $setting->logo; ?>" class="" al</a></li>
									<li class="active"><a href="<?php echo base_url();?>">HOME</a></li>
										<li class=""><a href="<?php echo base_url();?>home/about">ABOUT</a></li> 
									</li>
								<!--<li class=""><a href="<?php echo base_url();?>home/product?popular=1">POPULAR </a></li>-->
									 
					
									 
								</ul>
							</nav>
						</div>
						<!-- end of navigation section -->

						<!--=====  End of navigation menu  ======-->


					</div>
					<!--<div class="col-12">
					 
						<div class="mobile-menu d-block d-lg-none"></div>
					</div>-->
				</div>
			</div>

			<!--=============================================
		=            navigation menu         =
		=============================================-->

			
 </div>
 </header>
 
 <div class="home-other-navigation-menu text-center">
				<div class="banner_logo">
					<div class="row">
					
					 <div class="d-flex justify-content-between">
    <div class="p-2 ">
	<a href="<?php echo base_url();?>">
	<img width="100"   src="<?php echo base_url();?>upload_images/<?php echo $setting->logo; ?>" class="" alt="">
	</a>
	</div>
    <div class="p-2 "><a href="<?php echo base_url();?>">HOME</a></div>
    <div class="p-2 "><a href="<?php echo base_url();?>home/about">ABOUT</a></div>
  </div>
					
						 
					</div>
				</div>
			</div>
			
			
			