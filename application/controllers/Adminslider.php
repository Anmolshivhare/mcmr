<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminslider extends CI_Controller {
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
                 
            	$tbl="slider";
            	$data=array(

                  'city_id'=> $this->input->post('city_id'),          
                  'slide_heading'=> $this->input->post('slide_heading'),          
                  'slide_heading_2'=> $this->input->post('slide_heading_2'),          
                  'slide_link'=> $this->input->post('slide_link'),          
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
                    if($this->upload->do_upload('slide_img')){
                        $error = $this->upload->display_errors();
                        if(!empty($error)){
    
                            echo $error;
                            die;
                        }
                        $fileData = $this->upload->data();
                        
                        $data['slide_img'] = $fileData['file_name'];
                    }
                } 
                 
    
              $this->Adminmodel->insert($tbl, $data);
              // $data['msg']='Data Insert Successfully';
              
               $this->session->set_flashdata('msg', 'Data Insert Successfully');
               redirect("adminslider/list");
            }
            $this->load->view('back/slider/add');
            $this->load->view('back/footer');
            }
				


	  public function list(){
      $this->checklogin();
	   
	  $this->load->view('back/header' );

      $data['viewslider'] = $this->Adminmodel->select('slider','',0,'desc');

	  $this->load->view('back/slider/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("slider",$con);
        $this->load->view('back/slider/list', $data);
        redirect("adminslider/list");
    }
			    
	  
	
	
	
	public function edit($id){
			  $this->checklogin();
            //   print_r($_FILES);die;
			  
		
		
	 	
        if (!empty($_POST)) {
              $data = array(
                  'city_id'=> $this->input->post('city_id'),       
                  'slide_heading'=> $this->input->post('slide_heading'),          
                  'slide_heading_2'=> $this->input->post('slide_heading_2'),          
                  'slide_link'=> $this->input->post('slide_link'),          
                  'status'=> $this->input->post('status'),          
                  'createdate'=> date("Y-m-d H:i:s"),    
			  
            );
			//print_r($data); die;
            if(!empty($_FILES)){
                $uploadPath = 'upload_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('slide_img')){
                    $error = $this->upload->display_errors();
                    if(!empty($error)){

                        echo $error;
                        die;
                    }
                    $fileData = $this->upload->data();
                    $data['slide_img'] = $fileData['file_name'];
					
                }
				
            }
			
            $con=array("id" => $id);

            $this->Adminmodel->update("slider", $data, $con);

			 redirect("adminslider/list");
        }

         $data['update']=$this->Adminmodel->select('slider',['id'=>$id]); 
          
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
	 
        $this->load->view('back/slider/edit',$data);
		
        $this->load->view('back/footer');

    }
	
	
 
    

}
 