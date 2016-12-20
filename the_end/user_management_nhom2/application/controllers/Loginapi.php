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
class Loginapi extends REST_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('users_model');
        $this->load->library('session');
    }
    public function index_post(){
        $data = $this->users_model->login();
        $flash = false;
        foreach($data as $val){
            if($val['email'] == $this->post('email') && $val['password'] == $this->post('password')) {
                $flash = true;
            }
        }
        if($flash == false ){
            $this->response(array('response'=> 'Thông tin đăng nhập không đúng ! vui lòng đăng nhập lại'),400);
        } else {
            foreach($data as $val123){
                if($val123['email'] == $this->post('email') && $val123['password'] == $this->post('password')) {
                    $session = array(
                        'id_user' => $val123['id'],
                        'username'  => $val123['username'],
                        'email'     => $val123['email'],
                    );
                    $this->session->set_userdata($session);
                }
            }
            $this->response(array('response'=> 'Đăng nhập đúng !'),200);
        }
    }
}
?>