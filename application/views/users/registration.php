 <div id="pages_maincontent">

<h2 class="page_title"><b>For New User</b></h2>

<div class="page_single layout_fullwidth_padding">
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Registration form -->
    <div class="contactform">
        <form action="" method="post" id="CustomForm">
        <div class="form_row">
            <label for="">NAME</label>
                <input type="text"  class="form_input" name="first_name" placeholder="FIRST NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
                <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
            </div>
            <!-- <div class="form_row">
            <label for="">LAST NAME</label>
                <input type="text"  class="form_input" name="last_name" placeholder="LAST NAME" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
                <?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
            </div> -->
            <div class="form_row">
            <label for="">EMAIL</label>
                <input type="email"  class="form_input" name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form_row">
                <label for="">PASSWORD</label>
                <input type="password"  class="form_input" name="password" placeholder="PASSWORD" required>
                <?php echo form_error('password','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form_row">
                  <label for="">CONFIRM PASSWORD</label>  
                <input type="text" class="form_input" name="conf_password" placeholder="CONFIRM PASSWORD" required>
                <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
            </div>
           
            <div class="form_row">
                <label for="">WHATAPP NO</label>
                <input type="text"  class="form_input" name="phone" placeholder="WHATAPP NUMBER" maxlength="10"  value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
            </div>
            <div class="send-button">
                <input type="submit" name="signupSubmit"  class="form_submit" value="CREATE ACCOUNT">
            </div>
        </form>
        <p><b>Already have an account?</b><a href="<?php echo base_url('users/login'); ?>"style="color:blue;">Login here</a></p>
    </div>
</div>
</div>