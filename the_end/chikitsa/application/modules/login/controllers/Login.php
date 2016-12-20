<?php

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');

		$this->load->helper('form');
		$this->load->helper('url');
        $this->load->helper('security');
		$this->load->model('model_session');
		$this->load->model('login_model');
		$this->load->model('menu_model');
		$this->load->model('module/module_model');
		$this->load->model('settings/settings_model');

		$this->load->library('session');

		$this->lang->load('main');
    }
//  	function login_page(){
//		$level = $this->session->userdata('category');
//		$parent_name="";
//		$result_top_menu = $this->menu_model->find_menu($parent_name);
//		foreach ($result_top_menu as $top_menu){
//			$id = $top_menu['id'];
//			$parent_name = $top_menu['menu_name'];
//			if($this->menu_model->has_access($top_menu['menu_name'],$level)){
//				if($this->menu_model->is_module_active($top_menu['required_module'])){
//					$result_sub_menu = $this->menu_model->find_menu($parent_name);
//					$rowcount= count($result_sub_menu);
//					if($rowcount != 0){
//						foreach ($result_sub_menu as $sub_menu){
//							if($this->menu_model->has_access($sub_menu['menu_name'],$level)){
//								if($this->menu_model->is_module_active($sub_menu['required_module'])){
//									return $sub_menu['menu_url'];
//								}
//							}
//						}
//					}else{
//						return $top_menu['menu_url'];
//					}
//				}
//			}
//		}
//		return '/appointment/index';
//	}
	public function index() {
		$this->model_session->view();
		if(count($this->model_session->view()) == 1){
//            $username = $login['check_user'];
			$username = "admin";
//            $password = base64_encode($login['check_pass']);
			$password = base64_encode("admin");
			$result = $this->login_model->login($username, $password);
			if(!empty($result)){
				$_SESSION["name"] = $result->name;
				$_SESSION["user_name"] = $result->username;
				$_SESSION["category"] = $result->level;
				$_SESSION["id"] = $result->userid;
				$_SESSION["logged_in"] = TRUE;
				redirect('/appointment/index', 'refresh');
			}
		}else {
			$this->load->view('login/login_signup');
		}

	}


//					echo "<script> alert ('Thông tin đăng nhập không đúng ! vui lòng đăng nhập lại');</script>";
//	function index(){
////		$login = file_get_contents('http://localhost/laravel-login/app/models/check_login.php');
////		$login = json_decode($login, true);
//		$a=$this->model_session->delete();
//		if($a){echo 123;}die;
//		if(isset($a)){
////            $username = $login['check_user'];
//			$username = "admin";
////            $password = base64_encode($login['check_pass']);
//			$password = base64_encode("admin");
//			$result = $this->login_model->login($username, $password);
//			if(!empty($result)){
//				$_SESSION["name"] = $result->name;
//				$_SESSION["user_name"] = $result->username;
//				$_SESSION["category"] = $result->level;
//				$_SESSION["id"] = $result->userid;
//				$_SESSION["logged_in"] = TRUE;
//				$logged_in = TRUE;
//			}
//		}else{
//			$this->load->view('login/login_signup');
//		}
//		if($logged_in)
//			redirect('/appointment/index', 'refresh');
//	}
//	function index1() {
//		$a=$this->model_session->view();
//		if(($a=='')){
//			$this->load->view('login/login_signup');
//		} else {
//			//Go to Appointment Page if logged in
//
//			redirect('/appointment/index', 'refresh');
//		}
//	}
	function valid_signin() {
		//Check if loggin details entered
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->index1();
		} else {
			$logged_in = FALSE;
			if($this->input->post('username')){
				//Check Login details
				$username = $this->input->post('username');
				$password = base64_encode($this->input->post('password'));
				$result = $this->login_model->login($username, $password);
				if(!empty($result)){
					session_start();
					$_SESSION["name"] = $result->name;
					$_SESSION["user_name"] = $result->username;
					$_SESSION["category"] = $result->level;
					$_SESSION["id"] = $result->userid;
					$_SESSION["logged_in"] = TRUE;
					$logged_in = TRUE;
//                    $_SESSION["session_user"]=$username;
//                    $_SESSION["session_password"]=$password;
					//$_SESSION["check_chikitsa"]=1;

				}
			}
			//If Username and Password matches
			if ($logged_in) {
				redirect('/appointment/index', 'refresh');
			} else {
				$data['username'] = $this->input->post('username');
				$data['level'] = $this->input->post('level');
				$data['error'] = 'Invalid Username and/or Password';
				$this->load->view('login/login_signup',$data);
			}
		}
	}
	public function logout() {
		//Destroy Session and go to login form
		$a = 1;
		//$a=$this->model_session->view();
		//var_dump($a);die;
		if($a != $this->model_session->view()){
			session_destroy();
			$this->model_session->delete();
			$this->load->view('login/login_signup');
			//echo 'lol';
		}

			// remove all session variables
//			session_unset();
//			// destroy the session
//			session_destroy();
//			$this->model_session->delete();
//			session_start();
//			//$_SESSION["check"]=1;
//		    $this->index1();
	}
//	public function is_session_started(){
//		if ( php_sapi_name() !== 'cli' ) {
//			if ( version_compare(phpversion(), '5.4.0', '>=') ) {
//				return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
//			} else {
//				return session_id() === '' ? FALSE : TRUE;
//			}
//		}
//		return FALSE;
//	}
	public function cleardata() {
		if ( $this->is_session_started() === TRUE ){
			// remove all session variables
			session_unset();
			// destroy the session
			session_destroy();
		}
		$data['message']='Use Username / Password : admin/admin to login ';
		$this->load->view('login/login_signup',$data);
	}

}

?>
