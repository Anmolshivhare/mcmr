
		 
		
		
		 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0"><?php echo $title;?></h4>

                                    <div class="page-title-right">
                                        <div class="button-items">
                                            <a href="<?php echo base_url()?>adminproduct/add" class="btn btn-success btn-rounded waves-effect waves-light">Add</a>
                                          
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
              
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">List</h4>
                                       
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>S N.</th>
                                                <th>Name</th>
                                                <th>species</th>
                                                <th>potency</th>
                                                <th>cost</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Option</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $i=1;
											  
											foreach($show as $record) {  ?>
                                            <tr><?php echo isset($m_title)?$m_title:'';?>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $record->title;?></td>
                                                <td><?php echo $record->species;?></td>
                                                 <td><?php echo $record->potency;?></td>
                                                 <td><?php echo $record->cost;?></td>
 												 
                                                <td><img src="<?php echo base_url(); ?>upload_images/<?php echo $record->thumb_image;?>" alt="" class="rounded  img-fluid" width="60"></td>
                                                <td><?php echo ($record->status=='1')? 'Enable':'Disabled';?></td>
                                                <td>
												
												<div class="button-items">
                                           <a title="view detail" href="<?php echo base_url()?>adminproduct/view/<?php echo $record->id ?>" class="btn btn-success btn-rounded waves-effect waves-light"><i class="fas fa-eye"></i></a>

										  <a href="<?php echo base_url()?>adminproduct/edit/<?php echo $record->id ?>" class="btn btn-dark btn-rounded waves-effect waves-light"><i class="fas fa-edit"></i></a>
                                         
											
										 <button onclick="myFunction(<?php echo $record->id ?>)" id="<?php echo $record->id ?>" type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="fas fa-trash"></i></button>
												
												
											<?php if($record->popular == '0') { ?>
												
												<form style="float:left" action="<?php echo base_url();?>adminproduct/feature/<?php echo $record->id;?>" method="post">
												<input type="hidden" name="popular" value="1">
											<button title="Popular Enable" type="submit"   class="btn btn-info btn-rounded waves-effect waves-light"><i class="fas fa-star"></i>	</button>
												</form>
												
												<?php } else { ?>
													
													<form style="float:left" action="<?php echo base_url();?>adminproduct/feature/<?php echo $record->id;?>" method="post">
												<input type="hidden" name="popular" value="0">
											<button title="Popular Enable" type="submit"   class="btn btn-secondary btn-rounded waves-effect waves-light"><i class="fas fa-star"></i>	</button>
												</form>
													
													
												<?php } ?>
												 
												<!--<?php if($record->hot == '0') { ?>
												
                                            <form style="float:left" action="<?php echo base_url();?>adminproduct/feature/<?php echo $record->id;?>" method="post">
												<input type="hidden" name="hot" value="1">
											<button title="Hot Disble" type="submit"   class="btn btn-warning btn-rounded waves-effect waves-light"> <i class="fas fa-solid fa-fire"></i>	</button>
												</form>
												
													<?php } else { ?>
											
											 <form style="float:left" action="<?php echo base_url();?>adminproduct/feature/<?php echo $record->id;?>" method="post">
												<input type="hidden" name="hot" value="0">
											<button title="Hot Disable" type="submit"   class="btn btn-secondary btn-rounded waves-effect waves-light"> <i class="fas fa-solid fa-fire"></i>	</button>
												</form>
											
											<?php } ?>  -->
											
											
												<?php if($record->favourite == '0') { ?>
                                            <form style="float:left" action="<?php echo base_url();?>adminproduct/feature/<?php echo $record->id;?>" method="post">
												<input type="hidden" name="favourite" value="1">
											<button title="favourite Enable" type="submit"   class="btn btn-primary btn-rounded waves-effect waves-light"> <i class="fas fa-solid fa-heart"></i>	</button>
												</form>
												
											 	<?php } else { ?>
												
											   <form style="float:left" action="<?php echo base_url();?>adminproduct/feature/<?php echo $record->id;?>" method="post">
												<input type="hidden" name="favourite" value="0">
											<button title="favourite Disable" type="submit"   class="btn btn-secondary btn-rounded waves-effect waves-light"> <i class="fas fa-solid fa-heart"></i>	</button>
												</form>
											 	<?php } ?> 
                                            
                                        </div>
												
												</td>
                                               

                                            </tr>
											<?php  $i++;  } ?> 
											
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
		
		
		
		
		
		
		

<script>
        function myFunction(id) {
            var url="<?php echo base_url();?>";
            var r=confirm("Do you want to delete this?")
            if (r==true)
                window.location = url+"/adminproduct/delete/"+id;
            else
                return false;
        }

    </script>
	
	
	