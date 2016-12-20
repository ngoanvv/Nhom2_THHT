<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index(){
//	    echo "<pre>";
//        var_dump($_SESSION) ;
//       // echo $_SESSION['id_user'];
//        die;
        $this->load->view('admin/header');
        $this->load->view('admin/category');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
	}
}
