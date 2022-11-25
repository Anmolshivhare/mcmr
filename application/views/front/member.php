<div id="pages_maincontent">

    <h2 class="page_title text-center">Register Members</h2>
    <div class="page_single layout_fullwidth_padding">

        <div class="list-block">
            <br>

            <div class="search">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                    title="Type in a name">
            </div>



            <ul class="posts main" id="myUL">


                <?php foreach($advocate as $view) { 
               
               ?>
                <li class="swipeout contact-name ">
                    <a href="<?php echo base_url();?>home/member_detail/<?php echo $view->id;?>">
                        <div class="swipeout-content item-content">

                            <div class="post_entry">

                                <div class="post_thumb">

                                    <?php if($view->adv_img) {?>
                                    <img src="<?php echo base_url();?>upload_images/<?php echo $view->adv_img;?>" alt=""
                                        title="" width="100%" height="80px" />
                                    <?php 
                                    }
                                    else { ?>
                                    <img src="<?php echo base_url();?>front_assets/images/user.jpg" width="100%" alt=""
                                        title="" height="80px" />
                                    <?php   
                                    }
                                        
                                        ?>




                                </div>

                                <div class="post_details">
                                    <?php if($view->adv_name){?>
                                    <h2>
                                        <b>Name:</b> <?php echo $view->adv_name;?>
                                    </h2>
                                    <?php } ?>




                                    <?php if($view->adv_phone){?>

                                    <h2> <b> Phone:</b>
                                        <?php echo $view->adv_phone;
								 
						                  ?>
                                    </h2>
                                    <?php } ?>

                                    <h2><b> Expertness :</b> <?php 
                                        $cat_id =  $view->cat_id;
                                        $sqll= "SELECT * FROM category WHERE id='$cat_id'"; 
                                                    $sql = $this->db->query($sqll);
                                            $query= $sql->result();
                                            if(isset($query[0]->cat_name)) {
                                                echo $query[0]->cat_name;
                                            }
						                  ?>
                                    </h2>


                                </div>

                                <div class="post_details" style="width:100%; margin:0">


                                    <?php if($view->a_prectice){?>
                                    <h2> <b> Practice in :</b>
                                        <?php echo $view->a_prectice;
								 
						                  ?>
                                    </h2>
                                    <?php } ?>



                                    <?php if($view->adv_add){?>
                                    <h2> <b> Address :</b>
                                        <?php echo $view->adv_add;
								 
						                  ?>
                                    </h2>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <?php } ?>
            </ul>



        </div>

    </div>

</div>