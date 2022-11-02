 
						 
						 <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Edit <?php echo $update[0]->name?></h4>

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
                                        <h4 class="card-title">Edit <?php echo $update[0]->name?></h4>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mt-4">
                                                
                                                    <form method="post" action="<?php echo base_url();?>adminusers/edit/<?php echo $update[0]->id?>" enctype="multipart/form-data">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Customer Name</label>
                                                           <input type="text" class="form-control" id="" name="name" value="<?php echo $update[0]->name?>" required>
                                                        </div>
														
														  <div class="row">                                                            
                                                            <div class="col-md-6">
														<div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input"> Phone</label>
                                                           <input type="text" class="form-control" id="" name="phone" value="<?php echo $update[0]->phone?>" required>
                                                        </div>
                                                        </div>
														
														
															<div class="col-md-6">
														<div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input"> Email</label>
                                                           <input type="text" class="form-control" id="" name="email" value="<?php echo $update[0]->email?>" required>
                                                        </div>
                                                        </div>
                                                        </div>
            
            
            	
														
            
            
            
                                                         
														
														
														   <div class="row">                                                            
                                                            <div class="col-md-6">
															<div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Password</label>
                                                           <input type="text" class="form-control" id="" name="password" value="<?php echo $update[0]->password?>" required>
                                                        </div>
                                                        </div>
														
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Image</label>
                                             <input type="file"  class="form-control" name="image" id="formrow-email-input">
															<img src="<?php echo base_url(); ?>user_images/<?php echo $update[0]->image;?>" alt="" class="rounded  mt-3 img-fluid" width="60">
                                                                </div>
                                                            </div>
                                                             
                                                        </div>



													
                                                            
                                                        </div>



														<div class="row">                                                            
                                                   
												   <div class="col-md-6">
														<div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Address</label>
                          <input type="text" class="form-control" id="" name="address" value="<?php echo $update[0]->address;?>">
                                                        </div>
                                                        </div>
														
														 
														
														 
                                                      
													       <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-password-input">Status</label>
                                                <select class="form-select" name="status">
												
												  <option value="<?php echo $update[0]->status;?>"><?php echo ($update[0]->status=='1')? 'Varify':'Pending';?></option>
                                                    <option value="1">Varify</option>
                                                    <option value="0">Pending</option>
                                                </select>
												
												
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

                         
						   <!-- ckeditor -->
        <script src="<?php echo base_url();?>admin_assets//libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

        <!--tinymce js-->
        <script src="<?php echo base_url();?>admin_assets//libs/tinymce/tinymce.min.js"></script>

<script>
        ClassicEditor
        .create( document.querySelector( '.classic-editor' ) )
        .catch( error => {
            console.error( error );
        } );
        </script>
		
		<script>
        ClassicEditor
        .create( document.querySelector( '.classic-editor2' ) )
        .catch( error => {
            console.error( error );
        } );
        </script>
        <!-- init js -->
        <script src="<?php echo base_url();?>admin_assets//js/pages/form-editor.init.js"></script>