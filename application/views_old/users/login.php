<div class="breadcrumb-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumb-container">
						<ul>
							<li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
							<li class="active">Login - Register</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="page-content mb-50">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
					<!-- Login Form s-->
				    <form action="" class="contact_form" method="post">

						<div class="login-form">
							<h4 class="login-title">Login</h4>

							<div class="row">
								<div class="col-md-12 col-12 mb-20">
									<label>Email Or Phone</label>
									 <input type="text" class="form-control mb-0" name="username" placeholder="Phone or Email"  value="">
		<?php // echo form_error('email','<span class="help-block">','</span>'); ?> 
								</div>
								<div class="col-12 mb-20">
									<label>Password</label>
 									 <input type="password" id="password" class="form-control mb-0" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="col-md-12">
								 
									  <input type="submit" name="loginSubmit" class="register-button mt-0" value="Submit"/>
								</div>

								<div class="col-md-4 mt-10 mb-20 text-start text-md-end">
									<a href="#"> Forgotten pasward?</a>
								</div>

								
<div class="col-md-8">

									<div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
										<a href="<?php echo base_url();?>users/registration"> Register Now</a>
									</div>

								</div>
							</div>
						</div>

					</form>
				</div>
				 
			</div>
		</div>
	</div>








 