 
	
	<div class="shop-page-container mb-50">
		<div class="container">
			<div class="row">
			 	<div class="col-lg-12  mb-sm-35 mb-xs-35">

				 
 

					<div class="shop-product-wrap grid row no-gutters mb-35">
					 
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

							<!--=======  End of Shop list view product  =======-->
						</div>
					<?php } ?>
					
					
					
					</div>

					<!--=======  End of Grid list view  =======-->
 

				</div>
			</div>
		</div>
	</div>