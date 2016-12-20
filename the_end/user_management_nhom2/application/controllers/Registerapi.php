<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * Keys Controller
 * This is a basic Key Management REST controller to make and delete keys
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Registerapi extends REST_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('users_model');
        $this->load->library('session');
    }
    public function index_post(){
        $data = array(
            'username' => $this->post('username'),
            'email' => $this->post('email'),
            'password' => $this->post('password')
        );
        if(isset($data) &&!empty($data)){
            $this->users_model->save($data);
            $this->response(array('response'=> 'Đăng ký thành công ! vui lòng đăng nhập vào hệ thống'),200);
        }

    }
}
?>