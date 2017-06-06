<?php

class Planillas_model extends CI_Model{

	function __construct(){

		parent::__construct();
	}

	
	

		/*
		
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

	

	public function get_id_one($expediente){
		
		$condition = "expediente = "."'".$expediente."'";
		
		$this->db->select('*');
		$this->db->from('planillas');
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
			
			return $data;
		}

		
	}

	public function get_id_alls(){
				
		$this->db->select('*');		
		$this->db->from('planillas');
		$this->db->order_by("fecha", "desc");
		
		$query = $this->db->get();
		//var_dump($data[0]->id);

		if($query->num_rows() == 0){
			return false;
		}
		else{
			$data = $query->result();
			//var_dump($data);
			
			return $data;
		}

		
	}

	public function get_ases($ase,$fechaI, $fechaF){
		
		$condition = "nombre_ase = '".$ase."' and fecha BETWEEN '".$fechaI."' AND '".$fechaF."'";
		$this->db->select('*');		
		$this->db->from('planillas');
		$this->db->where($condition);
		$this->db->order_by("fecha", "desc");
		
		$query = $this->db->get();
		//var_dump($data[0]->id);

		
		return $query->result_array();
		//var_dump($data);
					
	}



	public function num_planillas(){


		$number = $this->db->query('SELECT count(*) as number FROM planillas')->row()->number;
		return intval($number);

	}

	public function get_pagination($number_per_page){
		$this->db->order_by("fecha", "desc");
		$this->db->order_by("hora", "desc");
		return $this->db->get('planillas', $number_per_page, $this->uri->segment(3))->result();
	}
		
		
		
	



}


?>