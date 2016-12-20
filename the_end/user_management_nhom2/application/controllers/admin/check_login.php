<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Hiroshin
 * Date: 12/25/2015
 * Time: 12:09 AM
 */


//$_SESSION["session_user"] = "admin";
//$_SESSION["session_password"] = "huyhoangk57";
//H�m ?? kh?i t?o ??ng nh?p.
class Check_login extends CI_Controller  {

   function __construct(){
      parent::__construct();

       $this->load->helper('url');
       $this->load->library('session');



   }

   public function check(){
//if(isset($_SESSION["logout"])){
//    $a = 1;
//}else{
//    $a = 0;
//}
       $session = $this->session->all_userdata();
       $user = $this->model_user->view_profile($session['id_user']);
//       echo "<pre>";
//       var_dump($user);
//       die;
       if(isset($user)){
           $data = array(
               'email' => $user['email'],
               'password' => $user['password'],
           );
       }
       return $data ;
//    echo json_encode($check);die;
//        return $check;
   }
}
