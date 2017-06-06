<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Login_Database');

		$this->form_validation->set_message('required', ' Este campo es obligatorio');
		$this->form_validation->set_message('integer', ' - el campo %s deve poseer solo numeros enteros');
		$this->form_validation->set_message('is_unique', ' - el campo %s ya esta registrado');
		$this->form_validation->set_message('max_length', ' - el campo %s debe tener un Maximo de %d Caracteres');
		$this->form_validation->set_message('valid_email', ' - el %s es inválido');
	}
	
	public function index()
	{
		
		$this->load->view('header/header');
		$this->load->view('login/index');
		$this->load->view('footer/footer');
	}

	public function registrar() {

		$this->load->view('header/header');
		$this->load->view('login/registrar');
		$this->load->view('footer/footer');
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
					$this->session->mark_as_temp('logged_in',(76800));
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