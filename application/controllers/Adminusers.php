<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminusers extends CI_Controller {
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
    			 
	 	
	  public function index(){
      $this->checklogin();
	   $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
      $data['show']=$this->Adminmodel->selectid('user_profile','',0,'desc');
	   $data['title']='user';
	  $this->load->view('back/users/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("user_profile",$con);
        $this->load->view('back/users/list', $data);
        redirect("Adminusers/index");
    }
			    
	 
	
	
	public function edit($id){
			  $this->checklogin();
			// print_r($_POST);die;
			  
		
		
	 	
        if (!empty($_POST)) {
		 
              $data = array(
			  
			 
              'name'=> $this->input->post('name'),
			  'phone'=> $this->input->post('phone'),
			  'email'=> $this->input->post('email'),
			  'password'=> $this->input->post('password'),
                'status'=> $this->input->post('status'),
            
			  
            );
			//print_r($data); die;
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
			 redirect("Adminusers/index");
        }
           $data['update']=$this->Adminmodel->select('user_profile',['id'=>$id]); 
          
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
		$data['title']='Edit User';
        $this->load->view('back/users/edit',$data);
		
        $this->load->view('back/footer');

    }
	
	
	 										
	
    

}
 