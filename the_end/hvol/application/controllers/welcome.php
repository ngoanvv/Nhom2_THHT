<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

   function __construct(){
      global $gstrFName;
      parent::__construct();
      session_start();
      setGlobals($this);
       $this->load->model('model_session');
   }

	public function index()	{
   //---------------------------------------------------------------------
   //
   //---------------------------------------------------------------------
      global $gstrFName;
      $this->load->model('admin/muser_log', 'clsUserLog');
      $this->load->model('admin/mpermissions', 'perms');
      $this->load->model('admin/muser_accts',  'cusers');

      $displayData = array();

         // test for special case where upgrade fails but user makes it
         // to the welcome page
        $a=$this->model_session->view();
//          var_dump($a);die;
//
//
//

        if(!isset($a) && $a == Null){
         redirect('login/signout');
      }

      $sRpt = new stdClass;
      $sRpt->lUserID = null;
      $displayData['lNumTotLogins'] =
                      $this->clsUserLog->lNumRecsLoginLogReport(
                                   $sRpt,
                                   false, 0, 0);

      $displayData['title']        = 'Welcome to the Hospice Volunteer Database!';
      $displayData['pageTitle']    = 'Hello, '.htmlspecialchars($gstrFName).'!';
      $displayData['mainTemplate'] = 'welcome';
      $displayData['nav'] = $this->mnav_brain_jar->navData();
      $this->load->vars($displayData);
      $this->load->view('template');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */