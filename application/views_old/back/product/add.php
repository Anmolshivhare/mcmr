<div class="page-content">
<div class="container-fluid">
   <!-- start page title -->
   <div class="row">
      <div class="col-12">
         <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">News</h4>
            <div class="page-title-right">
               <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                     <a href="javascript: void(0);">Home</a>
                  </li>
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
               <h4 class="card-title">Add News</h4>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mt-4">
                        <form method="post" action="<?php echo base_url();?>adminproduct/add" enctype="multipart/form-data">
                           <div class="mb-3">
                              <label class="form-label" for="formrow-firstname-input">Title</label>
                              <input type="text" class="form-control" id="" name="heading" required>
                           </div>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Species	</label>
                                    <input type="text" class="form-control" id="" name="species">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Potency	</label>
                                     
									<select class="form-control" name="potency">
									<option value="Weakest">Weakest</option>
									<option value="Medium">Medium</option>
									<option value="Strongest">Strongest</option>
									</select>
                                 </div>
                              </div>
                            
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Cost	</label>
 										<select class="form-control" name="cost">
									<option value="None">None</option>
									<option value="Cheapest">Cheapest</option>
									<option value="Medium">Medium</option>
									<option value="Expensive">Expensive</option>
									</select>
                                 </div>
                              </div>
                              
                           </div>
						   
						   
						    <div class="row">
							<div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Cultivation difficulty	</label> 
									<select class="form-control" name="cultivation_difficulty">
									<option value="Easy">Easy</option>
									<option value="Hard">Hard</option>
 									</select>
									
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">vibes </label>							
									 
									
									  <input type="text" class="form-control" id=""  name="vibes">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Recommended dose	</label>
                                    <input type="text" class="form-control" id="" name="recommended_dose">
                                 </div>
                              </div>
                           </div>
						   
						    <div class="row">
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Country of Origin	</label>
                                    <input type="text" class="form-control" id="" name="country_of_origin">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Strain Creator	</label>
                                    <input type="text" class="form-control" id="" name="strain_creator">
                                 </div>
                              </div>
                         
                           
                            
                           </div>
						    <div class="row">
						  
						   
						     <div class="col-md-6">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">"Growing Characteristics</label>
                        
					   <textarea class="form-control" name="growing"> </textarea>
                                  </div>
                              </div>
							  
							  
							   <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-password-input">Rating Star</label>
                                                                    <input type="text" class="form-control"   name="rating"
                                                                </div>
                                                            </div>
						   </div>
						   
						   
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-email-input">Image</label>
                                    <input type="file" name="image" class="form-control" name="thumb_image" id="formrow-email-input">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-password-input">Select Gallery</label>
                                    <input type="file" class="form-control" name="userFiles[]" multiple/>
                                 </div>
                              </div>
                           </div>
                     </div>
                     
					 <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy product canada</label>
 					 
					  <textarea class="form-control" name="where_to_buy_product_canada"> </textarea>
					 
                     </div>
                     </div>
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy product usa</label>
 					 
					  <textarea class="form-control" name="where_to_buy_product_usa"> </textarea>
					 
                     </div>
                     </div>
                     </div>
					 
					  <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy spores canada</label>
 					 <textarea class="form-control" name="where_to_buy_spores_canada"> </textarea>
					 
                     </div>
                     </div>
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy spores usa</label>
 					   <textarea class="form-control" name="where_to_buy_spores_usa"> </textarea>
                     </div>
                     </div>
                     </div>
					 
					 
                     <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">description</label>
                     <textarea name="description" rows="4" class="form-control"/></textarea>
                     </div>
                     </div>
                     </div>
					 
					  <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">Experience</label>
               
					 
					   <textarea class="form-control" name="experience"> </textarea>
					 
                     </div>
                     </div>
                     </div>
                  
                     <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">Helpline</label>
                     <input type="text" class="form-control" id="" name="helpline">
                     </div>
                     </div>
                     </div>
					 
					 
					 
                     <div class="row">
                 
                     <div class="col-md-3">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">favourite</label>
                     <select class="form-select" name="favourite">
                     <option value="1">Enable</option>
                     <option value="0">Disable</option>
                     </select>
                     </div>
                     </div>
					 
					     
					     <div class="col-md-3">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">popular</label>
                     <select class="form-select" name="popular">
                     <option value="1">Enable</option>
                     <option value="0">Disable</option>
                     </select>
                     </div>
                     </div>
					 
					 <div class="col-md-3">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">Status</label>
                     <select class="form-select" name="status">
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