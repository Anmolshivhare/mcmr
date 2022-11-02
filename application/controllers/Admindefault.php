<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Admindefault extends CI_Controller {
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

  
      public function index()
      {
         
            $this->load->view('front/header');
            
            $data['city']=$this->Adminmodel->select('city','',0,'desc');
            $this->load->view('front/new_city', $data);
            $this->load->view('front/footer');
            }
				


            public function homepagesession()
            {
              
              
                  $city_id = $this->input->post('city_id');

                  $this->session->set_userdata('data',$city_id);   
                  redirect('/home/index'); 
             }

}