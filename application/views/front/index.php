<!-- Slider -->
<div class="swiper-container slidertoolbar swiper-init" data-effect="slide" data-parallax="true"
    data-pagination=".swiper-pagination" data-next-button=".swiper-button-next" data-prev-button=".swiper-button-prev">
    <div class="swiper-wrapper">

    <?php foreach($slider as $view) { ?>
        <div class="swiper-slide" style="background-image:url(<?php echo base_url();?>upload_images/<?php echo $view->slide_img;?>);height:420px;">
            <div class="slider_trans " style="margin-top:10em;">
                <div class="slider-caption">
                    <span class="subtitle" data-swiper-parallax="-60%"><?php echo $view->slide_heading;?></span>
                    <h2 data-swiper-parallax="-100%"><?php echo $view->slide_heading_2;?></h2>
                     <p data-swiper-parallax="-30%"><?php echo $view->slide_link;?></p>
                </div>
            </div>
        </div>
    <?php } ?>
 

        <!-- <div class="swiper-slide" style="background-image:url(<?php echo base_url();?>front_assets/images/slide2.jpg);">
            <div class="slider_trans">
                <div class="slider-caption">
                    <span class="subtitle" data-swiper-parallax="-60%">BAR ASSOCIATION CHIBRAMAU</span>
                    <h2 data-swiper-parallax="-100%">Attorney & Law</h2>

                    <p data-swiper-parallax="-30%">Excellent Team of Lawyer</p>
                </div>
            </div>
        </div> -->


    </div>
    <!-- <div class="swiper-pagination"></div> -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<style>
    p a::before {
        content: "cir";
        background-color: black;
        border-radius: 10px;
        width: 10px;
        height: 10px;
        margin-right: 4px;
        margin-left: 3px;


    }

    .homenews {
       
        background: yellow;

    }

    .homenews marquee a {
        color: black;
        font-size: 20px;
    }

    marquee {
        padding-top: 10px;
    }
    p{
        margin-bottom:2px;
    }
    
    </style>

<div class="swiper-container-toolbar swiper-toolbar swiper-init" data-effect="slide" data-slides-per-view="1"
    data-slides-per-group="1" data-space-between="0" data-pagination=".swiper-pagination-toolbar">
     <div class="homenews">

         
            <marquee behavior="" direction="">
                <p><?php foreach($news as $view) { ?>
                     <a href="<?php echo base_url();?>home/news_details/<?php echo $view->id;?>">
                    <b><?php echo $view->n_title;?></b></a>

                    <?php } ?>
                </p>
            </marquee>
     </div>
     <br>
     <div class="swiper-pagination-toolbar"></div>
    <div class="swiper-wrapper">
        <div class="swiper-slide toolbar-icon"  >
            <a href="<?php echo base_url();?>home/member"><img
                    src="<?php echo base_url();?>front_assets/images/icons/blue/users.png" alt=""
                    title=""><span>Search Entire City</span></a>
            <a href="<?php echo base_url();?>admindefault/index" data-view=".view-main"><img
                    src="<?php echo base_url();?>front_assets/images/icons/blue/features.png" alt="" title=""><span>Contact Diary</span></a>

            <a href="<?php echo base_url();?>home/account" data-view=".view-main"><img
                    src="<?php echo base_url();?>front_assets/images/icons/blue/form.png" alt=""
                    title=""><span>Citizen Welfare Fund</span></a>

            <a href="<?php echo base_url()?>home/event" data-view=".view-main"><img
                    src="<?php echo base_url();?>front_assets/images/icons/blue/blog.png" alt=""
                    title=""><span>Upload Complain/Suggestion/Apply</span></a>

            <a href="<?php echo base_url(); ?>home/gallery_category" data-view=".view-main"><img
                    src="<?php echo base_url();?>front_assets/images/icons/blue/photos.png" alt=""
                    title=""><span>Nagar Ka Gaurav</span></a>
            <a href="<?php echo base_url(); ?>home/news_category" class="external"><img
                    src="<?php echo base_url();?>front_assets/images/icons/blue/blog.png" alt=""
                    title=""><span>Download Information</span></a>
        </div>


    </div>
</div>


