<div class="page-content">
<div class="container-fluid">
   <!-- start page title -->
   <div class="row">
      <div class="col-12">
         <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Strains</h4>
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
               <h4 class="card-title">Edit <?php echo $update[0]->title?></h4>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mt-4">
                        <form method="post" action="<?php echo base_url();?>adminproduct/edit/<?php echo $update[0]->id?>" enctype="multipart/form-data">
                           <div class="mb-3">
                              <label class="form-label" for="formrow-firstname-input">Strains Name</label>
                              <input type="text" class="form-control" id="" value="<?php echo $update[0]->title?>" name="title" required>
                           </div>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Species	</label>
                                    <input type="text" class="form-control" id="" value="<?php echo $update[0]->species?>"  name="species">
                                 </div>
                              </div>
							  
                           
							  
							  
							      <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Potency	</label>
                                     
									<select class="form-control" name="potency">
									
									<option value="<?php echo $update[0]->potency?>"><?php echo $update[0]->potency?></option>
										<option value="None">None</option>
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
										<option value="<?php echo $update[0]->cost?>"><?php echo $update[0]->cost?></option>
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
										<option value="<?php echo $update[0]->cultivation_difficulty?>"><?php echo $update[0]->cultivation_difficulty?></option>
										<option value="None">None</option>
									<option value="Easy">Easy</option>
									<option value="Hard">Hard</option>
 									</select>
									
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">vibes </label>							
										 <input type="text" class="form-control" id="" value="<?php echo $update[0]->vibes?>" name="vibes">
                                 </div>
                              </div>
							  
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Recommended dose	</label>
                                    <input type="text" class="form-control" id="" value="<?php echo $update[0]->recommended_dose?>" name="recommended_dose">
                                 </div>
                              </div>
                           </div>
						   
						    <div class="row">
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Country of Origin	</label>
                                    <input type="text" class="form-control" id="" value="<?php echo $update[0]->country_of_origin?>" name="country_of_origin">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Strain creator	</label>
                                    <input type="text" class="form-control" value="<?php echo $update[0]->strain_creator?>" name="strain_creator">
                                 </div>
                              </div>
                         
                             
                            
                           </div>
						    <div class="row">
						     
						   
						     <div class="col-md-6">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Growing	Characteristics</label>
                          
					  <textarea class="form-control" name="growing"><?php echo $update[0]->growing?></textarea>
					  
					   
                                 </div>
                              </div>
							  
							  
							   <div class="col-md-6">
               <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">Rating Star</label>
              <input type="text" class="form-control" value="<?php echo $update[0]->rating?>" name="rating">  </div>
                                                            </div>
						   </div>
						   
										
							<div class="row">                                                            
                               <div class="col-md-6">
                                  <div class="mb-3">
                                     <label class="form-label" for="formrow-email-input">Image</label>
                                        <input type="file" name="thumb_image" class="form-control" name="thumb_image" id="formrow-email-input">
										<img src="<?php echo base_url(); ?>upload_images/<?php echo $update[0]->thumb_image;?>" alt="" class="rounded  mt-3 img-fluid" width="60">
                                     </div>
                                 </div>
                               <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-password-input">Select Gallery</label>
                                        <input type="file" class="form-control" name="userFiles[]" multiple/>
											<?php foreach(json_decode($update[0]->gallery) as $img): ?>	
											<img class="rounded mb-3 mt-3 img-fluid" width="40" height="40" style="float:left; margin:1px;" src="<?php echo base_url();?>upload_images/<?php echo $img?>">
											<?php endforeach; ?>
								</div>
                               </div>
                              </div>
                     
                     
					 <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy product canada</label>
                   
					 
					   <textarea class="form-control" name="where_to_buy_product_canada"><?php echo $update[0]->where_to_buy_product_canada?></textarea>
					 
                     </div>
                     </div>
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy product usa</label>
             
					 
					    <textarea class="form-control" name="where_to_buy_product_usa"><?php echo $update[0]->where_to_buy_product_usa?></textarea>
					 
                     </div>
                     </div>
                     </div>
					 
					  <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy spores canada</label>
                    
					 
					  <textarea class="form-control" name="where_to_buy_spores_canada"><?php echo $update[0]->where_to_buy_spores_canada?></textarea>
					 
                     </div>
                     </div>
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy spores usa</label>
                     
					 
					   <textarea class="form-control" name="where_to_buy_spores_usa"><?php echo $update[0]->where_to_buy_spores_usa?></textarea>
					 
                     </div>
                     </div>
                     </div>
					 
					 
                     <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">description</label>
                     <textarea name="description" rows="4" class="form-control"/> <?php echo $update[0]->description?></textarea>
                     </div>
                     </div>
                     </div>
					 
					  
					  <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">Experience</label>
                
					 
					 
					  <textarea class="form-control" name="experience"><?php echo $update[0]->experience?></textarea>
					 
					 
					 
                     </div>
                     </div>
                     </div>
                  
                     <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">Helpline</label>
                     <input type="text" class="form-control" value="<?php echo $update[0]->helpline?>" name="helpline">
                     </div>
                     </div>
                     </div>
					 
					 
					 
                     <div class="row">
                 
                     <div class="col-md-3">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">favourite</label>
                     <select class="form-select" name="favourite">
					 <option value="<?php echo $update[0]->favourite;?>"><?php echo ($update[0]->favourite=='1')? 'Enable':'Disabled';?></option>
                     <option value="1">Enable</option>
                     <option value="0">Disable</option>
                     </select>
                     </div>
                     </div>
					 
				 
					 
					     <div class="col-md-3">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">popular</label>
                     <select class="form-select" name="popular">
					 <option value="<?php echo $update[0]->popular;?>"><?php echo ($update[0]->popular=='1')? 'Enable':'Disabled';?></option>
                     <option value="1">Enable</option>
                     <option value="0">Disable</option>
                     </select>
                     </div>
                     </div>
					 
					 <div class="col-md-3">
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
 