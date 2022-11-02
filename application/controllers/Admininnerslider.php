<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Admininnerslider extends CI_Controller {
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
			 
        	$tbl="inner_slider";
			
			 
        	$data=array(
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
		  // $data['msg']='Data Insert Successfully';
		  
		   $this->session->set_flashdata('msg', 'Data Insert Successfully');
		   redirect("admininnerslider/index");
        }
       
        $data['title']='inner_slider';
		$this->load->view('back/inner_slider/add', $data);
		$this->load->view('back/footer');
		}
				
	  public function index(){
      $this->checklogin();
	   $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
      $data['show']=$this->Adminmodel->select('inner_slider','',0,'desc');
	   $data['title']='inner_slider';
	  $this->load->view('back/inner_slider/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("inner_slider",$con);
        $this->load->view('back/inner_slider/list', $data);
        redirect("admininnerslider/index");
    }
			    
	  
	
	
	
	public function edit($id){
			  $this->checklogin();
			// print_r($_POST);die;
			  
		
		
	 	
        if (!empty($_POST)) {
              $data = array(
 
             
                'status'=> $this->input->post('status'),
             
                       
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
            $this->Adminmodel->update("inner_slider", $data, $con);
			 redirect("admininnerslider/index");
        }
           $data['update']=$this->Adminmodel->select('inner_slider',['id'=>$id]); 
          
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
		$data['title']='inner_slider';
        $this->load->view('back/inner_slider/edit',$data);
		
        $this->load->view('back/footer');

    }
	
	
 
    

}
 