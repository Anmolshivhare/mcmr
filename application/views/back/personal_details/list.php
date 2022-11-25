<div class="page-content">

    <div class="container-fluid">



        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-flex align-items-center justify-content-between">

                    <!-- <h4 class="mb-0"><?php echo $title;?></h4> -->



                    <div class="page-title-right">

                        <div class="button-items">

                            <a href="<?php echo base_url()?>adminpersonal_details/add"
                                class="btn btn-success btn-rounded waves-effect waves-light">Add</a>



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





                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>

                                <tr>

                                    <th>S N.</th>

                                    <th>Owner Name</th>
                                    
                                    <th>Image</th>

                                    <th>Phone No</th>
                                     

                                    <th>Status</th>

                                    <th>Option</th>

                                </tr>

                            </thead>
                            <tbody>
                                <?php $i = 1;
                                    foreach($viewpersonal_details as $view) { ?>
                                <tr>
                                    <td><?php echo $i;?></td>

                                    
                                     
                                     

                                    <td><?php echo $view->first_name;?></td>
                                    <td>
                                        <img src="<?php echo base_url();?>upload_images/<?php echo $view->u_photo;?>"
                                            width="100">
                                    </td>

                                    <td><?php echo $view->phone;?></td>
 


                                    <td>

                                        <?php
                                                         echo  ($view->status == 1) ? "Active" : "In-Active";?>




                                    </td>
                                    <td><a class="btn btn-primary"
                                            href="<?php echo base_url();?>adminpersonal_details/edit/<?php echo $view->id;?>"><i
                                                class="fas fa-edit"> </i></a> &nbsp;&nbsp; <button
                                            onclick="myFunction(<?php echo $view->id ?>)" id="<?php echo $view->id ?>"
                                            type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i
                                                class="fas fa-trash"></i></button>


                                    </td>
                                </tr>
                                <?php $i++;
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

    var url = "<?php echo base_url();?>";

    var r = confirm("Do you want to delete this?")

    if (r == true)

        window.location = url + "/adminpersonal_details/delete/" + id;

    else

        return false;

}
</script>