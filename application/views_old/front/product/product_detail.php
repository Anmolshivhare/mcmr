<!--<div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="<?php echo base_url();?>><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#"><?php echo $product[0]->title?></a></li>
                            
                            <li class="active">Strains</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
	 <div class="single-product-content ">
        <div class="container">
            <!--=======  single product content container  =======-->
            <div class="single-product-content-container mb-35">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">


                        <!-- product image gallery -->
                        <div class="product-image-slider d-flex flex-custom-xs-wrap flex-sm-nowrap align-items-center mb-sm-35">
                            <!--Modal Tab Menu Start-->
							<?php if($product[0]->thumb_image) { ?> 
						<img style="height:400px;" src="<?php echo base_url();?>upload_images/<?php echo  $product[0]->thumb_image;?>" class="img-fluid" alt="">
									<?php } else { ?>
									<img style="height:400px;" src="<?php echo base_url();?>front_assets/dummy.png" class="img-fluid" alt="">
									<?php } ?>
									
                          <!--  <div class="product-small-image-list">
                                <div class="nav small-image-slider-single-product" role="tablist">
                                   
								   
								   
<?php foreach(json_decode($product[0]->gallery) as $key=> $img): 
 ?>	 
								   <div class="single-small-image img-full">
<a data-bs-toggle="tab" id="gallery<?php echo $key?>" href="#gallery<?php echo $key?>"><img width="600" height="600" src="<?php echo base_url();?>upload_images/<?php echo $img?>" class="img-fluid" alt=""></a>
                                    </div>
									<?php endforeach; ?>
									
                          
                                </div>
                            </div>
                            

                            
                            <div class="tab-content product-large-image-list">
                               <?php foreach(json_decode($product[0]->gallery) as $key=> $img): 
 ?>	
	<div class="tab-pane fade <?php echo ($key == 0) ? "active show" : ""; ?>  " id="gallery<?php echo $key?>" role="tabpanel" aria-labelledby="single-slide-tab-<?php echo $img?>">
                                    
                                    <div class="single-product-img easyzoom img-full">
                                        <img width="600" height="600" src="<?php echo base_url();?>upload_images/<?php echo $img?>" class="img-fluid" alt="">
                                        <a href="<?php echo base_url();?>upload_images/<?php echo $img?>" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    
                                </div>
                               
							   	<?php endforeach; ?>
								
                            </div>
                          -->

                        </div>
                        <!-- end of product image gallery -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <!-- product quick view description -->
                        <div class="product-feature-details">
                            <h2 class="product-title mb-15"><?php echo $product[0]->title?></h2>

                           <!-- <p class="product-rating">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>

                                 
                            </p>-->
							
							<div class="single-product-category mb-20">
                                <h3>Potency: <span>	<a href="#">Potency : <?php if($product[0]->potency == 'Weakest') {
								 echo '🍄';
								 } if($product[0]->potency == 'Medium') {
									 echo '🍄🍄'; 
								 } if($product[0]->potency == 'Strongest') {
									 echo '🍄🍄🍄'; 
								 }
										?></a> </span></h3>
                            </div>
							<div class="single-product-category mb-20">
                                <h3>Vibe: <span><a href="#"> <?php echo $product[0]->vibes?></a> </span></h3>
                            </div>
							<div class="single-product-category mb-20">
                                <h3>Cost: <span> <a href="#">
							 
								 <?php if($product[0]->cost == 'Cheapest') {
								 echo '💰';
								 } if($product[0]->cost == 'Medium') {
									 echo '💰💰'; 
								 } if($product[0]->cost == 'Expensive') {
									 echo '💰💰💰'; 
								 }
										?>
								 
								 </a> </span></h3>
                            </div>
							<div class="single-product-category mb-20">
                                <h3>Cultivation Difficulty : <span>
	  <a href="#">
								  <?php echo $product[0]->cultivation_difficulty;?>
								   <?php if($product[0]->cultivation_difficulty == 'Easy') {
								 echo '😀';
								 } if($product[0]->cultivation_difficulty == 'Hard') {
									 echo '💰💰'; 
								 }  
										?>
										
								  </a>

								</span></h3>
                            </div>
 
                              <div class="single-product-category mb-20">
                                <h3>Species: <span><a href="#"><?php echo $product[0]->species?></a> </span></h3>
                            </div>

							 

 

                           
                        </div>
                        <!-- end of product quick view description -->
                    </div>
              
					<div class="col-lg-12 col-md-12 col-xs-12">
                         <div class="single-product-tab-section mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-slider-wrapper">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-selected="true">Description</a>
                                <a class="nav-item nav-link" id="features-tab" data-bs-toggle="tab" href="#features" role="tab" aria-selected="false">Features</a>
                                <a class="nav-item nav-link" id="review-tab" data-bs-toggle="tab" href="#review" role="tab" aria-selected="false">Useful Links</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <p class="product-desc"><?php echo $product[0]->description?></p>
								  <div class=" ">
                                        <h4>Helpline</h4>
                                        <span><?php echo $product[0]->helpline?></span>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
                                <table class="table-data-sheet">
                                    <tbody>
                                        <tr class="odd">

                                            <td>Species</td>
                                            <td><?php echo $product[0]->species?></td>
                                        </tr>
                                        <tr class="even">

                                            <td>Potency</td>
                                            <td><?php echo $product[0]->potency?></td>
                                        </tr>

										<tr class="even">

                                            <td>Cultivation Difficulty</td>
                                            <td><?php echo $product[0]->cultivation_difficulty?></td>
                                        </tr>
									
										<tr class="even">
											<td>Vibes</td>
                                            <td><?php echo $product[0]->vibes?></td>
                                        </tr>
										
										
										<!--<tr class="even">

                                            <td>Recommended dose</td>
                                            <td><?php echo $product[0]->recommended_dose?></td>
                                        </tr>-->
									
										<tr class="even">
											<td>Country of origin</td>
                                            <td><?php echo $product[0]->country_of_origin?></td>
                                        </tr>
										
										<tr class="even">
											<td>Strain creator</td>
                                            <td><?php echo $product[0]->strain_creator?></td>
                                        </tr>
										
										<tr class="even">
											<td>Growing</td>
                                            <td><?php echo $product[0]->growing?></td>
                                        </tr>
										

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="product-ratting-wrap">
                                    <div class="pro-avg-ratting">
                                        <h4>Product Canada </h4>
                                        <span><?php echo $product[0]->where_to_buy_product_canada?></span>
                                    </div>
									
									   <div class="pro-avg-ratting">
                                        <h4>Product USA</h4>
                                        <span><?php echo $product[0]->where_to_buy_product_usa?></span>
                                    </div>
									
									
									   <div class="pro-avg-ratting">
                                        <h4>Spores Canada </h4>
                                        <span><?php echo $product[0]->where_to_buy_spores_canada?></span>
                                    </div>
									
									   <div class="pro-avg-ratting">
                                        <h4>Spores USA</h4>
                                        <span><?php echo $product[0]->where_to_buy_spores_usa?></span>
                                    </div>
									
                                     </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    </div>
              

					   
			  </div>
            </div>

            <!--=======  End of single product content container  =======-->

        </div>

    </div>
