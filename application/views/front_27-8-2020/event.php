<div id="pages_maincontent">

    <h2 class="page_title">Events</h2>
    <div class="page_single layout_fullwidth_padding">

        <div class="list-block">
            <ul class="posts">
                <?php foreach($event as $view){ ?>

                <li class="swipeout">

                    <div class="swipeout-content item-content">
                        <div class="post_entry">
                            <a href="<?php echo base_url();?>home/event_detail/<?php echo $view->id;?>">
                                <div class="post_thumb"><img
                                        src="<?php echo base_url()?>upload_images/<?php echo $view->e_img;?>" alt=""
                                        title="" /></div>
                                <div class="post_details">
                                    <div class="post_category"><a
                                            href="blog-single.html"><?php echo $view->e_name;?></a></div>
                                    <h2><a href="blog-single.html"></a>
                                    </h2>
                                </div>
                            </a>
                            <div class="post_swipe"><img src="images/swipe_more.png" alt="" title="" /></div>
                        </div>
                    </div>

                    <div class="swipeout-actions-right">
                        <a href="blog-single.html" class="action1"><img src="images/icons/black/message.png" alt=""
                                title="" /></a>
                        <a href="#" class="action1 open-popup" data-popup=".popup-social"><img
                                src="images/icons/black/like.png" alt="" title="" /></a>
                        <a href="#" class="action1 open-popup" data-popup=".popup-social"><img
                                src="images/icons/white/contact.png" alt="" title="" /></a>
                    </div>
                </li>

                <?php } ?>


            </ul>

            <!-- <div id="loadMore">LOAD MORE</div>
            <div id="showLess">END</div> -->
        </div>

    </div>

</div>