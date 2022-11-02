  
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="popup popup-login">
        <div class="content-block">
            <h4>LOGIN</h4>
            <div class="loginform">
                <form id="LoginForm" method="post">
                    <input type="text" name="Username" value="" class="form_input required" placeholder="username">
                    <input type="password" name="Password" value="" class="form_input required" placeholder="password">
                    <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">Forgot Password?</a></div>
                    <input type="submit" name="submit" class="form_submit" id="submitlogin" value="SIGN IN">
                </form>
                <div class="signup_bottom">
                    <p>Don't have an account?</p>
                    <a href="#" data-popup=".popup-signup" class="open-popup">SIGN UP</a>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="<?php echo base_url();?>front_assets/images/icons/black/menu_close.png" alt="" title=""></a>
            </div>
        </div>
    </div>

    <!-- Register Popup -->
    <div class="popup popup-signup">
        <div class="content-block">
            <h4>REGISTER</h4>
            <div class="loginform">
                <form id="RegisterForm" method="post">
                    <input type="text" name="Username" value="" class="form_input required" placeholder="Username">
                    <input type="text" name="Email" value="" class="form_input required" placeholder="Email">
                    <input type="password" name="Password" value="" class="form_input required" placeholder="Password">
                    <input type="submit" name="submit" class="form_submit" id="submitregister" value="SIGN UP">
                </form>
		<h5>- OR REGISTER WITH A SOCIAL ACCOUNT -</h5>
		<div class="signup_social">
			<a href="../../index.htm" class="signup_facebook external">FACEBOOK</a>
			<a href="../../index-2.htm" class="signup_twitter external">TWITTER</a>            
		</div>		
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="<?php echo base_url();?>front_assets/images/icons/black/menu_close.png" alt="" title=""></a>
            </div>
        </div>
    </div>
	
    <!-- Forgot Password Popup -->
    <div class="popup popup-forgot">
        <div class="content-block">
            <h4>FORGOT PASSWORD</h4>
            <div class="loginform">
                <form id="ForgotForm" method="post">
                    <input type="text" name="Email" value="" class="form_input required" placeholder="email">
                    <input type="submit" name="submit" class="form_submit" id="submitforgot" value="RESEND PASSWORD">
                </form>
                <div class="signup_bottom">
                    <p>Check your email and follow the instructions to reset your password.</p>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="<?php echo base_url();?>front_assets/images/icons/black/menu_close.png" alt="" title=""></a>
            </div>
        </div>
    </div>
	
    <!-- Social Icons Popup -->
    <div class="popup popup-social">
    <div class="content-block">
      <h4>Social Share</h4>
      <p>Share icons solution that allows you share and increase your social popularity.</p>
      <ul class="social_share">
      <li><a href="../../index-2.htm" class="external"><img src="<?php echo base_url();?>front_assets/images/icons/black/twitter.png" alt="" title=""><span>TWITTER</span></a></li>
      <li><a href="../../index.htm" class="external"><img src="<?php echo base_url();?>front_assets/images/icons/black/facebook.png" alt="" title=""><span>FACEBOOK</span></a></li>
      <li><a href="../../v3/signin/identifier.html" class="external"><img src="<?php echo base_url();?>front_assets/images/icons/black/gplus.png" alt="" title=""><span>GOOGLE</span></a></li>
      <li><a href="../../index-3.htm" class="external"><img src="<?php echo base_url();?>front_assets/images/icons/black/dribbble.png" alt="" title=""><span>DRIBBBLE</span></a></li>
      <li><a href="../../hp.html" class="external"><img src="<?php echo base_url();?>front_assets/images/icons/black/linkedin.png" alt="" title=""><span>LINKEDIN</span></a></li>
      <li><a href="../../index-1.htm" class="external"><img src="<?php echo base_url();?>front_assets/images/icons/black/pinterest.png" alt="" title=""><span>PINTEREST</span></a></li>
      </ul>
      <div class="close_popup_button"><a href="#" class="close-popup"><img src="<?php echo base_url();?>front_assets/images/icons/black/menu_close.png" alt="" title=""></a></div>
    </div>
    </div>


<script src="<?php echo base_url();?>front_assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>front_assets/js/framework7.js"></script>
<script src="<?php echo base_url();?>front_assets/js/jquery.swipebox.js"></script>
<script src="<?php echo base_url();?>front_assets/js/jquery.fitvids.js"></script>
<script src="<?php echo base_url();?>front_assets/js/email.js"></script>
<script src="<?php echo base_url();?>front_assets/js/audio.min.js"></script>
<script src="<?php echo base_url();?>front_assets/js/my-app.js"></script>


<!-- <script>
    $(document).ready(function(){
    $('#search-criteria').keyup(function(){
    $('.contact-name').hide();
    var txt = $('#search-criteria').val();
    $('.contact-name').each(function(){
       if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
           $(this).show();
       }
    });
});
});
</script> -->


<style> 
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}


#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style> 


 
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>



 

  </body>
</html>