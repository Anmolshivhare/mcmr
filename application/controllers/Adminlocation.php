<?php 

	ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminlocation extends CI_Controller {
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
        	$tbl="location";
        	$data=array(
              'city'=> $this->input->post('city'),
              'latitude'=> $this->input->post('latitude'),
              'longitude'=> $this->input->post('longitude'),
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
		   redirect("Adminlocation/index");
        }
        $data['message']='Data Insert Successfully';
        $data['title']='location';
		$this->load->view('back/location/add', $data);
		$this->load->view('back/footer');
		}
				
	  
	  public function index(){
      $this->checklogin();
	   $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
      $data['show']=$this->Adminmodel->select('location');
	//  print_r($data['show']);
	   $data['title']='location';
	  $this->load->view('back/location/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		  
 	 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("location",$con);
        $this->load->view('back/location/list', $data);
        redirect("adminlocation/index");
    }
			    
	  
	
	
	
	public function edit($id){
			  $this->checklogin();
        if (!empty ($_POST)) {
            $data = array(
		      'city'=> $this->input->post('city'),
              'latitude'=> $this->input->post('latitude'),
              'longitude'=> $this->input->post('longitude'),
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
            $this->Adminmodel->update("location", $data, $con);
			redirect("adminlocation/index");
        }
        $data['update']=$this->Adminmodel->select('location',['id'=>$id]);    
         $data['admin'] = $this->session->all_userdata() ;
	     $this->load->view('back/header',  $data);
		$data['title']='location';
        $this->load->view('back/location/edit',$data);
        $this->load->view('back/footer');

    }
	
	
												
	
    

}
 