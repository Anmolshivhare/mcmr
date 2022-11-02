<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Admingallerycategory extends CI_Controller {
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
            //print_r($_FILES);die;
        
             if(!empty($_POST)){
                									
              
				
            	$tbl="gallerycategory";
            	$data=array(
                   'city_id'=> $this->input->post('city_id'),
                  'gc_name'=>$this->input->post('gc_name'),                    
                  'status'=>$this->input->post('status'),
                  'featured'=>$this->input->post('featured'),           
                  'createdate'=> date("Y-m-d H:i:s"), 
                        
                   
            	);
                 
            	if(!empty($_FILES)){
                        
                    $uploadPath = 'upload_images/';
            		$config['encrypt_name'] = TRUE; 
                    $config['upload_path'] = $uploadPath;
                     $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if($this->upload->do_upload('gc_img')){
                        $error = $this->upload->display_errors();
                        if(!empty($error)){
    
                            echo $error;
                            die;
                        }
                        $fileData = $this->upload->data();
                        
                        $data['gc_img'] = $fileData['file_name'];
                    }
                } 
                 
    
              $this->Adminmodel->insert($tbl, $data);
              // $data['msg']='Data Insert Successfully';
              
               $this->session->set_flashdata('msg', 'Data Insert Successfully');
               redirect("admingallerycategory/list");
            }
            $this->load->view('back/gallerycategory/add');
            $this->load->view('back/footer');
            }
				


	  public function list(){
      $this->checklogin();
	   
	  $this->load->view('back/header' );

      $data['viewgallerycategory'] = $this->Adminmodel->select('gallerycategory','',0,'desc');

	  $this->load->view('back/gallerycategory/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		 $con = array("id"=>$id);
         $data=$this->Adminmodel->delete("gallerycategory",$con);
        $this->load->view('back/gallerycategory/list', $data);
        redirect("admingallerycategory/list");
    }
			    
	  
	
	
	
	public function edit($id){
			  $this->checklogin();
             // print_r($_FILES);die;
			  
		
		
	 	
        if (!empty($_POST)) {
              $data = array(
                 'city_id'=> $this->input->post('city_id'),   
                'gc_name'=> $this->input->post('gc_name'),        
                'status'=> $this->input->post('status'),
                'featured'=>$this->input->post('featured'),           
                //'createdate'=> date("Y-m-d H:i:s"),   
			  
            );
			//print_r($data); die;
            if(!empty($_FILES)){
                $uploadPath = 'upload_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('gc_img')){
                    $error = $this->upload->display_errors();
                    if(!empty($error)){

                        echo $error;
                        die;
                    }
                    $fileData = $this->upload->data();
                    $data['gc_img'] = $fileData['file_name'];
					
                }
				
            }
			
            $con=array("id" => $id);

            $this->Adminmodel->update("gallerycategory", $data, $con);

			 redirect("admingallerycategory/list");
        }

         $data['update']=$this->Adminmodel->select('gallerycategory',['id'=>$id]); 
          
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
	 
        $this->load->view('back/gallerycategory/edit',$data);
		
        $this->load->view('back/footer');

    }
	
	
 
    

}
 