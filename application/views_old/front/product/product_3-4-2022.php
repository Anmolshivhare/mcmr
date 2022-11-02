 
	
	<div class="shop-page-container mb-50">
		<div class="container">
			<div class="row">
			<div class="col-lg-3 order-2 order-lg-1">
					<!--=======  sidebar area  =======-->

					<div class="sidebar-area">
						<!--=======  single sidebar  =======-->
					<div class="sidebar mb-35">
							<h3 class="sidebar-title">Strains</h3>
							<!--=======  tag container  =======-->

							<ul class="tag-container">
								<li><a href="#">Popular strains</a> </li>
							 
							</ul>

							<!--=======  End of tag container  =======-->
						</div>
						
						<div class="sidebar mb-35">
							<h3 class="sidebar-title">Explore by potency</h3>
							<ul class="product-categories">
								<li><a   href="#">🍄 (weakest)</a></li>
								<li><a href="#">🍄🍄 (Medium)</a></li>
								<li><a href="#">🍄🍄🍄 (Strongest)</a></li>
							 
							</ul>
						</div>

						<!--=======  End of single sidebar  =======-->
	
						<!--=======  single sidebar  =======-->

						<div class="sidebar mb-35">
							<h3 class="sidebar-title">Explore by vibe</h3>
							<ul class="product-categories">
								<li><a class="" href="<?php echo base_url();?>home/search?vibe=Euphoric">Euphoric </a></li>
								<li><a class="" href="<?php echo base_url();?>home/allproduct/Introspective">Introspective  </a></li>
								<li><a class="" href="<?php echo base_url();?>home/product_filter/Visuals">Visuals  </a></li>
								<li><a class="" href="<?php echo base_url();?>home/product_filter/Sensory">Sensory  </a></li>
								<li><a class="" href="<?php echo base_url();?>home/product_filter/Social">Social  </a></li>
								<li><a class="" href="<?php echo base_url();?>home/product_filter/Relaxed">Relaxed  </a></li>
							 
							</ul>
						</div>

						 <div class="sidebar mb-35">
							<h3 class="sidebar-title">Explore by cost</h3>
							<ul class="product-categories">
								<li><a class="" href="<?php echo base_url();?>home/product_filter/Cheapest">💰(Cheapest)  </a></li>
								<li><a class="" href="<?php echo base_url();?>home/product_filter/Medium">💰💰 (Medium)  </a></li>
								<li><a class="" href="<?php echo base_url();?>home/product_filter/Expensive">💰💰💰 (Expensive)  </a></li>
							 
							 
							</ul>
						</div>

						 <div class="sidebar mb-35">
							<h3 class="sidebar-title">Explore by Cultivation Difficulty</h3>
							<ul class="product-categories">
								<li><a class="" href="<?php echo base_url();?>home/product_filter/Easy">😀 (Easy) </a></li>
								<li><a class="" href="<?php echo base_url();?>home/product_filter/Hard">😬 (Hard)  </a></li>
						 
							 
							 
							</ul>
						</div>

						 

					 
						 

					

						<!--=======  End of single sidebar  =======-->
					</div>

					<!--=======  End of sidebar area  =======-->
				</div>
				<div class="col-lg-9 order-1 order-lg-2 mb-sm-35 mb-xs-35">

				 

					<div class="shop-page-banner mb-35">
						<a href="#">
							<img width="870" height="331" src="<?php echo base_url();?>front_assets/mainimage.png" class="img-fluid" alt="">
						</a>
					</div>

					 

					<div class="shop-product-wrap grid row no-gutters mb-35">
					<?php if ($title) { ?>
						<h1><?php echo $title;?>
						
					<?php } ?>
					<?php 
					 
					foreach($product as $view)  {
						

					 ?>
						 
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
							<!--=======  Grid view product  =======-->

							<div class="gf-product shop-grid-view-product">
								<div class="image">
									<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>">
										<span class="onsale">popular</span>
				<?php if($view->thumb_image) { ?> 
						<img style="height:400px;" src="<?php echo base_url();?>upload_images/<?php echo  $view->thumb_image;?>" class="img-fluid" alt="">
									<?php } else { ?>
									<img style="height:400px;" src="<?php echo base_url();?>front_assets/dummy.png" class="img-fluid" alt="">
									<?php } ?>
									</a>
									
								</div>
								<div class="product-content">
								<h3 class="product-title"><a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>"><?php echo  $view->title;?></a></h3>
									<div class="product-categories">
										<a href="#">Species : <?php echo  $view->species;?></a> |
										<a href="#">Potency : <?php echo  $view->potency;?></a>
									</div>
									
									 
								</div>

							</div>

							<!--=======  End of Grid view product  =======-->

							<!--=======  Shop list view product  =======-->

							<div class="gf-product shop-list-view-product">
								<div class="image">
									<a href="<?php echo base_url();?>home/product_detail">
										<span class="onsale">popular!</span>
													<?php if($view->thumb_image) { ?> 
						<img style="height:400px;" src="<?php echo base_url();?>upload_images/<?php echo  $view->thumb_image;?>" class="img-fluid" alt="">
									<?php } else { ?>
									<img style="height:400px;" src="<?php echo base_url();?>front_assets/dummy.png" class="img-fluid" alt="">
									<?php } ?>
									</a>
								 
								</div>
								<div class="product-content">
									<div class="product-categories">
										<a href="#">Species : <?php echo  $view->species;?></a> |
										<a href="#">Potency : <?php echo  $view->potency;?></a>
									</div>
									<h3 class="product-title"><a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>"><?php echo  $view->title;?></a></h3>
									 
									<!--<p class="product-description"><?php echo  $view->description;?></p>-->
								 <h6>Cost: <span><a href="#"><?php echo $view->cost;?></a> </span></h6>
								 <h6>Cultivation difficulty: <span><a href="#"><?php echo $view->cultivation_difficulty;?></a> </span></h6>
								 
								</div>

							</div>

							<!--=======  End of Shop list view product  =======-->
						</div>
					<?php } ?>
					
					
					
					</div>

					<!--=======  End of Grid list view  =======-->
 

				</div>
			</div>
		</div>
	</div>