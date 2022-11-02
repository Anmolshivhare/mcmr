<?php ini_set('display_errors',0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Homedefault extends CI_Controller {
	function __construct()  {
		parent::__construct();
		$this->load->model('Adminmodel');
		date_default_timezone_set("Asia/Kolkata");
		}
		 
	 
  
 

  
      public function index()
      {
         
          
        echo '<a href="https://play.google.com/store/apps?hl=en_IN&gl=US"><img src="https://i.ytimg.com/vi/jB1dqS6okOA/maxresdefault.jpg" width="100%"></a>';

            }
				


         

}