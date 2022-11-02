



<div id="pages_maincontent">
      
              <h2 class="page_title"><?php echo $gallery_category[0]->gc_name;?></h2>
			  
<div class="page_single layout_fullwidth">	  

            

              
              <ul id="photoslist" class="photo_gallery_13">

                                <?php foreach($abcd as $sk) { ?>

                                <li><a rel="gallery-3" href="<?php echo base_url();?>upload_images/<?php echo $sk->g_img;?>" title="Photo title" class="swipebox">
                                <img  src="<?php echo base_url();?>upload_images/<?php echo $sk->g_img;?>" alt="image"/></a></li>

                                        <?php } ?>
                               
                              
                                <div class="clearleft"></div>
                              </ul>  
			  
			  
   </div>       
      

                
                
     <div class="clearleft"></div> 
      </div>