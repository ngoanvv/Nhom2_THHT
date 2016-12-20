<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_register extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('model_user');
        $this->load->model('model_session');
        $this->load->library('session');
    }

    public function login() {

        if($this->input->post('login')){
            $this->form_validation->set_rules('username', 'Tài khoản', 'required');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
            $this->form_validation->set_message('required', '{field} không được bỏ trống');
            if ($this->form_validation->run()){
                $data = $this->model_user->login();
                $flash = false;
                foreach($data as $val){
                    if($val['email'] == $this->input->post('username') && $val['password'] == $this->input->post('password')) {
                        $flash = true;
                    }
                }
                if($flash == false ){
                    echo "<script> alert ('Thông tin đăng nhập không đúng ! vui lòng đăng nhập lại');</script>";
                } else {
                    foreach($data as $val123){
                        if($val123['email'] == $this->input->post('username') && $val123['password'] == $this->input->post('password')) {
                            $session = array(
                                'id_user' => $val123['id'],
                                'name'  => $val123['username'],
                                'email'     => $val123['email'],
                                'password' => $val123['password'],
                                'level' => $val123['level']
                            );
                            $this->session->set_userdata($session);

                        }
                    }
                    $a=$this->model_session->view();
//                    	var_dump($a);die;
                    $this->model_session->insert($session);
                    redirect('admin/home');
                }
            }


        }
        $this->load->view('login_register/login.php');
    }

    public function register(){
        if($this->input->post('register')){
            $this->form_validation->set_rules('name', 'Tên của bạn', 'required');
            $this->form_validation->set_rules('email', 'Email của bạn', 'required|is_unique[user.email]');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
            $this->form_validation->set_rules('confirm', 'Xác nhận mật khẩu', 'required|matches[password]');
            $this->form_validation->set_message('required', '{field} không được bỏ trống');
            $this->form_validation->set_message('is_unique', '{field} đã tồn tại');
            if ($this->form_validation->run()){
                $this->model_user->register();
                echo "<script> alert('Đăng ký thành công ! vui lòng đăng nhập vào hệ thống') </script>";
            }
        }
        $this->load->view('login_register/register.php');
    }

    public function logout(){
        $data = $this->session->all_userdata();
        if(isset($data) && !empty($data)){
            $this->session->sess_destroy();
            $this->model_session->delete();
            redirect('login');
        }
    }
}
