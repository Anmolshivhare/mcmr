<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Varify OTP </h2>
                <div class="page_link">
                  <a href="<?php echo base_url();?>">Home</a>
                  <a href="#">Varify</a>
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
			     
                <div class="col-sm-8 offset-md-2">
                    <div class="irs-account-col">
                        <h3>Enter your OTP</h3>
						<?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    ?>
                       <form action="" class="contact_form" method="post">
        <div class="row">       						 
        <div class="form-group col-md-12">							   <input type="hidden" class="form-control" name="phone"  value="<?php    $link = $_SERVER['PHP_SELF'];    $link_array = explode('/',$link);    echo $page = end($link_array);?>">
          <input type="password" class="form-control" name="otp" placeholder="OTP" required="">
          <?php echo form_error('otp','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group col-md-12">
            <input type="submit" name="varifySubmit" class="btn-primary" value="Submit"/>
        </div>        </div>
    </form>
    <p class="footInfo">Don't have an account? <a href="<?php echo base_url(); ?>users/registration">Register here</a></p>
	
                    </div>
                </div>
         
            </div>
        </div>
		
    </section>



