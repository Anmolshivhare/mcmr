<div id="pages_maincontent">

<h2 class="page_title"><?php echo $view[0]->adv_name;?></h2>
<!-- Slider -->
<div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination"
    data-next-button=".swiper-button-next" data-prev-button=".swiper-button-prev">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
        <?php  if($view[0]->adv_img){  ?>
            <img src="<?php echo base_url();?>upload_images/<?php echo $view[0]->adv_img;?>" width="100%"
                height="500px" alt="please upload image" title="">
           <?php }  
            
              
           else { ?>
                        <img src="<?php echo base_url();?>front_assets/images/user.jpg" width="100%" alt=""
                            title="" />
                        <?php   
           }
             
             ?> 

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
        <?php  if($view[0]->reg_no){  ?>
        <li>
            <b>Reg No :</b> <?php echo $view[0]->reg_no;?>
        </li>
        <?php } ?>

        <?php  if($view[0]->cop_no){  ?>
        <li> <b>COP No :</b> <?php echo $view[0]->cop_no;?> </li>
        <?php } ?>

        <?php  if($view[0]->adv_bac_no){ ?>
        <li> <b>B.A.C. No :</b> <?php echo $view[0]->adv_bac_no;?> </li>
        <?php } ?>

    </ul>

    <ul class="features_list">
        <?php  if($view[0]->adv_dob){  ?>
        <li>
            <b>DOB :</b> <?php echo $view[0]->adv_dob; ?>
        </li>
        <?php } ?>
        <?php  if($view[0]->adv_gen){  ?>
        <li>
            <b> Gender :</b> <?php echo $view[0]->adv_gen; ?>
        </li>
        <?php } ?>
        <?php  if($view[0]->adv_blood_group){  ?>
        <li>
            <b>Blood Group :</b> <?php echo $view[0]->adv_blood_group; ?>
        </li>
        <?php } ?>
        <?php  if($view[0]->adv_sf){  ?>
        <li>
            <b>Senior :</b> <?php echo $view[0]->adv_sf; ?>
        </li>
        <?php } ?>
        <?php  if($view[0]->adv_cf){ ?>
        <li>
            <b> Chamber :</b> <?php echo $view[0]->adv_cf; ?>
        </li>
        <?php } ?>

    </ul>
    <ul class="features_list">

        <?php  if($view[0]->adv_phone){  ?>
        <li>
            <b> Phone No :</b> <?php echo $view[0]->adv_phone; ?>
        </li>
        <?php } ?>
        <?php  if($view[0]->adv_whatapp_no){  ?>
        <li>
            <b> whatsapp No :</b> <?php echo $view[0]->adv_whatapp_no; ?>
        </li>
        <?php } ?>
        <?php  if($view[0]->adv_email){ ?>
        <li>
            <b>Email Id :</b> <?php echo $view[0]->adv_email; ?>
        </li>
        <?php } ?>
    </ul>

    <ul class="features_list">

        <?php if($view[0]->adv_f_name){ ?>
        <li>

            <b> Father Name :</b> <?php echo $view[0]->adv_f_name;?>

        </li>
        <?php } ?>
        <?php if($view[0]->adv_f_name){?>
        <li>

            <b> Address :</b> <?php  echo $view[0]->adv_add;?>


        </li>
        <?php } ?>
        <?php if($view[0]->adv_pin){?>
        <li>

            <b> Pincode :</b> <?php echo $view[0]->adv_pin;?>


        </li>
        <?php } ?>

        <?php if($view[0]->adv_rep_add){?>
        <li>
            <b> Reporter Address :</b> <?php echo $view[0]->adv_rep_add;?>

        </li>
        <?php } ?>

        <?php if($view[0]->adv_rep_pin){?>
        <li>


            <b> Pincode :</b> <?php echo $view[0]->adv_rep_pin;?>
        </li>
        <?php } ?>

    </ul>
   


</div>

</div>