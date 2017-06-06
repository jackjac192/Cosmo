<?php

class Conductor_model extends CI_Model{

	function __construct(){

		parent::__construct();
	}


	public function insertar($data){

		$cedula = $data['cedula'];
		$condition = "cedula = "."'".$cedula."'";
		
		$this->db->select('*');
		$this->db->from('conductor');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		
		if($query->num_rows() == 0){

			$this->db->insert('conductor', $data);
			if($this->db->affected_rows() > 0){
				//echo "<br><br><br>hola";

				return true;

			}
		}
		else{
			return false;

		}
	}


	public function editar($data, $id){


		$condition = "id = "."'".$id."'";		
		$this->db->where($condition);
		$this->db->update('conductor', $data); 

		if($this->db->affected_rows() > 0){
			//echo "<br><br><br>hola";

			return $this->db->affected_rows();
			//echo "yes";

		}
		else
		{
			return $this->db->affected_rows();
		}
		
		
	}
	public function get_id($data){

		

		$condition = "cedula = "."'".$data."'";
		
		$this->db->select('*');
		$this->db->from('conductor');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		//var_dump($data[0]->id);

		if($query->num_rows() == 0){
			return false;
		}
		else{
			$data = $query->result();
			//var_dump($data);
			
			return $data[0];
		}
	}

	public function get_idx($data){

		

		$condition = "cedula = "."'".$data."'";
		
		$this->db->select('*');
		$this->db->from('conductor');
		$this->db->where($condition);
		$this->db->order_by("nombre", "desc");
		$this->db->limit(1);
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



	public function get_alls(){
	
		
		$this->db->select('*');
		$this->db->from('conductor');
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

	public function num_conductor(){


		$number = $this->db->query('SELECT count(*) as number FROM conductor')->row()->number;
		return intval($number);

	}

	public function get_pagination($number_per_page){
		$this->db->order_by("nombre", "desc");		
		return $this->db->get('conductor', $number_per_page, $this->uri->segment(3))->result();
		$this->db->order_by("nombre", "desc");
	}

	public function get_paginationAjax($number_per_page, $nombre){
		
		$this->db->order_by("nombre", "desc");		
		$this->db->like('nombre', $nombre);
		return $this->db->get('conductor', $number_per_page, $this->uri->segment(3))->result();
		$this->db->order_by("nombre", "desc");
	}


	public function get($id){

		$condition = "id = "."'".$id."'";
		
		$this->db->select('*');
		$this->db->from('conductor');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		$data = $query->result();
		//var_dump($data[0]->id);
		return $data[0];
	}

	public function eliminar($data){

		$this->db->where('cedula', $data);
		$this->db->delete('conductor');

		//var_dump($this->db->affected_rows());
		if($this->db->affected_rows() > 0){
			//echo "<br><br><br>hola";

			return $this->db->affected_rows();

		}
		else
		{
			return $this->db->affected_rows();
		}
	}



}


?>