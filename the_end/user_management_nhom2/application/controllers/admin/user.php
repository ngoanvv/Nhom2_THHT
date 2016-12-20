<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('model_user');
         $this->load->model('model_session');
        $this->load->model('model_role');
        $this->load->library('form_validation');
    }

	public function index(){
        $data = array(
            'title' => 'User',
            'user' => $this->model_user->view_user(),
             'session'=> $this->model_session->view(),
        );

        $this->load->view('user/header', isset($data)?$data:'NULL');
        $this->load->view('admin/user/user.php', isset($data)? $data:'NULL');
        $this->load->view('user/footer');
	}

    public function insert(){
        if($this->input->post('insert')){
            $this->model_user->insert();
            redirect('admin/user');
        }
        $data = array(
             'session'=> $this->model_session->view(),
             );
        $this->load->view('user/header', isset($data)?$data:'NULL');
        $this->load->view('admin/user/insert.php', isset($data)? $data:'NULL');
        $this->load->view('user/footer');
    }

    public function delete($id){
        $data = $this->model_user->view_profile($id);
        if(isset($data) && !empty($data)){
            $this->model_user->delete($id);
            redirect('admin/user');
        }
    }

    public function edit_role($id){
         $data = array(
             'session'=> $this->model_session->view(),
             );
        if($this->input->post('role')){
            $this->form_validation->set_rules('select', 'Quyền', 'required');
            $this->form_validation->set_message('required', '{field} không được bỏ trống !');
            if ($this->form_validation->run()){
                $this->model_user->update_role($id);
                redirect('admin/user');
            }
        }
        $this->load->view('user/header', isset($data)?$data:'NULL');
        $this->load->view('admin/user/edit_role', isset($data)? $data:'NULL');
        $this->load->view('user/footer');
    }

    public function edit_group($id){
         $data = array(
             'session'=> $this->model_session->view(),
             );
        if($this->input->post('group')){
            $this->form_validation->set_rules('select', 'Quyền', 'required');
            $this->form_validation->set_message('required', '{field} không được bỏ trống !');
            if ($this->form_validation->run()){
                $this->model_user->update_group($id);
                redirect('admin/user');
            }
        }
        $this->load->view('user/header', isset($data)?$data:'NULL');
        $this->load->view('admin/user/edit_group', isset($data)? $data:'NULL');
        $this->load->view('user/footer');
    }

}
