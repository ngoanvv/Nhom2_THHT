<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blkdanhmuc_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){
        
		$this->load->model('f_homemodel');
		
			
			//danh mục cha
			$data              = array();
		    $data['cate_all']=$this->f_homemodel->get_data('product_category',array(
            'lang' => $this->language,'parent_id'=>0
        ));
		   $data['cate']=$data['cate_all'];
		   //danh mục subcon
		   
		     $data['cate_sub'] = $this->f_homemodel->get_data('product_category',array(
                'parent_id !='=>0),array());
				
					
					
			$this->load->view('view',$data);
    }
}