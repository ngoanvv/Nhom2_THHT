<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blkquangcao_right_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){
        
		$this->load->model('f_homemodel');
		
			
		//nội dung 
		$data['slides'] = $this->f_homemodel->get_data('images',array(
            'type' => 'ads_right',
            /*'lang' => $this->language*/
        ));
		
					
					
			$this->load->view('view',$data);
    }
}