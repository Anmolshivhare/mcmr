<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-flex align-items-center justify-content-between">

                    <h4 class="mb-0">Important Decision</h4>



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

                        <h4 class="card-title">Edit Important Decision</h4>



                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mt-4">


                                    <form method="post"
                                        action="<?php echo base_url();?>adminevent/edit/<?php echo $update[0]->id?>"
                                        enctype="multipart/form-data">







                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Decision
                                                        Name</label>

                                                    <input type="text" name="e_name" class="form-control"
                                                        value="<?php echo $update[0]->e_name?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            
                                            
                                            
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-password-input">
                                                        Bar Association</label>

                                                    <select class="form-select" name="city_id">
                                                        <option value="<?php echo $update[0]->city_id?>">
                                                            <?php $cit = $update[0]->city_id;
                                                             $citname= "SELECT * FROM `city` WHERE id='$cit'";
                                                                $sql = $this->db->query($citname);
                                                                $query= $sql->result();
                                                                if(isset($query[0]->c_name)) {
                                                                    echo $query[0]->c_name;
                                                                }?>
                                                                
                                                                
                                                        </option>



                                                        <?php   $event = $this->Adminmodel->select('city','',0,'desc');


                                                         foreach($event as $viewstate) { ?>


                                                        <option value="<?php echo  $viewstate->id;?>">
                                                            <?php echo  $viewstate->c_name;?></option>

                                                        <?php } ?>


                                                    </select>

                                                </div>

                                            </div>



                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input"> 
                                                        Date</label>

                                                    <input type="date" name="e_date" class="form-control"
                                                        value="<?php echo $update[0]->e_date?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input"> 
                                                        Orgniser</label>

                                                    <input type="text" name="e_orgniser" class="form-control"
                                                        value="<?php echo $update[0]->e_orgniser?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Venue
                                                        </label>

                                                    <input type="text" name="e_venue" class="form-control"
                                                        value="<?php echo $update[0]->e_venue?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input"> Details
                                                        </label>

                                                    <textarea type="text" name="e_detail" class="form-control"
                                                      
                                                        id="formrow-email-input" rows="1"> <?php echo $update[0]->e_detail?></textarea>

                                                </div>

                                            </div>
                                            							
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Image</label>

                                                    <input type="file" name="e_img"class="form-control"
                                                        id="formrow-email-input">
                                                    <img src="<?php echo base_url();?>upload_images/<?php echo  $update[0]->e_img;?>"
                                                        width="50">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">  PDF</label>

                                                    <input type="file" name="event_pdf"class="form-control"
                                                        id="formrow-email-input" value="">
                                                       
                                                       <a href="<?php echo base_url();?>upload_file/<?php echo  $update[0]->event_pdf;?>" target="_blank">View pdf </a>
                                                    

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label"
                                                        for="formrow-password-input">Feature</label>

                                                    <select class="form-select" name="feature">
                                                        <option value="<?php echo $update[0]->feature?>">
                                                            <?php echo ($update[0]->status == 1) ? "Active" : "In-Active";?>
                                                        </option>
                                                        <option value="1">Enable</option>

                                                        <option value="0">Disable</option>

                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label"
                                                        for="formrow-password-input">Status</label>

                                                    <select class="form-select" name="status">
                                                        <option value="<?php echo $update[0]->status?>">
                                                            <?php echo ($update[0]->status == 1) ? "Active" : "In-Active";?>
                                                        </option>
                                                        <option value="1">Enable</option>

                                                        <option value="0">Disable</option>

                                                    </select>

                                                </div>

                                            </div>


                                            <div class="mt-4">

                                                <button type="submit" class="btn btn-primary w-md">Submit</button>

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

    </div>

    <!-- End Form Layout -->





    <!-- ckeditor -->

    <script src="<?php echo base_url();?>admin_assets//libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js">
    </script>



    <!--tinymce js-->

    <script src="<?php echo base_url();?>admin_assets//libs/tinymce/tinymce.min.js"></script>



    <script>
    ClassicEditor

        .create(document.querySelector('.classic-editor'))

        .catch(error => {

            console.error(error);

        });
    </script>



    <script>
    ClassicEditor

        .create(document.querySelector('.classic-editor2'))

        .catch(error => {

            console.error(error);

        });
    </script>

    <!-- init js -->

    <script src="<?php echo base_url();?>admin_assets//js/pages/form-editor.init.js"></script>