<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminservices extends CI_Controller {
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
		
		$this->checklogin();
		 $data['admin'] = $this->session->all_userdata() ;
	     $this->load->view('back/header',  $data);
		
		 if(!empty($_POST)){
			 
        	$tbl="services";
			
			 
        	$data=array(
		  
			 
              'title'=> $this->input->post('title'),
              
            //  'daycation'=> $e,
 			  //'address'=> $this->input->post('address'),
			  'description'=> $this->input->post('description'),
                'status'=> $this->input->post('status'),
              //'star'=> $this->input->post('star'),
               
             //  'feature'=> $this->input->post('feature'),
             
              //'policy'=> $this->input->post('policy'),
              
              'meta_description'=> $this->input->post('meta_description'),
              'meta_title'=> $this->input->post('meta_title'),
              'meta_keyword'=> $this->input->post('meta_keyword'),
              
                       
              'createdate' => date("Y-m-d H:i:s"),
        	);
			 
			if(!empty($_FILES)){
					
                $uploadPath = 'upload_images/';
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
                    $data['thumb_image'] = $fileData['file_name'];
                }
            } 
			 

          $this->Adminmodel->insert($tbl, $data);
		  // $data['msg']='Data Insert Successfully';
		  
		   $this->session->set_flashdata('msg', 'Data Insert Successfully');
		   redirect("Adminservices/index");
        }
       
        $data['title']='services';
		$this->load->view('back/services/add', $data);
		$this->load->view('back/footer');
		}
				
	  public function index(){
      $this->checklogin();
	   $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
      $data['show']=$this->Adminmodel->select('services','',0,'desc');
	   $data['title']='services';
	  $this->load->view('back/services/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("services",$con);
        $this->load->view('back/services/list', $data);
        redirect("Adminservices/index");
    }
			    
	   public function feature($id){
		//print_r('hi');die;
		// $this->checklogin();
        if (!empty ($_POST)) {
            $data = array(
		 
			  'feature'=> $this->input->post('feature'),
			   
			  //  'createdate' => date("Y-m-d H:i:s"),              // 'addedon' => date("Y-m-d H:i:s"),
            );
        
            $con=array("id" => $id);
            $this->Adminmodel->update("services", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('services',['id'=>$id]);    
      
	  redirect("Adminservices/index");

    }
	
	
	
	
	public function edit($id){
			  $this->checklogin();
			// print_r($_POST);die;
			  
		
		
	 	
        if (!empty($_POST)) {
			
		 
		
	 
		 
		  
		  
			 
              $data = array(
 			 
              'title'=> $this->input->post('title'),
              
            //  'daycation'=> $e,
 			  //'address'=> $this->input->post('address'),
			  'description'=> $this->input->post('description'),
                'status'=> $this->input->post('status'),
             // 'star'=> $this->input->post('star'),
             
              // 'feature'=> $this->input->post('feature'),
             
            
             // 'policy'=> $this->input->post('policy'),
              
               'meta_description'=> $this->input->post('meta_description'),
              'meta_title'=> $this->input->post('meta_title'),
              'meta_keyword'=> $this->input->post('meta_keyword'),
              
                       
              'createdate' => date("Y-m-d H:i:s"),
			  
            );
			//print_r($data); die;
            if(!empty($_FILES)){
                $uploadPath = 'upload_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('thumb_image')){
                    $error = $this->upload->display_errors();
                    if(!empty($error)){

                        echo $error;
                        die;
                    }
                    $fileData = $this->upload->data();
                    $data['thumb_image'] = $fileData['file_name'];
					
                }
				
            }
			
            $con=array("id" => $id);
            $this->Adminmodel->update("services", $data, $con);
			// redirect("Adminservices/index");
        }
           $data['update']=$this->Adminmodel->select('services',['id'=>$id]); 
          
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
		$data['title']='services';
        $this->load->view('back/services/edit',$data);
		
        $this->load->view('back/footer');

    }
	
	
	
 	 function fetch_vendordetail()
 {
  if($this->input->post('vendor'))
  {
   echo $this->Adminmodel->fetch_vendordetail($this->input->post('vendor'));
  }
 }
 											
	
    

}
 