<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blkproduct_nb_silde_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){
        
		$this->load->model('f_homemodel');
		
		
		
		//san pham mới	
         $data['pros'] = $this->f_homemodel->get_products(array(
            'product.hot' => 1,
            'product.lang' => $this->language
        ),100,0);
		
		
		
		
	    $this->load->view('view',$data);
    }
}