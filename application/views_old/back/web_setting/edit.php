 
						 
						 <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Website Setting</h4>

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
                                                
              <form method="post" action="<?php echo base_url();?>admin/web_setting/<?php echo $update[0]->id?>" enctype="multipart/form-data">
                           
						   
						   <div class="mb-3">
                             <label class="form-label" for="formrow-firstname-input">System Setting</label>
    <input type="text" class="form-control"  name="title" value="<?php echo $update[0]->title?>" required>
                                                        </div>
             
			 
			<!-- <div class="row">                                                            
                <div class="col-md-6">
			     <div class="mb-3">
                             <label class="form-label" for="formrow-firstname-input">Phone</label>
    <input type="text" class="form-control"   name="phone" value="<?php echo $update[0]->phone?>" required>
                   </div>
                   </div>
				     <div class="col-md-6">
			     <div class="mb-3">
                             <label class="form-label" for="formrow-firstname-input">Email</label>
    <input type="text" class="form-control"   name="email" value="<?php echo $update[0]->email?>" required>
                   </div>
                   </div>
                    </div>-->
					
					
					
					
														
														   <div class="row">                                                            
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Image</label>
                                                                    <input type="file" name="logo" class="form-control"   id="formrow-email-input">
															<img src="<?php echo base_url(); ?>upload_images/<?php echo $update[0]->logo;?>" alt="" class="rounded  mt-3 img-fluid" width="60">
                                                                </div>
                                                            </div>
															
															
															 <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Fevicon</label>
                                                                    <input type="file" name="fevicon" class="form-control"   id="formrow-email-input">
															<img src="<?php echo base_url(); ?>upload_images/<?php echo $update[0]->fevicon;?>" alt="" class="rounded  mt-3 img-fluid" width="60">
                                                                </div>
                                                            </div>
                                                             
                                                        </div>


 <div class="row">                                                            
                <div class="col-md-6">
			     <div class="mb-3">
                             <label class="form-label" for="formrow-firstname-input">facebook</label>
    <input type="text" class="form-control"   name="facebook" value="<?php echo $update[0]->facebook?>" >
                   </div>
                   </div>
				     <div class="col-md-6">
			     <div class="mb-3">
                             <label class="form-label" for="formrow-firstname-input">twitter</label>
    <input type="text" class="form-control"   name="twitter" value="<?php echo $update[0]->twitter?>" >
                   </div>
                   </div>
				      <div class="col-md-6">
			     <div class="mb-3">
                             <label class="form-label" for="formrow-firstname-input">instagram</label>
    <input type="text" class="form-control"   name="instagram" value="<?php echo $update[0]->instagram?>" >
                   </div>
                   </div>
                    </div>
							
													
                                                      


														 
														
													<div class="row">                                                            
                                                    <div class="col-md-12">
                                                     <div class="mb-3">
													   <label class="form-label" for="formrow-password-input">Description</label>
                                                       <textarea name="description"  class="form-control"><?php echo $update[0]->description;?></textarea>
                                                          </div>
														  </div>
														  </div>
														  
														  
														 <!-- <div class="row">                                                            
                                                    <div class="col-md-12">
                                                     <div class="mb-3">
													   <label class="form-label" for="formrow-password-input">Address</label>
                                                       <textarea name="address"  class="form-control"><?php echo $update[0]->address;?></textarea>
                                                          </div>
														  </div>
														  </div>-->
														 
														   
														<div class="row">          
												   <div class="col-md-12">
														<div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Meta Title</label>
                                                           <input type="text" class="form-control" id="" value="<?php echo $update[0]->meta_title;?>" name="meta_title" >
                                                        </div>
                                                        </div>
														
												   <div class="col-md-12">
														<div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Meta Description</label>
                                                           <input type="text" class="form-control" id=""  value="<?php echo $update[0]->meta_description;?>"name="meta_description" >
                                                        </div>
                                                        </div>
														
														  <div class="col-md-12">
														<div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Meta Keyword</label>
                                                           <input type="text" class="form-control" id="" value="<?php echo $update[0]->meta_keyword;?>" name="meta_keyword" >
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