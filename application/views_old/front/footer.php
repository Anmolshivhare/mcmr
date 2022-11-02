 

	<footer>
	 
 
		<div class="newsletter-section pt-50 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 mb-sm-20 mb-xs-20">
						 

						<div class="newsletter-title">
							<h1>
								<img width="37" height="28" src="<?php echo base_url();?>front_assets/images/icon-newsletter.webp" alt="">
								Updates  
							</h1>
						</div>
 
					</div>

					<div class="col-lg-8 col-md-12 col-sm-12">
						 
						<div class="subscription-form-wrapper d-flex flex-wrap flex-sm-nowrap">
							<p class="mb-xs-20">Drop your email to get stay in the loop on updates</p>
							<div class="subscription-form">
								<form id="mc-form" class="mc-form subscribe-form">
									<input type="email" id="mc-email" autocomplete="off" placeholder="Your email address">
									<button id="mc-submit" type="submit"> subscribe</button>
								</form>

							 
								<div class="mailchimp-alerts">
									<div class="mailchimp-submitting"></div> 
									<div class="mailchimp-success"></div> 
									<div class="mailchimp-error"></div> 
								</div> 
							</div>
						</div>

						 
					</div>
				</div>
			</div>
		</div>
 
 
<?php  
$user  = $this->User->getRows(array('id'=>$this->session->userdata('userId'))); 
$websetting = $this->Adminmodel->select('web_setting',['id'=>'1']); 
foreach($websetting as $setting);
?>

		 

		 

		<!--=======  copyright section  =======-->

		<div class="copyright-section pt-35 pb-35">
			<div class="container">
				<div class="row align-items-md-center align-items-sm-center">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-md-start">
						<!--=======  copyright text	  =======-->

						<div class="copyright-segment">
							<!--<p>
								<a href="<?php echo base_url();?>home/privacy_policy">Privacy Policy</a>
								<span class="separator">|</span>
								<a href="<?php echo base_url();?>home/terms_and_condition">Term and conditions</a>
							</p>-->
					 
						<?php if($user) { ?>
							<p>
								<a href="<?php echo base_url();?>users/account"><?php echo $user[name];?></a>
								<span class="separator">|</span>
								<a href="<?php echo base_url();?>users/logout">Logout</a>
							</p>
							<?php } else { ?>
							<p>
								<a href="<?php echo base_url();?>users/login">Login</a>
								<span class="separator">|</span>
								<a href="<?php echo base_url();?>users/registration">Register</a>
							</p>
								<?php } ?>
							
							<p class="copyright-text">&copy; 2022  Spore Hunter. All Rights Reserved</p>
						</div>
						
						 

						<!--=======  End of copyright text	  =======-->

					</div>
					 
				</div>
			</div>
		</div>

		<!--=======  End of copyright section  =======-->
	</footer>

	<!--=====  End of Footer  ======-->


	<!--=============================================
	=            Quick view modal         =
	=============================================-->

	<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-xs-12">
							<!-- product quickview image gallery -->
							<div class="product-image-slider">
								<!--Modal Tab Content Start-->
								<div class="tab-content product-large-image-list" id="myTabContent">
									<div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img width="350" height="350" src="<?php echo base_url();?>front_assets/images/products/product01.webp" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img width="350" height="350" src="<?php echo base_url();?>front_assets/images/products/product02.webp" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img width="350" height="350" src="<?php echo base_url();?>front_assets/images/products/product03.webp" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img width="350" height="350" src="<?php echo base_url();?>front_assets/images/products/product04.webp" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
								</div>
								<!--Modal Content End-->
								<!--Modal Tab Menu Start-->
								<div class="product-small-image-list">
									<div class="nav small-image-slider" role="tablist">
										<div class="single-small-image img-full">
											<a data-bs-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img width="350" height="350" src="<?php echo base_url();?>front_assets/images/products/product01.webp" class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-bs-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img width="350" height="350" src="<?php echo base_url();?>front_assets/images/products/product02.webp" class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-bs-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img width="350" height="350" src="<?php echo base_url();?>front_assets/images/products/product03.webp" class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-bs-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img width="350" height="350" src="<?php echo base_url();?>front_assets/images/products/product04.webp" class="img-fluid" alt=""></a>
										</div>
									</div>
								</div>
								<!--Modal Tab Menu End-->
							</div>
							<!-- end of product quickview image gallery -->
						</div>
						<div class="col-lg-7 col-md-6 col-xs-12">
							<!-- product quick view description -->
							<div class="product-feature-details">
								<h2 class="product-title mb-15">Kaoreet lobortis sagittis laoreet</h2>

								<h2 class="product-price mb-15">
									<span class="main-price">$12.90</span>
									<span class="discounted-price"> $10.00</span>
								</h2>

								<p class="product-description mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
									eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
									exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>


								<div class="cart-buttons mb-20">
									<div class="pro-qty mr-10">
										<input type="text" value="1">
									</div>
									<div class="add-to-cart-btn">
										<a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
									</div>
								</div>


								<div class="social-share-buttons">
									<h3>share this product</h3>
									<ul>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- end of product quick view description -->
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--=====  End of Quick view modal  ======-->

	<!-- scroll to top  -->
	<a href="#" class="scroll-top"></a>
	<!-- end of scroll to top -->

	<!-- JS
	============================================ -->
	<!-- jQuery JS -->
	<script src="<?php echo base_url();?>front_assets/js/vendor/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="<?php echo base_url();?>front_assets/js/popper.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="<?php echo base_url();?>front_assets/js/bootstrap.min.js"></script>

	<!-- Plugins JS -->
	<script src="<?php echo base_url();?>front_assets/js/plugins.js"></script>

	<!-- Main JS -->
	<script src="<?php echo base_url();?>front_assets/js/main.js"></script>

</body>

</html>