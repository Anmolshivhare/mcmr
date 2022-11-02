<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminproduct extends CI_Controller {
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
			 
        	$tbl="product";
			
			//for multi images //
			$filesCount = count($_FILES['userFiles']['name']);
		// print_r($filesCount); die;
		$a=array();		
		for($i = 0; $i < $filesCount; $i++){	
		$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i]; 	
		$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];	
		$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];	
		$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];		
		$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];			
		$uploadPath = 'upload_images/';	
		$config['encrypt_name'] = TRUE; 		
		$config['upload_path'] = $uploadPath;		
		 $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';	
		$this->load->library('upload', $config);		
		$this->upload->initialize($config);		
		if($this->upload->do_upload('userFile')){	
		$error = $this->upload->display_errors();	
		if(!empty($error)){						
		echo $error;			
		die;					
		}					
		$fileData = $this->upload->data();  
		array_push($a,$fileData['file_name']);	
		}					
		}					
	     $b= json_encode($a,JSON_UNESCAPED_SLASHES);
 
 																									

        	$data=array(
			// 'facility'=> $f,
			  'gallery' => $b,
              'title'=> $this->input->post('title'),
			  'species'=> $this->input->post('species'),
			  'potency'=> $this->input->post('potency'),
			  'cost'=> $this->input->post('cost'),
                'cultivation_difficulty'=> $this->input->post('cultivation_difficulty'),
              'vibes'=> $this->input->post('vibes'),
              'recommended_dose'=> $this->input->post('recommended_dose'),
               'country_of_origin'=> $this->input->post('country_of_origin'),
              'strain_creator'=> $this->input->post('strain_creator'),
            
              'growing'=> $this->input->post('growing'),
              
               'where_to_buy_product_canada'=> $this->input->post('where_to_buy_product_canada'),
               'where_to_buy_product_usa'=> $this->input->post('where_to_buy_product_usa'),
               'where_to_buy_spores_canada'=> $this->input->post('where_to_buy_spores_canada'),
               'where_to_buy_spores_usa'=> $this->input->post('where_to_buy_spores_usa'),
               'user_strain_review'=> $this->input->post('user_strain_review'),
               'description'=> $this->input->post('description'),
               'helpline'=> $this->input->post('helpline'),
              
               'favourite'=> $this->input->post('favourite'),
               'popular'=> $this->input->post('popular'),
               'hot'=> $this->input->post('hot'),
               'rating'=> $this->input->post('rating'),
               'reviews'=> $this->input->post('reviews'),
              
                  'status'=> $this->input->post('status'),      
                  'experience'=> $this->input->post('experience'),      
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
		   $this->session->set_flashdata('msg', 'Data Insert Successfully');
		   redirect("Adminproduct/index");
        }
       
        $data['title']='product';
		$this->load->view('back/product/add', $data);
		$this->load->view('back/footer');
		}
				
	  public function index(){
      $this->checklogin();
	  $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
      $data['show']=$this->Adminmodel->selectstatus('product','',0,'desc');
	  $data['title']='product';
	  $this->load->view('back/product/list',$data);
	  $this->load->view('back/footer');
	  }
	  	    
	  public function delete($id){
		 
		  $data = array(
			  'status'=> '0'
            );
		
			
            $con=array("id" => $id);
            $this->Adminmodel->update("product", $data, $con);
         //$data=$this->Adminmodel->delete("product",$con);
        // $this->load->view('back/product/list', $data);
         redirect("Adminproduct/index");
    }
			    
	   public function feature($id){
		 $popular = $this->input->post('popular');
		  
		 $hot = $this->input->post('hot');
		 $favourite = $this->input->post('favourite');
        if (!empty ($_POST)) {
			 if($popular == '1' || $popular=='0' ) {
             $data = array(
			  'popular'=> $this->input->post('popular'),	    
            );
		
			
            $con=array("id" => $id);
            $this->Adminmodel->update("product", $data, $con);
			}

			
		if($hot == '1' || $hot=='0' ) {
			 
             $data = array(
			  'hot'=> $this->input->post('hot'),	    
            );
        
            $con=array("id" => $id);
            $this->Adminmodel->update("product", $data, $con);
			}
		if($favourite == '1' || $favourite=='0' ) {
             $data = array(
			  'favourite'=> $this->input->post('favourite'),	    
            );
        
            $con=array("id" => $id);
            $this->Adminmodel->update("product", $data, $con);
			}
		  redirect("Adminproduct/index");
		}
          
      
	 

    }
	
	
	
	
	public function edit($id){
			  $this->checklogin();
			// print_r($_POST);die;
			  
		
		
	 	//print_r($_FILES);die;
        if (!empty($_POST)) {
			
		$filesCount = count($_FILES['userFiles']['name']);
		$a=array();		
		for($i = 0; $i < $filesCount; $i++){	
		$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i]; 	
		$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];	
		$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];	
		$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];		
		$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];			
		$uploadPath = 'upload_images/';	
		$config['encrypt_name'] = TRUE; 		
		$config['upload_path'] = $uploadPath;		
		 $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';	
		$this->load->library('upload', $config);		
		$this->upload->initialize($config);		
		if($this->upload->do_upload('userFile')){	
		$error = $this->upload->display_errors();	
		if(!empty($error)){						
		echo $error;			
		die;					
		}					
		$fileData = $this->upload->data();  
		array_push($a,$fileData['file_name']);	
		}					
		}					
	
 	    $f= json_encode($this->input->post('facility'),JSON_UNESCAPED_SLASHES);
		
	 
		   $data1['update1']=$this->Adminmodel->select('product',['id'=>$id]); 
		   $b= json_encode($a,JSON_UNESCAPED_SLASHES); 	 
		  
			if($b=='[]'){ 
			$b = $data1['update1'][0]->gallery;
				
				 
				} else {
				   $b= json_encode($a,JSON_UNESCAPED_SLASHES); 	
					 	
				}
			// print_r($b);die;
              $data = array(
			 	'gallery' => $b,
              'title'=> $this->input->post('title'),
			  'species'=> $this->input->post('species'),
			  'potency'=> $this->input->post('potency'),
			  'cost'=> $this->input->post('cost'),
                'cultivation_difficulty'=> $this->input->post('cultivation_difficulty'),
              'vibes'=> $this->input->post('vibes'),
              'recommended_dose'=> $this->input->post('recommended_dose'),
               'country_of_origin'=> $this->input->post('country_of_origin'),
              'strain_creator'=> $this->input->post('strain_creator'),
            
              'growing'=> $this->input->post('growing'),
              
               'where_to_buy_product_canada'=> $this->input->post('where_to_buy_product_canada'),
               'where_to_buy_product_usa'=> $this->input->post('where_to_buy_product_usa'),
               'where_to_buy_spores_canada'=> $this->input->post('where_to_buy_spores_canada'),
               'where_to_buy_spores_usa'=> $this->input->post('where_to_buy_spores_usa'),
               'user_strain_review'=> $this->input->post('user_strain_review'),
               'description'=> $this->input->post('description'),
               'helpline'=> $this->input->post('helpline'),
			     'experience'=> $this->input->post('experience'),  
              
               'favourite'=> $this->input->post('favourite'),
               'popular'=> $this->input->post('popular'),
               'hot'=> $this->input->post('hot'),
               'rating'=> $this->input->post('rating'),
               'reviews'=> $this->input->post('reviews'),
              
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
            $this->Adminmodel->update("product", $data, $con);
			 redirect("Adminproduct/index");
        }
           $data['update']=$this->Adminmodel->select('product',['id'=>$id]); 
          
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
		$data['title']='product';
        $this->load->view('back/product/edit',$data);
		
        $this->load->view('back/footer');

    }
	
	
	public function view($id){
		$this->checklogin();
        $data['update']=$this->Adminmodel->select('product',['id'=>$id]);         
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
		$data['title']='product';
        $this->load->view('back/product/view',$data);
		
        $this->load->view('back/footer');

    }
	
	
	
 	
										
	
    

}
 