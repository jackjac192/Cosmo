<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Login_Database');
		$this->load->model('conductor_model');

		$this->form_validation->set_message('required', ' Este campo es obligatorio');
		$this->form_validation->set_message('integer', ' - el campo %s deve poseer solo numeros enteros');
		$this->form_validation->set_message('is_unique', ' - el campo %s ya esta registrado');
		$this->form_validation->set_message('max_length', ' - el campo %s debe tener un Maximo de %d Caracteres');
		$this->form_validation->set_message('valid_email', ' - el %s es inválido');
	}

	public function indexAjax(){
		$nombreAjax =str_replace(' ', '', $this->input->post('nombreConductorAjax'));
		$this->load->library('pagination');
		$config['base_url'] = base_url()."conductor/indexAjax";
		$config['total_rows'] = $this->conductor_model->num_conductor();
		$config['per_page'] = 100;
		$config['uri_segment'] = 3;
		$config['num_links'] = 2;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);



		$data['query'] = $this->conductor_model->get_paginationAjax($config['per_page'],$nombreAjax);
		// var_dump($data['query']);
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('conductor/indexAjax', $data);
		
	}
	
	public function index()	{

		if(!$_POST){

		$this->load->library('pagination');
		$config['base_url'] = base_url()."conductor/index";
		$config['total_rows'] = $this->conductor_model->num_conductor();
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;
		$config['num_links'] = 2;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);



		$data['query'] = $this->conductor_model->get_pagination($config['per_page']);
		// var_dump($data['query']);
		$data['pagination'] = $this->pagination->create_links();

		
		$this->load->view('header/header');
		$this->load->view('conductor/index', $data);
		$this->load->view('footer/footer');

	}
	else
		{	

			$this->form_validation->set_rules('cedula', ' ', 'trim|required');

			if($this->form_validation->run() == FALSE)
			{

				$this->load->library('pagination');
				$config['base_url'] = base_url()."conductor/index";
				$config['total_rows'] = $this->conductor_model->num_conductor();
				$config['per_page'] = 5;
				$config['uri_segment'] = 3;
				$config['num_links'] = 2;
				$config['full_tag_open'] = '<ul class="pagination">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = false;
				$config['last_link'] = false;
				$config['first_tag_open'] = '<li>';
				$config['first_tag_close'] = '</li>';
				$config['prev_link'] = '&laquo';
				$config['prev_tag_open'] = '<li class="prev">';
				$config['prev_tag_close'] = '</li>';
				$config['next_link'] = '&raquo';
				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';
				$config['last_tag_open'] = '<li>';
				$config['last_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<li class="active"><a href="#">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';

				$this->pagination->initialize($config);



				$data['query'] = $this->conductor_model->get_pagination($config['per_page']);
				// var_dump($data['query']);
				$data['pagination'] = $this->pagination->create_links();

				
				$this->load->view('header/header');
				$this->load->view('conductor/index', $data);
				$this->load->view('footer/footer');

			}
			else
			{

					$data['query'] = $this->conductor_model->get_idx(str_replace(' ', '', $this->input->post('cedula')));


					if(!$data['query']){
						$data['mensajeEr'] = "El número de cédula no existe en la base de datos";
						$data['atras'] = base_url()."conductor/";
						$this->load->view('header/header');
						$this->load->view('cpanel/aseguradoras/view/errorExpediente', $data);
						$this->load->view('footer/footer');
					}
					else{

						$this->load->view('header/header');
						$this->load->view('conductor/index', $data);
						$this->load->view('footer/footer');

					}

			}
		}
		


	}


public function ver_por_cedula($cedula){

			$data['query'] = $this->conductor_model->get_idx(str_replace(' ', '',$cedula));

			if(!$data['query']){
				$data['mensajeEr'] = "El número de cédula no existe en la base de datos";
				$data['atras'] = base_url()."conductor/";
				$this->load->view('header/header');
				$this->load->view('cpanel/aseguradoras/view/errorExpediente', $data);
				$this->load->view('footer/footer');
			}
			else{

				$this->load->view('header/header');
				$this->load->view('conductor/index', $data);
				$this->load->view('footer/footer');

			}

	}


function traer_conductor(){

	if($_POST){

		$data['query'] = $this->conductor_model->get_id(str_replace(' ', '', $this->input->post('cedula')));


			if(!$data['query']){
				
				echo 0;
			}
			else{

				echo $data['query']->nombre.":".$data['query']->telefono;				

			}
		
	}

}





	public function crear() {


		if(!$_POST){


			$this->load->view('header/header');
			$this->load->view('conductor/registrar_conductor.php');
			$this->load->view('footer/footer');
		}
		else
		{
			$this->form_validation->set_rules('cedula_conductor', ' ', 'trim|required');
			$this->form_validation->set_rules('nombre_conductor', ' ', 'trim|required');

			if($this->form_validation->run() == FALSE){
				$data['message_display'] = "Verifique que si un campo obligatorio falta por llenar";
				
				$this->load->view('header/header');
				$this->load->view('conductor/registrar_conductor.php', $data);
				$this->load->view('footer/footer');
			}
			else
			{
				$dataConductor = array(
					'id' => "",
					'cedula' => str_replace(' ', '', $this->input->post('cedula_conductor')),
					'nombre' => $this->input->post('nombre_conductor'),
					'telefono' => $this->input->post('telefono_conductor'),
					'correo' =>""
					);

				$registro = $this->conductor_model->insertar($dataConductor);

				if(!$registro){
					$data['message_display'] = "El número de cédula ya existe. ";
				
					$this->load->view('header/header');
					$this->load->view('conductor/registrar_conductor.php', $data);
					$this->load->view('footer/footer');

				}
				else
				{
					header("location: ".base_url()."conductor/conductor_registrado/".$dataConductor['cedula']);
				}
			}
		}
	}

	public function conductor_registrado($cedula){

		$data['conductor'] = $this->conductor_model->get_id($cedula);

		if(!$data['conductor']){
				$data['message_display'] = "El número de cédula no existe, puede proceder a registrar el nuevo conductor. ";
				
				$this->load->view('header/header');
				$this->load->view('conductor/registrar_conductor.php', $data);
				$this->load->view('footer/footer');
		}
		else
		{
			$data['query'] = "El conductor". $data['conductor']->nombre.", con número de identificación ".$data['conductor']->cedula." fue registrado exitosamente ";
				
				$this->load->view('header/header');
				$this->load->view('conductor/registrado.php', $data);
				$this->load->view('footer/footer');

		}

	}



	public function eliminar($cedula){

		$data['conductor'] = $this->conductor_model->get_id($cedula);

		if(!$data['conductor']){
			$data['mensajeEr'] = "El número de cédula no se encuentra en la base de datos.";
			$data['atras'] = base_url()."conductor/";
			$this->load->view('header/header');
			$this->load->view('cpanel/aseguradoras/view/errorExpediente' , $data);
			$this->load->view('footer/footer');

		}
		else
		{
			$this->load->view('header/header');
			$this->load->view('conductor/eliminar_conductor.php', $data);
			$this->load->view('footer/footer');
		}
	}





	public function eliminado($cedula){

	$eliminado = $this->conductor_model->eliminar($cedula);

		if($eliminado > 0 )
		{
			$data['query'] = "El conductor con el número de cédula: ".$cedula." fue eliminado de la base de datos";
		}
		else{
			if($eliminado == -1)
			{
				$data['query'] = "No puedes eliminar el conductor con el número de cédula: ".$cedula.", Porque existen reportes asociados a él.";	
			}
			else{
				$data['query'] = "Error, el número de cédula: ".$cedula." No se encuentra en la base de datos";	
			}
			
		}
		$this->load->view('header/header');
		$this->load->view('conductor/eliminado.php', $data);
		$this->load->view('footer/footer');

	}



	public function editar($cedula)
	{
		if(!$_POST)
		{	
			$data['conductor'] = $this->conductor_model->get_id($cedula);

			//var_dump($data['conductor']);
			if(!$data['conductor'])
				{	
					$data['mensajeEr'] = "El número de cédula no se encuentra en la base de datos.";
					$data['atras'] = base_url()."conductor/";
					$this->load->view('header/header');
					$this->load->view('cpanel/aseguradoras/view/errorExpediente', $data);
					$this->load->view('footer/footer');
				}

				else{
					
					$this->load->view('header/header');
					$this->load->view('conductor/editar_conductor', $data);
					$this->load->view('footer/footer');

				}
		}
		else
		{

			$data['conductor'] = $this->conductor_model->get_id(str_replace(' ', '',$cedula));
				if($data['conductor'])
				{
					$this->form_validation->set_rules('cedula_conductor', ' ', 'trim|required');
					$this->form_validation->set_rules('nombre_conductor', ' ', 'trim|required');

						if($this->form_validation->run() == FALSE){

							
							$data['message_display'] = "Verifique que si un campo obligatorio falta por llenar";
											
							$this->load->view('header/header');
							$this->load->view('conductor/editar_conductor', $data);				
							$this->load->view('footer/footer');

						}
						else
						{
							$id_conductor = str_replace(' ', '', $this->input->post('id_conductor'));
							$dataConductor = array(
							'cedula' => str_replace(' ', '', $this->input->post('cedula_conductor')),
							'nombre' => $this->input->post('nombre_conductor'),
							'telefono' => $this->input->post('telefono_conductor'),
							'correo' =>""
							);

							$registro = $this->conductor_model->editar($dataConductor, $id_conductor);

							if($registro == 1 || $registro == 0){
								$data['query'] = "El conductor ". $dataConductor['nombre'].", con número de identificación ".$dataConductor['cedula']." fue actualizado exitosamente ";
				
								$this->load->view('header/header');
								$this->load->view('conductor/registrado.php', $data);
								$this->load->view('footer/footer');
							}
							else
							{

								$data['message_display'] = "Error, el número de cédula esta asignado a otro conductor";
											
								$this->load->view('header/header');
								$this->load->view('conductor/editar_conductor', $data);				
								$this->load->view('footer/footer');
							}

						}

				}

		}
	}

	public function registro_nuevo(){
		$this->form_validation->set_rules('cedula', 'cédula', 'trim|required');
		$this->form_validation->set_rules('nombres', 'nombres', 'trim|required');
		$this->form_validation->set_rules('apellidos', 'apellidos', 'trim|required');
		$this->form_validation->set_rules('user_name', 'nombre de usuario', 'trim|required');
		$this->form_validation->set_rules('user_pass', 'contraseña', 'trim|required');
		$this->form_validation->set_rules('correo', 'correo', 'trim|required|valid_email');

		if($this->form_validation->run() == FALSE){
			$this->load->view('header/header');
			$this->load->view('login/registrar');
			$this->load->view('footer/footer');
		}
		else{

			$this->load->library('encryption');
		    $this->encryption->initialize(
		        array(
		                'cipher' => 'aes-256',
		                'mode' => 'ctr',
		                'key' => '<a 32-character random string>'
		        )
			);

			$user_pass_plain = $this->input->post('user_pass');
			$pass_encrypt = $this->encryption->encrypt($user_pass_plain);
			//echo "<br>".$pass_encrypt."<br>";

			//echo $this->encryption->decrypt($pass_encrypt)."<br>";


			$data = array(
				'cedula' => $this->input->post('cedula'),
				'nombres' => $this->input->post('nombres'),
				'apellidos' => $this->input->post('apellidos'),
				'user_name' => $this->input->post('user_name'),
				'user_pass' => $pass_encrypt,
				'correo'	=> $this->input->post('correo')
			);

			$result = $this->Login_Database->insertar($data);
			//var_dump($result);
			if($result == true){
				$data['message_display'] = 'Registro exitoso.!';
				$this->load->view('header/header');
				$this->load->view('login/index', $data);
				$this->load->view('footer/footer');
			}
			else{
				//echo $result;
				$data['message_display'] = '<div class=warning>El nombre de usuario ya existe</div>';
				$this->load->view('header/header');
				$this->load->view('login/registrar',$data);
				$this->load->view('footer/footer');
			}
		}
	}

	public function user_login_process(){
		
		$this->form_validation->set_rules('user_name', 'Nombre de usuario', 'trim|required');
		$this->form_validation->set_rules('user_pass', 'Contraseña', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('header/header');
				$this->load->view('login/admin');
				$this->load->view('footer/footer');
			}
			else{
				$this->load->view('header/header');
				$this->load->view('login/index');
				$this->load->view('footer/footer');
			}	
			

		}
		else{



			$data = array(
				'user_name' => $this->input->post('user_name'),
				'user_pass' => $this->input->post('user_pass')
				);
			$result = $this->Login_Database->login($data);

			if($result == true){

				$username = $this->input->post('user_name');
				$result = $this->Login_Database->informacion_usuario($username);

				if($result != false){
					$session_data = array(
						'user_name' => $result[0]->user_name,
						'correo' => $result[0]->correo,
						'id' =>  $result[0]->id);

					$this->session->set_userdata('logged_in', $session_data);

					$this->load->view('header/header');
					
					$this->load->view('login/admin');
					$this->load->view('footer/footer');
					}
				}
				else{
					$data = array('error_message' => '<div class="error_msg">Usuario o contraseña inválidos</div>');
					$this->load->view('header/header');
					$this->load->view('login/index', $data);
					$this->load->view('footer/footer');
				}


			}
			
			
		}

		public function salir(){

			$sess_array = array('
				username' => '' );

			$this->session->unset_userdata('logged_in', $sess_array);
			$data['message_display'] = 'Has cerrado sesion exitosamente.';
			$this->load->view('header/header');
			$this->load->view('login/index', $data);
			$this->load->view('footer/footer');

		}

	



}