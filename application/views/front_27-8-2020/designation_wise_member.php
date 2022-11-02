<div id="pages_maincontent">

<h2 class="page_title text-center">Register Members</h2>
<div class="page_single layout_fullwidth_padding">

    <div class="list-block">
        <ul class="posts">


            <?php foreach($advocate as $view) { ?>
            <li class="swipeout">

                <div class="swipeout-content item-content">

                    <div class="post_entry">
                       
                            <div class="post_thumb">
<a href="<?php echo base_url();?>home/member_detail/<?php echo $view->id;?>">
                                <?php if($view->adv_img) {?>
                                <img src="<?php echo base_url();?>upload_images/<?php echo $view->adv_img;?>"
                                    alt="" title="" width="100%" />
                                <?php 
                     }
                     else { ?>
                                <img src="<?php echo base_url();?>front_assets/images/user.jpg"   width="100%"  alt="" title="" />
                                <?php   
                   }
                     
                     ?>
</a>

                            </div>

                            <div class="post_details">

                                <div class="post_category"><a href="<?php echo base_url();?>home/member_detail/<?php echo $view->id;?>"><?php echo $view->adv_name;?></a></div>
                              
                                <h2><a href="<?php echo base_url();?>home/member_detail/<?php echo $view->id;?>">City :
                                        <?php  $city_id =  $view->city_id;
                            $sqll= "SELECT * FROM city WHERE id='$city_id'"; 
                                       $sql = $this->db->query($sqll);
                                       $query= $sql->result();
                                       if(isset($query[0]->c_name)) {
                                           echo $query[0]->c_name;
                                       }
                                     ?>
                                    </a></h2>
                                <h2><a href="<?php echo base_url();?>home/member_detail/<?php echo $view->id;?>"> Occupation : <?php 
                            $cat_id =  $view->cat_id;
                            $sqll= "SELECT * FROM category WHERE id='$cat_id'"; 
                                       $sql = $this->db->query($sqll);
                                       $query= $sql->result();
                                       if(isset($query[0]->cat_name)) {
                                           echo $query[0]->cat_name;
                                       }
                                     ?>
                                    </a></h2>
                            </div>
                            <div class="post_swipe"><img src="images/swipe_more.png" alt="" title="" /></div>
                           
                    </div>
                </div>
                <div class="swipeout-actions-right">
                    <a href="#" class="action1"><img src="images/icons/black/message.png" alt="" title="" /></a>
                    <a href="#" class="action1 open-popup" data-popup=".popup-social"><img
                            src="images/icons/black/like.png" alt="" title="" /></a>
                    <a href="#" class="action1 open-popup" data-popup=".popup-social"><img
                            src="images/icons/white/contact.png" alt="" title="" /></a>
                </div>
              
            </li>
            <?php } ?>
        </ul>


    </div>

</div>

</div>