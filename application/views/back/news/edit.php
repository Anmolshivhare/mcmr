<div class="page-content">

    <div class="container-fluid">

        <!-- start page title -->

        <div class="row">

            <div class="col-12">

                <div class="page-title-box d-flex align-items-center justify-content-between">

                    <h4 class="mb-0">News</h4>



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

                        <h4 class="card-title">Edit news</h4>



                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mt-4">


                                    <form method="post"
                                        action="<?php echo base_url();?>adminnews/edit/<?php echo $update[0]->id?>"
                                        enctype="multipart/form-data">                                    
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">News
                                                        Title</label>

                                                    <input type="text" name="n_title" class="form-control"
                                                        value="<?php echo $update[0]->n_title?>"
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

                                                    <label class="form-label" for="formrow-password-input">category</label>

                                                    <select class="form-select" name="n_cat_id">

                                                        <option value="<?php echo $update[0]->n_cat_id?>">

                                                                            <?php 
                                                                    $st_id =  $update[0]->n_cat_id;
                                                                    $sqll= "SELECT * FROM newscategory WHERE id='$st_id'"; 
                                                                                $sql = $this->db->query($sqll);
                                                                                $query= $sql->result();
                                                                                if(isset($query[0]->nc_name)) {
                                                                                    echo $query[0]->nc_name;
                                                                                }
                                                                            ?>

                                                        </option>

                                                        <?php   $news = $this->Adminmodel->select('newscategory','',0,'desc');
                                                    foreach($news as $viewnews) { ?>
                                                        <option value="<?php echo  $viewnews->id;?>">
                                                            <?php echo  $viewnews->nc_name;?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>

                                            </div>


                                            
                                            
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">News
                                                        Image</label>

                                                    <input type="file" name="n_img" class="form-control"
                                                        value="<?php echo $update[0]->n_img?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>

                                           
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">News description
                                                        </label>

                                                    <textarea type="text" name="n_des" class="form-control"
                                                      
                                                        id="formrow-email-input" rows="1"> <?php echo $update[0]->n_des?></textarea>

                                                </div>

                                            </div>
                                               
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">News
                                                        Written By</label>

                                                    <input type="text" name="n_writtenby" class="form-control"
                                                        value="<?php echo $update[0]->n_writtenby?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">News
                                                    source</label>

                                                    <input type="text" name="n_source" class="form-control"
                                                        value="<?php echo $update[0]->n_source?>"
                                                        id="formrow-email-input">

                                                </div>

                                            </div>
                                            		
                                            							
                                            <div class="col-md-6">

                                                <div class="mb-3">

                                                    <label class="form-label" for="formrow-email-input">Image</label>

                                                    <input type="file" name="n_img"class="form-control"
                                                        id="formrow-email-input">
                                                    <img src="<?php echo base_url();?>upload_images/<?php echo  $update[0]->n_img;?>"
                                                        width="50">

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