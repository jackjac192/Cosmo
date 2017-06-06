<?php

class Aseguradora_model extends CI_Model{

	function __construct(){

		parent::__construct();
	}

	public function listarAseguradorasSelect(){

		$this->db->select('*');
		$this->db->from('aseguradora');		
		$query = $this->db->get();
		return $query->result();
	}

	public function listarAseguradorasSelectd(){

		$this->db->select('*');
		$this->db->from('aseguradora');		
		$query = $this->db->get();
		return $query->result_array();
	}
	public function listarRamasSelect($id){


		/*
		CREATE VIEW planillas AS SELECT reportes.expediente, reportes.descripcion, aseguradora.nombre_ase, rama.nombre_rama, conductor.nombre FROM reportes INNER JOIN aseguradora ON reportes.id_aseguradora = aseguradora.id INNER JOIN conductor ON reportes.id_conductor = conductor.id INNER JOIN (ase_rama INNER JOIN rama ON ase_rama.id_rama= rama.id) ON reportes.id_aseguradora = ase_rama.id_ase


		CREATE VIEW planillas 
		AS SELECT reportes.expediente, asegurado.nombre AS as_enombre, asegurado.cedula AS as_cedula, vehiculo.placa, aseguradora.nombre_ase, rama.nombre_rama, conductor.nombre AS co_nombre, conductor.cedula AS co_cedula, reportes.tipo_servicio, reportes.lugar_recoge, reportes.lugar_entrega, reportes.km_servicio, reportes.km_valor, reportes.fecha, reportes.hora
		FROM reportes 
		INNER JOIN aseguradora 
		ON reportes.id_aseguradora = aseguradora.id 
		INNER JOIN conductor 
		ON reportes.id_conductor = conductor.id 
		INNER JOIN rama
		ON reportes.id_rama = rama.id
		INNER JOIN asegurado
		ON reportes.id_asegurado = asegurado.id
		INNER JOIN vehiculo
		ON reportes.id_vehiculo = vehiculo.id

		*/

		//echo $id;
		$this->db->select('*');
		$this->db->from('ase_rama');
		$this->db->from('rama');
		$this->db->where('ase_rama.id_rama = rama.id');
		$this->db->where('ase_rama.id_ase',$id);
		
		$query = $this->db->get();

		return $query->result();

	}

	

	public function get_id($id_aseguradora){
		
		$condition = "id = "."'".$id_aseguradora."'";
		
		$this->db->select('*');
		$this->db->from('aseguradora');
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
		
		
	

	public function get_id_rama($id_rama){
		
		$condition = "id = "."'".$id_rama."'";
		
		$this->db->select('*');
		$this->db->from('rama');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows() == 0){
			return false;
		}
		else{
			$data = $query->result();					
			return $data[0];
		}
		
	}




}


?>