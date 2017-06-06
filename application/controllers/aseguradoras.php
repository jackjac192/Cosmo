<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aseguradoras extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Login_Database');
		$this->load->model('aseguradora_model');

		

		
	}


	public function index()
	{
		
		if(!isset($_POST['id']))
		{
			$data = array(
				'idAse' => $this->input->post('idAse'),
				'idRama' => $this->input->post('idRama')				
			);


			switch ($this->input->post('idAse')) {
				case 0:					
					$this->load->view('cpanel/aseguradoras/view/default');	
					break;
				case 1:	
					switch ($this->input->post('idRama')) {
									case 2:
									$this->load->view('cpanel/aseguradoras/view/sura/andy_view',$data);					
										break;
									
									default:
									$this->load->view('cpanel/aseguradoras/view/default_rama', $data);
										break;
								}								
					break;

				case 2:					
					$this->load->view('cpanel/aseguradoras/view/default');	
					break;

				case 3:					
					switch ($this->input->post('idRama')) {
									case 1:
									$this->load->view('cpanel/aseguradoras/view/axa/ike_view',$data);					
										break;
									case 3:
									$this->load->view('cpanel/aseguradoras/view/axa/OtraRama_view',$data);					
										break;
									default:
									$this->load->view('cpanel/aseguradoras/view/default_rama', $data);
										break;
								}		
					break;

				case 4:					
					$this->load->view('cpanel/aseguradoras/view/mafre_view',$data);	
					break;

				default:
					$this->load->view('usuarios/index', $data);	
					break;
			}
		
					
		}
		else{

			//echo $this->input->post('id');

			if($this->input->post('id')==0){
				echo "<br><span>Se ha seleccionado todas las aseguradoras</span>";
			}
			else{
				$data['ramas'] = $this->aseguradora_model->listarRamasSelect($this->input->post('id'));
				$data['select'] = $this->input->post('select');
				$this->load->view('cpanel/aseguradoras/select_rama_view', $data);
			}

			
			//var_dump($data);

			

		}
		
	

	}


	




}

