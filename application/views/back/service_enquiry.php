
		 
		
		
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
                                                 <th>Subject</th>
												  <th>date</th>
                                                
                                               
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php 
											$show=$this->Adminmodel->select('services_enquiry','',0,'desc');
												$i=1;
											foreach($show as $record) {  ?>
                                            <tr> 
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $record->name;?></td>
                                                 
                                                <td><?php echo $record->phone;?></td>
                                                <td><?php echo $record->email;?></td>
                                                <td><?php echo $record->subject;?></td>
												  <td><?php echo $record->createdate;?></td>
 												 

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
		
		
		
		
		
		
		

 
	