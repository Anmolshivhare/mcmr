<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminenquiry extends CI_Controller {
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
    			 
	 	
	  public function general(){
      $this->checklogin();
	   $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
  
	  $this->load->view('back/general_enquiry',$data);
	  $this->load->view('back/footer');
	  }
	  	    
 
 	
	  public function other(){
      $this->checklogin();
	   $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
      
	  $this->load->view('back/service_enquiry',$data);
	  $this->load->view('back/footer');
	  }
	  	    
 
	
	 
    

}
 