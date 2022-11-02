
		 
		
		
		 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">User List</h4>

                                    <div class="page-title-right">
                                        <div class="button-items">
                                            <!--<a href="<?php echo base_url()?>admindestinationwedding/add" class="btn btn-success btn-rounded waves-effect waves-light">Add</a>-->
                                          
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
                                                <th>Customer</th>
                                                <th>Phone</th>
                                              
                                                <th>Email</th>
                                                 <th>Image</th>
                                                <th>Status</th>
                                                <th>Option</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $i=1;
											foreach($show as $record) {  ?>
                                            <tr> 
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $record->name;?></td>
                                                 
                                                <td><?php echo $record->phone;?></td>
                                                <td><?php echo $record->email;?></td>
 												 
                                                <td><img src="<?php echo base_url(); ?>user_images/<?php echo $record->image;?>" alt="" class="rounded  img-fluid" width="60"></td>
                                                <td><?php echo ($record->status=='1')? 'Varify':'Pending';?></td>
                                                <td>
												
												<div class="button-items">
                                            <a href="<?php echo base_url()?>adminusers/edit/<?php echo $record->id ?>" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="fas fa-edit"></i></a>
                                          <button onclick="myFunction(<?php echo $record->id ?>)" id="<?php echo $record->id ?>" type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="fas fa-trash"></i></button>
                                             
                                            
                                        </div>
												
												</td>
                                               

                                            </tr>
											<?php  $i++; 
											} ?> 
											
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
                window.location = url+"/adminusers/delete/"+id;
            else
                return false;
        }

    </script>
	
	
	