<div id="pages_maincontent">

<h2 class="page_title">Register Form</h2>

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