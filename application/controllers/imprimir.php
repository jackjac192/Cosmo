<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imprimir extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Login_Database');
		$this->load->model('aseguradora_model');
		$this->load->model('reporte_model');
		$this->load->model('asegurado_model');
		$this->load->model('conductor_model');
		$this->load->model('vehiculo_model');

	}

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
	public function index($expediente)
	{
		
		$data['reporte'] = $this->reporte_model->get_id($expediente);

		if(!$data['reporte']){
			$data['mensajeEr'] = "El número de expediente no se encuentra en la base de datos.";
			$data['atras'] = base_url()."planillas/";
			$this->load->view('header/header');
			$this->load->view('cpanel/aseguradoras/view/errorExpediente' , $data);
			$this->load->view('footer/footer');

		}
		else
		{
			$id_aseguradora = $data['reporte']->id_aseguradora;
			$id_rama = $data['reporte']->id_rama;
			$id_asegurado = $data['reporte']->id_asegurado;
			$id_vehiculo = $data['reporte']->id_vehiculo;
			$id_conductor = $data['reporte']->id_conductor;

			$data['aseguradora'] = $this->aseguradora_model->get_id($id_aseguradora);
			$data['rama'] = $this->aseguradora_model->get_id_rama($id_rama);
			$data['asegurado'] = $this->asegurado_model->get($id_asegurado);
			$data['vehiculo'] = $this->vehiculo_model->get($id_vehiculo);
			$data['conductor'] = $this->conductor_model->get($id_conductor);

			$this->load->view('header/header');
			$this->load->view('cpanel/reporte_registrado', $data);
			$this->load->view('footer/footer');



			
		}
		
	}

	public function view_print($expediente){

		$data['reporte'] = $this->reporte_model->get_id($expediente);

		if(!$data['reporte']){
			$data['mensajeEr'] = "El número de expediente no se encuentra en la base de datos.";
			$data['atras'] = base_url()."planillas/";
			$this->load->view('header/header');
			$this->load->view('cpanel/aseguradoras/view/errorExpediente' , $data);
			$this->load->view('footer/footer');

		}
		else{

			$id_aseguradora = $data['reporte']->id_aseguradora;
			$id_rama = $data['reporte']->id_rama;
			$id_asegurado = $data['reporte']->id_asegurado;
			$id_vehiculo = $data['reporte']->id_vehiculo;
			$id_conductor = $data['reporte']->id_conductor;

			$data['aseguradora'] = $this->aseguradora_model->get_id($id_aseguradora);
			$data['rama'] = $this->aseguradora_model->get_id_rama($id_rama);
			$data['asegurado'] = $this->asegurado_model->get($id_asegurado);
			$data['vehiculo'] = $this->vehiculo_model->get($id_vehiculo);
			$data['conductor'] = $this->conductor_model->get($id_conductor);

			$this->load->view('cpanel/aseguradoras/view/reporte_vista', $data);

		}

	}

	public function view_print_ase($expediente){

		$data['reporte'] = $this->reporte_model->get_id($expediente);

		if(!$data['reporte']){
			$data['mensajeEr'] = "El número de expediente no se encuentra en la base de datos.";
			$data['atras'] = base_url()."planillas/";
			$this->load->view('header/header');
			$this->load->view('cpanel/aseguradoras/view/errorExpediente' , $data);
			$this->load->view('footer/footer');

		}
		else{

			$id_aseguradora = $data['reporte']->id_aseguradora;
			$id_rama = $data['reporte']->id_rama;
			$id_asegurado = $data['reporte']->id_asegurado;
			$id_vehiculo = $data['reporte']->id_vehiculo;
			$id_conductor = $data['reporte']->id_conductor;

			$data['aseguradora'] = $this->aseguradora_model->get_id($id_aseguradora);
			$data['rama'] = $this->aseguradora_model->get_id_rama($id_rama);
			$data['asegurado'] = $this->asegurado_model->get($id_asegurado);
			$data['vehiculo'] = $this->vehiculo_model->get($id_vehiculo);
			$data['conductor'] = $this->conductor_model->get($id_conductor);

			switch ($id_aseguradora) {

				case 1:$this->load->view('cpanel/aseguradoras/view/bolivar', $data);
					break;

				case 2: $this->load->view('cpanel/aseguradoras/view/sura', $data);
					break;

				case 3:$this->load->view('cpanel/aseguradoras/view/mafre', $data);				
					break;

				case 4:$this->load->view('cpanel/aseguradoras/view/andi', $data);
					break;

				case 5:$this->load->view('cpanel/aseguradoras/view/ikes', $data);
					break;
				case 6:$this->load->view('cpanel/aseguradoras/view/axa', $data);
					break;
				
				default:
					# code...
					break;
			}

		}

	}


}