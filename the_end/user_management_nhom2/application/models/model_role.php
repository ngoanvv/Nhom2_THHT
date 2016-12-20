<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_role extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function view_role(){
        $this->db->select('*');
        $this->db->from('role');
        $data = $this->db->get();
        return $data->result_array();
    }

    public function view_group(){
        $this->db->select('*');
        $this->db->from('group');
        $data = $this->db->get();
        return $data->result_array();
    }

}
