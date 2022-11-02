<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller {
	function __construct()  {
		parent::__construct();
		$this->load->model('Adminmodel');
		date_default_timezone_set("Asia/Kolkata");
		}
		
		public function index(){		
		$this->load->view('back/login');  
		if(!empty($_POST)){
		 $tbl="admin";
		$data=array(
		'email'=> $this->input->post('email'),
		'password'=> $this->input->post('password'),  
		'status' => '1'
		 
		);
		$row=$this->Adminmodel->select('admin',$data);
		if(count($row)>0)
		{ $this->session->set_userdata('data',$row);
		
			redirect('/AdminController/dashboard');
			}else{
		echo " Wrong password"; 
			}		
			}
		}
				
				
				
				 
		public function dashboard(){
      $this->checklogin();
    
	 // $data['admin']= $this->session->set_userdata('data');
	  $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
	   //$data['user']=$this->Adminmodel->select('user_package',['payment'=>success]); 
      $this->load->view('back/index');
      $this->load->view('back/footer');
    }
	
	
	
	public function web_setting($id){
			  $this->checklogin();
			  
        if (!empty ($_POST)) {
            $data = array(
              'system_name'=> $this->input->post('system_name'),
              'phone'=> $this->input->post('phone'),
              'email_id'=> $this->input->post('email_id'),
              'address'=> $this->input->post('address'),
              'title'=> $this->input->post('title'),
              'alt_tag'=> $this->input->post('alt_tag'),
            );
            if(!empty($_FILES)){
                $uploadPath = 'upload_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
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
            $this->Adminmodel->update("website_setting", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('website_setting',['id'=>$id]);    
         $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
        $this->load->view('back/setting',$data);
        $this->load->view('back/footer');

    }
	
	 
	
	public function sociallink($id){
			  $this->checklogin();
        if (!empty ($_POST)) {
            $data = array(
              'facebook'=> $this->input->post('facebook'),
              'twitter'=> $this->input->post('twitter'),
              'instagram'=> $this->input->post('instagram'),
               
           
            );
       
            $con=array("id" => $id);
            $this->Adminmodel->update("sociallink", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('sociallink',['id'=>$id]);    
        $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
        $this->load->view('back/sociallink',$data);
        $this->load->view('back/footer');

    }
	
		public function banner_video($id){
			  $this->checklogin();
        if (!empty ($_POST)) {
            $data = array(
              
              'video_link'=> $this->input->post('video_link'),
              'createdate' => date("Y-m-d H:i:s"),
                
            );
       
            $con=array("id" => $id);
            $this->Adminmodel->update("banner_video", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('banner_video',['id'=>$id]);    
        $data['admin'] = $this->session->all_userdata() ;
	    $this->load->view('back/header',  $data);
        $this->load->view('back/banner_video',$data);
        $this->load->view('back/footer');

    }
	
	
	
	
	
	
		public function category(){
		$this->checklogin();
		$this->load->view('admin/header');
		 if(!empty($_POST)){
        	$tbl="category";
        	$data=array(
              'name'=> $this->input->post('name'),
              'description'=> $this->input->post('description'),
        	);
          $this->Adminmodel->insert($tbl, $data);
        }
        $data['message']='Data Insert Successfully';
		$this->load->view('admin/category');
		$this->load->view('admin/footer');
		}
		
		
	 
	
	
	
	public function user_details(){
		$this->checklogin();
		$this->load->view('admin/header');
		 if(!empty($_POST)){
        	$tbl="user_profile";
        	$data=array(
              'name'=> $this->input->post('name'),
              'email'=> $this->input->post('email'),
              'academic'=> $this->input->post('academic'),
              'phone'=> $this->input->post('phone'),
              'name'=> $this->input->post('name'),
              'father_name'=> $this->input->post('father_name'),
              'dob'=> $this->input->post('dob'),
              'gender'=> $this->input->post('gender'),
              'state'=> $this->input->post('state'),
              'city'=> $this->input->post('city'),
              'address'=> $this->input->post('address'),
              'pincode'=> $this->input->post('pincode'),
              'category'=> $this->input->post('category'),
              'religion'=> $this->input->post('religion'),
              'ten_exam'=> $this->input->post('ten_exam'),
              'ten_board'=> $this->input->post('ten_board'),
              'ten_marking'=> $this->input->post('ten_marking'),
              'ten_aggregate'=> $this->input->post('ten_aggregate'),
              'ten_passing'=> $this->input->post('ten_passing'),
              'twel_exam'=> $this->input->post('twel_exam'),
              'twel_board'=> $this->input->post('twel_board'),
              'twel_marking'=> $this->input->post('twel_marking'),
              'twel_aggregate'=> $this->input->post('twel_aggregate'),
              'twel_passing'=> $this->input->post('twel_passing'),
              'diploma_exam'=> $this->input->post('diploma_exam'),
 
        	);
          $this->Adminmodel->insert($tbl, $data);
        }
        $data['message']='Data Insert Successfully';
		$this->load->view('admin/category');
		$this->load->view('admin/footer');
		}
		



 

	  function policy($id) {
			if (!empty ($_POST)) {
				$data = array(
					'content'=> $this->input->post('content'),
					);
				$con=array("id" => $id);
				$this->Adminmodel->update("policy", $data, $con);
			}
			$data['update']=$this->Adminmodel->select('policy',['id'=>$id]);
			 $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
			$this->load->view('admin/policy',$data);
			$this->load->view('admin/footer');
		}
 
	  function terms($id) {
        if (!empty ($_POST)) {
            $data = array(
                'content'=> $this->input->post('content'),
                );
            $con=array("id" => $id);
            $this->Adminmodel->update("terms", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('terms',['id'=>$id]);
         $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
        $this->load->view('admin/terms',$data);
        $this->load->view('admin/footer');
    }
	
 

 
  
 	

		public function subscribe(){
		if(!empty($_POST)){
			$tbl="subscribe";
			$data=array(
			'emailname'=> $this->input->post('emailname'),
			'ipaddress'=> $_SERVER['REMOTE_HOST'],
			);
			$this->Adminmodel->insert($tbl, $data);
			}
			$data['message']='Data Insert Successfully';
			redirect("https://www.cricplex.com");  
			}
		
	public function subscribe_show(){
    $this->checklogin();
	$this->load->view('admin/header');
	$data['show']=$this->Adminmodel->select('subscribe');
	$this->load->view('admin/show_subscribe',$data);
	$this->load->view('admin/footer');
  }
    
	 
			
  
	
  

   function logout(){
	   session_start();
	   session_destroy();
	   redirect(base_url().'AdminController/index');
	   }
 
		private function checklogin(){

 
     if(empty($this->session->userdata('data')))
     {
        redirect(base_url().'AdminController/index');
     }
  
  }
   
    public function blog(){
        $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
        if(!empty($_POST)){
            $tbl="blog";
            $data=array(

                'heading'=> $this->input->post('heading'),
                'image'=> $this->input->post('image'),
                'content'=> $this->input->post('content'),
                'alt_tag'=> $this->input->post('alt_tag'),
                'img_description'=> $this->input->post('img_description'),
                'createdate' => date('Y-m-d '),
                'createdby' => $this->input->post('createdby')

            );
            if(!empty($_FILES)){


                $uploadPath = 'blog_images/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';

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



            $this->Adminmodel->insert($tbl,$data);

        }
        $data['message']='Data Insert Successfully';
        $this->load->view('admin/blog',$data);
        $this->load->view('admin/footer');
    }
			
    public function blog_show(){

         $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
        $data['show']=$this->Adminmodel->select('blog');
        $this->load->view('admin/show_blog',$data);
        $this->load->view('admin/footer');
    }
	
	
    public function delete_blog($id){
        $con = array("id"=>$id);
        $data=$this->Adminmodel->delete("blog",$con);
        $this->load->view('admin/show_blog', $data);
        redirect("AdminController/blog_show");
    }
		
    public function update_blog($id){
        if (!empty ($_POST)) {
            $data = array(
                'heading'=> $this->input->post('heading'),
                'content'=> $this->input->post('content'),
                 'alt_tag'=> $this->input->post('alt_tag'),
                'img_description'=> $this->input->post('img_description'),
                'createdate' => date('Y-m-d '),
                'createdby' => $this->input->post('createdby')

            );
            if(!empty($_FILES)){


                $uploadPath = 'blog_images/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';

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
            $this->Adminmodel->update("blog", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('blog',['id'=>$id]);
        $data['admin'] = $this->session->all_userdata() ;
		$this->load->view('back/header',  $data);
        $this->load->view('admin/update_blog',$data);
        $this->load->view('admin/footer');

    }

	public function team(){
		  $this->checklogin();
       $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
        if(!empty($_POST)){
            $tbl="team";
            $data=array(
				
                'name'=> $this->input->post('name'),
				'designation'=> $this->input->post('designation'),              
                 'createdate' => date("Y-m-d H:i:s"),

            );
            if(!empty($_FILES)){


                $uploadPath = 'team_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';

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



            $this->Adminmodel->insert($tbl,$data);

        }
        $data['message']='Data Insert Successfully';
		
        $this->load->view('admin/team',$data);
        $this->load->view('admin/footer');
    }  
			
    public function team_show(){
		 $data['admin'] = $this->session->all_userdata() ;
	  $this->load->view('back/header',  $data);
        $data['show']=$this->Adminmodel->select('team','',0,'desc');
        $this->load->view('admin/show_team',$data);
        $this->load->view('admin/footer');
    }
	
	
    public function delete_team($id){
		
        $con = array("id"=>$id);
        $data=$this->Adminmodel->delete("team",$con);
        $this->load->view('admin/show_team', $data);
        redirect("AdminController/team_show");
    }
		
		public function update_team($id){
			  $this->checklogin();
        if (!empty ($_POST)) {
            $data = array(
				'name'=> $this->input->post('name'),
				'designation'=> $this->input->post('designation'),              
                 'createdate' => date("Y-m-d H:i:s"),

            );
            if(!empty($_FILES)){


                $uploadPath = 'team_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';

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
            $this->Adminmodel->update("team", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('team',['id'=>$id]);
        $data['show']=$this->Adminmodel->select('team');
         $data['admin'] = $this->session->all_userdata() ;
	     $this->load->view('back/header',  $data);
        $this->load->view('admin/update_team',$data);
        $this->load->view('admin/footer');

    }

	public function news(){
		  $this->checklogin();
        $this->load->view('admin/header');
        if(!empty($_POST)){
            $tbl="news";
            $data=array(
				
                'heading'=> $this->input->post('heading'),
				'category'=> $this->input->post('category'),
                'summery'=> $this->input->post('summery'),
                'image'=> $this->input->post('image'),
                'content'=> $this->input->post('content'),
                'alt_tag'=> $this->input->post('alt_tag'),
                'img_description'=> $this->input->post('img_description'),
                'createdate' => date("Y-m-d H:i:s"),
                'createdby' => $this->input->post('createdby')

            );
            if(!empty($_FILES)){


                $uploadPath = 'news_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';

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



            $this->Adminmodel->insert($tbl,$data);

        }
        $data['message']='Data Insert Successfully';
		$data['show']=$this->Adminmodel->select('category');
        $this->load->view('admin/news',$data);
        $this->load->view('admin/footer');
    }  
			
    public function news_show(){
		  $this->checklogin();
        $this->load->view('admin/header');
        $data['show']=$this->Adminmodel->select('news','',0,'desc');
        $this->load->view('admin/show_news',$data);
        $this->load->view('admin/footer');
    }
		
    public function delete_news($id){		
        $con = array("id"=>$id);
        $data=$this->Adminmodel->delete("news",$con);
        $this->load->view('admin/show_news', $data);
        redirect("AdminController/news_show");
    }
		
	 public function update_news($id){
			  $this->checklogin();
        if (!empty ($_POST)) {
            $data = array(
                'heading'=> $this->input->post('heading'),
				'category'=> $this->input->post('category'),
                'summery'=> $this->input->post('summery'),
                'content'=> $this->input->post('content'),
                'alt_tag'=> $this->input->post('alt_tag'),
                'img_description'=> $this->input->post('img_description'),
                
                'createdby' => $this->input->post('createdby')

            );
            if(!empty($_FILES)){


                $uploadPath = 'news_images/';
				$config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';

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
            $this->Adminmodel->update("news", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('news',['id'=>$id]);
      $data['show']=$this->Adminmodel->select('category');
        $this->load->view('admin/header');
        $this->load->view('admin/update_news',$data);
        $this->load->view('admin/footer');

    }
													
	
	
 

	
  
	
	 public function event(){
        $this->load->view('admin/header');
        if(!empty($_POST)){
            $tbl="event";
            $data=array(

                'heading'=> $this->input->post('heading'),
                'image'=> $this->input->post('image'),
                'description'=> $this->input->post('description'),
                'alt_tag'=> $this->input->post('alt_tag'),
                'img_description'=> $this->input->post('img_description'),
                'createdate' => $this->input->post('createdate'),
                'progress' => $this->input->post('progress'),
                'createdby' => $this->input->post('createdby')

            );
            if(!empty($_FILES)){


                $uploadPath = 'event_images/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';

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



            $this->Adminmodel->insert($tbl,$data);

        }
        $data['message']='Data Insert Successfully';
        $this->load->view('admin/event',$data);
        $this->load->view('admin/footer');

 

    }
    
	public function event_show(){
        $this->load->view('admin/header');
        $data['show']=$this->Adminmodel->select('event');
        $this->load->view('admin/show_event',$data);
        $this->load->view('admin/footer');
    }
		
    public function delete_event($id){
        $con = array("id"=>$id);
        $data=$this->Adminmodel->delete("event",$con);
        $this->load->view('admin/show_event', $data);
        redirect("AdminController/event_show");
		
    }
		
    public function update_event($id){
		//print_r($_POST); die;
        if (!empty ($_POST)) {
            $data = array(
                'heading'=> $this->input->post('heading'),
                'description'=> $this->input->post('description'),
                 'alt_tag'=> $this->input->post('alt_tag'),
                'img_description'=> $this->input->post('img_description'),
				'createdate' => $this->input->post('createdate'),
                'progress' => $this->input->post('progress'),
                'createdby' => $this->input->post('createdby')

            );
            if(!empty($_FILES)){


                $uploadPath = 'event_images/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';

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
			//print_r($data); die;
            $this->Adminmodel->update("event", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('event',['id'=>$id]);
        $this->load->view('admin/header');
        $this->load->view('admin/update_event',$data);
        $this->load->view('admin/footer');

    }
				
		public function portfolio(){
			$this->load->view('admin/header');
			if(!empty($_POST))
			{
					$tbl="portfolio";
					$filesCount = count($_FILES['userFiles']['name']);
					// print_r($filesCount); die;
					$a=array();
					for($i = 0; $i < $filesCount; $i++){
					$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i]; 
					$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
					$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
					$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
					$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
					$uploadPath = 'portfolio_image/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('userFile')){
					 $error = $this->upload->display_errors();
					if(!empty($error)){
					echo $error;
					die;
					}
					$fileData = $this->upload->data();
					array_push($a,$uploadPath.$fileData['file_name']);
					}
					}
					$b= json_encode($a);
			  $data=array(
			'image'=>$b,
			'url'=>$this->input->post('url'),
			'img_description'=>$this->input->post('img_description'),
			'alt_tag'=>$this->input->post('alt_tag'),
			'project_name'=>$this->input->post('project_name'),
			'description'=>$this->input->post('description'),
			);
			$this->Adminmodel->insert('portfolio',$data);
			}
			$this->load->view('admin/portfolio');
        $this->load->view('admin/footer');
    }
		
    public function portfolio_show()   {
        $this->load->view('admin/header');
        $data['show']=$this->Adminmodel->select('portfolio');
        $this->load->view('admin/portfolio_show',$data);
        $this->load->view('admin/footer');
	}		
	
	public function portfolio_delete($id)  {
      $con=array('id'=>$id);
	  $this->Adminmodel->delete('portfolio',['id'=>$id]);
	  redirect('portfolio_show');
	  }	
	  
    public function update_portfolio($id){
      $this->load->view('admin/header');
	   $data1['update']=$this->Adminmodel->select('portfolio',['id'=>$id]);
      if(!empty($_POST))
        {
          $tbl="portfolio";
          $data=array(
          'url'=>$this->input->post('url'),
          'img_description'=>$this->input->post('img_description'),
          'alt_tag'=>$this->input->post('alt_tag'),
          'project_name'=>$this->input->post('project_name'),
          'description'=>$this->input->post('description')
		  );		  		  
            if(!empty($_FILES)){
				foreach(json_decode($data1['update'][0]->image) as $img)
				  {
					  unlink($img);
				  }		  
              $a=array();
			  $count = count($_FILES['userFiles']['name']);
				for($i = 0; $i < $count ; $i++){
					$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
				$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
				$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
				$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
				$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
				$uploadPath = 'portfolio_image/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
					 $error = $this->upload->display_errors();
                        if(!empty($error)){
                            echo $error;
                            die;
                        }
                    $fileData = $this->upload->data();                   
					array_push($a,$uploadPath.$fileData['file_name']);
                    }
                }
				$data['image'] = json_encode($a);
							}else
							{
						  $data=array(
						  'url'=>$this->input->post('url'),
						  'img_description'=>$this->input->post('img_description'),
						  'alt_tag'=>$this->input->post('alt_tag'),
						  'project_name'=>$this->input->post('project_name'),
						  'description'=>$this->input->post('description'),
				);
            }
			$con=array('id'=>$id);;
			$this->Adminmodel->update('portfolio',$data,$con);
			redirect(base_url()."AdminController/portfolio_show");
			}   
			  $this->load->view('admin/update_portfolio',$data1);
			  $this->load->view('admin/footer');
			  }
		
    public function client(){
    $this->checklogin();
        $this->load->view('admin/header');
 
        if(!empty($_POST)){
          $tbl="client";
          $data=array(

              'url'=> $this->input->post('url'),
              'img_description'=> $this->input->post('img_description'),
              'alt_tag'=> $this->input->post('alt_tag'),

          );

    if(!empty($_FILES)){
                       
               
              $uploadPath = 'client_image/';
              $config['upload_path'] = $uploadPath;
              $config['allowed_types'] = 'gif|jpg|png|jpeg';
              
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
        
          $this->Adminmodel->insert($tbl,$data);

      }
  
    $this->load->view('admin/client');
    $this->load->view('admin/footer');


  }

  public function client_show(){
    $this->checklogin();
	$this->load->view('admin/header');
	$data['show']=$this->Adminmodel->select('client');
	$this->load->view('admin/client_show',$data);
	$this->load->view('admin/footer');
	}


  public function clientdelete($id){
     $con = array("id"=>$id);
       $data=$this->Adminmodel->delete("client",$con);
        $this->load->view('admin/client_show', $data);
        redirect("AdminController/client_show");
    }
   
   public function update_client($id)   {
    if (!empty ($_POST)) {
            $data = array(
              'url'=> $this->input->post('url'),
              'img_description'=> $this->input->post('img_description'),
              'alt_tag'=> $this->input->post('alt_tag'),
              
                );

 if(!empty($_FILES)){
                       $uploadPath = 'client_image/';
              $config['upload_path'] = $uploadPath;
              $config['allowed_types'] = 'gif|jpg|png|jpeg';
              
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
          else{


            $tbl="client";
            $data=array( 
              'url'=> $this->input->post('url'),
              'img_description'=> $this->input->post('img_description'),
              'alt_tag'=> $this->input->post('alt_tag'),
              

          
);  
      }

            $con=array("id" => $id);
            $this->Adminmodel->update("client", $data, $con);
        }
        $data['update']=$this->Adminmodel->select('client',['id'=>$id]);
        
        $this->load->view('admin/header');
        $this->load->view('admin/update_client',$data);
        $this->load->view('admin/footer');
    }

 
 
  public function admindone(){
    if(!empty($_POST)){
          $tbl="admin";
          $data=array(

              'name'=> $this->input->post('name'),
              'type'=> $this->input->post('type'),
              'email'=> $this->input->post('email'),
			  'phone'=> $this->input->post('phone'),
              'password'=> $this->input->post('password'),
			  'status'=> $this->input->post('status'),
			  'createdate' => date("Y-m-d H:i:s"),
          );
 
          $this->Adminmodel->insert($tbl,$data);
		    echo json_encode(array('error'=>'false', 'msg'=>$data));
      }
  }
	 
	 
	 
  public function admin_list(){
 	$data[]=$this->Adminmodel->select('admin');
	 echo json_encode(array('error'=>'false', 'msg'=>$data));
	 
	 
	}
	
	
	
  public function admin_delete($id){
       $con = array("id"=>$id);
       $data=$this->Adminmodel->delete("admin",$con);
	    echo json_encode(array('error'=>'false', 'msg'=>'deleted'));
       
    }

  
         public function change_pws()
    {
    if(!empty($_POST)){
          $tbl="admin";
          $data=array(
          'id'=> $this->input->post('id'),
          );
          $row=$this->Adminmodel->select('admin',$data);
           if(count($row)>0)
           {
            $data1['password'] = $this->input->post('password');
            $data1['type'] = $this->input->post('type');
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('admin', $data1);
            echo json_encode(array('error'=>'false', 'msg'=>'update successfully'));
           }
		   else
		   {
          echo json_encode(array('error'=>'true', 'msg'=>'Old Password Is wrong'));
        }
      }
    }
	 
 

}
