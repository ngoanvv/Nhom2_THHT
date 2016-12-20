<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function login(){
        $this->db->select('*');
        $this->db->from('user');
        $data = $this->db->get();
        return $data->result_array();
    }

    public function register(){
        $data = array(
            'username' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->db->insert('user', $data);
    }

    public function update_avatar($id, $file){
        $data = array(
            'avatar' => $file,
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function view_profile($id){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.id', $id);
        $data = $this->db->get();
        return $data->row_array();
    }

    public function update_profile ($id){
        $data = array(
            'username' => $this->input->post('username'),
            'date' => $this->input->post('date'),
            'address' => $this->input->post('address'),
            'description' => $this->input->post('description')
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function view_user(){
        $this->db->select('*');
        $this->db->from('user');
        $data = $this->db->get();
        return $data->result_array();
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function update_role($id){
        $data = array(
            'level' => $this->input->post('select'),
        );
        $this->db->where('user.id', $id);
        $this->db->update('user', $data);
    }

    public function update_group($id){
        $data = array(
            'group' => $this->input->post('select'),
        );
        $this->db->where('user.id', $id);
        $this->db->update('user', $data);
    }

    public function insert(){
        $date =  date("Y/m/d");
        $data = array(
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => 1
        );
        $this->db->insert('user', $data);
    }

    public function view_session(){
        $uc = $this->load->database('chikitsa',TRUE);
        $uc->select('*');
        $uc->from('ck_session');
        $data = $uc->get();
        return $data->row_array();
    }

}
