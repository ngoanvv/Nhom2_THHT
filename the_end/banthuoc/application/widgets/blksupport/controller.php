<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blksupport_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){
        
		$this->load->model('f_homemodel');
		
		
		$data['supports'] = $this->f_homemodel->GetData('support_online',array(
                'active' => '1'
            ),array('id','desc'),30,0);
			
			
      
			
			$this->load->view('view',$data);
    }
}