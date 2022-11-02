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

          <!--  <blockquote>
                <?php echo $view[0]->adv_bio; ?>
            </blockquote> -->

            <h3><b>More Details</b></h3>
            <ul class="features_list">

                <li><b>Reg No :</b> <?php echo $view[0]->reg_no;?> </li>
                <li> <b>COP No :</b> <?php echo $view[0]->cop_no;?> </li>
                <li> <b>B.A.C. No :</b> <?php echo $view[0]->adv_bac_no;?> </li>


            </ul>

            <ul class="features_list">
                <li>
                    <b>DOB :</b> <?php echo $view[0]->adv_dob; ?>
                </li>
                <li>
                   <b> Gender :</b> <?php echo $view[0]->adv_gen; ?>
                </li>
                <li>
                    <b>Blood Group :</b> <?php echo $view[0]->adv_blood_group; ?>
                </li>
                <li>
                   <b>Senior :</b> <?php echo $view[0]->adv_sf; ?>
                </li>
                <li>
                   <b> Chamber :</b> <?php echo $view[0]->adv_cf; ?>
                </li>
            </ul>
            <ul class="features_list">

                <?php  if($view[0]->adv_phone){  ?>
                <li>
                   <b> Phone No :</b> <?php echo $view[0]->adv_phone; ?>
                </li>
                <?php } ?>
                <li>
                   <b> whatsapp No :</b> <?php echo $view[0]->adv_whatapp_no; ?>
                </li>
                <li>
                    <b>Email Id :</b> <?php echo $view[0]->adv_email; ?>
                </li>
            </ul>

            <ul class="features_list">


                <li>

                   <b> Father Name :</b> <?php echo $view[0]->adv_f_name;?>

                </li>
                <li>
                    <?php if($view[0]->adv_add){ ?>
                   <b> Address :</b> <?php  echo $view[0]->adv_add; ?>

                    <?php } ?>
                </li> 
                
               <li> <?php if($view[0]->adv_pin){?>

               <b> Pincode :</b> <?php echo $view[0]->adv_pin;?>

                <?php } ?>
                </li>

                <li>

                    <?php if($view[0]->adv_rep_add){ ?>
                  <b>  Reporter Address :</b> <?php  echo $view[0]->adv_rep_add; ?>

                    <?php } ?>
                </li>

                <li>
                    <?php if($view[0]->adv_rep_pin){?>

                   <b> Pincode :</b> <?php echo $view[0]->adv_rep_pin;?>

                    <?php } ?>
                </li>







            </ul>
            <!-- <ul class="simple_list">
              <li>Creating a mobile website</li>
              <li>Creating a mobile web app</li>
              <li>Creating a mobile native app (integrated with solutions like phonegap or cordova)</li>
              <li>Works perfectly on tablets and desktop also</li>
              </ul> -->


            <!-- <a href="#" class="button_full btyellow external">Buy it NOW!</a> -->


        </div>

    </div>