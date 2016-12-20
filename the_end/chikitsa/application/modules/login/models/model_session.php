<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_session extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function view(){
        $this->db->select('*');
        $this->db->from('session');
        $data = $this->db->get();
        return $data->result_array();
    }

    public function delete(){
        ///$this->db->emty('session');
        $this->db->empty_table('ck_session');
    }

    public function insert($data){
        $this->db->insert('session', $data);
    }

}
