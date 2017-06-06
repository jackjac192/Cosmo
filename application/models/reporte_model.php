<?php

class Reporte_model extends CI_Model{

	function __construct(){

		parent::__construct();
	}

	
	public function insertar($data){

		$expediente = $data['expediente'];
		$condition = "expediente = "."'".$expediente."'";
		
		$this->db->select('*');
		$this->db->from('reportes');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		
		if($query->num_rows() == 0){

			$this->db->insert('reportes', $data);
			if($this->db->affected_rows() > 0){
				//echo "<br><br><br>hola";

				return true;

			}

		}
		else{
			return false;

		}
	}

	public function get_id($expediente){
		
		$condition = "expediente = "."'".$expediente."'";
		
		$this->db->select('*');
		$this->db->from('reportes');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 0){
			return false;
		}
		else{
			$data = $query->result();
			//var_dump($data[0]->id);
			
			return $data[0];
		}

		
	}


	public function editar($data, $id){
		
		$condition = "id = "."'".$id."'";
		$this->db->where($condition);
		$this->db->update('reportes', $data); 

		if($this->db->affected_rows() > 0){
			//echo "<br><br><br>hola";

			return true;

		}
		else
		{
			return false;
		}


	}

	public function eliminar($data){

		$this->db->where('expediente', $data);
		$this->db->delete('reportes');

		if($this->db->affected_rows() > 0){
			//echo "<br><br><br>hola";

			return true;

		}
		else
		{
			return false;
		}
	}




}


?>