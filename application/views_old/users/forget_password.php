<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Forget Password</h2>
                <div class="page_link">
                  <a href="#">Home</a>
                  <a href="#">Forget Password</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


 
<section class="irs-courses-field" style=" padding: 20px 0;">
 
        <div class="container">
            <div class="row">
			     
                <div class="col-sm-6 offset-md-3">
                    <div class="irs-account-col">
                        <h3>Forget Password</h3>
		 			<?php echo $msg;?>
                       <form action="" class="contact_form" method="post">
        <div class="form-group has-feedback">
            <input type="phone" class="form-control" name="phone" placeholder="Enter your Registered Mobile" required="" value="">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
      
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Don't have an account? <a href="<?php echo base_url(); ?>users/registration">Register here</a></p>    <p class="footInfo">Allready Registered<a href="<?php echo base_url(); ?>users/login"> Login</a></p>
	
                    </div>
                </div>
         
            </div>
        </div>
		
    </section>



