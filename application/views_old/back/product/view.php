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
               <h4 class="card-title">  <?php echo $update[0]->title?></h4>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mt-4">
                        <form method="post" action="<?php echo base_url();?>adminproduct/edit/<?php echo $update[0]->id?>" enctype="multipart/form-data">
                           <div class="mb-3">
                              <label class="form-label" for="formrow-firstname-input">Strains Name : <?php echo $update[0]->title?></label>
                             <p> </p>
                           </div>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Species : <?php echo $update[0]->species?>	</label>
                                     
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Potency	: <?php echo $update[0]->potency?></label>
                                     
                                 </div>
                              </div>
                            
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Cost :<?php echo $update[0]->cost?>	</label>
                                    
                                 </div>
                              </div>
                              
                           </div>
						   
						   
						    <div class="row">
							<div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">cultivation_difficulty	: <?php echo $update[0]->cultivation_difficulty?></label>
                                   
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">vibes : <?php echo $update[0]->vibes?>	</label>
                                   
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">recommended dose : <?php echo $update[0]->recommended_dose?>	</label>
                                  </div>
                              </div>
                           </div>
						   
						    <div class="row">
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">country_of_origin	: <?php echo $update[0]->country_of_origin?> </label>
                                   </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">strain_creator : <?php echo $update[0]->strain_creator?></label>
                                     
                                 </div>
                              </div>
                         
                              <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">country_of_origin : <?php echo $update[0]->country_of_origin?>	</label>
                                     
                                 </div>
                              </div>
                            
                           </div>
						    <div class="row">
						     <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">strain_creator : <?php echo $update[0]->strain_creator?>	</label>
                                   
                                 </div>
                              </div>
						   
						     <div class="col-md-4">
                                 <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">growing : <?php echo $update[0]->growing?>	</label>
                                       
                                 </div>
                              </div>
							  
							  
							   <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-password-input">Rating Star : <?php echo $update[0]->rating?></label>
                                                                    
                                                                </div>
                                                            </div>
						   </div>
						   
										
							<div class="row">                                                            
                               <div class="col-md-6">
                                  <div class="mb-3">
                                     <label class="form-label" for="formrow-email-input">Image</label>
                                         <img src="<?php echo base_url(); ?>upload_images/<?php echo $update[0]->thumb_image;?>" alt="" class="rounded  mt-3 img-fluid" width="60">
                                     </div>
                                 </div>
                               <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-password-input">Select Gallery <?php foreach(json_decode($update[0]->gallery) as $img): ?>	
											<img class="rounded mb-3 mt-3 img-fluid"  style="float:left; margin:3px; border:1px solid #ccc; width:50px; height:50px" src="<?php echo base_url();?>upload_images/<?php echo $img?>">
											<?php endforeach; ?></label>
                                         
											
								</div>
                               </div>
                              </div>
                     
                     
					 <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy product canada</label>
                     <p><?php echo $update[0]->where_to_buy_product_canada?></p>
                     </div>
                     </div>
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy product usa</label>
                     <p><?php echo $update[0]->where_to_buy_product_usa?></p>
                     </div>
                     </div>
                     </div>
					 
					  <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy spores canada</label>
                    <p><?php echo $update[0]->where_to_buy_spores_canada?></p>
                     </div>
                     </div>
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">where to buy spores usa</label>
                     <p><?php echo $update[0]->where_to_buy_spores_usa?></p>
                     </div>
                     </div>
                     </div>
					 
					 
                     <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">description</label>
                   <p><?php echo $update[0]->description?></p>
                     </div>
                     </div>
                     </div>
                  
                     <div class="row">
                     <div class="col-md-12">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-firstname-input">Helpline</label>
                     <p><?php echo $update[0]->helpline?></p>
                     </div>
                     </div>
                     </div>
					 
					 
					 
                     <div class="row">
                 
                     <div class="col-md-3">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">favourite : <?php echo ($update[0]->favourite=='1')? 'Enable':'Disabled';?></label>
                      
                     </div>
                     </div>
					 
					     <div class="col-md-3">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">Hot : <?php echo ($update[0]->hot=='1')? 'Enable':'Disabled';?></label>
                     
                     </div>
                     </div>
					 
					     <div class="col-md-3">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">popular : <?php echo ($update[0]->popular=='1')? 'Enable':'Disabled';?></label>
                     
                     </div>
                     </div>
					 
					 <div class="col-md-3">
                     <div class="mb-3">
                     <label class="form-label" for="formrow-password-input">Status : <?php echo ($update[0]->status=='1')? 'Enable':'Disabled';?></label>
                         
					 
					 
                     </div>
                     </div>
					 
					 
					 
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
 