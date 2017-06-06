<?php

class Usuario_model extends CI_Model{

	function __construct(){

		parent::__construct();
	}

	public function get_id($id){
		
		$condition = "id = "."'".$id."'";
		
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		//var_dump($data[0]->id);

		if($query->num_rows() == 0){
			
			return false;
		}
		else{
			$data = $query->result();
			//var_dump($data[0]->id);
			
			return $data[0];
		}

		
	}


}


?>