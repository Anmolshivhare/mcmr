 
						 
						 <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Pages</h4>

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
                                        <h4 class="card-title">Edit <?php echo $update[0]->title?></h4>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mt-4">
                                                
              <form method="post" action="<?php echo base_url();?>adminservices/edit/<?php echo $update[0]->id?>" enctype="multipart/form-data">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Service</label>
                                                           <input type="text" class="form-control" id="" name="title" value="<?php echo $update[0]->title?>" required>
                                                        </div>
            
                                                         
														
														 
														
														
														
														   <div class="row">                                                            
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Image</label>
                                                                    <input type="file" name="thumb_image" class="form-control" name="thumb_image" id="formrow-email-input">
															<img src="<?php echo base_url(); ?>upload_images/<?php echo $update[0]->thumb_image;?>" alt="" class="rounded  mt-3 img-fluid" width="60">
                                                                </div>
                                                            </div>
                                                             
                                                        </div>



													
                                                            
                                                        </div>



														 
														
													<div class="row">                                                            
                                                    <div class="col-md-12">
                                                     <div class="mb-3">
													   <label class="form-label" for="formrow-password-input">Description</label>
                                                       <textarea name="description" class="classic-editor"><?php echo $update[0]->description;?></textarea>
                                                          </div>
														  </div>
														  </div>
														 
														   
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
															  <div class="row">  
													       <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-password-input">Status</label>
                                                <select class="form-select" name="status">
												
												  <option value="<?php echo $update[0]->status;?>"><?php echo ($update[0]->status=='1')? 'Enable':'Disabled';?></option>
                                                    <option value="1">Enable</option>
                                                    <option value="0">Disable</option>
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