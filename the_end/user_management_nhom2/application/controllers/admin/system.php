<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('model_user');
        $this->load->model('model_role');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $session = $this->session->all_userdata('session');

//        echo "<pre>";
//        var_dump($session);
//        die;
//        if(isset($session['email'])){

            $data = array(
                'title' => 'User',
                'session' => $this->model_user->view_session()
                // 'user' => $this->model_user->view_user(),
            );
//                echo "<pre>";
//        var_dump($data['session']);
//        die;
            $this->load->view('admin/header', isset($data) ? $data : 'NULL');
            $this->load->view('admin/content', isset($data)?$data:'null');
            // $this->load->view('admin/user/user.php', isset($data) ? $data : 'NULL');
            $this->load->view('admin/footer');
//        }else{
//            redirect('login');
//        }

    }
}