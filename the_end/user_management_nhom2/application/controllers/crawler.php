<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crawler extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('model_user');
        $this->load->model('model_session');
        $this->load->library('session');
    }

    public function home(){
          $data = array(
  'session'=> $this->model_session->view(),
            );
          $this->load->view('user/header', $data);
           $this->load->view('user/home' , $data);
           $this->load->view('user/footer', $data);
    }



    public function hvolindex() {
           $username = "root";
           $password = "root";

//set the directory for the cookie using defined document root var

//login form action url
           $url="http://localhost/the_end/hvol/index.php/login";
           $postinfo = "email=".$username."&password=".$password;

           $cookie_file_path = APPPATH."/cookie.txt";

           $ch = curl_init();
           curl_setopt($ch, CURLOPT_HEADER, false);
           curl_setopt($ch, CURLOPT_NOBODY, false);
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

           curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
//set the cookie the site has for certain features, this is optional
           curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
           curl_setopt($ch, CURLOPT_USERAGENT,
               "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
           curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

           curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
           curl_setopt($ch, CURLOPT_POST, 1);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
           curl_exec($ch);

//page with the content I want to grab
           curl_setopt($ch, CURLOPT_URL, "http://localhost/the_end/hvol/index.php/hospice/super/accounts/superVolMgr");
//do stuff with the info with DomDocument() etc
           $html = curl_exec($ch);
           $data=array(
            'view_hvol' => $html ,
            'session'=> $this->model_session->view(),
            );
           // echo "<pre>";
           // var_dump($data['session']);
           // die;
           curl_close($ch);
           $this->load->view('user/header', $data);
           $this->load->view('user/hvol/home' , $data);
           $this->load->view('user/footer', $data);
    }

public function hvolview(){
      $username = "root";
           $password = "root";

//set the directory for the cookie using defined document root var

//login form action url
           $url="http://localhost/the_end/hvol/index.php/login";
           $postinfo = "email=".$username."&password=".$password;

           $cookie_file_path = APPPATH."/cookie.txt";

           $ch = curl_init();
           curl_setopt($ch, CURLOPT_HEADER, false);
           curl_setopt($ch, CURLOPT_NOBODY, false);
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

           curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
//set the cookie the site has for certain features, this is optional
           curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
           curl_setopt($ch, CURLOPT_USERAGENT,
               "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
           curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

           curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
           curl_setopt($ch, CURLOPT_POST, 1);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
           curl_exec($ch);

//page with the content I want to grab
           curl_setopt($ch, CURLOPT_URL, "http://localhost/the_end/hvol/index.php/hospice/reports/su_annual/opts");
//do stuff with the info with DomDocument() etc
          

           $html = curl_exec($ch);
           //$data['view_hvol'] = $html;
            $data=array(
            'view_hvol' =>$html,
            'session'=>$this->model_session->view(),
            );
           curl_close($ch);
           $this->load->view('user/header', $data);
           $this->load->view('user/hvol/view' , $data);
           $this->load->view('user/footer', $data);

}
public function chitkitsaindex(){
      $username = "admin";
           $password = "admin";

//set the directory for the cookie using defined document root var

//login form action url
           $url="http://localhost/the_end/chikitsa/login/index";
           $postinfo = "email=".$username."&password=".$password;

           $cookie_file_path = APPPATH."/cookie.txt";

           $ch = curl_init();
           curl_setopt($ch, CURLOPT_HEADER, false);
           curl_setopt($ch, CURLOPT_NOBODY, false);
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

           curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
//set the cookie the site has for certain features, this is optional
           curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
           curl_setopt($ch, CURLOPT_USERAGENT,
               "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
           curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

           curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
           curl_setopt($ch, CURLOPT_POST, 1);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
           curl_exec($ch);

//page with the content I want to grab
           curl_setopt($ch, CURLOPT_URL, "http://localhost/the_end/chikitsa/appointment/index");
//do stuff with the info with DomDocument() etc
           $html = curl_exec($ch);
           
           //$data['view_chikitsa'] = $html;
            $data=array(
            'view_chikitsa' =>$html,
            'session'=>$this->model_session->view(),
            );
           curl_close($ch);
           $this->load->view('user/header', $data);
           $this->load->view('user/chikitsa/home' , $data);
           $this->load->view('user/footer', $data);

}
public function banhangindex(){
      $username = "admin";
           $password = "123456";

//set the directory for the cookie using defined document root var

//login form action url
           $url="http://localhost/the_end/banthuoc/vnadmin/login";
           $postinfo = "email=".$username."&password=".$password;

           $cookie_file_path = APPPATH."/cookie.txt";

           $ch = curl_init();
           curl_setopt($ch, CURLOPT_HEADER, false);
           curl_setopt($ch, CURLOPT_NOBODY, false);
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

           curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
//set the cookie the site has for certain features, this is optional
           curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
           curl_setopt($ch, CURLOPT_USERAGENT,
               "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
           curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

           curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
           curl_setopt($ch, CURLOPT_POST, 1);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
           curl_exec($ch);

//page with the content I want to grab
           curl_setopt($ch, CURLOPT_URL, "http://localhost/the_end/banthuoc/vnadmin/product/categories");
//do stuff with the info with DomDocument() etc
            $html = curl_exec($ch);
           
           //$data['view_banhang'] = $html;
             $data=array(
            'view_banhang' =>$html,
            'session'=>$this->model_session->view(),
            );

           curl_close($ch);
           $this->load->view('user/header', $data);
           $this->load->view('user/banhang/home' , $data);
           $this->load->view('user/footer', $data);



}
public function banhangview(){
      $username = "admin";
           $password = "123456";

//set the directory for the cookie using defined document root var

//login form action url
           $url="http://localhost/the_end/banthuoc/vnadmin/login";
           $postinfo = "email=".$username."&password=".$password;

           $cookie_file_path = APPPATH."/cookie";

           $ch = curl_init();
           curl_setopt($ch, CURLOPT_HEADER, false);
           curl_setopt($ch, CURLOPT_NOBODY, false);
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

           curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
//set the cookie the site has for certain features, this is optional
           curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
           curl_setopt($ch, CURLOPT_USERAGENT,
               "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
           curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

           curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
           curl_setopt($ch, CURLOPT_POST, 1);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
           curl_exec($ch);

//page with the content I want to grab
           curl_setopt($ch, CURLOPT_URL, "http://localhost/the_end/banthuoc/vnadmin/order/orders");
//do stuff with the info with DomDocument() etc
           $html = curl_exec($ch);
           //$data['view_banhang'] = $html;
            $data=array(
            'view_banhang' =>$html,
            'session'=>$this->model_session->view(),
            );
           curl_close($ch);
           $this->load->view('user/header', $data);
           $this->load->view('user/banhang/view' , $data);
           $this->load->view('user/footer', $data);

}
    
}
