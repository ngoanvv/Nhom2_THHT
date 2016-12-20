<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blkmenu_right_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){
        
		$this->load->model('f_homemodel');
		
		//menu left
		
		 $data['menus_right'] = $this->f_homemodel->get_data('menu',array('position'=>'right','parent_id'=>0,'lang' => $this->language),
                array('sort'=>'')
            );
			
			
	
					
					
			$this->load->view('view',$data);
    }
}