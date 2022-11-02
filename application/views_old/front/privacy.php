
<div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#"><?php echo $aboutus[0]->title;?>
</a></li>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of breadcrumb area  ======-->


    <!--=============================================
    =            Blog Page Container         =
    =============================================-->

    <div class="blog-page-container mb-50">
        <div class="container">
            <div class="row">
             
                <div class="col-lg-12 order-1 mb-sm-35 mb-xs-35">
                    <!--=======  blog post container  =======-->

                    <div class="blog-single-post-container mb-50">

                        <!--=======  post title  =======-->


                        <h3 class="post-title"><?php echo $aboutus[0]->title;?>
</h3>

                        

                      <?php if($aboutus[0]->thumb_image) { ?>
                        <div class="single-blog-post-media mb-xs-20">
                            <div class="image">
  <img  src="<?php echo base_url();?>upload_images/<?php echo $aboutus[0]->thumb_image;?>" class="img-fluid" alt="">
                            </div>
                            
                        </div>
<?php } ?>

                        <!--=======  End of Post media  =======-->

                        <!--=======  Post content  =======-->

                        <div class="post-content mb-40">
                            <?php echo $aboutus[0]->description;?>

                        </div>

                         

                        
 
                    </div>

                     


                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Blog Page Container  ======-->