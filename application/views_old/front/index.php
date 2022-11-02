<div class="hero-slider-with-category-container   mb-35">
		<div class="banner">
			
			<!--<video autoplay muted loop id="myVideo">
  <source src="<?php echo base_url();?>/front_assets/Trimmer_Gwella.mp4" type="video/mp4">
 </video> -->
 
 <img src="<?php echo base_url();?>front_assets/banner_image2.jpg" width="100%">
 <div class="content">
  <h1 class="displayf">The web's comprehensive shroom library</h1>
  <h3  class="displayf">**For research purposes only</h3>
 </div>
			<!--<div class="row">
				<div class="col-lg-12 col-md-12">
					 
					<div class="slider-container">
					 
						<div class="hero-slider-two">				  
<?php foreach($slider as $view) { 
if($view->status ==1) {?>
							<div class="hero-slider-item  ">
								 <img src="<?php echo base_url();?>upload_images/<?php echo $view->image;?>" width="100%">
							</div>
<?php }} ?>

						</div>

						 
					</div>

					 
				</div>
			</div>-->
		</div>
	</div>
			<!--	<style>
				.home-other-navigation-menu {
				background:none;
				position: absolute;
				width: 100%;
				top: 0;
				z-index: 1111;
				border:0;
				}
				.banner_logo a {
				 color:#fff;
				}
			   </style>	-->
	
	<style>
 
 .banner { 
 
 position: relative;
 
 }
#myVideo {
	width:100%;
  position: relative;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

 

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

.content {
text-align: left;
    position: absolute;
    top: 40%;
    
    width: 100%;
 
    margin: 0 auto;
   
}

.content h1 {

 color: #fff;
}

.displayf {
  
  margin: 10px;
	}


.content h3 {
    padding-top: 10px;
  
  color: #fff;
}


@media only screen and (max-width: 767px) {
	
 .content h1 {
    font-size: 15px;
    padding: 10px;
     color: #fff;
    line-height: 20px;
}

.content h3 {
    line-height: 16px;
    padding: 10px;
    color: #fff;
    font-size: 16px;
}
  
}

</style>

	<!--=====  End of Hero slider with category   ======-->


	<!--=============================================
	=            category slider         =
	=============================================-->

	<div class="slider category-slider mb-35">
		<div class="container">
		<div class="how_to_do mb-30">
			<h3>How it works  </h3>
			<p>Find a strain either by directly searching for it in the search box, or by searching by attribute like potency, vibe and price. </p>
			<p>You don’t need an account to use the tool. It’s completely free. If you want to bookmark or save strains for future reference, you can <a href="<?php echo base_url();?>users/registration"> create an account </a> to keep things organized.
			</p>
			</div>
			
			<div class="row">
			 
				<div class="col-lg-6 ">
					<!--=======  category slider section title  =======-->

						<div class="header-advance-search">
								<form action="<?php echo base_url();?>home/search" method="post">
									<input type="text" name="search" placeholder="Search for a Strain">
									<button type="submit"><span class="icon_search"></span></button>
								</form>
							</div> 
<br>
					<!--=======  End of category slider section title  =======-->

				</div>
			</div>
			
			
			
			
				<div class="category_type_search">
				<div class="row">
				<div class="col-lg-12">
					<!--=======  category slider section title  =======-->

					<div class="section-title">
						<h3>Explore by potency 
</h3>
					</div>

					<!--=======  End of category slider section title  =======-->

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category container  =======-->

					<div class="category-slider-container">

					 	<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?potency=Weakest" title="weakest">
									🍄
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?potency=Weakest">  Weakest</a>
								</h3>
							</div>
						</div> 
					
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?potency=Medium" title="Medium">
									🍄🍄
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?potency=Medium"> Medium</a>
								</h3>
							</div>
						</div> 
						
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?potency=Strongest" title="Strongest">
									🍄🍄🍄
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?potency=Strongest"> Strongest</a>
								</h3>
							</div>
						</div> 
						
						
						 
						 
 

					 
						<!--=======  End of single category  =======-->

					</div>

					<!--=======  End of category container  =======-->

				</div>
			</div>
		
		</div>
		<br>
		
		<div class="category_type_search">
				<div class="row">
				<div class="col-lg-12">
					<!--=======  category slider section title  =======-->

					<div class="section-title">
						<h3>Explore by vibe
</h3>
					</div>

					<!--=======  End of category slider section title  =======-->

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category container  =======-->

					<div class="category-slider-container">
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?vibes=Euphoric" title="Euphoric">
									❤️
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?vibes=Euphoric"> Euphoric</a>
								</h3>
							</div>
						</div> 
						
						
						 
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?vibes=introspection"title="Fruits">
									✍️
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?vibes=introspection"> Introspective</a>
								</h3>
							</div>
						</div> 
						
						 
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?vibes=visual"title="Fruits">
									👀
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?vibes=visual">  Visuals</a>
								</h3>
							</div>
						</div> 
						
						<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?vibes=sensory" title="Fruits">
								🖐
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?vibes=sensory"> Sensory </a>
								</h3>
							</div>
						</div> 
						
						
						<div class="single-category">
							<div class="category_thumb">
							<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?vibes=social" title="Fruits">
								👫
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?vibes=social"> Social</a>
								</h3>
							</div>
						</div> 
							
					<div class="single-category">
							<div class="category_thumb">
							<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?vibes=relaxed" title="Fruits">
								😌
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?vibes=relaxed">Relaxed</a>
								</h3>
							</div>
						</div> 
						</div> 
						
								
					 		<div class="category_type_search">
				<div class="row">
				<div class="col-lg-12">
					<!--=======  category slider section title  =======-->

					<div class="section-title">
						<h3>Explore by Cost 
</h3>
					</div>

					<!--=======  End of category slider section title  =======-->

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category container  =======-->

					<div class="category-slider-container">

					 	 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?cost=Cheapest" title="Cheapest">
									💰
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?cost=Cheapest"> Cheapest</a>
								</h3>
							</div>
						</div>
						
						 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?cost=Medium"  title="Medium">
									💰💰
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?cost=Medium"> Medium</a>
								</h3>
							</div>
						</div>
						
						 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?cost=Expensive" title="Expensive">
									💰💰💰
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?cost=Expensive"> Expensive</a>
								</h3>
							</div>
						</div>
						
						 
						 
 

					 
						<!--=======  End of single category  =======-->

					</div>

					<!--=======  End of category container  =======-->

				</div>
			</div>
		
		</div>
		<br>
		
						<div class="category_type_search">
				<div class="row">
				<div class="col-lg-12">
					<!--=======  category slider section title  =======-->

					<div class="section-title">
						<h3>Explore by Cultivation Difficulty 
</h3>
					</div>

					<!--=======  End of category slider section title  =======-->

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category container  =======-->

					<div class="category-slider-container">

					 	<div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?cultivation_difficulty=Easy" title="Easy">
									😀
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?cultivation_difficulty=Easy" > Easy</a>
								</h3>
							</div>
						</div>
						 
						 	 <div class="single-category">
							<div class="category_thumb">
								<a style="font-size:30px; padding:8px;" href="<?php echo base_url();?>home/allproduct?cultivation_difficulty=Hard"  title="Hard">
									😬
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="<?php echo base_url();?>home/allproduct?cultivation_difficulty=Hard" >  Hard</a>
								</h3>
							</div>
						</div>
						 
						
						 
						 
 

					 
						<!--=======  End of single category  =======-->

					</div>

					<!--=======  End of category container  =======-->

				</div>
			</div>
		
		</div>
		<br>
			 
 

					 
						<!--=======  End of single category  =======-->

					</div>

					<!--=======  End of category container  =======-->

				</div>
			</div>
		
		</div>
		<br>
		</div>
	</div>

	<!--=====  End of category slider  ======-->

	<!--=============================================
	=            Double banner          =
	=============================================

	<div class="double-banner-section mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 mb-xs-35">
				 

					<div class="single-banner">
						<a href="#">
							<img width="100%" src="<?php echo base_url();?>front_assets/images/banners/home2-banner1-1.png" class="img-fluid" alt="">
						</a>
					</div>

			 
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					 

					<div class="single-banner">
						<a href="#">
							<img width="100%"   src="<?php echo base_url();?>front_assets/images/banners/home2-banner1-2.png" class="img-fluid" alt="">
						</a>
					</div>

					 
				</div>
			</div>
		</div>
	</div>

	 -->
 
<!--
	<div class="slider multisale-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
 
					<div class="section-title">
						<h3>Favourite Strains</h3>
					</div>

 				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
 
					<div class="multisale-slider-wrapper">
 <?php foreach($product as $view) {
if($view->favourite ==1) {	?>
						<div class="gf-product multisale-slider-product">
							<div class="image">
								<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>">
									<span class="onsale">Favourite</span>
									
									<?php if($view->thumb_image) { ?>
									
									
									<img style="height:300px;" src="<?php echo base_url();?>upload_images/<?php echo  $view->thumb_image;?>" class="img-fluid" alt="">
									<?php } else { ?>
									<img style="height:300px;" src="<?php echo base_url();?>front_assets/dummy.png" class="img-fluid" alt="">
									<?php } ?>
								</a>
								
							</div>
						 
							<div class="product-content">
								<div class="product-categories">
									<div class="product-categories">
										<a href="#">Species : <?php echo  $view->species;?></a> <br>
										<a href="#">Potency : <?php echo  $view->potency;?></a> | 
										<a href="#">Cost : <?php echo  $view->cost;?></a>  <br>
										<a href="#">Cultivation difficulty : <?php echo  $view->cultivation_difficulty;?></a>  
									</div>
								</div>
								<h3 class="product-title"><a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>"><?php echo $view->title;?></a></h3>
								 
							</div>

						</div>
 
<?php }} ?>
					</div>

					 
				</div>
			</div>
		</div>
	</div>
	-->


<div class="slider multisale-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  multisale  slider section title  =======-->

					<div class="section-title">
						<h3>Popular Strains</h3>
					</div>

					<!--=======  End of multisale slider section title  =======-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  multi sale slider wrapper  =======-->

					<div class="multisale-slider-wrapper">
						<!--=======  single multisale slider product  =======-->
<?php foreach($product as $view) {
if($view->popular =='1') {	?>
						<div class="gf-product multisale-slider-product">
							<div class="image">
								<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>">
									<span class="onsale">Popular</span>
									
									<?php if($view->thumb_image) { ?>
									
									
									<img style="height:300px;" src="<?php echo base_url();?>upload_images/<?php echo  $view->thumb_image;?>" class="img-fluid" alt="">
									<?php } else { ?>
									<img style="height:300px;" src="<?php echo base_url();?>front_assets/dummy.png" class="img-fluid" alt="">
									<?php } ?>
								</a>
								
							</div>
						 
							<div class="product-content">
								<h3 class="product-title"><a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>"><?php echo $view->title;?></a></h3>
								<div class="product-categories">
									 
										<a href="#">Species : <?php echo  $view->species;?></a> 
										<a href="#">Potency : <?php if($view->potency == 'Weakest') {
								 echo '🍄';
								 } if($view->potency == 'Medium') {
									 echo '🍄🍄'; 
								 } if($view->potency == 'Strongest') {
									 echo '🍄🍄🍄'; 
								 }
										?></a>
									 
								</div>
								 <h6>Cost: <span>
								 <a href="#">
							 
								 <?php if($view->cost == 'Cheapest') {
								 echo '💰';
								 } if($view->cost == 'Medium') {
									 echo '💰💰'; 
								 } if($view->cost == 'Expensive') {
									 echo '💰💰💰'; 
								 }
										?>
								 
								 </a>
								 </span></h6>
								  <h6>Cultivation difficulty: <span><a href="#">
								  <?php echo $view->cultivation_difficulty;?>
								   <?php if($view->cultivation_difficulty == 'Easy') {
								 echo '😀';
								 } if($view->cultivation_difficulty == 'Hard') {
									 echo '💰💰'; 
								 }  
										?>
										
								  </a> </span></h6>
							
								 
							</div>

						</div>
 
<?php }} ?>
					</div>

					<!--=======  End of multi sale slider wrapper  =======-->
				</div>
			</div>
		</div>
	</div>
	<!--=====  End of Multi sale slider  ======-->

 


 
 