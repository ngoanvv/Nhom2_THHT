<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('model_user');
    }

	public function index(){
        $session = $this->session->all_userdata();
//        echo "<pre>";
//        var_dump($session);
//        die;
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100000000000';
        $this->load->library('upload', $config);
        $this->load->library('form_validation');
        if($this->input->post('up')){
            if(!empty($_FILES['file']['name'])){
                if ($this->upload->do_upload('file')){
                    $data = array('file' => $this->upload->data());
                    $file = $data['file']['file_name'];
                    $this->model_user->update_avatar($session['id_user'], $file);
                }
            }
        }

        if($this->input->post('update')){
            $this->form_validation->set_rules('username', 'Tên của bạn', 'required');
            $this->form_validation->set_rules('date', 'Ngày sinh của bạn', 'required');
            $this->form_validation->set_rules('address', 'Địa chỉ của bạn', 'required');
            $this->form_validation->set_rules('description', 'Mô tả về bản thân bạn', 'required');
            $this->form_validation->set_message('required', '{field} không được bỏ trống');
            if ($this->form_validation->run()){
                $this->model_user->update_profile($session['id_user']);
            }
        }
        $data123 = array(
            'title' => 'Profile',
            'profile' => $this->model_user->view_profile($_SESSION['id_user']),
        );
        $this->load->view('admin/header', isset($data123)?$data123:'NULL');
        $this->load->view('admin/category', isset($data123)?$data123:'NULL');
        $this->load->view('admin/user/profile', isset($data123)?$data123:'NULL');
        $this->load->view('admin/footer');
	}
}
