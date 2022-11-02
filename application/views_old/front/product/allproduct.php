 
	
	<div class="shop-page-container mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<!--=======  sidebar area  =======-->

					<div class="sidebar-area">
						<!--=======  single sidebar  =======-->

						<div class="sidebar mb-35">
							<h3 class="sidebar-title">POTENCY</h3>
							<ul class="product-categories">
								<li><a class="<?php echo ($_GET['potency']=='Weakest')? 'active' : '';?>"  href="?potency=Weakest">🍄 Weakest</a></li>
								<li><a class="<?php echo ($_GET['potency']=='Medium')? 'active' : '';?>" href="?potency=Medium">🍄🍄  Medium</a></li>
								<li><a  class="<?php echo ($_GET['potency']=='Strongest')? 'active' : '';?>" href="?potency=Strongest">🍄🍄🍄 Strongest</a></li>
								 <li><a class="<?php echo ($_GET['potency']=='')? 'active' : '';?>"  href="?potency=">All</a></li>
					
							</ul>
						</div>
						
						<div class="sidebar mb-35">
							<h3 class="sidebar-title">VIBE</h3>
							<ul class="product-categories">
								<li><a class="<?php echo ($_GET['vibes']=='Euphoric')? 'active' : '';?>" href="?vibes=Euphoric">❤️ Euphoric</a></li>
								 
								<li><a class="<?php echo ($_GET['vibes']=='introspection')? 'active' : '';?>" href="?vibes=introspection">✍️ Introspective</a></li>
								<li><a class="<?php echo ($_GET['vibes']=='visual')? 'active' : '';?>" href="?vibes=visual">👀 Visuals</a></li>
								<li><a class="<?php echo ($_GET['vibes']=='sensory')? 'active' : '';?>" href="?vibes=sensory">🖐 Sensory</a></li>
								<li><a class="<?php echo ($_GET['vibes']=='social')? 'active' : '';?>" href="?vibes=social">👫 Social</a></li>
								<li><a class="<?php echo ($_GET['vibes']=='relaxed')? 'active' : '';?>" href="?vibes=relaxed">😌 Relaxed</a></li>
								 <li><a class="<?php echo ($_GET['vibes']=='')? 'active' : '';?>" href="?vibes=">All</a></li>
					
							</ul>
						</div>
						
						<div class="sidebar mb-35">
							<h3 class="sidebar-title">COST</h3>
							<ul class="product-categories">
								<li><a class="<?php echo ($_GET['cost']=='Cheapest')? 'active' : '';?>"  href="?cost=Cheapest">💰 Cheapest</a></li>
								
								<li><a class="<?php echo ($_GET['cost']=='Medium')? 'active' : '';?>"  href="?cost=Medium">💰💰 Medium</a></li>
								
								<li><a class="<?php echo ($_GET['cost']=='Expensive')? 'active' : '';?>"  href="?cost=Expensive">💰💰💰 Expensive</a></li>
								
								<li><a class="<?php echo ($_GET['cost']=='')? 'active' : '';?>"  href="?cost="> All</a></li>
								 
					
							</ul>
						</div>
						
						 	<div class="sidebar mb-35">
							<h3 class="sidebar-title">CULTIVATION DIFFICULTY</h3>
							<ul class="product-categories">
								<li><a class="<?php echo ($_GET['cultivation_difficulty']=='Cheapest')? 'active' : '';?>"  href="?cultivation_difficulty=Cheapest">😀 Easy</a></li>
								
								<li><a class="<?php echo ($_GET['cultivation_difficulty']=='Medium')? 'active' : '';?>"  href="?cultivation_difficulty=Medium">😬 Hard</a></li>
								
							 <li><a class="<?php echo ($_GET['cultivation_difficulty']=='')? 'active' : '';?>"  href="?cultivation_difficulty="> Hard</a></li>
								
							 
								 
					
							</ul>
						</div>
						
						 

					 
					</div>

					 
				</div>
			 	<div class="col-lg-9 order-1 order-lg-2 mb-sm-35 mb-xs-35">
				 <div class="shop-product-wrap grid row no-gutters mb-35">
					<?php 
	if($_GET['vibes']) {	
$keyword=$_GET['vibes'];
	 $this->db->where("vibes LIKE '%$keyword%'");
	 }
	 
	if($_GET['potency']) {			 
	$this->db->where("potency",$_GET['potency']);
	 }
	  
	if($_GET['cost']) {
	$this->db->where("cost",$_GET['cost']);
    }
	
	if($_GET['cultivation_difficulty']) {
	$this->db->where("cultivation_difficulty",$_GET['cultivation_difficulty']);
    }

	// $order=$this->db->select('*')->from('product')->where("vibes LIKE 'vibes'")->get()->result_array();

$order=$this->db->get('product')->result_array();
	    foreach($order as $view)  {
					 

					 ?>
						 
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 content">
							 

							<div class="gf-product shop-grid-view-product">
								<div class="image">
									<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view['id'];?>">
										<span class="onsale">popular</span>
				<?php if($view['thumb_image']) { ?> 
						<img style="height:300px;" src="<?php echo base_url();?>upload_images/<?php echo  $view['thumb_image']?>" class="img-fluid" alt="">
									<?php } else { ?>
									<img style="height:300px;" src="<?php echo base_url();?>front_assets/dummy.png" class="img-fluid" alt="">
									<?php } ?>
									</a>
									
								</div>
								<div class="product-content">
					<h3 class="product-title"><a href="<?php echo base_url();?>home/product_detail/<?php echo  $view['id'];?>"><?php echo  $view['title'];?></a></h3>
									<div class="product-categories">
										<a href="#">Species : <?php echo  $view['species'];?></a> |
										<a href="#">Potency : 
										 <?php if($view['potency'] == 'Weakest') {
								 echo '🍄';
								 } if($view['potency'] == 'Medium') {
									 echo '🍄🍄'; 
								 } if($view['potency'] == 'Strongest') {
									 echo '🍄🍄🍄'; 
								 }
										?>
										
										</a>
									</div>
									 <h6>Cost: <span>
								 <a href="#">
							 
								 <?php if($view['cost'] == 'Cheapest') {
								 echo '💰';
								 } if($view['cost'] == 'Medium') {
									 echo '💰💰'; 
								 } if($view['cost'] == 'Expensive') {
									 echo '💰💰💰'; 
								 }
										?>
								 
								 </a>
								 </span></h6>
								  <h6>Cultivation difficulty: <span><a href="#">
								  <?php echo $view['cultivation_difficulty'];?>
								   <?php if($view['cultivation_difficulty'] == 'Easy') {
								 echo '😀';
								 } if($view['cultivation_difficulty'] == 'Hard') {
									 echo '💰💰'; 
								 }  
										?>
										
								  </a> </span></h6>
								 
									 
								</div>

							</div>
 

							<div class="gf-product shop-list-view-product">
								<div class="image">
						<a href="<?php echo base_url();?>home/product_detail/<?php echo  $view['id'];?>">
										<span class="onsale">popular!</span>
													<?php if($view['thumb_image']) { ?> 
						<img style="height:300px;" src="<?php echo base_url();?>upload_images/<?php echo  $view['thumb_image'];?>" class="img-fluid" alt="">
									<?php } else { ?>
									<img style="height:300px;" src="<?php echo base_url();?>front_assets/dummy.png" class="img-fluid" alt="">
									<?php } ?>
									</a>
								 
								</div>
								<div class="product-content">
								<div class="product-categories">
										<a href="#">Species : <?php echo  $view['species'];?></a> |
										<a href="#">Potency : 
										 <?php if($view['potency'] == 'Weakest') {
								 echo '🍄';
								 } if($view['potency'] == 'Medium') {
									 echo '🍄🍄'; 
								 } if($view['potency'] == 'Strongest') {
									 echo '🍄🍄🍄'; 
								 }
										?>
										
										</a>
									</div>
									 <h6>Cost: <span>
								 <a href="#">
							 
								 <?php if($view['cost'] == 'Cheapest') {
								 echo '💰';
								 } if($view['cost'] == 'Medium') {
									 echo '💰💰'; 
								 } if($view['cost'] == 'Expensive') {
									 echo '💰💰💰'; 
								 }
										?>
								 
								 </a>
								 </span></h6>
								  <h6>Cultivation difficulty: <span><a href="#">
								  <?php echo $view['cultivation_difficulty'];?>
								   <?php if($view['cultivation_difficulty'] == 'Easy') {
								 echo '😀';
								 } if($view['cultivation_difficulty'] == 'Hard') {
									 echo '💰💰'; 
								 }  
										?>
										
								  </a> </span></h6>
								 <h6>Cultivation difficulty: <span><a href="#"><?php echo $view['cultivation_difficulty'];?></a> </span></h6>
								 
								</div>

							</div>

						 
						</div>
					<?php } ?>
					
					</div>
					 <div class="loadmore text-center">
					 <a class="btn btn-primary" href="#" id="loadMore"> Load More </a>
					 </div>
 
				</div>
			</div>
		</div>
	</div>
	<style>
.content {  
  display: none;
}
#loadMore {
	
	border-radius: 0;
    background: none;
    border: none;
    background-color: #000000;
    padding: 10px 30px;
    text-transform: uppercase;
}
 
</style>

 
  
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
<script>
$(document).ready (function () {
  $(".content").slice(0, 15).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 15).slideDown();
    if ($(".content:hidden").length == 0) {
      $("#loadMore").text("No Strains").addClass("noContent");
    }
  });
  })
</script>