<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('contact_model');
    }
    //index
    public function index(){
        $data = array();
        if(isset($_POST['sendcontact'])){
            $arr=array('full_name' => $this->input->post('full_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'country' => $this->input->post('country'),
                'comment' => $this->input->post('comment'),
                'time' => time(),
            );
            $id=$this->contact_model->Add('contact',$arr);

            if($id){
                $_SESSION['message']="Bạn đã gửi thông tin thành công!!!";
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['banners'] = $this->contact_model->get_data('images',array(
            'type' => 'page'
        ),array('sort' => 'asc'));

        $site_name='Liên Hệ';
        $site_keyword='Liên Hệ';
        $site_description='';

        $seo = array(
            'title' => 'Liên Hệ'
        );
        $this->LoadHeader(null,$seo,true);
        $this->LoadLeft();
        $this->load->view('contact/view_contact',$data);
		//$this->LoadRight();
        $this->LoadFooter();
    }

}