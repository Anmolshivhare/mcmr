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

                        <h4 class="card-title">Add Persoanl/Business details</h4>

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mt-4">

                                    <form method="post" action="<?php echo base_url();?>Adminpersonal_details/add"
                                        enctype="multipart/form-data">


                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Owner
                                                        Name</label>

                                                    <input type="text" name="first_name" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Email</label>

                                                    <input type="email" name="email" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label"
                                                        for="formrow-password-input">Designation</label>

                                                    <input type="text" name="u_des" class="form-control"
                                                        id="formrow-email-input">


                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-password-input"> Father's
                                                        Name</label>
                                                    <input type="text" name="u_f_name" class="form-control"
                                                        id="formrow-email-input">
                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-password-input">Date of
                                                        Borth</label>

                                                    <input type="text" name="u_dob" class="form-control"
                                                        id="formrow-email-input">


                                                </div>

                                            </div>



                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Whatsapp
                                                        No.1</label>

                                                    <input type="phone" name="phone" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Whatsapp
                                                        No.2</label>

                                                    <input type="phone" name="u_phone" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Full Residence
                                                        Address</label>


                                                    <input type="text" name="u_f_resident" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Landmark
                                                    </label>

                                                    <input type="text" name="u_landmark" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Pin Code</label>

                                                    <input type="number" name="u_pincode" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input"> Upload Image
                                                    </label>

                                                    <input type="file" name="u_photo" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Blood Group
                                                    </label>

                                                    <input type="text" name="u_blood" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>



                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Are you want to
                                                        be a registered Social worker</label>

                                                    <input type="text" name="u_socialwork" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Are you want a
                                                        Media Mitra Card (Press reporting)</label>

                                                    <input type="text" name="u_mitra_card" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-password-input">Select Business/Category:
                                                    </label>
 
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

                                                    <label class="form-label" for="formrow-password-input">Business service/Class:
                                                    </label>
 
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
                                                        for="formrow-email-input">Business/ferm/service name</label>

                                                    <input type="text" name="service_name" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Business/Service Timing:</label>

                                                    <input type="text" name="time" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Business/service weekly off:
                                                    </label>

                                                    <input type="text" name="weekly_off" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Business/service specialty:</label>

                                                    <input type="text" name="service_add" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Full addess with landmark:</label>

                                                    <textarea type="text" name="full_add" class="form-control"
                                                        id="formrow-email-input" rows="1"></textarea>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Contact details:</label>

                                                    <input type="text" name="b_phone" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Proprietor/Owner name:
                                                    </label>

                                                    <input type="text" name="owner_name" class="form-control"
                                                        id="formrow-email-input">

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