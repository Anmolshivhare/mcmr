<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-flex align-items-center justify-content-between">

                    <h4 class="mb-0">Bar Association</h4>



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

                        <h4 class="card-title">Edit Bar Association</h4>



                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mt-4">


                                    <form method="post"
                                        action="<?php echo base_url();?>admincity/edit/<?php echo $update[0]->id?>"
                                        enctype="multipart/form-data">







                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Bar Association
                                                         </label>

                                                    <input type="text" name="c_name" class="form-control"
                                                        value="<?php echo $update[0]->c_name?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-password-input">State</label>

                                                    <select class="form-select" name="state_id">

                                                        <option value="<?php echo $update[0]->state_id?>">

                                                            <?php 
								 $st_id =  $update[0]->state_id;
								 $sqll= "SELECT * FROM state WHERE id='$st_id'"; 
                                            $sql = $this->db->query($sqll);
                                            $query= $sql->result();
                                            if(isset($query[0]->s_name)) {
                                                echo $query[0]->s_name;
                                            }
						                  ?>

                                                        </option>

                                                        <?php   $state = $this->Adminmodel->select('state','',0,'desc');
                                                    foreach($state as $viewstate) { ?>
                                                        <option value="<?php echo  $viewstate->id;?>">
                                                            <?php echo  $viewstate->s_name;?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Image</label>

                                                    <input type="file" name="c_img" class="form-control"
                                                        id="formrow-email-input">
                                                    <img src="<?php echo base_url();?>upload_images/<?php echo  $update[0]->c_img;?>"
                                                        width="50">

                                                </div>

                                            </div>



                                        </div>











                                </div>





                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="mb-3">

                                            <label class="form-label" for="formrow-password-input">Status</label>

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

    <!-- End Form Layout -->





    <!-- ckeditor -->

    <script src="<?php echo base_url();?>admin_assets//libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js">
    </script>



    <!--tinymce js-->

    <script src="<?php echo base_url();?>admin_assets//libs/tinymce/tinymce.min.js"></script>



    <script>
    ClassicEditor

        .create(document.querySelector('.classic-editor'))

        .cch(error => {

            console.error(error);

        });
    </script>



    <script>
    ClassicEditor

        .create(document.querySelector('.classic-editor2'))

        .cch(error => {

            console.error(error);

        });
    </script>

    <!-- init js -->

    <script src="<?php echo base_url();?>admin_assets//js/pages/form-editor.init.js"></script>