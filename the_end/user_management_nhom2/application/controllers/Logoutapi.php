<?php

/**
 * Created by PhpStorm.
 * User: Hiep
 * Date: 21/10/2016
 * Time: 4:59 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';
class Logoutapi  extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('users_model');
        $this->load->library('session');
    }
    public function index_post(){
        $data1 = $this->session->all_userdata();
        if(isset($data1) && ($data1!=null)){
            $this->session->sess_destroy();
            $this->response(array('response'=> "Bạn đã thoát khỏi hệ thống"),200);
        }if(!isset($data1) && ($data1==null)){
            $this->response(array('response'=> 'Tài khoản của bạn chưa đăng nhập'),400);
        }


    }

}