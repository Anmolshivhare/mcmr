<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Admindesignation extends CI_Controller {
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
                  
            
            	$tbl="designation";
            	$data=array(
                  'des_name'=> $this->input->post('des_name'),          
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
                    if($this->upload->do_upload('des_img')){
                        $error = $this->upload->display_errors();
                        if(!empty($error)){
    
                            echo $error;
                            die;
                        }
                        $fileData = $this->upload->data();
                        
                        $data['des_img'] = $fileData['file_name'];
                    }
                } 
                 
    
              $this->Adminmodel->insert($tbl, $data);
              // $data['msg']='Data Insert Successfully';
              
               $this->session->set_flashdata('msg', 'Data Insert Successfully');
               redirect("admindesignation/list");
            }
            $this->load->view('back/designation/add');
            $this->load->view('back/footer');
            }
				


	  public function list(){
      $this->checklogin();
	   
	  $this->load->view('back/header' );

      $data['viewcategory'] = $this->Adminmodel->select('designation','',0,'desc');

	  $this->load->view('back/designation/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    


	  public function delete($id){
		 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("designation",$con);
        $this->load->view('back/designation/list', $data);
        redirect("admindesignation/list");
    }
			    
	  
	
	
	
	public function edit($id){
			  $this->checklogin();
			// print_r($_POST);die;
			  
		
		
	 	
        if (!empty($_POST)) {
              $data = array(
 
                'des_name'=> $this->input->post('des_name'),          
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
                if($this->upload->do_upload('des_img')){
                    $error = $this->upload->display_errors();
                    if(!empty($error)){

                        echo $error;
                        die;
                    }
                    $fileData = $this->upload->data();
                    $data['des_img'] = $fileData['file_name'];
					
                }
				
            }
			
            $con=array("id" => $id);

            $this->Adminmodel->update("designation", $data, $con);

			 redirect("admindesignation/list");
        }

         $data['update']=$this->Adminmodel->select('designation',['id'=>$id]); 
          
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
	 
        $this->load->view('back/designation/edit',$data);
		
        $this->load->view('back/footer');

    }
	
	
 
    

}
 