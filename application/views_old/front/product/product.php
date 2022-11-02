	<div class="breadcrumb-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumb-container">
						<ul>
							<li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
							<li class="active">Shop</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="shop-page-container mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-sm-35 mb-xs-35">

					<!--=======  shop page banner  =======-->

					<div class="shop-page-banner mb-35">
						<a href="#">
							<img width="870" height="331" src="<?php echo base_url();?>front_assets/mainimage.png" class="img-fluid" alt="">
						</a>
					</div>

					<!--=======  End of shop page banner  =======-->

					<!--=======  Shop header  =======-->

					<div class="shop-header mb-35">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center">
								<!--=======  view mode  =======-->

								<div class="view-mode-icons mb-xs-10">
									<a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
									<a href="#" data-target="list"><i class="fa fa-list"></i></a>
								</div>

								<!--=======  End of view mode  =======-->

							</div>
							<div class="col-lg-8 col-md-8 col-sm-12 d-flex flex-column flex-sm-row justify-content-between align-items-left align-items-sm-center">
								<!--=======  Sort by dropdown  =======-->

								<div class="sort-by-dropdown d-flex align-items-center mb-xs-10">
									<p class="mr-10">Sort By: </p>
									<select name="sort-by" id="sort-by" class="nice-select">
										<option value="0">Sort By Popularity</option>
										<option value="0">Sort By Hot</option>
										<option value="0">Sort By Favourite</option>
										 
									</select>
								</div>

								<!--=======  End of Sort by dropdown  =======-->

								<p class="result-show-message">Showing 1–12 of 41 results</p>
							</div>
						</div>
					</div>

					<!--=======  End of Shop header  =======-->

					<!--=======  Grid list view  =======-->

					<div class="shop-product-wrap grid row no-gutters mb-35">
					<?php 
  
					foreach($product as $view)  {
						 
					 if($_GET[popular] == $view->popular &&	 $_GET[popular]) { 
					 
					 
					 
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
									<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>">
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
									 
									<p class="product-description"><?php echo  $view->description;?></p>
								 <h6>Cost: <span><a href="#"><?php echo $view->cost;?></a> </span></h6>
								 <h6>Cultivation difficulty: <span><a href="#"><?php echo $view->cultivation_difficulty;?></a> </span></h6>
								 
								</div>

							</div>

							<!--=======  End of Shop list view product  =======-->
						</div>
					<?php } }?>
					
					
					
					
					
					<?php 
  				foreach($product as $view)  {
					 if($_GET[hot] == $view->hot &&	 $_GET[hot]) { 
				 
					 ?>
						 
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
							<!--=======  Grid view product  =======-->

							<div class="gf-product shop-grid-view-product">
								<div class="image">
									<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>">
										<span class="onsale">Hot</span>
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
									<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>">
										<span class="onsale">Hot!</span>
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
									 
									<p class="product-description"><?php echo  $view->description;?></p>
								 <h6>Cost: <span><a href="#"><?php echo $view->cost;?></a> </span></h6>
								 <h6>Cultivation difficulty: <span><a href="#"><?php echo $view->cultivation_difficulty;?></a> </span></h6>
								 
								</div>

							</div>

							<!--=======  End of Shop list view product  =======-->
						</div>
					<?php } }?>
					
					
					
					
					<?php 
  				foreach($product as $view)  {
					 if($_GET[favourite] == $view->favourite &&	 $_GET[favourite]) { 
				 
					 ?>
						 
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
							<!--=======  Grid view product  =======-->

							<div class="gf-product shop-grid-view-product">
								<div class="image">
									<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>">
										<span class="onsale">favourite</span>
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
									<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view->id;?>">
										<span class="onsale">favourite!</span>
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
									 
									<p class="product-description"><?php echo  $view->description;?></p>
								 <h6>Cost: <span><a href="#"><?php echo $view->cost;?></a> </span></h6>
								 <h6>Cultivation difficulty: <span><a href="#"><?php echo $view->cultivation_difficulty;?></a> </span></h6>
								 
								</div>

							</div>

							<!--=======  End of Shop list view product  =======-->
						</div>
					<?php } }?>
					
					
					 
					
					
					
					</div>

					<!--=======  End of Grid list view  =======-->
 

				</div>
			</div>
		</div>
	</div>