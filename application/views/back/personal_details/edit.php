<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-flex align-items-center justify-content-between">

                    <h4 class="mb-0">personal_details</h4>



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

                        <h4 class="card-title">Edit personal_details</h4>


                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mt-4">


                                    <form method="post"
                                        action="<?php echo base_url();?>adminpersonal_details/edit/<?php echo $update[0]->id?>"
                                        enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Owner Name
                                                    </label>

                                                    <input type="text" name="first_name" class="form-control"
                                                        value="<?php echo $update[0]->first_name?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Email
                                                    </label>

                                                    <input type="text" name="email" class="form-control"
                                                        value="<?php echo $update[0]->email?>" id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Whatapp NO 1
                                                    </label>

                                                    <input type="number" name="phone" class="form-control"
                                                        value="<?php echo $update[0]->phone?>" id="formrow-email-input"
                                                        maxlength="10">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Whatapp NO 2
                                                    </label>

                                                    <input type="number" name="u_phone" class="form-control"
                                                        value="<?php echo $update[0]->u_phone?>"
                                                        id="formrow-email-input" maxlength="10">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Designation
                                                    </label>

                                                    <input type="text" name="u_des" class="form-control"
                                                        value="<?php echo $update[0]->u_des?>" id="formrow-email-input">

                                                </div>

                                            </div>


                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Father Name
                                                        Name</label>

                                                    <input type="text" name="u_f_name" class="form-control"
                                                        value="<?php echo $update[0]->u_f_name?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Date of Birth
                                                    </label>

                                                    <input type="text" name="u_dob" class="form-control"
                                                        id="formrow-email-input" value="<?php echo $update[0]->u_dob?>">


                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Full Residence
                                                        Address
                                                    </label>

                                                    <textarea type="text" name="u_f_resident" class="form-control"
                                                        id="formrow-email-input"
                                                        rows="1"><?php echo $update[0]->u_f_resident?></textarea>

                                                </div>

                                            </div>


                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Landmark

                                                    </label>

                                                    <input type="text" name="u_landmark" class="form-control"
                                                        value="<?php echo $update[0]->u_landmark?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Pincode

                                                    </label>

                                                    <input type="text" name="u_pincode" class="form-control"
                                                        value="<?php echo $update[0]->u_pincode?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Upload Photo

                                                    </label>

                                                    <input type="file" name="u_photo" class="form-control"
                                                        value="<?php echo $update[0]->u_photo?>"
                                                        id="formrow-email-input">
                                                    <img src="<?php echo base_url()?>upload_images/<?php echo $update[0]->u_photo;?>"
                                                        width="50" alt="">


                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Blood Group
                                                    </label>

                                                    <input type="text" name="u_blood" class="form-control"
                                                        value="<?php echo $update[0]->u_blood?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Are you want to
                                                        be a registered Social worker
                                                    </label>

                                                    <input type="text" name="u_socialwork" class="form-control"
                                                        value="<?php echo $update[0]->u_socialwork?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Are you want a
                                                        Media Mitra Card (Press reporting)
                                                    </label>

                                                    <input type="text" name="u_mitra_card" class="form-control"
                                                        value="<?php echo $update[0]->u_mitra_card?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Select Business/Category:
                                                        </label>





                                                    <select class="form-select" name="city_id">

                                                        <option value="<?php echo $update[0]->city_id?>">

                                                            <?php 
                                                                $ct_id =  $update[0]->city_id;
                                                                
                                                                $sqll= "SELECT * FROM city WHERE id='$ct_id'"; 
                                                              
                                                                $sql = $this->db->query($sqll);
                                                              
                                                                $query= $sql->result();
                                                               // print_r($query);
                                                                if(isset($query[0]->c_name)) {
                                                                echo $query[0]->c_name;
                                                                }
                                                                ?>

                                                        </option>

                                                        <?php   $city = $this->Adminmodel->select('city','',0,'desc');
                                                        foreach($city as $viewstate) { ?>
                                                        <option value="<?php echo  $viewstate->id;?>">
                                                            <?php echo  $viewstate->c_name;?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Business service/Class:
                                                        </label>





                                                    <select class="form-select" name="city_id">

                                                        <option value="<?php echo $update[0]->city_id?>">

                                                            <?php 
                                                                $ct_id =  $update[0]->city_id;
                                                                
                                                                $sqll= "SELECT * FROM city WHERE id='$ct_id'"; 
                                                              
                                                                $sql = $this->db->query($sqll);
                                                              
                                                                $query= $sql->result();
                                                               // print_r($query);
                                                                if(isset($query[0]->c_name)) {
                                                                echo $query[0]->c_name;
                                                                }
                                                                ?>

                                                        </option>

                                                        <?php   $city = $this->Adminmodel->select('city','',0,'desc');
                                                        foreach($city as $viewstate) { ?>
                                                        <option value="<?php echo  $viewstate->id;?>">
                                                            <?php echo  $viewstate->c_name;?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label"
                                                        for="formrow-email-input">Business/ferm/service name
                                                    </label>

                                                    <input type="text" name="service_name" class="form-control"
                                                        value="<?php echo $update[0]->service_name?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Business/Service
                                                        Timing: </label>

                                                    <input type="text" name="time" class="form-control"
                                                        value="<?php echo $update[0]->time?>" id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Business/service
                                                        weekly off:
                                                    </label>

                                                    <input type="text" name="weekly_off" class="form-control"
                                                        value="<?php echo $update[0]->weekly_off?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Business/service
                                                        specialty:
                                                    </label>

                                                    <input type="text" name="service_add" class="form-control"
                                                        value="<?php echo $update[0]->service_add?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Full addess with
                                                        landmark:</label>

                                                    <textarea type="text" name="full_add" rows="1" class="form-control"
                                                        value=""
                                                        id="formrow-email-input"><?php echo $update[0]->full_add?></textarea>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Contact details:
                                                    </label>

                                                    <input type="text" name="b_phone" class="form-control"
                                                        value="<?php echo $update[0]->b_phone?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Proprietor/Owner
                                                        name:
                                                    </label>

                                                    <input type="text" name="owner_name" class="form-control"
                                                        value="<?php echo $update[0]->owner_name?>"
                                                        id="formrow-email-input">

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