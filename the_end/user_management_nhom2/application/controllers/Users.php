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
class Users extends REST_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->model('users_model');
    }

    public function index_get($offset=0){
        $config['base_url'] = base_url('users/index');
        $config['total_rows'] = $this->users_model->countlist();
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        $user = $this->users_model->get($offset, 5);

        if(!is_null($user)){
            foreach ($user as $item) {
                $data[] = array(
                    'id' => $item->id,
                    'name' => $item->username,
                    'password'=>$item->password,
                    'email'=>$item->email
                );
            }
            $this->response(array('status' => 'SUCCESS',
                'number' => count($data),
                'data' => ($data),

                'message' => 'OK',));

            //echo json_encode($data);
        }else{
            $this->response(array('error'=> ' Không có dữ liệu '),400);
        }
    }
    public function find_get($id){
        if(!$id){
            $this->response(null,400);
        }
        $user = $this->users_model->gets($id);
        if(!is_null($user)){
            $this->response(array('response'=>$user),200);

        }else{
            $this->response(array('error'=> ' Không có dữ liệu '),400);
        }
    }
    public function index_post(){
        $time= date("Y-m-d");
        $data = array(
            'email'=>$this->post('email'),
            'username' => $this->post('username'),
            'password'=> $this->post('password'),
            'date'=> $time,
            'avatar'=>$this->post('avatar'),
            'address'=>$this->post('address'),
            'description'=>$this->post('description'),
            'group'=>$this->post('group'),
            'level'=>$this->post('level'),
        );
        if((isset($data) && !empty($data))){
            $this->users_model->save($data);
            $this->response(array('response'=>"Thêm thành công"),200);
        }else{
            $this->response(array('error'=> ' Không thêm được dữ liệu '),400);
        }
    }

    public function index_put($id){
        $time= date("Y-m-d");
        $data = array(
            'email'=>$this->put('email'),
            'username' => $this->put('username'),
            'password'=> $this->put('password'),
            'date'=> $time,
            'avatar'=>$this->put('avatar'),
            'address'=>$this->put('address'),
            'description'=>$this->put('description'),
            'group'=>$this->put('group'),
            'level'=>$this->put('level'),
        );
        if((isset($data) && !empty($data))){
            $this->users_model->update($id,$data);
            $this->response(array('response'=> 'Update thành công'),200);
        }else{
            $this->response(array('error'=> ' Không update được'),400);
        }

    }
    public function index_delete($id){

        if(isset($id) && !empty($id)){
            $this->users_model->delete($id);
            $this->response(array('response'=> 'Xóa thành công'),200);
        }else{
            $this->response(array('error'=> ' Không xóa được'),400);
        }
    }
}
?>