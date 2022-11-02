<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-flex align-items-center justify-content-between">

                    <h4 class="mb-0">Advocate</h4>



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

                        <h4 class="card-title">Edit advocate</h4>


                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mt-4">


                                    <form method="post"
                                        action="<?php echo base_url();?>adminadvocate/edit/<?php echo $update[0]->id?>"
                                        enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Register No
                                                    </label>

                                                    <input type="text" name="reg_no" class="form-control"
                                                        value="<?php echo $update[0]->reg_no?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">City
                                                        Name</label>





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

                                                    <label class="form-label" for="formrow-email-input">Category
                                                        Name</label>

                                                    <select class="form-select" name="cat_id">

                                                        <option value="<?php echo $update[0]->cat_id?>">

                                                            <?php 
                                                            $cat_id =  $update[0]->cat_id;
                                                            
                                                            $sqll= "SELECT * FROM category WHERE id='$cat_id'"; 
                                                        
                                                            $sql = $this->db->query($sqll);
                                                        
                                                            $query= $sql->result();
                                                        // print_r($query);
                                                            if(isset($query[0]->cat_name)) {
                                                            echo $query[0]->cat_name;
                                                            }
                                                            ?>

                                                        </option>

                                                        <?php   $category = $this->Adminmodel->select('category','',0,'desc');
                                                        foreach($category as $viewstate) { ?>
                                                        <option value="<?php echo  $viewstate->id;?>">
                                                            <?php echo  $viewstate->cat_name;?></option>

                                                        <?php } ?>
                                                    </select>




                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Designation
                                                        Name</label>



                                                    <select class="form-select" name="des_id">

                                                        <option value="<?php echo $update[0]->des_id?>">

                                                            <?php 
                                                            $des_id =  $update[0]->des_id;
                                                            
                                                            $sqll= "SELECT * FROM designation WHERE id='$des_id'"; 

                                                            $sql = $this->db->query($sqll);

                                                            $query= $sql->result();
                                                        // print_r($query);
                                                            if(isset($query[0]->des_name)) {
                                                            echo $query[0]->des_name;
                                                            }
                                                            ?>

                                                        </option>

                                                        <?php   $designation = $this->Adminmodel->select('designation','',0,'desc');
                                                            foreach($designation as $viewstate) { ?>
                                                        <option value="<?php echo  $viewstate->id;?>">
                                                            <?php echo  $viewstate->des_name;?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">COP No
                                                    </label>

                                                    <input type="text" name="cop_no" class="form-control"
                                                        value="<?php echo $update[0]->cop_no?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">BCA No
                                                    </label>

                                                    <input type="text" name="adv_bac_no" class="form-control"
                                                        value="<?php echo $update[0]->adv_bac_no?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>









                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Advocate
                                                        Name</label>

                                                    <input type="text" name="adv_name" class="form-control"
                                                        value="<?php echo $update[0]->adv_name?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Image
                                                    </label>

                                                    <input type="file" name="adv_img" class="form-control"
                                                        id="formrow-email-input">
                                                    <img src="<?php echo base_url();?>upload_images/<?php echo  $update[0]->adv_img;?>"
                                                        width="50">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Advocate capital
                                                        Name</label>

                                                    <input type="text" name="adv_eng_name" class="form-control"
                                                        value="<?php echo $update[0]->adv_eng_name?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">advocate Father
                                                        Name</label>

                                                    <input type="text" name="adv_f_name" class="form-control"
                                                        value="<?php echo $update[0]->adv_f_name?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Advocate Father
                                                        Capital
                                                        Name</label>

                                                    <input type="text" name="adv_eng_f_name" class="form-control"
                                                        value="<?php echo $update[0]->adv_eng_f_name?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">DOB
                                                    </label>

                                                    <input type="date" name="adv_dob" class="form-control"
                                                        value="<?php echo $update[0]->adv_dob?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Senior
                                                    </label>

                                                    <input type="text" name="adv_sf" class="form-control"
                                                        value="<?php echo $update[0]->adv_sf?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Chamber
                                                    </label>

                                                    <input type="text" name="adv_cf" class="form-control"
                                                        value="<?php echo $update[0]->adv_cf?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Gender
                                                    </label>

                                                    <select class="form-select" name="adv_gen">

                                                        <option value="<?php echo $update[0]->adv_gen?>">Male</option>

                                                        <option value="<?php echo $update[0]->adv_gen?>">Female
                                                        </option>
                                                        <option value="<?php echo $update[0]->adv_gen?>">Transgender
                                                        </option>

                                                    </select>


                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Blood Group
                                                    </label>

                                                    <input type="text" name="adv_blood_group" class="form-control"
                                                        value="<?php echo $update[0]->adv_blood_group?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>








                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Advocate Address
                                                    </label>

                                                    <textarea type="text" name="adv_add" class="form-control"
                                                        id="formrow-email-input"
                                                        rows="1"><?php echo $update[0]->adv_add?></textarea>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Pincode
                                                    </label>

                                                    <input type="text" name="adv_pin" class="form-control"
                                                        value="<?php echo $update[0]->adv_pin?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Reporter Address
                                                    </label>

                                                    <textarea type="text" name="adv_rep_add" class="form-control"
                                                        id="formrow-email-input"
                                                        rows="1"> <?php echo $update[0]->adv_rep_add?> </textarea>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Pincode
                                                    </label>

                                                    <input type="text" name="adv_rep_pin" class="form-control"
                                                        value="<?php echo $update[0]->adv_rep_pin?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Phone No
                                                    </label>

                                                    <input type="text" name="adv_phone" class="form-control"
                                                        value="<?php echo $update[0]->adv_phone?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Whatsapp No
                                                    </label>

                                                    <input type="text" name="adv_whatapp_no" class="form-control"
                                                        value="<?php echo $update[0]->adv_whatapp_no?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Email
                                                    </label>

                                                    <input type="email" name="adv_email" class="form-control"
                                                        value="<?php echo $update[0]->adv_email?>"
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