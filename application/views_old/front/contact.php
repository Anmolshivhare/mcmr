	<div class="breadcrumb-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumb-container">
						<ul>
							<li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
							<li class="active">Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
		<div class="page-content mb-50">

		<!--=============================================
		=            google map container         =
		=============================================-->

	
		<!--=====  End of google map container  ======-->

		<div class="container">
			<div class="row">
				 
				<div class="col-lg-12 col-md-12 pl-100 pl-xs-15">
					<!--=======  contact form content  =======-->

					<div class="contact-form-content">
						<h3 class="contact-page-title">Tell Us Your Message</h3>

						<div class="contact-form">
							<form id="contact-form" action="#" method="post">
								<div class="form-group">
									<label>Your Name <span class="required">*</span></label>
									<input type="text" name="name" id="customername" required="">
								</div>
								<div class="form-group">
									<label>Your Email <span class="required">*</span></label>
									<input type="email" name="email" id="customerEmail" required="">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="text" name="phone" id="contactSubject">
								</div>
								<div class="form-group">
									<label>Subject</label>
									<input type="text" name="subject" id="contactSubject">
								</div>
								
								<div class="form-group">
									<label>Your Message</label>
									<textarea name="message" id="contactMessage"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" value="submit" id="submit" class="contact-form-btn" name="submit">send</button>
								</div>
							</form>
						</div>
						<p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
					</div>

					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	 
	</div>