<?php

class Asegurado_model extends CI_Model{

	function __construct(){

		parent::__construct();
	}
	

	public function insertar($data){

		$cedula = $data['cedula'];
		$condition = "cedula = "."'".$cedula."'";
		
		$this->db->select('*');
		$this->db->from('asegurado');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		$this->db->insert('asegurado', $data);
		return true;
		/*
		if($query->num_rows() == 0){

			
			if($this->db->affected_rows() > 0){
				//echo "<br><br><br>hola";

				

			}
		}
		else{
			return true;

		}

		*/
	}

	public function editar($data, $id){


		$condition = "id = "."'".$id."'";		
		$this->db->where($condition);
		$this->db->update('asegurado', $data); 

		if($this->db->affected_rows() > 0){
			//echo "<br><br><br>hola";

			return true;
			echo "yes";

		}
		else
		{
			return false;
		}
		
		
	}

	public function get_id($data){

		$cedula = $data['cedula'];
		$condition = "cedula = "."'".$cedula."'";
		
		$this->db->select('*');
		$this->db->from('asegurado');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		$data = $query->result();
		//var_dump($data[0]->id);
		return $data[0]->id;
	}

	public function get($id){

		$condition = "id = "."'".$id."'";
		
		$this->db->select('*');
		$this->db->from('asegurado');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		$data = $query->result();
		//var_dump($data[0]->id);
		return $data[0];
	}


}


?>