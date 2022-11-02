<div id="pages_maincontent">


    <h2 class="blog_title " style="text-align:center;"><?php echo $view[0]->e_name;?></h2>

    <!-- Slider -->
    <div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination">



        <img src="<?php echo base_url()?>upload_images/<?php echo $view[0]->e_img;?>" alt="" title="" width="100%" />




        <div class="swiper-pagination"></div>
    </div>
    <div class="page_single layout_fullwidth_padding">
        <div class="">
            <p>
                <?php echo $view[0]->e_detail;?>
            </p>
            <!-- <span class="post_date"> </span><br>
            <span class="post_author"> </span><br>
            <span class="post_comments"></span><br> -->
            <ul class="features_list">
                <li>Date : <?php echo $view[0]->e_date;?></li>
                <li>Event orgniser : <?php echo $view[0]->e_orgniser;?></li>
                <li>Event venue : <?php echo $view[0]->e_venue;?></li>
            </ul>
        </div>




    </div>

</div>