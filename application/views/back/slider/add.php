<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-flex align-items-center justify-content-between">

                    <h4 class="mb-0">Slider</h4>



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

                        <h4 class="card-title">Add Slider</h4>



                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mt-4">



                                    <form method="post" action="<?php echo base_url();?>adminslider/add"
                                        enctype="multipart/form-data">









                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Banner
                                                        Image</label>

                                                    <input type="file" name="slide_img" class="form-control"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-password-input">
                                                        Bar Association</label>

                                                    <select class="form-select" name="city_id">
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
                                                        Heading 1</label>

                                                    <textarea type="text"  name="slide_heading" class="form-control"
                                                        id="formrow-email-input" rows="1"></textarea>
                                                                        
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Heading 2</label>

                                                    <textarea type="text"  name="slide_heading_2" class="form-control"
                                                        id="formrow-email-input" rows="1"></textarea>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">
                                                        Heading 3</label>

                                                    <textarea type="text" name="slide_link" class="form-control"
                                                        id="formrow-email-input" rows="1"></textarea>

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