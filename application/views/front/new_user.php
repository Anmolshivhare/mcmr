<div id="pages_maincontent">

<h2 class="page_title">For New User</h2>

<div class="page_single layout_fullwidth_padding">

 
    <div class="contactform">
        <form class="" id="CustomForm" action="<?php echo base_url();?>home/newuser_info" method="post"  enctype="multipart/form-data">
            <div class="form_row">
                <label>User Name:</label>
                <input type="text" name="user_name" value="" class="form_input" />
            </div>
            <div class="form_row">
                <label>WhatApp No:</label>
                <input type="text" name="whatapp_no" value="" class="form_input" maxlength="10"/>
            </div>
            <div class="form_row">
                <label>Address:</label>
                <textarea name="u_address" class="form_textarea" rows="" cols="" required></textarea>
            </div>
            <div class="form_row">
                <label>Age:</label>
                <input type="text" name="u_age" value="" class="form_input" />
            </div>
            <div class="form_row">
                <label>Create Password:</label>
                <input type="text" name="create_pass" value=""class="form_input" placeholder="mcmr@123" required />
                   
            </div>
             


            <input type="submit" name="submit" class="form_submit" id="submitregister" value="Send ">
        </form>
    </div>

 

</div>

</div>

 