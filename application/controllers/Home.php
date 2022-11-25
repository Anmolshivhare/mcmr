 <?php
 ini_set('display_errors', 0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
function __construct()  {
		parent::__construct();
		$this->load->model('Adminmodel');
 		date_default_timezone_set("Asia/Kolkata");
		$this->load->library('form_validation'); 
        $this->load->model('user'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
		}
		
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 
	 
	 

	  
	public function index()
	{
		//session_destroy();
		$admin = $this->session->all_userdata() ;
		//print_r($admin);
		$cid = $admin['data'];	
		if($admin['userId']) {
		$data['news']=$this->Adminmodel->select('news',['city_id'=>$cid],0,'desc');
  
		$this->load->view('front/header', $data);
		
		$data['slider']=$this->Adminmodel->select('slider',['city_id'=>$cid],0,'desc');
	
		//print_r($admin);	
	
		$this->load->view('front/index', $data);
		$this->load->view('front/footer');
		} else {
			redirect('users/login'); 
		}
	}
	 
	public function home()
	{	
			
		$this->load->view('front/header');
		// $data['slider']=$this->Adminmodel->select('slider','',0,'desc');
		// $data['product']=$this->Adminmodel->select('product','',5,'desc');
		$admin = $this->session->all_userdata() ;
		$cid = $admin['data'];	
		$data['advocate']=$this->Adminmodel->select('advocate',['city_id'=>$cid],0,'desc');
		$this->load->view('front/home', $data);
	
		$this->load->view('front/footer');
	}
	public function member()
	{	
		$admin = $this->session->all_userdata() ;
		$cid = $admin['data'];		
		$this->load->view('front/header');
		$data['advocate']=$this->Adminmodel->select('advocate',['city_id'=>$cid],0,'desc');
		$this->load->view('front/member', $data);
	
		$this->load->view('front/footer');
	}


	
		public function member_detail($id)
	{	
			
		$this->load->view('front/header');
		$data['view']=$this->Adminmodel->select('advocate',['id'=>$id]); 
		$this->load->view('front/member_detail', $data);
	
		$this->load->view('front/footer');
	}
	
		public function account()
	{	
			
		$this->load->view('front/header');
		//$data['view']=$this->Adminmodel->select('advocate',['id'=>$id]); 
		$this->load->view('front/account');
	
		$this->load->view('front/footer');
	}
		public function citizenclick()
	{	
			
		$this->load->view('front/header');
		//$data['view']=$this->Adminmodel->select('advocate',['id'=>$id]); 
		$this->load->view('front/citizenform');
	
		$this->load->view('front/footer');
	}
	
	public function occupation()
	{	
			
		$this->load->view('front/header');
		// $data['slider']=$this->Adminmodel->select('slider','',0,'desc');
		// $data['product']=$this->Adminmodel->select('product','',5,'desc');
		$data['designation']=$this->Adminmodel->select('designation','',0,'desc');
		$this->load->view('front/designation', $data);
	
		$this->load->view('front/footer');
	}

	
	public function city()
	{	
				
		$this->load->view('front/header');
		// $data['slider']=$this->Adminmodel->select('slider','',0,'desc');
		// $data['product']=$this->Adminmodel->select('product','',5,'desc');
		$data['city']=$this->Adminmodel->select('city','',0,'desc');
		$this->load->view('front/city', $data);
	
		$this->load->view('front/footer');
	}
	public function new_city()
	{	
			
		$this->load->view('front/header');
		// $data['slider']=$this->Adminmodel->select('slider','',0,'desc');
		// $data['product']=$this->Adminmodel->select('product','',5,'desc');
		$data['city']=$this->Adminmodel->select('city','',0,'desc');
		$this->load->view('front/new_city', $data);
	
		$this->load->view('front/footer');
	}


	public function city_wise_member($id)
	{	
			
		$this->load->view('front/header');
		 
		$data['advocate']=$this->Adminmodel->select('advocate',['city_id'=>$id]); 
		$this->load->view('front/city_wise_member', $data);
	
		$this->load->view('front/footer');
	}

	public function category_wise_member($id)
	{	
			
		$this->load->view('front/header');
		 
		$data['advocate']=$this->Adminmodel->select('advocate',['cat_id'=>$id]); 
		$this->load->view('front/designation_wise_member', $data);
	
		$this->load->view('front/footer');
	}

	public function designation_wise_member($id)
	{	
			
		$this->load->view('front/header');
		 
		$data['advocate']=$this->Adminmodel->select('advocate',['des_id'=>$id]); 
		$this->load->view('front/designation_wise_member', $data);
	
		$this->load->view('front/footer');
	}
	public function designation()
	{	
			
		$this->load->view('front/header');
		// $data['slider']=$this->Adminmodel->select('slider','',0,'desc');
		// $data['product']=$this->Adminmodel->select('product','',5,'desc');
		$data['designation']=$this->Adminmodel->select('designation','',0,'desc');
		$this->load->view('front/designation', $data);
	
		$this->load->view('front/footer');
	}


	public function category()
	{	
			
		$this->load->view('front/header');
		// $data['slider']=$this->Adminmodel->select('slider','',0,'desc');
		// $data['product']=$this->Adminmodel->select('product','',5,'desc');
		$data['category']=$this->Adminmodel->select('category','',0,'desc');
		$this->load->view('front/category', $data);
	
		$this->load->view('front/footer');
	}
	
	
	public function gallery_category()
	{	

		$admin = $this->session->all_userdata() ;
		$cid = $admin['data'];
		$this->load->view('front/header');


		$data['gallerycategory']=$this->Adminmodel->select('gallerycategory',['city_id'=> $cid],0,'desc');
	


		$this->load->view('front/gallery_category', $data);
		$this->load->view('front/footer');
	}
 

	public function gallery_images($id)

	{	
		 
		$this->load->view('front/header');
		$data['abcd']=$this->Adminmodel->select('gallery',['g_cat_id'=>$id]); 
 		$data['gallery_category']=$this->Adminmodel->select('gallerycategory',['id'=>$id]); 
		// echo json_encode($data);
 		$this->load->view('front/gallery_images', $data);
		$this->load->view('front/footer');
	}

	public function news_category()
	{	
		$admin = $this->session->all_userdata() ;
		$cid = $admin['data'];
		$this->load->view('front/header');


		$data['newscategory']=$this->Adminmodel->select('news',['city_id'=>$cid],5,'desc');
	


		$this->load->view('front/news_category', $data);
		$this->load->view('front/footer');
	}
	public function news_details($id)
	{	
		$this->load->view('front/header');
	  
 		$data['view']=$this->Adminmodel->select('news',['id'=>$id]); 
		// echo json_encode($data);
	
 		$this->load->view('front/news_details', $data);
		$this->load->view('front/footer');
	}
 

	 
 
	public function event()
	{	
		$admin = $this->session->all_userdata() ;
		$cid = $admin['data'];
		$this->load->view('front/header');


		$data['event']=$this->Adminmodel->select('event',['city_id'=>$cid],0,'desc');
	


		$this->load->view('front/event', $data);
		$this->load->view('front/footer');
	}
	public function event_detail($id)
	{	
		$this->load->view('front/header');


		$data['view']=$this->Adminmodel->select('event',['id'=>$id] );
	


		$this->load->view('front/event_detail', $data);
		$this->load->view('front/footer');
	}

	 




	function search(){
	  $this->load->view('front/header');
      $data['product'] =array();
	  
    if ($query = $this->Adminmodel->product_search($this->input->post('search')))
    {

         $data['product'] = $query;
		 
		
    } else {
		  $data['title']='Product Not Found';
		   
	}
	 
	$this->load->view('front/product/product_search',$data);
	$this->load->view('front/footer');
 
}
 
 
	 
	
	
	 public function product_detail($id)
	{	
	 $this->load->view('front/header');
	//$data['product']=$this->Adminmodel->select('product',['id'=>$id]); 
	$data['product']=$this->Adminmodel->select('product',['id'=>$id]); 
	 
	 $this->load->view('front/product/product_detail',$data);
		$this->load->view('front/footer');
	}
	
	
	
	 
	
	
	
	public function about()
	{	
		$this->load->view('front/header');
		$data['aboutus']=$this->Adminmodel->select('services',['id'=>'3']); 
		$this->load->view('front/about', $data);
		$this->load->view('front/footer');
	}
	public function terms_and_condition()
	{	
		$this->load->view('front/header');
		$data['aboutus']=$this->Adminmodel->select('services',['id'=>'1']); 
		$this->load->view('front/about', $data);
		$this->load->view('front/footer');
	}
	
	public function privacy_policy()
	{	
		$this->load->view('front/header');
		$data['aboutus']=$this->Adminmodel->select('services',['id'=>'2']); 
			$this->load->view('front/about', $data);
		$this->load->view('front/footer');
	}
	
 
	public function contact()
	{	
			$this->load->view('front/header');
		$this->load->view('front/contact');
		$this->load->view('front/footer');
	}

	public function register()
	{	
		$this->load->view('front/header');
		$this->load->view('front/register');
		$this->load->view('front/footer');
	}
	public function new_user()
	{	
		$this->load->view('front/header');
		$this->load->view('front/new_user');
		$this->load->view('front/footer');
	}
	public function login()
	{	
		$this->load->view('front/header');
		$this->load->view('front/login');
		$this->load->view('front/footer');
	}
	public function personal_details()
	{	
		$this->load->view('front/header');
		$this->load->view('front/personal_details');
 		$this->load->view('front/footer');
	}
	public function business_form()
	{	
		$this->load->view('front/header');
		$this->load->view('front/businessform');
 		$this->load->view('front/footer');
	}


	public function thanks()
	{	
			$this->load->view('front/header');
		$this->load->view('front/thanking');
		$this->load->view('front/footer');
	}



	public function newuser_info(){
       
 		 if(!empty($_POST)){
										
			$tbl="new_user";
			$data=array(
				'user_name'=> $this->input->post('user_name'),          
				'whatapp_no'=> $this->input->post('whatapp_no'),          
				'u_address'=> $this->input->post('u_address'),          
				'u_age'=> $this->input->post('u_age'),            
			    'create_pass'=> $this->input->post('create_pass'),          
			     'status'=> '0',          
			  	'create_date'=> date("Y-m-d H:i:s"),         
			   
			);
 
		  $this->Adminmodel->insert($tbl, $data);
		  // $data['msg']='Data Insert Successfully';
		//   redirect("home/thanks");
		  
		   $this->session->set_flashdata('msg', 'Data Insert Successfully');
 		}
		 redirect("home/new_user");
 		}

	
		public function advocate_register(){
       
 		 if(!empty($_POST)){
		  
			$tbl="advocate";
			$data=array(
				'city_id'=> $this->input->post('city_id'),          
				'cat_id'=> $this->input->post('cat_id'),          
				'des_id'=> $this->input->post('des_id'),          
				'reg_no'=> $this->input->post('reg_no'),            
			   'cop_no'=> $this->input->post('cop_no'),          
			   'adv_bac_no'=> $this->input->post('adv_bac_no'),          
			   'adv_name'=> $this->input->post('adv_name'),          
			           
			   'adv_f_name'=> $this->input->post('adv_f_name'),          
			           
			   'adv_dob'=> $this->input->post('adv_dob'),          
			   'adv_sf'=> $this->input->post('adv_sf'),          
			   'adv_cf'=> $this->input->post('adv_cf'),          
			   'adv_gen'=> $this->input->post('adv_gen'),          
			   'adv_blood_group'=> $this->input->post('adv_blood_group'),          
			   'adv_add'=> $this->input->post('adv_add'),          
			   'adv_pin'=> $this->input->post('adv_pin'),          
			   'adv_rep_add'=> $this->input->post('adv_rep_add'),          
			   'adv_rep_pin'=> $this->input->post('adv_rep_pin'),          
			   'adv_phone'=> $this->input->post('adv_phone'),          
			   'adv_whatapp_no'=> $this->input->post('adv_whatapp_no'),          
			   'adv_email'=> $this->input->post('adv_email'),   
			   'adv_area'=> $this->input->post('adv_area'),
			   'a_designation'=> $this->input->post('a_designation'),          
               'a_workplace'=> $this->input->post('a_workplace'),          
              'a_prectice'=> $this->input->post('a_prectice'),

			   'status'=> '0',          
			  'createdate'=> date("Y-m-d H:i:s"),         
			   
			);

		   if(!empty($_FILES)){
					
			  $uploadPath = 'upload_images/';
			$config['encrypt_name'] = TRUE; 
			  $config['upload_path'] = $uploadPath;
			   $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			  $this->load->library('upload', $config);
			  $this->upload->initialize($config);
			  if($this->upload->do_upload('adv_img')){
				  $error = $this->upload->display_errors();
				  if(!empty($error)){

					  echo $error;
					  die;
				  }
				  $fileData = $this->upload->data();
				  
				  $data['adv_img'] = $fileData['file_name'];
			  }
		  } 
		   
			 
		
			 

		  $this->Adminmodel->insert($tbl, $data);
		  // $data['msg']='Data Insert Successfully';
		  redirect("home/thanks");
		  
		   $this->session->set_flashdata('msg', 'Data Insert Successfully');
 		}
		 redirect("home/register");
 		}

			
	 


}