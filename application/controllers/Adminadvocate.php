<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminadvocate extends CI_Controller {
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
       
            $this->load->view('back/header');
             if(!empty($_POST)){
              
            	$tbl="advocate";
            	$data=array(
                   'city_id'=> $this->input->post('city_id'),          
                   'cat_id'=> $this->input->post('cat_id'),          
                   'des_id'=> $this->input->post('des_id'),          
                   'reg_no'=> $this->input->post('reg_no'),            
                  'cop_no'=> $this->input->post('cop_no'),          
                  'adv_bac_no'=> $this->input->post('adv_bac_no'),          
                  'adv_name'=> $this->input->post('adv_name'),          
                  'adv_eng_name'=> $this->input->post('adv_eng_name'),          
                  'adv_f_name'=> $this->input->post('adv_f_name'),          
                  'adv_eng_f_name'=> $this->input->post('adv_eng_f_name'),          
                  'adv_dob'=> $this->input->post('adv_dob'),          
                  'adv_sf'=> $this->input->post('adv_sf'),          
                  'adv_cf'=> $this->input->post('adv_cf'),          
                  'adv_gen'=> $this->input->post('adv_gen'),          
                  'adv_blood_group'=> $this->input->post('adv_blood_group'),          
                  'adv_add'=> $this->input->post('adv_add'),          
                  'adv_pin'=> $this->input->post('adv_pin'),          
                  'adv_rep_add'=> $this->input->post('adv_rep_add'),          
                  'adv_rep_pin'=> $this->input->post('adv_rep_pin'),          
                  'adv_phone'=> $this->input->post('adv_phone'),          
                  'adv_whatapp_no'=> $this->input->post('adv_whatapp_no'),          
                  'adv_email'=> $this->input->post('adv_email'),          
                  'adv_area'=> $this->input->post('adv_area'),
                  'a_designation'=> $this->input->post('a_designation'),          
                    'a_workplace'=> $this->input->post('a_workplace'),              
                    'a_prectice'=> $this->input->post('a_prectice'), 
                   'status'=> $this->input->post('status'),          
                  'createdate'=> date("Y-m-d H:i:s"),         
                   
            	);

               if(!empty($_FILES)){
                        
                  $uploadPath = 'upload_images/';
                $config['encrypt_name'] = TRUE; 
                  $config['upload_path'] = $uploadPath;
                   $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);
                  if($this->upload->do_upload('adv_img')){
                      $error = $this->upload->display_errors();
                      if(!empty($error)){
  
                          echo $error;
                          die;
                      }
                      $fileData = $this->upload->data();
                      
                      $data['adv_img'] = $fileData['file_name'];
                  }
              } 
               
                 
            
                 
    
              $this->Adminmodel->insert($tbl, $data);
              // $data['msg']='Data Insert Successfully';
              
               $this->session->set_flashdata('msg', 'Data Insert Successfully');
               redirect("adminadvocate/list");
            }
            $this->load->view('back/advocate/add');
            $this->load->view('back/footer');
            }
				
                
	  public function list(){
      $this->checklogin();
	   
	  $this->load->view('back/header' );

      $data['viewadvocate'] = $this->Adminmodel->select('advocate','',0,'desc');

	  $this->load->view('back/advocate/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("advocate",$con);
        $this->load->view('back/advocate/list', $data);
        redirect("adminadvocate/list");
    }
   
    public function edit($id){
      $this->checklogin();
     
      
 
 
  
   if (!empty($_POST)) {
      
         $data = array(

            'reg_no'=> $this->input->post('reg_no'),          
            'city_id'=> $this->input->post('city_id'),          
            'cat_id'=> $this->input->post('cat_id'),          
            'des_id'=> $this->input->post('des_id'),          
            'cop_no'=> $this->input->post('cop_no'),          
            'adv_bac_no'=> $this->input->post('adv_bac_no'),          
            'adv_name'=> $this->input->post('adv_name'),                   
            'adv_eng_name'=> $this->input->post('adv_eng_name'),          
            'adv_f_name'=> $this->input->post('adv_f_name'),          
            'adv_eng_f_name'=> $this->input->post('adv_eng_f_name'),          
            'adv_dob'=> $this->input->post('adv_dob'),  
            'adv_sf'=> $this->input->post('adv_sf'),          
            'adv_cf'=> $this->input->post('adv_cf'),        
            'adv_gen'=> $this->input->post('adv_gen'),          
            'adv_blood_group'=> $this->input->post('adv_blood_group'),          
            'adv_add'=> $this->input->post('adv_add'),          
            'adv_blood_group'=> $this->input->post('adv_blood_group'),          
            'adv_pin'=> $this->input->post('adv_pin'),          
            'adv_rep_add'=> $this->input->post('adv_rep_add'),          
            'adv_pin'=> $this->input->post('adv_pin'),          
            'adv_rep_pin'=> $this->input->post('adv_rep_pin'),          
            'adv_phone'=> $this->input->post('adv_phone'),          
            'adv_whatapp_no'=> $this->input->post('adv_whatapp_no'),          
            'adv_email'=> $this->input->post('adv_email'),          
            'adv_area'=> $this->input->post('adv_area'),
            'a_designation'=> $this->input->post('a_designation'),          
            'a_workplace'=> $this->input->post('a_workplace'),              
            'a_prectice'=> $this->input->post('a_prectice'), 
            'status'=> $this->input->post('status'),          
           // 'createdate'=> date("Y-m-d H:i:s"),  
                     
      
       );
        
       if(!empty($_FILES)){
           $uploadPath = 'upload_images/';
       $config['encrypt_name'] = TRUE; 
           $config['upload_path'] = $uploadPath;
             $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
           $this->load->library('upload', $config);
           $this->upload->initialize($config);
           if($this->upload->do_upload('adv_img')){
               $error = $this->upload->display_errors();
               if(!empty($error)){

                   echo $error;
                   die;
               }
               $fileData = $this->upload->data();
               $data['adv_img'] = $fileData['file_name'];
          
           }
       
       }
    
       $con=array("id" => $id);

       $this->Adminmodel->update("advocate", $data, $con);

     redirect("adminadvocate/list");
   }

    $data['update']=$this->Adminmodel->select('advocate',['id'=>$id]); 
     
   $data['admin'] = $this->session->all_userdata() ;
  $this->load->view('back/header',  $data);

   $this->load->view('back/advocate/edit',$data);
 
   $this->load->view('back/footer');

}

   

			    
	  
	  
	

	
 
    

}