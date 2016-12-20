<?php

/**
 * Created by PhpStorm.
 * User: Hiep
 * Date: 09/10/2016
 * Time: 8:27 PM
 */
class Users_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get($offset, $limit){
        $this->db->select();
        $this->db->order_by("id","asc");
        $query = $this->db->get('user', $limit,$offset);
       // echo $this->db->last_query();
        return $query->result();
    }
    public function countlist() {
        $this->db->select('count(*) as total');
        $query = $this->db->get('user');
        $result = $query->row();
        return $result->total;
    }

    // đếm tổng số record trong table book
    function count_all(){
        return $this->db->count_all('user');
    }
    public function gets($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $query = $this->db->get('user');
        return $query->result_array();
        $rows= array();
        foreach ($query->result() as $row)
        {
            $rows[]= $row;
        }
        return $rows;
    }
    public function save($user){
        $this->db->insert('user', $user);
    }
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('user');
    }
    public function update($id,$data){
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
    public function login(){
        $this->db->select('*');
        $this->db->from('user');
        $data = $this->db->get();
        return $data->result_array();
    }
//    public function register($data){
//        $this->db->insert('user', $data);
//    }


}