<?php

Class Login_Database extends CI_Model{

	public function insertar($data){

		$name = $data['user_name'];
		$condition = "user_name = "."'".$name."'";
		
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		
		if($query->num_rows() == 0){

			$this->db->insert('usuarios', $data);
			if($this->db->affected_rows() > 0){
				//echo "<br><br><br>hola";

				return true;

			}
		}
		else{
			return false;

		}
	}

	public function login($data){
		
		$this->load->library('encryption');
	    $this->encryption->initialize(
	        array(
	                'cipher' => 'aes-256',
	                'mode' => 'ctr',
	                'key' => '<a 32-character random string>'
	        )
		);

				

		//$condition= "user_name ="."'".$data['user_name']."' AND "."user_pass ="."'".$data['user_pass']."'";
		$condition= "user_name ="."'".$data['user_name']."'";
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 1){

			$result = $query->result();
			$pass_en = $result[0]->user_pass;
			$pass_de = $this->encryption->decrypt($pass_en);			
			
			if($pass_de == $data['user_pass'] ){
				return true;
			}
			
		}
		else{
			return false;
		}
	}

	public function informacion_usuario($username){

		$condition = "user_name ="."'".$username."'";		
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where($condition);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1){
			//var_dump($query->result());
			return $query->result();

		}
		else{
			return false;
		}
	}
}

?>