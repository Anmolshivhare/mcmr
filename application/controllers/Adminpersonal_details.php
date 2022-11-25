<?php ini_set('display_errors',1);
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminpersonal_details extends CI_Controller {
	function __construct()  {
		parent::__construct();
		$this->load->model('Adminmodel');
		date_default_timezone_set("Asia/Kolkata");
		}
		 
	 private function checklogin(){ 
     if(empty($this->session->userdata('data')))
     {
        redirect(base_url().'Admin/index');
     } 
  
  } 
  
      public function add(){
        //print_r($_POST);die;
            $this->load->view('back/header');
             if(!empty($_POST)){
 
             	$tbl="users";
            	$data=array(
                  'first_name'=> $this->input->post('first_name'),          
                  'last_name'=> $this->input->post('last_name'),          
                  'email'=> $this->input->post('email'),          
                  'password'=> $this->input->post('password'),          
                  'gender'=> $this->input->post('gender'),          
                  'phone'=> $this->input->post('phone'),            
                  'u_des'=> $this->input->post('u_des'),          
                  'u_f_name'=> $this->input->post('u_f_name'),          
                  'u_dob'=> $this->input->post('u_dob'),          
                  'u_phone'=> $this->input->post('u_phone'),          
                  'u_f_resident'=> $this->input->post('u_f_resident'),          
                  'u_landmark'=> $this->input->post('u_landmark'),          
                  'u_pincode'=> $this->input->post('u_pincode'),          
                  'u_blood'=> $this->input->post('u_blood'),          
                  'u_socialwork'=> $this->input->post('u_socialwork'),          
                  'u_mitra_card'=> $this->input->post('u_mitra_card'),          
                  'service_name'=> $this->input->post('service_name'),          
                  'time'=> $this->input->post('time'),          
                  'weekly_off'=> $this->input->post('weekly_off'),          
                  'service_add'=> $this->input->post('service_add'),          
                  'full_add'=> $this->input->post('full_add'),          
                  'b_phone'=> $this->input->post('b_phone'),          
                  'owner_name'=> $this->input->post('owner_name'),          
                  'status'=> $this->input->post('status'),          
                  'created'=> date("Y-m-d H:i:s"),         
                   
            	);

               if(!empty($_FILES)){
                        
                  $uploadPath = 'upload_images/';
                  $config['encrypt_name'] = TRUE; 
                  $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);
                  if($this->upload->do_upload('u_photo')){
                      $error = $this->upload->display_errors();
                      if(!empty($error)){
  
                          echo $error;
                          die;
                      }
                      $fileData = $this->upload->data();
                      
                      $data['u_photo'] = $fileData['file_name'];
                  }
              } 
               
                 
            
                 
    
              $this->Adminmodel->insert($tbl, $data);
              // $data['msg']='Data Insert Successfully';
              
               $this->session->set_flashdata('msg', 'Data Insert Successfully');
               redirect("adminpersonal_details/list");
            }
            $this->load->view('back/personal_details/add');
            $this->load->view('back/footer');
            }
				
                
	  public function list(){
      $this->checklogin();
	   
	  $this->load->view('back/header' );

      $data['viewpersonal_details'] = $this->Adminmodel->selected('users','',0,'desc');

	  $this->load->view('back/personal_details/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("users",$con);
        $this->load->view('back/personal_details/list', $data);
        redirect("adminpersonal_details/list");
    }
   
    public function edit($id){
     // $this->checklogin();
     
   if (!empty($_POST)) {
      
      $data=array(
            'first_name'=> $this->input->post('first_name'),          
            'last_name'=> $this->input->post('last_name'),          
            'email'=> $this->input->post('email'),          
            'password'=> $this->input->post('password'),          
            'gender'=> $this->input->post('gender'),          
            'phone'=> $this->input->post('phone'),            
            'u_des'=> $this->input->post('u_des'),          
            'u_f_name'=> $this->input->post('u_f_name'),          
            'u_dob'=> $this->input->post('u_dob'),          
            'u_phone'=> $this->input->post('u_phone'),          
            'u_f_resident'=> $this->input->post('u_f_resident'),          
            'u_landmark'=> $this->input->post('u_landmark'),          
            'u_pincode'=> $this->input->post('u_pincode'),          
            'u_blood'=> $this->input->post('u_blood'),          
            'u_socialwork'=> $this->input->post('u_socialwork'),          
            'u_mitra_card'=> $this->input->post('u_mitra_card'),          
            'service_name'=> $this->input->post('service_name'),          
            'time'=> $this->input->post('time'),          
            'weekly_off'=> $this->input->post('weekly_off'),          
            'service_add'=> $this->input->post('service_add'),          
            'full_add'=> $this->input->post('full_add'),          
            'b_phone'=> $this->input->post('b_phone'),          
            'owner_name'=> $this->input->post('owner_name'),          
            'status'=> $this->input->post('status'),          
            'created'=> date("Y-m-d H:i:s"),         
            
        );
        
       if(!empty($_FILES)){
           $uploadPath = 'upload_images/';
           $config['encrypt_name'] = TRUE; 
           $config['upload_path'] = $uploadPath;
           $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
           $this->load->library('upload', $config);
           $this->upload->initialize($config);
           if($this->upload->do_upload('u_photo')){
               $error = $this->upload->display_errors();
               if(!empty($error)){

                   echo $error;
                   die;
               }
               $fileData = $this->upload->data();
               $data['u_photo'] = $fileData['file_name'];
          
           }
       
       }
    
       $con=array("id" => $id);

       $this->Adminmodel->update("users", $data, $con);

     redirect("adminpersonal_details/list");
   }

    $data['update']=$this->Adminmodel->select('users',['id'=>$id]); 
     
   $data['admin'] = $this->session->all_userdata();
  $this->load->view('back/header',  $data);

   $this->load->view('back/personal_details/edit',$data);
 
   $this->load->view('back/footer');

}


public function userupdate($id){
  // $this->checklogin();
  
      if (!empty($_POST)) {
                 $data=array(
                    'first_name'=> $this->input->post('first_name'),          
                    'last_name'=> $this->input->post('last_name'),          
                    'email'=> $this->input->post('email'),          
                    'password'=> $this->input->post('password'),          
                    'gender'=> $this->input->post('gender'),          
                    'phone'=> $this->input->post('phone'),            
                    'u_des'=> $this->input->post('u_des'),          
                    'u_f_name'=> $this->input->post('u_f_name'),          
                    'u_dob'=> $this->input->post('u_dob'),          
                    'u_phone'=> $this->input->post('u_phone'),          
                    'u_f_resident'=> $this->input->post('u_f_resident'),          
                    'u_landmark'=> $this->input->post('u_landmark'),          
                    'u_pincode'=> $this->input->post('u_pincode'),          
                    'u_blood'=> $this->input->post('u_blood'),          
                    'u_socialwork'=> $this->input->post('u_socialwork'),          
                    'u_mitra_card'=> $this->input->post('u_mitra_card'),          
                    'service_name'=> $this->input->post('service_name'),          
                    'time'=> $this->input->post('time'),          
                    'weekly_off'=> $this->input->post('weekly_off'),          
                    'service_add'=> $this->input->post('service_add'),          
                    'full_add'=> $this->input->post('full_add'),          
                    'b_phone'=> $this->input->post('b_phone'),          
                    'owner_name'=> $this->input->post('owner_name'),          
                    'status'=> $this->input->post('status'),          
                    'created'=> date("Y-m-d H:i:s"),         
          
                  );
     
    if(!empty($_FILES)){
        $uploadPath = 'upload_images/';
        $config['encrypt_name'] = TRUE; 
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('u_photo')){
            $error = $this->upload->display_errors();
            if(!empty($error)){

                echo $error;
                die;
            }
            $fileData = $this->upload->data();
            $data['u_photo'] = $fileData['file_name'];
       
        }
    
    }
 
    $con=array("id" => $id);

    $this->Adminmodel->update("users", $data, $con);

  redirect("users/account");
}
 
}
 
}