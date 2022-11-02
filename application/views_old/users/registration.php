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
<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
				 <form action="" class="contact_form" method="post">

						<div class="login-form">
							<h4 class="login-title">Register</h4>

							<div class="row">
								<div class="col-md-6 col-12 mb-20">
							
						  	<input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
          <?php echo form_error('name','<span class="help-block">','</span>'); ?>
								</div>
								<div class="col-md-6 col-12 mb-20">
									 <input type="text" class="form-control"   name="phone" placeholder="Phone (##########)" required value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>" maxlength="10"  pattern="[0-9]{10}">
	   <?php echo form_error('phone','<span class="help-block">','</span>'); ?>
								</div>
								<div class="col-md-12 mb-20">
									   <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          <?php echo form_error('email','<span class="help-block">','</span>'); ?>
								</div>
								<div class="col-md-6 mb-20">
									<input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="col-md-6 mb-20">
								  
									    <input type="password" class="form-control" name="conf_password" placeholder="Confirm password" required="">
          <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
								</div>
								
								<div class="col-12">
									 
									 <input type="submit" name="regisSubmit" class="register-button mt-0" value="Submit"/>
								</div>
								
								<div class="col-md-4 mt-10 mb-20 text-start text-md-end">
									<a href="<?php echo base_url();?>user/registration"> Allready Login</a>
								</div>
							</div>
						</div>

					</form>
				</div>
				</div>
				</div>
				</div>


 
      
