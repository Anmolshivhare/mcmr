<div id="pages_maincontent">

<h2 class="page_title">Business Details</h2>

<div class="page_single layout_fullwidth_padding">




    <div class="contactform">
        <form class="" id="CustomForm" action="<?php echo base_url();?>home" method="post"  enctype="multipart/form-data">
           
            <div class="form_row custom_select">
                <a href="#" class="item-link smart-select" data-open-in="picker">
                    <div class="item-content">
                        <div class="item-inner">
                            <label>Select Business/Category:</label>
                            <div class="item-after">Select one</div>
                        </div>
                    </div>
                    <select name="des_id">
                    <?php   $category = $this->Adminmodel->select('designation','',0,'desc');
                                                        foreach($category as $view) { ?>
                <option value="<?php echo  $view->id;?>">
                    <?php echo  $view->des_name;?></option>

                <?php } ?>  </select>
                    </a>
            </div>
            <div class="form_row custom_select">
                <a href="#" class="item-link smart-select" data-open-in="picker">
                    <div class="item-content">
                        <div class="item-inner">
                            <label>Business/Service class:</label>
                            <div class="item-after">Select one</div>
                        </div>
                    </div>
                    <select name="des_id">
                    <?php   $category = $this->Adminmodel->select('designation','',0,'desc');
                                                        foreach($category as $view) { ?>
                <option value="<?php echo  $view->id;?>">
                    <?php echo  $view->des_name;?></option>

                <?php } ?>  </select>
                    </a>
            </div>

            <div class="form_row">
                <label>Business/ferm/service name (if any):</label>
                <input type="text" name="service_name" value="" placeholder="Leave if no any" class="form_input"/>
            </div>
            <div class="form_row">
                <label>Business/Service Timing:</label>
                <input type="text" name="time" value="" placeholder="Type morning to night" class="form_input"/>
            </div>
            <div class="form_row">
                <label>Business/service weekly off:</label>
                <input type="text" name="weekly_off" value="" placeholder="If any day" class="form_input">
            </div>
            <div class="form_row">
                <label>Business/service specialty:</label>
                <textarea name="service_add" class="form_textarea" rows="1" cols="" placeholder="Write details of your business/service "></textarea>
            </div>
            <div class="form_row">
                <label>Full addess with landmark:</label>
                <textarea name="full_add" class="form_textarea" rows="1" cols="" placeholder="Type address "></textarea>
            </div>
            <div class="form_row">
                <label>Contact details:</label>
                <input type="text" name="b_phone" value="" class="form_input" placeholder="Phone No" maxlength="10">
            </div>                                              
              
            <!-- <div class="form_row">
                <label>Select Gender:</label>
                <div class="selector_overlay">
                    <select name="adv_gen" class="form_input">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>

                    </select>
                </div>
            </div> -->

            <div class="form_row">
                <label>Proprietor/Owner name:</label>
                <input type="text" name="owner_name" id="date" placeholder="Owner name"  class="form_input"    />
                     
            </div>
            <input type="submit" name="submit" class="form_submit" id="submitregister" value="Send ">
            <br>
            <br>
           
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