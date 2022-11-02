<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-flex align-items-center justify-content-between">

                    <h4 class="mb-0">advocate</h4>



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

                        <h4 class="card-title">Add advocate</h4>



                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mt-4">

                            <form method="post" action="<?php echo base_url();?>adminadvocate/add"    enctype="multipart/form-data">

 
                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Register
                                                        No</label>

                                                    <input type="text" name="reg_no" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-password-input">Bar Association</label>





                                                    <select class="form-select" name="city_id">
                                                        <?php   $city = $this->Adminmodel->select('city','',0,'desc');
                                                            foreach($city as $view) { ?>
                                                        <option value="<?php echo  $view->id;?>">
                                                            <?php echo  $view->c_name;?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label"
                                                        for="formrow-password-input">Specialization</label>





                                                    <select class="form-select" name="cat_id">
                                                        <?php   $city = $this->Adminmodel->select('category','',0,'desc');
                                                            foreach($city as $view) { ?>
                                                        <option value="<?php echo  $view->id;?>">
                                                            <?php echo  $view->cat_name;?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label"
                                                        for="formrow-password-input">Extra Responsibility</label>

                                                    <select class="form-select" name="des_id">
                                                        <?php   $category = $this->Adminmodel->select('designation','',0,'desc');
                                                            foreach($category as $view) { ?>
                                                        <option value="<?php echo  $view->id;?>">
                                                            <?php echo  $view->des_name;?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>

                                            </div>



                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">COP
                                                        No</label>

                                                    <input type="text" name="cop_no" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">BAC
                                                        No</label>

                                                    <input type="text" name="adv_bac_no" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Advocate
                                                        Name</label>

                                                    <input type="text" name="adv_name" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Image (Size 500kb Only)</label>

                                                    <input type="file" name="adv_img" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <!-- <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Advocate
                                                        Capital
                                                        Name
                                                    </label>

                                                    <input type="text" name="adv_eng_name" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div> -->


 
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Advocate
                                                        Father
                                                        Name
                                                    </label>

                                                    <input type="text" name="adv_f_name" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <!-- <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Advocate
                                                        Father
                                                        Capital
                                                        Name</label>

                                                    <input type="text" name="adv_eng_f_name" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div> -->
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="date" for="formrow-email-input">DOB</label>

                                                    <input type="date" name="adv_dob" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="date" for="formrow-email-input">Senior</label>

                                                    <input type="text" name="adv_sf" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="date" for="formrow-email-input">Chamber</label>

                                                    <input type="text" name="adv_cf" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">


                                                    <label class="form-label"
                                                        for="formrow-password-input">Gender</label>

                                                    <select class="form-select" name="adv_gen">

                                                        <option value="Male">Male</option>

                                                        <option value="Female">Female</option>
                                                        <option value="Transgender">Transgender</option>

                                                    </select>





                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Blood Group
                                                    </label>

                                                    <input type="text" name="adv_blood_group" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Address
                                                    </label>

                                                    <textarea type="text" name="adv_add" class="form-control"
                                                        id="formrow-email-input" rows="1"> </textarea>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Pincode
                                                    </label>

                                                    <input type="text" name="adv_pin" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>


                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Reporter
                                                        Address
                                                    </label>

                                                    <textarea type="text" name="adv_rep_add" class="form-control"
                                                        id="formrow-email-input" rows="1"></textarea>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Pincode
                                                    </label>

                                                    <input type="text" name="adv_rep_pin" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Phone No
                                                    </label>

                                                    <input type="text" name="adv_phone" class="form-control"
                                                        id="formrow-email-input" maxlength="10">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Whatsaap No
                                                    </label>

                                                    <input type="text" name="adv_whatapp_no" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                             <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Designation
                                                    </label>

                                                    <input type="text" name="a_designation" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Work Place
                                                    </label>

                                                    <input type="text" name="a_workplace" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Practice in
                                                    </label>

                                                    <input type="text" name="a_prectice" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Email
                                                    </label>

                                                    <input type="Email" name="adv_email" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Other Practise Area
                                                    </label>

                                                    <input type="text" name="adv_area" class="form-control"
                                                        id="formrow-email-input" placeholder="Court/Revenue Department etc...">

                                                </div>

                                            </div>













                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label"
                                                        for="formrow-password-input">Status</label>

                                                    <select class="form-select" name="status">

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