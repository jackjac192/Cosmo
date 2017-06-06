<?php

class Vehiculo_model extends CI_Model{

	function __construct(){

		parent::__construct();
	}
	

	public function insertar($data){

		
		$this->db->insert('vehiculo', $data);
			if($this->db->affected_rows() > 0){
				//echo "<br><br><br>hola";

				//return true;
				$this->db->select(' LAST_INSERT_ID() as id');
				$this->db->from('vehiculo');
				$query = $this->db->get();
				$data = $query->result();
				//var_dump($data[0]->id);
				return $data[0];
				var_dump($data[0]);

			}
				
		

		
		
	}


	public function editar($data, $id){


		$condition = "id = "."'".$id."'";		
		$this->db->where($condition);
		$this->db->update('vehiculo', $data); 

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

		$placa = $data['placa'];
		$condition = "placa = "."'".$placa."'";
		
		$this->db->select('*');
		$this->db->from('vehiculo');
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
		$this->db->from('vehiculo');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		$data = $query->result();
		//var_dump($data[0]->id);
		return $data[0];
	}


}


?>