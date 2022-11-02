<?php foreach($package  as $viewpackage);?>  
  
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2> <?php echo $viewpackage->name;?> </h2>
                <div class="page_link">
                  <a href="#">Home</a>
                  <a href="#">Courses</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
<section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
<image  width="100%" height="500px" src="<?php echo base_url();?>upload_images/<?php echo $viewpackage->image;?>"  > 
 
</video>
                            </div>
                        </div>
                     
                        <div class="col-lg-12 col-md-12 blog_details">
                            <h2><?php echo $viewpackage->name;?></h2>
                              <p> <?php echo $viewpackage->description;?></p>
                           
                        </div>
                    </div>
              
                  
                   
                </div>
                <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                          
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                                <h4>Price: <?php echo $viewpackage->price;?>  Rs
						
						
						 </h4>
                                <p>Package Validity : <?php echo $viewpackage->duration;?> Month </p>
                                
                               
                                <div class="br"></div>
                            </aside>
                         
                            <aside class="single_sidebar_widget ">
                                 <form method="post" id="product_info" enctype="multipart/form-data" action="<?php echo base_url(); ?>Welcome/check">                                                                  
                <div class="form-group">  
<input type="hidden" name="product_info" id="product_info" value="<?php echo $viewpackage->id;?>">		
                  <input type="number"  value="<?php echo $viewpackage->price;?>"  name="payble_amount" id="payble_amount" class="form-control" placeholder="Enter Payble Amount" required />
                </div>
                <div class="form-group">
                    <input type="text" name="product_info_name" id="product_info_name" class="form-control"  Placeholder="Product info name" value="<?php echo $viewpackage->name;?>" required />
                </div>
               <div class="form-group">                      
                  <input type="text" value="<?php echo $user['name']; ?>" name="customer_name" id="customer_name" class="form-control" placeholder="Full Name (Only alphabets)" required/>
                </div>
                <div class="form-group">                                   
                  <input type="number"  name="mobile_number" value="<?php echo $user['phone']; ?>" id="mobile_number" class="form-control" placeholder="Mobile Number(10 digits)" required/>
                </div>
                <div class="form-group">                                   
                  <input type="email"  name="customer_email"  value="<?php echo $user['email']; ?>" id="customer_email" class="form-control" placeholder="Email" required/>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="customer_address"  value="<?php echo $user['address']; ?>" id="customer_address" placeholder="Address" required></textarea>
                </div>
                <div class="form-group text-right">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </form>
                            </aside>
                            
                     
                            
                        </div>
                    </div>
            </div>
        </div>
    </section>