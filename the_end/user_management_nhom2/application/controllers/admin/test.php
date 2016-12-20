<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->library("session");

    }

    public function check_login(){
//if(isset($_SESSION["logout"])){
//    $a = 1;
//}else{
//    $a = 0;
//}
        var_dump($_SESSION);die;
        $check = array(
            "check_user"=>$_SESSION["email"],
            "check_pass"=>$_SESSION["password"],
            "check_session"=> $_SESSION["email"],
//            "check_logout"=>$_POST["form-logout"]
        );
        echo json_encode($check);die;
        return $check;
    }
}
