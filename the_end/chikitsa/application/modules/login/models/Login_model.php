<?php

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
		$this->load->database();
    }
    
    public function get_current_version(){	
		$query = $this->db->get('version');
		$row = $query->row();        
		return $row->current_version;       
    }
//    public function login(){
//        $this->db->select('*');
//        $this->db->from('user');
//        $data = $this->db->get();
//        return $data->result_array();
//    }
    function login($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $query = $this->db->get("users");
		//echo $this->db->last_query();
        if ($query->num_rows() > 0) {
			$result = $query->row();
			return $result;
        }
        return array();
    }
	function is_active($username) {
		$this->db->where("username", $username);
        $query = $this->db->get("users");
		$row = $query->row();        
		return $row->is_active;
	}
}

?>
