 
						 
						 <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Admin Profile</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                    

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                         

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mt-4">
                                                
              <form method="post" action="<?php echo base_url();?>admin/changepassword/<?php echo $update[0]->id?>" enctype="multipart/form-data">
                           
						 
			 <div class="row">                                                            
                <div class="col-md-12">
			     <div class="mb-3">
                             <label class="form-label" for="formrow-firstname-input">User Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $update[0]->name?>" required>
                   </div>
                   </div>
				  
                    </div>	   
						   
			 
			 <div class="row">                                                            
                <div class="col-md-6">
			     <div class="mb-3">
                             <label class="form-label" for="formrow-firstname-input">Email</label>
    <input type="text" class="form-control" name="email" value="<?php echo $update[0]->email?>" required>
                   </div>
                   </div>
				     <div class="col-md-6">
			     <div class="mb-3">
                             <label class="form-label" for="formrow-firstname-input">password</label>
    <input type="password" class="form-control"   name="password" value="<?php echo $update[0]->password?>" required>
                   </div>
                   </div>
                    </div>
					
					
					
					
														
														   <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Image</label>
                                                                    <input type="file" name="image" class="form-control"   id="formrow-email-input">
															<img src="<?php echo base_url(); ?>upload_images/<?php echo $update[0]->image;?>" alt="" class="rounded  mt-3 img-fluid" width="60">
                                                                </div>
                                                            </div>
                                                        </div>


                     


														 
													 
														   
												 
															   
                                                        <div class="mt-4">
                                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                        </div>
														
                                                    </form>
                                                </div>
                                            </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Form Layout -->

                         
	 