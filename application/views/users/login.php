<div id="pages_maincontent">

<h2 class="page_title"><b>Login to Your Account</b></h2>

<div class="page_single layout_fullwidth_padding">

    <style>
        .success{
            
            color:green;
        }
        .error{
color:red;
        }
       

    </style>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Login form -->
    <div class="contactform">
        <form action="" method="post">
            <div class="form-group">
                <label for="">EMAIL</label>
                <input type="email" name="email" class="form_input" placeholder="EMAIL"  required="">
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <label for="">PASSWORD</label>
                <input type="password" name="password" class="form_input" placeholder="PASSWORD" required="">
                <?php echo form_error('password','<p class="help-block">','</p>'); ?>
            </div>
            <div class="send-button">
                <input type="submit" name="loginSubmit"  class="form_submit" value="LOGIN">
            </div>
        </form>
        <p><b>Don't have an account? </b><a href="<?php echo base_url('users/registration'); ?>"style="color:blue;">Create New Account</a></p>
    </div>
</div>
</div>