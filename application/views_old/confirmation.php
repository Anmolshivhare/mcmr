<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="<?php echo base_url();?>front_assets/img/favicon.png" type="image/png" />
    <title>Vedanta Institute</title>
   <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/bootstrap.css"  type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/flaticon.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/vendors/owl-carousel/owl.carousel.min.css"  type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>front_assets/vendors/nice-select/css/nice-select.css"  type="text/css"/>
 
  
	 <script src="<?php echo base_url();?>front_assets/js/jquery-3.2.1.min.js"></script>
  </head>

  <body>
 
	

<div class="container mt-5">
	<div class="row">
        <div class="col-md-2"></div>  
        <div class="col-md-8">
        	<div class="card">
        		<h5 class="card-header bg-success text-white">Checkout Confirmation</h5>
        		<div class="card-body">
        			<form action="<?php echo $action; ?>/_payment" method="post" id="payuForm" name="payuForm">
		                <input type="hidden" name="key" value="<?php echo $mkey; ?>" />
		                <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
		                <input type="hidden" name="txnid" value="<?php echo $tid; ?>" />
		                <div class="form-group">
		                    <label class="control-label">Total Payable Amount</label>
		                    <input class="form-control" name="amount" value="<?php echo $amount; ?>"  readonly/>
		                </div>
		                <div class="form-group">
		                    <label class="control-label">Your Name</label>
		                    <input class="form-control" name="firstname" id="firstname" value="<?php echo $name; ?>" readonly/>
		                </div>
		                <div class="form-group">
		                    <label class="control-label">Email</label>
		                    <input class="form-control" name="email" id="email" value="<?php echo $mailid; ?>" readonly/>
		                </div>
		                <div class="form-group">
		                    <label class="control-label">Phone</label>
		                    <input class="form-control" name="phone" value="<?php echo $phoneno; ?>" readonly />
		                </div>
						
		                <div class="form-group">
		                    <label class="control-label"> Booking Info</label>
		                    <textarea class="form-control"  readonly><?php 
								 $cname = $productinfo;
								 
								 $sqll= "SELECT * FROM package WHERE id='$cname'"; 
                                            $sql = $this->db->query($sqll);
                                            $query= $sql->result();
                                            if(isset($query[0]->name)) {
                                                echo $query[0]->name;
                                            }
						   ?>
							
							
							</textarea>
		                </div>
		                <!--<div class="form-group">
		                    <label class="control-label">Discount coupon</label>
		                    <input class="form-control" name="address1" value="<?php echo $referal_code; ?>" readonly/>     
		                </div>-->
						<div class="form-group">
		                    <label class="control-label">Referal Code</label>
		                    <input class="form-control" name="address2" value="<?php echo $referal_code; ?>" readonly/>     
		                </div>
		                <div class="form-group">
							<input name="udf1" value="<?php echo $duration; ?>"  type="hidden" />
							<input name="productinfo" value="<?php echo $productinfo; ?>"  type="hidden" />
		                    <input name="surl" value="<?php echo $sucess; ?>" size="64" type="hidden" />
		                    <input name="furl" value="<?php echo $failure; ?>" size="64" type="hidden" />  
		                    <!--for test environment comment  service provider   -->
		                    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
		                    <input name="curl" value="<?php echo $cancel; ?> " type="hidden" />
		                </div>
		                <div class="form-group float-right">
		                	<input type="submit" value="Pay Now" class="btn btn-success" />
		                </div>
		            </form> 
        		</div>
        	</div>
        	                                   
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>
	<!-- Footer -->
	</body> 
	</html> 