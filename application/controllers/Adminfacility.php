<?php 
	ini_set('display_errors',0);
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Adminfacility extends CI_Controller {
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
        	$tbl="facility";
        	$data=array(
              'title'=> $this->input->post('title'),
              
              'status'=> $this->input->post('status'),
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
                    $data['image'] = $fileData['file_name'];
                }

            }


          $this->Adminmodel->insert($tbl, $data);
		  $this->session->set_flashdata('msg', 'Data Insert Successfully');
		   redirect("adminfacility/index");
        }
        $data['message']='Data Insert Successfully';
        $data['title']='facility';
		$this->load->view('back/facility/add', $data);
		$this->load->view('back/footer');
		}
				
	  
	  public function index(){
      $this->checklogin();
	   $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
      $data['show']=$this->Adminmodel->select('facility');
	   $data['title']='facility';
	  $this->load->view('back/facility/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		  
 	 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("facility",$con);
        $this->load->view('back/facility/list', $data);
        redirect("adminfacility/index");
    }
			    
	  
	
	
	
	public function edit($id){
			  $this->checklogin();
        if (!empty ($_POST)) {
            $data = array(
		      'title'=> $this->input->post('title'),
        
              'status'=> $this->input->post('status'),
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
                    $data['image'] = $fileData['file_name'];
                }
            }
            $con=array("id" => $id);
            $this->Adminmodel->update("facility", $data, $con);
			redirect("adminfacility/index");
        }
        $data['update']=$this->Adminmodel->select('facility',['id'=>$id]);    
         $data['admin'] = $this->session->all_userdata() ;
	     $this->load->view('back/header',  $data);
		$data['title']='facility';
        $this->load->view('back/facility/edit',$data);
        $this->load->view('back/footer');

    }
	
	
												
	
    

}
 