<!--=============================================
	=            Footer         =
	=============================================-->

	<footer>
		<!--=======  newsletter section  =======-->

		<div class="newsletter-section pt-50 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 mb-sm-20 mb-xs-20">
						<!--=======  newsletter title =======-->

						<div class="newsletter-title">
							<h1>
								<img width="37" height="28" src="<?php echo base_url();?>front_assets/images/icon-newsletter.webp" alt="">
								Send Newsletter
							</h1>
						</div>

						<!--=======  End of newsletter title  =======-->
					</div>

					<div class="col-lg-8 col-md-12 col-sm-12">
						<!--=======  subscription-form wrapper  =======-->

						<div class="subscription-form-wrapper d-flex flex-wrap flex-sm-nowrap">
							<p class="mb-xs-20">Sign up for our newsletter to get up-to-date from us</p>
							<div class="subscription-form">
								<form id="mc-form" class="mc-form subscribe-form">
									<input type="email" id="mc-email" autocomplete="off" placeholder="Your email address">
									<button id="mc-submit" type="submit"> subscribe!</button>
								</form>

								<!-- mailchimp-alerts Start -->
								<div class="mailchimp-alerts">
									<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
									<div class="mailchimp-success"></div><!-- mailchimp-success end -->
									<div class="mailchimp-error"></div><!-- mailchimp-error end -->
								</div><!-- mailchimp-alerts end -->
							</div>
						</div>

						<!--=======  End of subscription-form wrapper  =======-->
					</div>
				</div>
			</div>
		</div>


<?php  
$websetting = $this->Adminmodel->select('web_setting',['id'=>'1']); 
foreach($websetting as $setting);
?>

		<!--=======  End of newsletter section  =======-->

		<!--=======  social contact section  =======-->

		<div class="social-contact-section pt-50 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 order-2 order-md-2 order-sm-2 order-lg-1">
						<!--=======  social media links  =======-->

						<div class="social-media-section">
							<h2>Follow us</h2>
							<div class="social-links">
								<a class="facebook" href="<?php echo $setting->facebook;?>" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
								<a class="twitter" href="<?php echo $setting->twitter;?>" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
								<a class="instagram" href="<?php echo $setting->instagram;?>" data-tooltip="Instagram"><i class="fa fa-instagram"></i></a>
								 
							</div>
						</div>

						<!--=======  End of social media links  =======-->

					</div>
					<div class="col-lg-8 col-md-12 order-1 order-md-1 order-sm-1 order-lg-2  mb-sm-50 mb-xs-50">
						<!--=======  contact summery  =======-->

						<div class="contact-summery">
							<h2>Contact us</h2>

							<!--=======  contact segments  =======-->

							<div class="contact-segments d-flex justify-content-between flex-wrap flex-lg-nowrap">
								<!--=======  single contact  =======-->

								<div class="single-contact d-flex mb-xs-20">
									<div class="icon">
										<span class="icon_pin_alt"></span>
									</div>
									<div class="contact-info">
										<p>Address: <span><?php echo $setting->address;?></span></p>
									</div>
								</div>

								<!--=======  End of single contact  =======-->
								<!--=======  single contact  =======-->

								<div class="single-contact d-flex mb-xs-20">
									<div class="icon">
										<span class="icon_mobile"></span>
									</div>
									<div class="contact-info">
										<p>Phone: <span><?php echo $setting->phone;?></span></p>
									</div>
								</div>

								<!--=======  End of single contact  =======-->
								<!--=======  single contact  =======-->

								<div class="single-contact d-flex">
									<div class="icon">
										<span class="icon_mail_alt"></span>
									</div>
									<div class="contact-info">
										<p>Email: <span><?php echo $setting->email;?></span></p>
									</div>
								</div>

								<!--=======  End of single contact  =======-->
							</div>

							<!--=======  End of contact segments  =======-->



						</div>

						<!--=======  End of contact summery  =======-->

					</div>
				</div>
			</div>
		</div>

		<!--=======  End of social contact section  =======-->

		<!--=======  footer navigation  =======-->

		<div class="footer-navigation-section pt-40 pb-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-xs-30">
						<!--=======  single navigation section  =======-->

						<div class="single-navigation-section">
							<h3 class="nav-section-title">INFORMATION</h3>
							<ul>
								<li> <a href="about-us.html">About Us</a></li>
								<li> <a href="#">Delivery Information</a></li>
								<li> <a href="#">Privacy Policy</a></li>
								<li> <a href="#">Terms & Condition</a></li>
							</ul>
						</div>

						<!--=======  End of single navigation section  =======-->
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-xs-30">
						<!--=======  single navigation section  =======-->

						<div class="single-navigation-section">
							<h3 class="nav-section-title">MY ACCOUNT</h3>
							<ul>
								<li> <a href="my-account.html">My Account</a></li>
								<li> <a href="wishlist.html">Wishlist</a></li>
								<li> <a href="cart.html">Shopping Cart</a></li>
								<li> <a href="#">Newsletter</a></li>
							</ul>
						</div>

						<!--=======  End of single navigation section  =======-->
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-xs-30">
						<!--=======  single navigation section  =======-->

						<div class="single-navigation-section">
							<h3 class="nav-section-title">CUSTOMER SERVICE</h3>
							<ul>
								<li> <a href="contact.html">Contact</a></li>
								<li> <a href="#">OUR SERVICE</a></li>
								<li> <a href="#">RETURNS</a></li>
								<li> <a href="#">SITE MAP</a></li>
							</ul>
						</div>

						<!--=======  End of single navigation section  =======-->
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<!--=======  single navigation section  =======-->

						<div class="single-navigation-section">
							<h3 class="nav-section-title">Extras</h3>
							<ul>
								<li> <a href="contact.html">BRANDS</a></li>
								<li> <a href="#">GIFT VOUCHERS</a></li>
								<li> <a href="#">AFFILIATES</a></li>
								<li> <a href="#">SPECIALS</a></li>
							</ul>
						</div>

						<!--=======  End of single navigation section  =======-->
					</div>
				</div>
			</div>
		</div>

		<!--=======  End of footer navigation  =======-->


		<!--=======  copyright section  =======-->

		<div class="copyright-section pt-35 pb-35">
			<div class="container">
				<div class="row align-items-md-center align-items-sm-center">
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 text-center text-md-start">
						<!--=======  copyright text	  =======-->

						<div class="copyright-segment">
							<p>
								<a href="#">Privacy Policy</a>
								<span class="separator">|</span>
								<a href="#">Term and conditions</a>
							</p>
							<p class="copyright-text">&copy; 2022 <a href="/"><?php echo $setting->title;?></a>. All Rights Reserved</p>
						</div>

						<!--=======  End of copyright text	  =======-->

					</div>
					<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
						<!--=======  payment info  =======-->

						<div class="payment-info text-center text-md-end">
							<p>Allow payment base on <img width="316" height="44" src="<?php echo base_url();?>front_assets/images/payment-icon.webp" class="img-fluid" alt=""></p>
						</div>

						<!--=======  End of payment info  =======-->

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