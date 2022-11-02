

	 <div class="section_gap registration_area">

<div class="container mt-5">
	<div class="row">
        <div class="col-md-2"></div>  
        <div class="col-md-8">
        	<div class="card">
        		<h4 class="card-header">Transaction<label for="Success" class="badge badge-success">Success</label></h4>
        		<div class="card-body">
									<?php
$date=date_create($addedon);

?>
				<p>You Payment has been successfully done , This is your registertion No. <?php echo  $productinfo;?>M<?php echo date_format($date,"d");?><?php echo date_format($date,"m");?><?php echo $user['id']; ?> </p> 
			 
        			<?php 
		               /* echo "<p>Thank You. Your order status is ". $status .".</br>";
		                echo "Your Transaction ID for this transaction is ".$txnid."</br>";
		                echo "Your Transaction ID for this transaction is ".$productinfo."</br>";
		                echo "Your Transaction ID for this transaction is ".$key."</br>";
		                echo "Your Transaction ID for this transaction is ".$bank_ref_num."</br>";
		                echo "Your Transaction ID for this transaction is ".$bankcode."</br>";
 		                echo "Your Transaction ID for this transaction is ".$payuMoneyId."</br>";
 		                echo "Your Transaction ID for this transaction is ".$paymentId."</br>";
 		                echo "Your Transaction ID for this transaction is ".$error."</br>";
 		                echo "Your Transaction ID for this transaction is ".$mihpayid."</br>";
 		                echo "Your Transaction ID for this transaction is ".$txnMessage."</br>";
 		                echo "Your Transaction ID for this transaction is ".$mode."</br>";
 		                echo "Your Transaction ID for this transaction is ".$addedon."</br>";
 		                echo "Your Transaction ID for this transaction is ".$error_Message."</br>";
 		                echo "Your Transaction ID for this transaction is ".$email."</br>";
 		                echo "Your Transaction ID for this transaction is ".$firstname."</br>";
  		                echo "We have received a payment of Rs. " . $amount . ". Your order  will dispatch soon.</p>";
		          */  ?>

				
 
					<form method="post" action="<?php echo base_url();?>users/save_payment/<?php echo $user['id']; ?>">
 					<input type="hidden" name="registerNO" value="<?php echo  $productinfo;?>M<?php echo date_format($date,"d");?><?php echo date_format($date,"m");?><?php echo $user['id']; ?>">
 					<input type="hidden" name="payment" value="<?php echo $status;?>">
					<input type="hidden" name="txnid" value="<?php echo $txnid;?>">
					<input type="hidden" name="package_id" value="<?php echo $productinfo;?>">
					<input type="hidden" name="productinfo" value="<?php echo $productinfo;?>">
 					<input type="hidden" name="bank_ref_num" value="<?php echo $bank_ref_num;?>">
					<input type="hidden" name="bankcode" value="<?php echo $bankcode;?>">
					<input type="hidden" name="payuMoneyId" value="<?php echo $payuMoneyId;?>">
					<input type="hidden" name="paymentId" value="<?php echo $paymentId;?>">
					<input type="hidden" name="error" value="<?php echo $error;?>">
					<input type="hidden" name="mihpayid" value="<?php echo $mihpayid;?>">
					<input type="hidden" name="txnMessage" value="<?php echo $txnMessage;?>">
					<input type="hidden" name="mode" value="<?php echo $mode;?>">
					<input type="hidden" name="referal_code" value="<?php echo $address1;?>">
					<input type="hidden" name="refered_by" value="<?php echo $address2;?>">
					<input type="hidden" name="addedon" value="<?php echo $addedon;?>">
					<input type="hidden" name="plan_expire" value="<?php  $cname = $productinfo;
								 $sqll= "SELECT * FROM package WHERE duration='$cname'"; 
                                            $sql = $this->db->query($sqll);
                                            $query= $sql->result();
                                            if(isset($query[0]->duration)) {
                                               // echo $query[0]->duration;
                                            } 
											$exp = $query[0]->duration; 
											$date=date_create($addedon);
											date_add($date,date_interval_create_from_date_string("$exp months"));
											echo date_format($date,"Y-m-d H:i:s"); 
											?>">
					<input type="hidden" name="amount" value="<?php echo $amount;?>">
					<input type="hidden" name="error_Message" value="<?php echo $error_Message;?>">
					
					
					<input type="hidden" name="name" value="<?php 
								 $cname = $user['id'];
								 
								 $sqll= "SELECT * FROM user_profile WHERE id='$cname'"; 
                                            $sql = $this->db->query($sqll);
                                            $query= $sql->result();
                                            if(isset($query[0]->name)) {
                                                echo $query[0]->name;
                                            }
						   ?>">
						   <input type="hidden" name="email" value="<?php 
								 $cname = $user['id'];
								 
								 $sqll= "SELECT * FROM user_profile WHERE id='$cname'"; 
                                            $sql = $this->db->query($sqll);
                                            $query= $sql->result();
                                            if(isset($query[0]->email)) {
                                                echo $query[0]->email;
                                            }
						   ?>">
						   
						   <input type="hidden" name="phone" value="<?php 
								 $cname = $user['id'];
								 
								 $sqll= "SELECT * FROM user_profile WHERE id='$cname'"; 
                                            $sql = $this->db->query($sqll);
                                            $query= $sql->result();
                                            if(isset($query[0]->phone)) {
                                                echo $query[0]->phone;
                                            }
						   ?>">
						   
					   <input type="hidden" name="password" value="<?php 
								 $cname = $user['id'];
								 
								 $sqll= "SELECT * FROM user_profile WHERE id='$cname'"; 
                                            $sql = $this->db->query($sqll);
                                            $query= $sql->result();
                                            if(isset($query[0]->password)) {
                                                echo $query[0]->password;
                                            }
						   ?>">
						   
						      <input type="hidden" name="roll" value="<?php 
								 $cname = $user['id'];
								 
								 $sqll= "SELECT * FROM user_profile WHERE id='$cname'"; 
                                            $sql = $this->db->query($sqll);
                                            $query= $sql->result();
                                            if(isset($query[0]->id)) {
                                                echo $query[0]->id;
                                            }
						   ?>">
						   
						       <input type="hidden" name="password" value="<?php 
								 $cname = $user['id'];
								 
								 $sqll= "SELECT * FROM user_profile WHERE id='$cname'"; 
                                            $sql = $this->db->query($sqll);
                                            $query= $sql->result();
                                            if(isset($query[0]->password)) {
                                                $pass =  $query[0]->password;
                                                echo hash('sha512',$pass.'5c6dc1753ae52c7665d5007b003e6857');
												
												
                                            }
						   ?>">
						   
						   
					
					
					
					<input type="submit" value="Back to Home" class="btn btn-primary">
					</form>
        		</div>
        	</div>
            
         </div> 
        <div class="col-md-2"></div>
    </div>
    </div>
    </div>
	<!-- Footer -->
	
	