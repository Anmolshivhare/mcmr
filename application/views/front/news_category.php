<div id="pages_maincontent">

    <h2 class="page_title">News</h2>
    <div class="page_single layout_fullwidth_padding">

        <div class="list-block">
            <ul class="posts">
                <?php foreach($newscategory as $view){ ?>

                <li class="swipeout">

                    <div class="swipeout-content item-content">
                        <div class="post_entry">
                            <a href="<?php echo base_url();?>home/news_details/<?php echo $view->id;?>">
                                <div class="post_thumb"><img
                                        src="<?php echo base_url()?>upload_images/<?php echo $view->n_img;?>" alt=""
                                        title="" /></div>
                                <div class="post_details">
                                    <div class="post_category"><a
                                            href="blog-single.html"><?php echo $view->n_title;?></a></div>
                                    <h2><a href="blog-single.html"></a>
                                    </h2>
                                </div>
                            </a>
                            <div class="post_swipe"><img src="<?php echo base_url();?>front_assets/images/swipe_more.png" alt="" title="" /></div>
                        </div>
                    </div>

                    <div class="swipeout-actions-right">
                    <a href="#" class="action1"><img
                                 src="<?php echo base_url();?>front_assets/images/icons/black/message.png" alt=""
                                 title="" /></a>
                         <a href="#" class="action1 open-popup" data-popup=".popup-social"><img
                                 src="<?php echo base_url();?>front_assets/images/icons/black/like.png" alt=""
                                 title="" /></a>
                         <a href="#" class="action1 open-popup" data-popup=".popup-social"><img
                                 src="<?php echo base_url();?>front_assets/images/icons/white/contact.png" alt=""
                                 title="" /></a>
                    </div>
                </li>

                <?php } ?>


            </ul>

            <!-- <div id="loadMore">LOAD MORE</div>
            <div id="showLess">END</div> -->
        </div>

    </div>

</div>