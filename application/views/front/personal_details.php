<div id="pages_maincontent">

<h2 class="page_title">Personal Details</h2>

<div class="page_single layout_fullwidth_padding">




    <div class="contactform">
        <form class="" id="CustomForm" action="<?php echo base_url();?>home/advocate_register" method="post"  enctype="multipart/form-data">
            <div class="form_row">
                <label>Owner Name:</label>
                <input type="text" name="reg_no" value="" class="form_input" placeholder="for Business owner or citizen" required/>
            </div>
            <div class="form_row">
                <label>Destination:</label>
                <input type="text" name="cop_no" value="" class="form_input"  placeholder="If any"/>
            </div>
            <div class="form_row">
                <label>Father's Name:</label>
                <input type="text" name="adv_bac_no" value="" class="form_input" />
            </div>
            <div class="form_row">
                <label>Date Of Birth:</label>
                <input type="text" name="adv_name" value="" class="form_input" placeholder="MM/DD/YYYY"/>
            </div>
            <div class="form_row">
                <label>WhatApp No 1:</label>
                <input type="text" name="adv_f_name" value="" class="form_input"  maxlength="10" required/>
            </div>
            <div class="form_row">
                <label>WhatApp No 2:</label>
                <input type="text" name="adv_f_name" value="" class="form_input"  maxlength="10"/>
            </div>
            <div class="form_row">
                <label>Full Residence Address:</label>
                <textarea name="adv_add" class="form_textarea" rows="" cols="" required></textarea>
            </div>
              
             
            <div class="form_row">
                <label>Landmark:</label>
                <input type="text" name="adv_whatapp_no" value="" class="form_input" placeholder="Famous/Near by place of your area"/>
            </div>
            <div class="form_row">
                <label>Pin Code:</label>
                <input type="text" name="adv_rep_pin" value="" class="form_input">
            </div>
             <div class="form_row">
                <label>Select Residence Location:</label>
                <div class="selector_overlay">
                    <select name="adv_gen" class="form_input">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>

                    </select>
                </div>
            </div>
            <div class="form_row">
                <label>Photo:(Photo Size Less than 500kb only)</label>
                <input type="file" name="adv_img" value="" class="form_input required email" placeholder="image">
            </div>
 
            <div class="form_row">
                <label>Blood Group:</label>
                <textarea name="adv_add" class="form_textarea" rows="" cols="" placeholder="Fill only,Leave if don't know!"></textarea>
            </div>

            <div class="form_row">
                <label>Are you want to be a registered social worker:</label>
                <input type="text" name="adv_pin" value="" class="form_input" placeholder="Yes/Why No?">
            </div>
            <div class="form_row">
                <label>Are you want a Media Mitra Card (Press reporting):</label>
                <input type="text" name="adv_pin" value="" class="form_input" placeholder="Yes/No?Call for details">
            </div>
             <input type="submit" name="submit" class="form_submit" id="submitregister" value="Send ">
             <br>
            <br>
        </form>
    </div>



</div>

</div>

 