<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminevent extends CI_Controller {
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
       // print_r($_FILES); die;
            $this->load->view('back/header');
            //print_r($_FILES);die;
        
             if(!empty($_POST)){
            	
            	$tbl="event";
            	$data=array(
            	  'city_id'=> $this->input->post('city_id'),
                  'e_name'=> $this->input->post('e_name'),          
                  'e_date'=> $this->input->post('e_date'),          
                  'e_orgniser'=> $this->input->post('e_orgniser'),          
                  'e_venue'=> $this->input->post('e_venue'),          
                  'e_detail'=> $this->input->post('e_detail'),          
                  'feature'=> $this->input->post('feature'),          
                          
                            
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
                    if($this->upload->do_upload('e_img')){
                        $error = $this->upload->display_errors();
                        if(!empty($error)){
    
                            echo $error;
                            die;
                        }
                        $fileData = $this->upload->data();
                        
                        $data['e_img'] = $fileData['file_name'];
                    }
                } 

            	if(!empty($_FILES)){
                        
                    $uploadPath = 'upload_file/';
            		$config['encrypt_name'] = TRUE; 
                    $config['upload_path'] = $uploadPath;
                     $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if($this->upload->do_upload('event_pdf')){
                        $error = $this->upload->display_errors();
                        if(!empty($error)){
    
                            echo $error;
                            die;
                        }
                        $fileData = $this->upload->data();
                        
                        $data['event_pdf'] = $fileData['file_name'];
                    }
                } 
                 
    
              $this->Adminmodel->insert($tbl, $data);
              // $data['msg']='Data Insert Successfully';
              
               $this->session->set_flashdata('msg', 'Data Insert Successfully');
               redirect("adminevent/list");
            }
            $this->load->view('back/event/add');
            $this->load->view('back/footer');
            }
				


	  public function list(){
      $this->checklogin();
	   
	  $this->load->view('back/header' );

      $data['viewevent'] = $this->Adminmodel->select('event','',0,'desc');

	  $this->load->view('back/event/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("event",$con);
        $this->load->view('back/event/list', $data);
        redirect("adminevent/list");
    }
			    
	  
	
	
	
	public function edit($id){
			  $this->checklogin(); 	
        if (!empty($_POST)) {
              $data = array(
                'city_id'=> $this->input->post('city_id'),
                'e_name'=> $this->input->post('e_name'),          
                'e_date'=> $this->input->post('e_date'),          
                'e_orgniser'=> $this->input->post('e_orgniser'),          
                'e_venue'=> $this->input->post('e_venue'),          
                'e_detail'=> $this->input->post('e_detail'),          
                'feature'=> $this->input->post('feature'),          
                      
                'status'=> $this->input->post('status'),          
               // 'createdate'=> date("Y-m-d H:i:s"),   
			  
            );
			//print_r($data); die;
            if(!empty($_FILES)){
                $uploadPath = 'upload_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('e_img')){
                    $error = $this->upload->display_errors();
                    if(!empty($error)){

                        echo $error;
                        die;
                    }
                    $fileData = $this->upload->data();
                    $data['e_img'] = $fileData['file_name'];
					
                }
				
            }
           
            if(!empty($_FILES)){
                $uploadPath = 'upload_file/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('event_pdf')){
                    $error = $this->upload->display_errors();
                    if(!empty($error)){

                        echo $error;
                        die;
                    }
                    $fileData = $this->upload->data();
                    $data['event_pdf'] = $fileData['file_name'];
					
                }
				
            }
			
            $con=array("id" => $id);

            $this->Adminmodel->update("event", $data, $con);

			 redirect("adminevent/list");
        }

         $data['update']=$this->Adminmodel->select('event',['id'=>$id]); 
          
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
	 
        $this->load->view('back/event/edit',$data);
		
        $this->load->view('back/footer');

    }
	
	
 
    

}
 