<section class="bread bread-banner">
        <div class="container">
          <div class="bread-detail text-center d-md-flex align-items-center justify-content-between">
            <h4 class="bread-title mb-3 mb-md-0">Welcome  <?php echo $user['name']; ?></h4>
            <div class="bread-crumb">
              <ul>
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active"><a href="#">User Dashboard</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>





<section id="about" class="ptb-100">
        <div class="container">
          <div class="about-detail">
            <div class="about-part">
              <div class="about-part-1 "> 
   <br>   
   <h2>User Dashboard</h2>
   <br>   <!-- Nav pills -->   
   <ul class="nav nav-pills" role="tablist">
      <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#profile">Profile</a>      </li>
      
       
   </ul>
   <!-- Tab panes -->   
   <div class="tab-content">
      <div id="profile" class="container tab-pane active">
         <br>         
         <section class=" irs-courses-field">
            <form class="pure-form contact_form" action="<?php echo base_url();?>users/save_profile/<?php echo $user['id']; ?>" method="post"  enctype="multipart/form-data" >
               <div class="irs-account-col">
                  <div class="row">
                     <div class="col-md-2"> <img src="<?php echo base_url(); ?>user_images/<?php echo $user[image];?>" style="width:100%;"> <span>Profile Pic</span> <input type="file" class="form-control" name="image"    aria-required="true">                                          				  </div>
                     <div class="col-md-10">
                        <div class="row">
                           <div class="col-md-6" >
                              <div class="form-group" >  <label> First Name*</label> <input   name="name" class="form-control" placeholder="First Name" required value="<?php echo $user['name']; ?>"   type="text"> </div>
                           </div>
                           <div class="col-md-6" >
                              <div class="form-group" > <label> Last Name*</label> <input   name="last_name" class="form-control" placeholder="Last Name"   value="<?php echo $user['last_name']; ?>"   type="text">                        </div>
                           </div>
                           <div class="col-md-6" >
                              <div class="form-group" > <label>Phone*</label>                           <input   name="phone" class="form-control"  placeholder="Enter Phone" value="<?php echo $user['phone']; ?>" required   type="text">                        </div>
                           </div>
                           <div class="col-md-6" >
                              <div class="form-group" >                           <label>Email*</label>                           <input   name="email"  class="form-control"  placeholder="Enter Email"  value="<?php echo $user['email']; ?>" type="email" required>                        </div>
                           </div>
                           <div class="col-md-6" >
                              <div class="form-group" >                           <label>Date of Birth*</label>                           <input   name="dob" class="form-control" placeholder="Date of Birth" value="<?php echo $user['dob']; ?>"  type="date" >                        </div>
                           </div>
                           <div class="col-md-6" >
                              <div class="form-group" >                           <label>Father Name*</label>                           <input   name="father_name" class="form-control"  value="<?php echo $user['father_name']; ?>"  placeholder="Father's Name" value="" type="text" >                        </div>
                           </div>
                         
                           <div class="col-sm-12" >
                              <div class="form-group" >                           <label>Address*</label>                           <textarea   name="address" class="form-control" rows="1" ><?php echo $user['address']; ?></textarea>                        </div>
                           </div>
                           <div class="col-md-6" >
                              <div class="form-group" >                           <label>State*</label>                           <input   name="state" class="form-control" placeholder="Address"   value="<?php echo $user['state']; ?>" type="text" >                        </div>
                           </div>
                           <div class="col-md-6" >
                              <div class="form-group" >                           <label>City*</label>                           <input   name="city" class="form-control" placeholder="Address"  value="<?php echo $user['city']; ?>" type="text" >                        </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12 text-center">
					 <button type="submit" class="btn btn-color">Submit<span class="ti-arrow-right"></span></button>                                           </div>
                  </div>
               </div>
            </form>
         </section>
      </div>
      <div id="premium" class="container tab-pane fade">
       
      </div>
	  
	  
	  
	  
	  
	  
   </div>
</div>
</div>
</div>
</div>
</div>
 