<div id="pages_maincontent">

    <h2 class="page_title">City</h2>

    <div class="page_single layout_fullwidth_padding">

        <ul class="features_list_detailed">
            <?php foreach($city as $view) { ?>
            <li>

                <a href="<?php echo base_url();?>home/city_wise_member/<?php echo $view->id;?>">
                    <?php if($view->c_img) {?>
                    <div class="feat_small_icon"><img
                            src="<?php echo base_url();?>upload_images/<?php echo $view->c_img;?>" alt="" title="" />
                    </div>
                    <?php }
                
                    else { ?>
                    <img src="<?php echo base_url();?>front_assets/images/" style="width:100px;" alt=""
                        title="" />
                    <?php   
                    }
                    ?>


                    <div class="feat_small_details">
                        <h5><a href="#"><?php echo $view->c_name; ?> </a></h5>
                        <!-- <a href="about.html">Created for all screens, mobile and desktop. Full width layout with touch enabled sections.</a> -->
                    </div>
                </a>
            </li>
            <?php } ?>



        </ul>
    </div>


</div>