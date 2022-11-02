
		 
		
		
		 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0"><?php echo $title;?></h4>

                                    <div class="page-title-right">
                                        <div class="button-items">
                                            <a href="<?php echo base_url()?>adminslider/add" class="btn btn-success btn-rounded waves-effect waves-light">Add</a>
                                          
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
                                                
                                                <td><img src="<?php echo base_url(); ?>upload_images/<?php echo $record->image;?>" alt="" class="rounded  img-fluid" width="60"></td>
                                                <td><?php echo ($record->status=='1')? 'Enable':'Disabled';?></td>
                                                <td>
												
												<div class="button-items">
                                            <a href="<?php echo base_url()?>adminslider/edit/<?php echo $record->id ?>" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="fas fa-edit"></i></a>
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
                window.location = url+"/adminslider/delete/"+id;
            else
                return false;
        }

    </script>
	
	
	