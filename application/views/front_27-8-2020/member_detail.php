    <div id="pages_maincontent">

        <h2 class="page_title"><?php echo $view[0]->adv_name;?></h2>
        <!-- Slider -->
        <div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination"
            data-next-button=".swiper-button-next" data-prev-button=".swiper-button-prev">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="<?php echo base_url();?>upload_images/<?php echo $view[0]->adv_img;?>" width="100%"
                        height="500px" alt="" title="">
                </div>


            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="page_single layout_fullwidth_padding">

            <blockquote>
                Advocate Dheeraj Kumar completed his law in the year 2001 and has been providing services in various
                fields of law, that is, Criminal, Cheque Bounce, Banking / Finance and drafting and vetting of various
                agreements and documents.

                Advocate Dheeraj enrolled with the Bar Council of Uttar Pradesh in 2001. He is a member of the Agra
                Greater Bar Association.
            </blockquote>

            <h3>More Details</h3>
            <ul class="features_list">

                <li><a href="#">Reg No : <?php echo $view[0]->reg_no;?></a></li>
                <li><a href="#">COP No : <?php echo $view[0]->cop_no;?></a></li>
                <li><a href="#">B.A.C. No : <?php echo $view[0]->adv_bac_no;?></a></li>


            </ul>

            <ul class="features_list">
                <li>
                     DOB: <?php echo $view[0]->adv_dob; ?> 
                </li>
                <li>
                     Gender:<?php echo $view[0]->adv_gen; ?> 
                </li>
                <li>
                     Blood Group:<?php echo $view[0]->adv_blood_group; ?> 
                </li>
            </ul>
            <ul class="features_list">
              
            <?php  if($view[0]->adv_phone){  ?>
                <li>
                     Phone No: <?php echo $view[0]->adv_phone; ?> 
                </li>
                <?php } ?>
                <li>
                     whatsapp No:<?php echo $view[0]->adv_whatapp_no; ?> 
                </li>
                <li>
                     Email Id:<?php echo $view[0]->adv_email; ?> 
                </li>
            </ul>
            <h5>
                Father Name: <?php echo $view[0]->adv_f_name;?>
            </h5>
            <?php if($view[0]->adv_add){ ?>
            <h4>Address :  <?php  echo $view[0]->adv_add; ?></h4>
            
            <?php } ?>

            <?php if($view[0]->adv_pin){?>
            <h5>
                Pincode: <?php echo $view[0]->adv_pin;?>
            </h5>
            <?php } ?>

            <?php if($view[0]->adv_rep_add){ ?>
            <h4>Reporter Address :  <?php  echo $view[0]->adv_rep_add; ?></h4>
            
            <?php } ?>

            <?php if($view[0]->adv_rep_pin){?>
            <h5>
                Pincode: <?php echo $view[0]->adv_rep_pin;?>
            </h5>
            <?php } ?>

            <!-- <ul class="simple_list">
              <li>Creating a mobile website</li>
              <li>Creating a mobile web app</li>
              <li>Creating a mobile native app (integrated with solutions like phonegap or cordova)</li>
              <li>Works perfectly on tablets and desktop also</li>
              </ul> -->


            <!-- <a href="#" class="button_full btyellow external">Buy it NOW!</a> -->


        </div>

    </div>