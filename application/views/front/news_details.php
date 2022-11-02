

<div id="pages_maincontent">
      
    <!-- <h2 class="blog_title " style="text-align:center;"><?php echo $news_category[0]->nc_name;?></h2> -->
      <h2 class="blog_title change_text" style="text-indent:50px;text-align:justify;" ><?php echo $view[0]->n_title;?> </h2>
	  
                  <!-- Slider -->
                 <div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination">
                    <div class="swiper-wrapper">
                    
                      <div class="swiper-slide">
                      <img src="<?php echo base_url()?>upload_images/<?php echo $view[0]->n_img;?>" alt="" title="" width="100%" />
                       </div>
                      	   
					   
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>	
        <div class="page_single layout_fullwidth_padding">	
          <div class="post_single">
          <p>
          <?php echo $view[0]->n_des;?>
          </p>
          
            <span class="post_date"><?php  
            $date=date_create($view[0]->createdate);
            echo date_format($date,"d-m-Y");
            
            ?> </span>
            <span class="post_author"><?php echo $view[0]->n_writtenby;?></span>
            <span class="post_comments"> <?php echo $view[0]->n_source;?></span>


           
           
          
            
           
          </div>
	  
           
          
          
		  
 </div>     
      
    </div>

     
