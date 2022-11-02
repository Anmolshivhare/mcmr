<?php ini_set('display_errors', 0); 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User');
        $this->load->model('Adminmodel');
    }
    
    /*
     * User account information
     */
    public function account(){

    $data = array();
    if($this->session->userdata('isUserLoggedIn')){
    $data['user'] = $this->User->getRows(array('id'=>$this->session->userdata('userId')));
	$this->load->view('front/header',$data);
 	//$data['tour_booking']=$this->Adminmodel->select('tour_booking');
 	//$data['hotel_booking']=$this->Adminmodel->select('hotel_booking');
    $this->load->view('users/account', $data);
	$this->load->view('front/footer');
     }else{
            redirect('users/login');
    }
    }
  
   
    public function login(){
		$this->load->view('front/header');
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
		
        if($this->input->post('loginSubmit')){
			
			//print_r($_POST);die;
			
		
			 
           // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
				
				
                $con['returnType'] = 'single';
				//	print_r($this->input->post('email'));die;	
                $con['conditions'] = array(
                    //'email'=>$this->input->post('email'),
                   'phone'=>$this->input->post('username'),
                    'password' => $this->input->post('password'),
                   // 'password' => md5($this->input->post('password')),
                    'status' => '1'
					
                );
			
                $checkLogin = $this->User->getRows($con);
					//print_r($checkLogin);die;
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                   // redirect('users/account/');
                   redirect(base_url());
                }else{
					
					   $con['returnType'] = 'single';
                 $con['conditions'] = array(
                   'email'=>$this->input->post('username'),
                //   'phone'=>$this->input->post('phone'),
                    'password' => $this->input->post('password'),
                   // 'password' => md5($this->input->post('password')),
                    'status' => '1'
					
                );
			
                $checkLogin = $this->User->getRows($con);
					//print_r($checkLogin);die;
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                   // redirect('users/account/');
                   redirect(base_url());
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
					
					
                     
                }
            }
			
	 
			
		 
			
			
        }
        //load the view
        $this->load->view('users/login', $data);
		$this->load->view('front/footer');
    }
    
    /*
     * User registration
     */
    public function registration(){
		$this->load->view('front/header');
        $data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
			 $this->form_validation->set_rules('phone', 'phone', 'required|callback_phone_check');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => strip_tags($this->input->post('password')),
                'phone' => strip_tags($this->input->post('phone')),
                'city' => strip_tags($this->input->post('city')),
                'status' => '0'
            );

            if($this->form_validation->run() == true){
				
                $insert = $this->User->insert($userData);
				
				
				
            if($insert){	
			$phone = $this->input->post('phone');
			//$otp = (rand(1000,10000));
			$otp = '1234';
			$data1['otp'] = $otp;
            $this->db->where('phone',$this->input->post('phone'));
            $this->db->update('user_profile', $data1);
			$data['msg'] = "Mobile varified successfully";
        
			
			$this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
		$adminmsg = 'New Registration with Holy Tripadvisorbr>';
 		 $adminmsg =' <html> <body style="padding:10px; margin:10px;background: #fce4e4;font-size: 15px;font-family: Verdana,Arial,Helvetica,sans-serif;">   
       </body>
       </html>';
	  
		$adminmsg.= '<table>';
 		$adminmsg.= '<tr><td><b>name</b></td> <td>:</td><td>'.$_POST['name'].' </td> </tr>';
 		$adminmsg.= '<tr><td><b>Email</b></td> <td>:</td><td>'.$_POST['email'].' </td> </tr>';
 		$adminmsg.= '<tr><td><b>Phone</b></td> <td>:</td><td>'.$_POST['phone'].' </td> </tr>';
 		//$adminmsg.= '<tr><td><b>state</b></td> <td>:</td><td>'.$_POST['state'].' </td> </tr>';
 		$adminmsg.= '<tr><td><b>city</b></td> <td>:</td><td>'.$_POST['city'].' </td> </tr>';
 			  
 		$adminmsg.= '<tr><td><b>Client IP</b></td> <td>:</td><td>'.$_SERVER['REMOTE_ADDR'].' </td> </tr></table>';
		$adminmsg.= ' <hr><table>
		<tr><td>Thanks & Regards</td></tr>
		<tr><td><img src="https://holytripadvisor.com/front_assets/main-logo.png" width="150"></td></tr>
				
				 <tr><td><p>Email : holytripadvisor@gmail.com</p></td></tr>
				 <tr><td><p>Phone : +91-8630658592</p></td></tr> 
				 </table>'; 
  
	 
		$msg = 'Registration in Holytripadvisor <br>';
 		 $msg =' <html> <body style="padding:10px; margin:10px;font-size: 14px;font-family: Verdana,Arial,Helvetica,sans-serif;"> 
         <p>Hello <b> '.$_POST['name'].'</b>,</p>
		 <p style="padding: 4px; color: #000;"><strong> Greetings from Holy Tripadvisor, we really appreciate your effort to registered with us  <a href="www.holytripadvisor.com" target="_blank">www.holytripadvisor.com</a> </strong></p>
		 <p>User name <b> '.$_POST['email'].'</b>,</p>
		 <p>password <b> '.$_POST['password'].'</b>,</p>
         <p>If you have any problem regarding registration please share the query with us at any below given contact information</p>
		 <p>Email : holytripadvisor@gmail.com</p>
		 <p>Phone : +91-8630658592</p>
		 
       </body>
     </html>';
 
		$msg.= ' <hr><table>
		<tr><td>Thanks & Regards</td></tr>
		<tr><td><img src="https://holytripadvisor.com/front_assets/main-logo.png" width="150"></td></tr>
				
				 <tr><td><p style="margin:0;">Email : holytripadvisor@gmail.com</p></td></tr>
				 <tr><td><p style="margin:0;">Phone : +91-9911753333</p></td></tr>
				 </table>';
				 
	 
		 
		$adminemail = 'holytripadvisor@gmail.com';  
		$clientmail = $_POST['email'];  		
		$this->Adminmodel->send_mail($adminemail,'New Registration from website',$adminmsg);
		$this->Adminmodel->send_mail($clientmail,'Thanks for registration',$msg);
		$this->session->set_flashdata('msg', 'Thanks for registered with us.');
		
		
		
                    //redirect('users/login/');
					 redirect(base_url()."users/varifyotp/".$phone);
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['user'] = $userData;
        $this->load->view('users/registration', $data);
		$this->load->view('front/footer');
    }
    
    
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('users/login/');
    }
	
	
	 
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->User->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
	
	   public function phone_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('phone'=>$str);
        $checkEmail = $this->User->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('phone_check', 'This Phone number already Register with Us, Please login or forgot password');
            return FALSE;
        } else {
            return TRUE;
        }
    }
	
	
	 	public function save_profile($id){
		
         if (!empty ($_POST)) {
            $data = array(
			 'name'=> $this->input->post('name'),
			 'last_name'=> $this->input->post('last_name'),
			 'phone'=> $this->input->post('phone'),
			 'email'=> $this->input->post('email'),
             'dob'=> $this->input->post('dob'),
             'father_name'=> $this->input->post('father_name'),
             'mother_name'=> $this->input->post('mother_name'),
             'address'=> $this->input->post('address'),
             'state'=> $this->input->post('state'),
             'city'=> $this->input->post('city'),
            );
			
			     if(!empty($_FILES)){
                $uploadPath = 'user_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('image')){
                    $error = $this->upload->display_errors();
                    if(!empty($error)){
                        echo $error;
                        die;
                    }
                    $fileData = $this->upload->data();
                   $data['image'] = $fileData['file_name'];
                }
            }
            $con=array("id" => $id);
            $this->Adminmodel->update("user_profile", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('user_profile',['id'=>$id]);    
 	    redirect("users/account");	

    }
	
	  
	
	public function save_payment($id){
		 
         if (!empty ($_POST)) {
            $data = array(
			 'txnid'=> $this->input->post('txnid'),
			 'productinfo'=> $this->input->post('productinfo'),
			 'bank_ref_num'=> $this->input->post('bank_ref_num'),
             'bankcode'=> $this->input->post('bankcode'),
             'payuMoneyId'=> $this->input->post('payuMoneyId'),
             'paymentId'=> $this->input->post('paymentId'),
             'error'=> $this->input->post('error'),
             'mihpayid'=> $this->input->post('mihpayid'),
             'txnMessage'=> $this->input->post('txnMessage'),
             'mode'=> $this->input->post('mode'),
             'amount'=> $this->input->post('amount'),
             'addedon'=> $this->input->post('addedon'),
             'error_Message'=> $this->input->post('error_Message'),
             'payment'=> $this->input->post('payment'),
             'package_id'=> $this->input->post('package_id'),
             'plan_expire'=> $this->input->post('plan_expire'),
             'referal_code'=> $this->input->post('referal_code'),
             'refered_by'=> $this->input->post('refered_by'),
             'registerNO'=> $this->input->post('registerNO'),
            );
          
            $con=array("id" => $id);
            $this->Adminmodel->update("user_profile", $data, $con);
        }
			
		 
		
        
 	    redirect("users/account");	

    }
	
	

	

	
	
	
  public function varifyotp($phone){
		$this->load->view('front/header');
		
        if($this->input->post('varifySubmit')){
		 	
			$this->form_validation->set_rules('otp', 'otp', 'required');
				   // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(                  
                   'phone'=>$this->input->post('phone'),
                   'otp' => $this->input->post('otp'),
                   'status' => '0'
					
                );
			
                $checkLogin = $this->User->getRows($con);
					 //print_r($checkLogin);die;
                if($checkLogin){
					
				  $data = array(
				'status'=> '1',
					);
          
            $con=array("phone" => $phone);
            $this->Adminmodel->update("user_profile", $data, $con);
                   
                    redirect('users/login');
                }else{
                    $data['error_msg'] = 'Wrong  otp, please try again.';
                }
        
			}
		
        }
       //print_r($phone);
        $this->load->view('users/varifyuser', $phone);
		$this->load->view('front/footer');
    }
    
    
	
	
//	https://www.proactivesms.in/sendsms.jsp?user=vedantg&password=1fe596eb75XX&senderid=VEDANT&mobiles=+919759779144&sms=test%20sms
	public function forget_password()
	
        {   	
		$this->load->view('front/header');
       if(!empty($_POST)){
		   
          $tbl="user_profile";
		  $phone = $this->input->post('phone');
          $data=array(
           
          'phone'=> $phone,
         
          );
          $row=$this->Adminmodel->select('user_profile',$data);
           if(count($row)>0)
           {
            $password = (rand(1000,10000));
			//print_r($password);
			//$data1['password'] = sha1($password);
			$data1['password'] = $password;
			 //	print_r($data1);
            $this->db->where('phone',$this->input->post('phone'));
            $this->db->update('user_profile', $data1);
			$data['msg'] = "password update successfully, Please check sms and login with otp";
          // echo json_encode(array('error'=>'false', 'msg'=>'password update successfully'));
			
		
			
			$str=$this->Adminmodel->callAPI('GET','https://www.proactivesms.in/sendsms.jsp?user=vedantg&password=1fe596eb75XX&senderid=AFTEPL&mobiles='.$phone.'&sms=This%20is%20your%20new%20password.%20Please%20enter%20this%20as%20Password%20'.$password, false);
			
			redirect('users/login');
           }
		   
		   else
		   {
        // echo json_encode(array('error'=>'true', 'msg'=>'Your number is not registered....Please Enter a valid number.'));
		$data['msg'] = "Your number is not registered....Please Enter a valid number.";
          }
      }
	 
	// print_r($data['msg']);
			 
		  $this->load->view('users/forget_password', $data);
	      
			$this->load->view('front/footer');
	  
        }
		
		
 	public function forget_otp()
	
        {   	
		$this->load->view('front/header');
       if(!empty($_POST)){
		   
          $tbl="user_profile";
		  $phone = $this->input->post('phone');
          $data=array(
           
          'phone'=> $phone,
         
          );
          $row=$this->Adminmodel->select('user_profile',$data);
           if(count($row)>0)
           {
            $otp = (rand(1000,10000));
			//print_r($password);
			//$data1['password'] = sha1($password);
			$data1['otp'] = $otp;
			 //	print_r($data1);
            $this->db->where('phone',$this->input->post('phone'));
            $this->db->update('user_profile', $data1);
			$data['msg'] = "password update successfully, Please check sms and login with otp";
          // echo json_encode(array('error'=>'false', 'msg'=>'password update successfully'));
			
		
			
			$str=$this->Adminmodel->callAPI('GET','https://www.proactivesms.in/sendsms.jsp?user=vedantg&password=1fe596eb75XX&senderid=AFTEPL&mobiles='.$phone.'&sms=Dear%20Student%20Your%20Verification%20Code%20Is%20'.$otp.'.%20Enter%20Your%20Verification%20Code%20to%20Verify%20Your%20Contact%20Number%20From%20Afte%20Institute', false);
			
			redirect(base_url()."users/varifyotp/".$phone);
           }
		   
		   else
		   {
        // echo json_encode(array('error'=>'true', 'msg'=>'Your number is not registered....Please Enter a valid number.'));
		$data['msg'] = "Your number is not registered....Please Enter a valid number.";
          }
      }
	 
	// print_r($data['msg']);
			 
		  $this->load->view('users/forget_otp', $data);
	      
			$this->load->view('front/footer');
	  
        }
  
	
	
	
}