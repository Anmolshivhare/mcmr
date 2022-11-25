 


<div id="pages_maincontent">

<h2 class="page_title">Update Profile</h2>

<div class="page_single layout_fullwidth_padding">
 
    <div class="contactform">
        <form class="" id="CustomForm" action="<?php echo base_url();?>adminpersonal_details/userupdate/<?php echo $user['id'];?>" method="post"  enctype="multipart/form-data">
            <div class="form_row">
                <label>Owner Name:</label>
                <input type="text" name="first_name" value="<?php echo $user['first_name']; ?>" class="form_input" placeholder="for Business owner or citizen"/>
            </div>
            <div class="form_row">
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $user['email'];?>" disabled class="form_input"/>
            </div>
            <div class="form_row">
                <label>WhatApp No 1:</label>
                <input type="text" name="phone" value="<?php echo $user['phone'];?>" class="form_input"  maxlength="10"/>
            </div>
            <div class="form_row">
                <label>Destination:</label>
                <input type="text" name="u_des" value="<?php echo $user['u_des'];?>" class="form_input"  placeholder="If any"/>
            </div>
            <div class="form_row">
                <label>Father's Name:</label>
                <input type="text" name="u_f_name" value="<?php echo $user['u_f_name'];?>" class="form_input" />
            </div>
            <div class="form_row">
                <label>Date Of Birth:</label>
                <input type="text" name="u_dob" value="<?php echo $user['u_dob'];?>" class="form_input" placeholder="MM/DD/YYYY"/>
            </div>
           
            <div class="form_row">
                <label>WhatApp No 2:</label>
                <input type="text" name="u_phone" value="<?php echo $user['u_phone'];?>" class="form_input"  maxlength="10"/>
            </div>
            <div class="form_row">
                <label>Full Residence Address:</label>
                <textarea name="u_f_resident" class="form_textarea" rows="" cols="" required><?php echo $user['u_f_resident'];?></textarea>
            </div>
            	 
            <div class="form_row">
                <label>Landmark:</label>
                <input type="text" name="u_landmark" value="<?php echo $user['u_landmark'];?>" class="form_input" placeholder="Famous/Near by place of your area"/>
            </div>
            <div class="form_row">
                <label>Pin Code:</label>
                <input type="text" name="u_pincode" value="<?php echo $user['u_pincode'];?>" class="form_input">
            </div>
             <!-- <div class="form_row">
                <label>Select Residence Location:</label>
                <div class="selector_overlay">
                    <select name="adv_gen" class="form_input">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>

                    </select>
                </div>
            </div> -->
            <div class="form_row">
                <label>Photo:(Photo Size Less than 500kb only)</label>
                <input type="file" name="u_photo" class="form_input required email" placeholder="image">
                <img src="<?php echo base_url()?>upload_images/<?php echo $user['u_photo'];?>" width="50" alt="">
            </div>
 
            <div class="form_row">
                <label>Blood Group:</label>
                <input type="text" name="u_blood" value="<?php echo $user['u_blood'];?>" class="form_input">
            </div>

            <div class="form_row">
                <label>Are you want to be a registered social worker:</label>
                <input type="text" name="u_socialwork" value="<?php echo $user['u_socialwork'];?>" class="form_input" placeholder="Yes/Why No?">
            </div>
            <div class="form_row">
                <label>Are you want a Media Mitra Card (Press reporting):</label>
                <input type="text" name="u_mitra_card" value="<?php echo $user['u_mitra_card'];?>" class="form_input" placeholder="Yes/No?Call for details">
            </div>
             <input type="submit" name="submit" class="form_submit" id="submitregister" value="Send ">
        </form>
    </div>



</div>

</div>

<script>
var date = document.getElementById('date');

function checkValue(str, max) {
if (str.charAt(0) !== '0' || str == '00') {
var num = parseInt(str);
if (isNaN(num) || num <= 0 || num > max) num = 1;
str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
};
return str;
};

date.addEventListener('input', function(e) {
this.type = 'text';
var input = this.value;
if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
var values = input.split('/').map(function(v) {
return v.replace(/\D/g, '')
});
if (values[0]) values[0] = checkValue(values[0], 12);
if (values[1]) values[1] = checkValue(values[1], 31);
var output = values.map(function(v, i) {
return v.length == 2 && i < 2 ? v + ' / ' : v;
});
this.value = output.join('').substr(0, 14);
});

date.addEventListener('blur', function(e) {
this.type = 'text';
var input = this.value;
var values = input.split('/').map(function(v, i) {
return v.replace(/\D/g, '')
});
var output = '';

if (values.length == 3) {
var year = values[2].length !== 4 ? parseInt(values[2]) + 2000 : parseInt(values[2]);
var month = parseInt(values[0]) - 1;
var day = parseInt(values[1]);
var d = new Date(year, month, day);
if (!isNaN(d)) {
  document.getElementById('result').innerText = d.toString();
  var dates = [d.getMonth() + 1, d.getDate(), d.getFullYear()];
  output = dates.map(function(v) {
    v = v.toString();
    return v.length == 1 ? '0' + v : v;
  }).join(' / ');
};
};
this.value = output;
});
</script>