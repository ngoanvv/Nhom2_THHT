<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Hiep
 * Date: 08/11/2016
 * Time: 7:29 PM
 */
class Model_session extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();

    }

    public function view(){
        $uc = $this->load->database('chikitsa',TRUE);
        $uc->select('*');
        $uc->from('ck_session');
        $data = $uc->get();
        return $data->result_array();
    }

    public function delete(){
        $uc = $this->load->database('chikitsa',TRUE);
        $uc->empty_table('ck_session');
    }

    public function insert($data){
        $uc = $this->load->database('chikitsa',TRUE);
        $uc->insert('ck_session', $data);
    }

}