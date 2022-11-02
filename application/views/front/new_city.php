 <div id="pages_maincontent">

     <h2 class="page_title">Bar Association </h2>
     
     <div class="page_single layout_fullwidth_padding">

         <!-- <div class="swiper-container-team swiper-init" data-effect="slide" data-space-between="10"
        data-pagination=".swiper-pagination-team" data-slides-per-view="2"> -->
      
         <div class="swiper-wrapper" style="display:flow-root;">
             <?php foreach($city as $view) { ?>
           
                 <div class="swiper-slide team-block" >
                 <form action="<?php echo base_url();?>/admindefault/homepagesession" method="post">

                         <?php if($view->c_img) {?>

                            <input type="hidden" name="city_id" value="<?php echo $view->id;?>" >

                           <button type="submit" style="cursor:pointer;">   
                          
                           

                           <img src="<?php echo base_url();?>upload_images/<?php echo $view->c_img;?>" height="150"
                             style="border-radius:0%;" alt="" title=""  />
                             </button>
                    
                         <?php }
          
                    else { ?>
                         <img src="<?php echo base_url();?>front_assets/images/" alt="" title="" />
                         <?php   
                      }
                      ?>

                         <strong><?php echo $view->c_name; ?></strong>
                         </form>
                 </div>
           
             <?php } ?>
         </div>
         <!-- </div> -->


     </div>




 </div>
 <style>
.team-block {
    display: inline-block;
    width: 48%;
}
 </style>