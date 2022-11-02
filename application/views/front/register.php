 <div id="pages_maincontent">

    <h2 class="page_title">Register Form</h2>

    <div class="page_single layout_fullwidth_padding">




        <div class="contactform">
            <form class="" id="CustomForm" action="<?php echo base_url();?>home/advocate_register" method="post"  enctype="multipart/form-data">
                <div class="form_row">
                    <label>Register No:</label>
                    <input type="text" name="reg_no" value="" class="form_input" />
                </div>
                <div class="form_row">
                    <label>COP No:</label>
                    <input type="text" name="cop_no" value="" class="form_input" />
                </div>
                <div class="form_row">
                    <label>BAC No:</label>
                    <input type="text" name="adv_bac_no" value="" class="form_input" />
                </div>
                <div class="form_row">
                    <label>Advocate Name:</label>
                    <input type="text" name="adv_name" value="" class="form_input" required />
                </div>
                <div class="form_row">
                    <label>Advocate Father Name:</label>
                    <input type="text" name="adv_f_name" value="" class="form_input" />
                </div>
                <div class="form_row">
                    <label>Senior:</label>
                    <input type="text" name="adv_sf" value="" class="form_input" />
                </div>
                <div class="form_row">
                    <label>Chamber:</label>
                    <input type="text" name="adv_cf" value="" class="form_input" />
                </div>
                <div class="form_row">
                    <label>Blood Group:</label>
                    <input type="text" name="adv_blood_group" value="" class="form_input" />
                </div>
                <div class="form_row">
                    <label>Other Practise Area:</label>
                    <input type="text" name="adv_area" value="" class="form_input" placeholder="Court/Revenue Department etc.." />
                </div>


                 <div class="form_row">
                    <label>Designation:</label>
                    <input type="text" name="a_designation" value="" class="form_input required email"/>
                </div>
                <div class="form_row">
                    <label>Work Place:</label>
                    <input type="text" name="a_workplace" value="" class="form_input required email"/>
                </div>
                <div class="form_row">
                    <label>Practice in:</label>
                    <input type="text" name="a_prectice" value="" class="form_input required email"/>
                </div>   
                <div class="form_row">
                    <label>Email:</label>
                    <input type="email" name="adv_email" value="" class="form_input required email" required />
                </div>
                <div class="form_row">
                    <label>Phone:</label>
                    <input type="text" name="adv_phone" value="" class="form_input required email" maxlength="10" required/>
                </div>
                <div class="form_row">
                    <label>Whatsaap:</label>
                    <input type="text" name="adv_whatapp_no" value="" class="form_input required email" />
                </div>
                <div class="form_row">
                    <label>Photo:(Photo Size Less than 500kb only)</label>
                    <input type="file" name="adv_img" value="" class="form_input required email" placeholder="image">
                </div>


                <div class="form_row">
                    <label>Select Gender:</label>
                    <div class="selector_overlay">
                        <select name="adv_gen" class="form_input">
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                        </select>
                    </div>
                </div>

                <div class="form_row">
                    <label>Date of Birth:</label>
                    <input type="text" name="adv_dob" id="date" placeholder="MM/DD/YYYY"  class="form_input"    />
                         
                </div>

                <div class="form_row custom_select">
                    <a href="#" class="item-link smart-select" data-open-in="picker">
                        <div class="item-content">
                            <div class="item-inner">
                                <label> Select Bar Association</label>
                                <div class="item-after">Select one</div>
                            </div>
                        </div>
                        <select name="city_id">



                            <?php   $city = $this->Adminmodel->select('city','',0,'desc');
                            foreach($city as $view) { ?>
                            <option value="<?php echo  $view->id;?>">
                                <?php echo  $view->c_name;?></option>

                            <?php } ?>

                        </select>
                    </a>
                </div>


                <div class="form_row custom_select">
                    <a href="#" class="item-link smart-select" data-open-in="picker">
                        <div class="item-content">
                            <div class="item-inner">
                                <label>Select occupation </label>
                                <div class="item-after">Select one</div>
                            </div>
                        </div>
                        <select name="cat_id">
   
<?php   $city = $this->Adminmodel->select('category','',0,'desc');
                                            foreach($city as $view) { ?>
<option value="<?php echo  $view->id;?>">
    <?php echo  $view->cat_name;?></option>

<?php } ?>  </select>
                    </a>
                </div>

                <div class="form_row custom_select">
                    <a href="#" class="item-link smart-select" data-open-in="picker">
                        <div class="item-content">
                            <div class="item-inner">
                                <label>Select Profile </label>
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
                    <label>Advocate Address:</label>
                    <textarea name="adv_add" class="form_textarea" rows="" cols="" required></textarea>
                </div>

                <div class="form_row">
                    <label>Pin Code:</label>
                    <input type="text" name="adv_pin" value="" class="form_input">
                </div>

                <div class="form_row">
                    <label>Reporter Address:</label>
                    <textarea name="adv_rep_add" class="form_textarea" rows="" cols=""></textarea>
                </div>

                <div class="form_row">
                    <label>Pin Code:</label>
                    <input type="text" name="adv_rep_pin" value="" class="form_input">
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