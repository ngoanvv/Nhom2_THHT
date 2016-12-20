<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blkquangcao_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){
        
		$this->load->model('f_homemodel');
		
			
		//nội dung 
		$data['slides_left'] = $this->f_homemodel->get_data('images',array(
            'type' => 'ads_left',
            /*'lang' => $this->language*/
        ));
		
		
		$data['slides_right'] = $this->f_homemodel->get_data('images',array(
            'type' => 'ads_right',
            /*'lang' => $this->language*/
        ));
		
					
					
			$this->load->view('view',$data);
    }
}