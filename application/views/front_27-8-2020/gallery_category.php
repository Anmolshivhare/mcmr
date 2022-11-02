<div id="pages_maincontent">
      
          <h2 class="page_title">RESPONSIVE VIDEOS</h2>
          
              <div class="page_single layout_fullwidth_padding">
                   

                    <?php foreach($gallerycategory as $view) { ?> 

                      <a href="<?php echo base_url();?>home/gallery_images/<?php echo $view->id;?>">  
                    <div class="videocontainer">
                     <img src="<?php echo base_url();?>upload_images/<?php echo $view->gc_img;?>" width="100%">
                    </div>
		             <h3 class="page_subtitle"><?php echo $view->gc_name;?></h3>
                    </a>

                   <?php } ?>
                    
                    
                    
              </div>
      
      </div>