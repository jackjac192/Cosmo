<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

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
		$this->load->model('usuario_model');
		$this->load->model('aseguradora_model');
		$this->load->model('reporte_model');
		$this->load->model('conductor_model');
		$this->load->model('asegurado_model');
		$this->load->model('vehiculo_model');

		$this->form_validation->set_message('required', ' Este campo es obligatorio');
		$this->form_validation->set_message('integer', ' el campo %s deve poseer solo numeros enteros');
		$this->form_validation->set_message('is_unique', ' el campo %s ya esta registrado');
		$this->form_validation->set_message('max_length', ' el campo %s debe tener un Maximo de %d Caracteres');
		$this->form_validation->set_message('valid_email', ' el %s es inválido');

	}
	
	public function crear()
	{	
		

		if($_POST){
			
			$this->form_validation->set_rules('nombre_asegurado', ' ', 'trim|required');
			//quitar $this->form_validation->set_rules('cedula_ase', ' ', 'trim|required');

			$this->form_validation->set_rules('placa', ' ', 'trim|required');
			$this->form_validation->set_rules('marca', ' ', 'trim|required');
			//$this->form_validation->set_rules('modelo', ' ', 'trim|required');
			//$this->form_validation->set_rules('color', ' ', 'trim|required');

			$this->form_validation->set_rules('cedula_conductor', ' ', 'trim|required');
			//$this->form_validation->set_rules('nombre_conductor', ' ', 'trim|required');

			$this->form_validation->set_rules('fecha', ' ', 'trim|required');
			$this->form_validation->set_rules('hora', ' ', 'trim|required');
			$this->form_validation->set_rules('nombre_func', ' ', 'trim|required');


			$this->form_validation->set_rules('expediente', ' ', 'trim|required');
			$this->form_validation->set_rules('placa_grua', ' ', 'trim|required');
			//$this->form_validation->set_rules('nombre_receptor', ' ', 'trim|required');
			/*$this->form_validation->set_rules('cedula', 'cédula', 'trim|required');
			$this->form_validation->set_rules('nombres', 'nombres', 'trim|required');
			$this->form_validation->set_rules('apellidos', 'apellidos', 'trim|required');
			$this->form_validation->set_rules('user_name', 'nombre de usuario', 'trim|required');
			$this->form_validation->set_rules('user_pass', 'contraseña', 'trim|required');
			//$this->form_validation->set_rules('select-rama', ' ', 'trim|required');	
			$this->form_validation->set_rules('select_ase', ' ', 'trim|required');
			*/
			$this->form_validation->set_rules('expediente', ' ', 'trim|required');


			
			
			if($this->form_validation->run() == FALSE){
				$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();
				$data['message_display'] = "Verifique que si un campo obligatorio falta por llenar";
				
				$this->load->view('header/header');
				$this->load->view('cpanel/registrar_reporte', $data);				
				$this->load->view('footer/footer');

			}
					else
					{

					$dataAsegurado = array(
						'id' 	=> '',
						'nombre' => $this->input->post('nombre_asegurado'),
						'cedula' => implode(getdate()),
						'telefono' => $this->input->post('telefono_ase')
						
						);

					$this->asegurado_model->insertar($dataAsegurado);
					$id_asegurado = $this->asegurado_model->get_id($dataAsegurado);
					

					$dataVehiculo = array(
						'placa' => $this->input->post('placa'),
						'marca' => $this->input->post('marca'),
						'modelo' => $this->input->post('modelo'),
						'color' => $this->input->post('color')
						);

					$id_vehiculo = $this->vehiculo_model->insertar($dataVehiculo);
					//echo $id_vehiculo->id;
					

					$cedulaConductor = str_replace(' ', '', $this->input->post('cedula_conductor'));
										
					$dataConductor = $this->conductor_model->get_id($cedulaConductor);
					if($dataConductor){
						$id_conductor =  $dataConductor->id;
					}
					else{
						$id_conductor = "";
					}

					
					$fecha= date("Y-m-d", strtotime($this->input->post('fecha_submit')));
					$hora = date("H:i:s", strtotime($this->input->post('hora')));

					$hora_recoge = date("H:i:s", strtotime($this->input->post('hora_recoge')));
					$hora_entrega = date("H:i:s", strtotime($this->input->post('hora_entrega')));
					
									
					$data = array(
						'id'	=> '',
						'fecha' => $fecha,
						'hora' => $hora,
						'nombre_funcionario' => $this->input->post('nombre_func'),
						'id_aseguradora' => $this->input->post('select_ase'),
						'id_rama' => $this->input->post('select_rama'),
						'id_asegurado' => $id_asegurado,
						'id_vehiculo' => $id_vehiculo->id,
						'lugar_recoge' => $this->input->post('lugar_recoge'),
						'hora_recoge' => $hora_recoge,
						'lugar_entrega' => $this->input->post('lugar_entrega'),
						'hora_entrega' => $hora_entrega,
						'expediente' => str_replace(' ', '', $this->input->post('expediente')),
						'placa_grua'	=> $this->input->post('placa_grua'),
						'id_conductor'	=> $id_conductor,
						'nombre_receptor'	=> $this->input->post('nombre_receptor'),
						'km_servicio'	=> $this->input->post('km_servicio'),
						'km_valor'	=> $this->input->post('km_valor'),
						'adicional'	=> $this->input->post('adicional'),
						'valor_total'	=> $this->input->post('valor_total'),
						'tipo_servicio'	=> $this->input->post('tipo_servicio'),
						'fallido'	=> $this->input->post('fallido'),										
						'observaciones'	=> $this->input->post('observaciones'),
						'id_usuario' => $this->input->post('id_usuario')
					);

					$ase_exist = $this->aseguradora_model->get_id($data['id_aseguradora']);
					$rama_exist = $this->aseguradora_model->get_id_rama($data['id_rama']);
					$id_usuario = $this->input->post('id_usuario');

					if(!$ase_exist || !$rama_exist){
						$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();
						$data['message_display'] = "Por favor, seleccione una aseguradora y/o rama existente";
						


						$this->load->view('header/header');
						$this->load->view('cpanel/registrar_reporte', $data);
						$this->load->view('footer/footer');
					}

					else{	

						$id_usuario = $this->usuario_model->get_id($this->input->post('id_usuario'));

						if($id_usuario){
							$reporte_insertado = $this->reporte_model->insertar($data);

							if($reporte_insertado){


								header("location: ".base_url()."imprimir/index/".$data['expediente']);


							}
							else{

								$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();
								$data['message_display'] = "ERROR: El Número de Expediente ya existe. ";


								$this->load->view('header/header');
								$this->load->view('cpanel/registrar_reporte', $data);
								$this->load->view('footer/footer');
							}
						}
						else
						{

							$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();
							$data['message_display'] = "Tienes un problema con tu sesion, por favor, cierre la sesió y vuelve a iniciar sesión ";


							$this->load->view('header/header');
							$this->load->view('cpanel/registrar_reporte', $data);
							$this->load->view('footer/footer');

						}
						
					}

				

				
				}

			

		}
		else
		{	
			$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();

			$this->load->view('header/header');
			$this->load->view('cpanel/registrar_reporte', $data);
			$this->load->view('footer/footer');

		}
	}




	public function editar($expediente){

		if(!$_POST)
		{		

				$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();
				$data['reportes'] = $this->reporte_model->get_id($expediente);
				

				if(!$data['reportes'])
				{	
					$data['mensajeEr'] = "El número de expediente no se encuentra en la base de datos.";
					$data['atras'] = base_url()."planillas/";
					$this->load->view('header/header');
					$this->load->view('cpanel/aseguradoras/view/errorExpediente', $data);
					$this->load->view('footer/footer');
				}
				else

				{
					
					
					$id_aseguradora = $data['reportes']->id_aseguradora;
					$id_rama = $data['reportes']->id_rama;
					$id_asegurado = $data['reportes']->id_asegurado;
					$id_vehiculo = $data['reportes']->id_vehiculo;
					$id_conductor = $data['reportes']->id_conductor;

					$data['aseguradora'] = $this->aseguradora_model->get_id($id_aseguradora);
					$data['rama'] = $this->aseguradora_model->get_id_rama($id_rama);
					$data['asegurado'] = $this->asegurado_model->get($id_asegurado);
					$data['vehiculo'] = $this->vehiculo_model->get($id_vehiculo);
					$data['conductor'] = $this->conductor_model->get($id_conductor);
					$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();

					
					$this->load->view('header/header');
					$this->load->view('cpanel/editar_reporte', $data);
					$this->load->view('footer/footer');	

				}
			
		}

		else
		{
			$data['reportes'] = $this->reporte_model->get_id($expediente);
			if($data['reportes'])
			{
					
					$this->form_validation->set_rules('nombre_asegurado', ' ', 'trim|required');
					//quitar $this->form_validation->set_rules('cedula_ase', ' ', 'trim|required');

					$this->form_validation->set_rules('placa', ' ', 'trim|required');
					$this->form_validation->set_rules('marca', ' ', 'trim|required');
					//$this->form_validation->set_rules('modelo', ' ', 'trim|required');
					//$this->form_validation->set_rules('color', ' ', 'trim|required');

					$this->form_validation->set_rules('cedula_conductor', ' ', 'trim|required');
					//$this->form_validation->set_rules('nombre_conductor', ' ', 'trim|required');

					$this->form_validation->set_rules('fecha', ' ', 'trim|required');
					$this->form_validation->set_rules('hora', ' ', 'trim|required');
					$this->form_validation->set_rules('nombre_func', ' ', 'trim|required');


					$this->form_validation->set_rules('expediente', ' ', 'trim|required');
					$this->form_validation->set_rules('placa_grua', ' ', 'trim|required');
					//$this->form_validation->set_rules('nombre_receptor', ' ', 'trim|required');
					/*$this->form_validation->set_rules('cedula', 'cédula', 'trim|required');
					$this->form_validation->set_rules('nombres', 'nombres', 'trim|required');
					$this->form_validation->set_rules('apellidos', 'apellidos', 'trim|required');
					$this->form_validation->set_rules('user_name', 'nombre de usuario', 'trim|required');
					$this->form_validation->set_rules('user_pass', 'contraseña', 'trim|required');
					//$this->form_validation->set_rules('select-rama', ' ', 'trim|required');	
					$this->form_validation->set_rules('select_ase', ' ', 'trim|required');
					*/
					$this->form_validation->set_rules('expediente', ' ', 'trim|required');

					if($this->form_validation->run() == FALSE){

							$id_aseguradora = $data['reportes']->id_aseguradora;
							$id_rama = $data['reportes']->id_rama;
							$id_asegurado = $data['reportes']->id_asegurado;
							$id_vehiculo = $data['reportes']->id_vehiculo;
							$id_conductor = $data['reportes']->id_conductor;

							$data['aseguradora'] = $this->aseguradora_model->get_id($id_aseguradora);
							$data['rama'] = $this->aseguradora_model->get_id_rama($id_rama);
							$data['asegurado'] = $this->asegurado_model->get($id_asegurado);
							$data['vehiculo'] = $this->vehiculo_model->get($id_vehiculo);
							$data['conductor'] = $this->conductor_model->get($id_conductor);							
							$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();
							$data['message_display'] = "Verifique que si un campo obligatorio falta por llenar";
											
							$this->load->view('header/header');
							$this->load->view('cpanel/editar_reporte', $data);				
							$this->load->view('footer/footer');

						}
					else
					{		

							$dataAsegurado = array(						 
								'nombre' => $this->input->post('nombre_asegurado'),
								'telefono' => $this->input->post('telefono_ase')						
								);
							$id_asegurado = $this->input->post('id_asegurado');
							
							$aseguradoEdit = $this->asegurado_model->editar($dataAsegurado, $id_asegurado);
							
												

							$dataVehiculo = array(
								'placa' => $this->input->post('placa'),
								'marca' => $this->input->post('marca'),
								'modelo' => $this->input->post('modelo'),
								'color' => $this->input->post('color')
								);

							$id_vehiculo= $this->input->post('id_vehiculo');
							$vehiculoEdit = $this->vehiculo_model->editar($dataVehiculo, $id_vehiculo);

							$cedulaConductor = str_replace(' ', '', $this->input->post('cedula_conductor'));
							
							$conductor = $this->conductor_model->get_id($cedulaConductor);

							if(!$conductor){
								$id_conductor ="";
							}
							else{
								$id_conductor =$conductor->id;
							}
							//$id_conductor= $this->input->post('id_conductor');
							//$conductorEdit = $this->conductor_model->editar($dataConductor, $id_conductor);

					
							$fecha= date("Y-m-d", strtotime($this->input->post('fecha_submit')));
							$hora = date("H:i:s", strtotime($this->input->post('hora')));

							$hora_recoge = date("H:i:s", strtotime($this->input->post('hora_recoge')));
							$hora_entrega = date("H:i:s", strtotime($this->input->post('hora_entrega')));
							$hora_salida = date("H:i:s", strtotime($this->input->post('hora_salida')));
					
									
							$data = array(						
								'fecha' => $fecha,
								'hora' => $hora,
								'nombre_funcionario' => $this->input->post('nombre_func'),
								'id_aseguradora' => $this->input->post('select_ase'),
								'id_rama' => $this->input->post('select_rama'),
								'id_asegurado' => $id_asegurado,
								'id_vehiculo' => $id_vehiculo,
								'lugar_recoge' => $this->input->post('lugar_recoge'),
								'hora_recoge' => $hora_recoge,
								'lugar_entrega' => $this->input->post('lugar_entrega'),
								'hora_entrega' => $hora_entrega,
								'hora_salida' => $hora_salida,
								'expediente' => str_replace(' ', '', $this->input->post('expediente')),
								'placa_grua'	=> $this->input->post('placa_grua'),
								'id_conductor'	=> $id_conductor,
								'nombre_receptor'	=> $this->input->post('nombre_receptor'),
								'km_servicio'	=> $this->input->post('km_servicio'),
								'km_valor'	=> $this->input->post('km_valor'),
								'adicional'	=> $this->input->post('adicional'),
								'valor_total' => $this->input->post('valor_total'),
								'tipo_servicio'	=> $this->input->post('tipo_servicio'),
								'fallido'	=> $this->input->post('fallido'),										
								'observaciones'	=> $this->input->post('observaciones'),
								'id_usuario' => $this->input->post('id_usuario')
								);

								$ase_exist = $this->aseguradora_model->get_id($data['id_aseguradora']);
								$rama_exist = $this->aseguradora_model->get_id_rama($data['id_rama']);
								$id_usuario = $this->input->post('id_usuario');

								if(!$ase_exist || !$rama_exist){

									$id_aseguradora = $data['reportes']->id_aseguradora;
									$id_rama = $data['reportes']->id_rama;
									$id_asegurado = $data['reportes']->id_asegurado;
									$id_vehiculo = $data['reportes']->id_vehiculo;
									$id_conductor = $data['reportes']->id_conductor;

									$data['aseguradora'] = $this->aseguradora_model->get_id($id_aseguradora);
									$data['rama'] = $this->aseguradora_model->get_id_rama($id_rama);
									$data['asegurado'] = $this->asegurado_model->get($id_asegurado);
									$data['vehiculo'] = $this->vehiculo_model->get($id_vehiculo);
									$data['conductor'] = $this->conductor_model->get($id_conductor);	
									$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();
									$data['message_display'] = "Por favor, seleccione una aseguradora y/o rama existente";
									
									$this->load->view('header/header');
									$this->load->view('cpanel/editar_reporte', $data);
									$this->load->view('footer/footer');
									}

								else{	

									$id_usuario = $this->usuario_model->get_id($this->input->post('id_usuario'));
									$id_reportes = $this->input->post('id_reportes');

										if($id_usuario){
											$reporte_editado = $this->reporte_model->editar($data, $id_reportes );

											if($reporte_editado){


												header("location: ".base_url()."imprimir/index/".$data['expediente']);


											}
											else{

												$data['reportes'] = $this->reporte_model->get_id($expediente);
												$id_aseguradora = $data['reportes']->id_aseguradora;
												$id_rama = $data['reportes']->id_rama;
												$id_asegurado = $data['reportes']->id_asegurado;
												$id_vehiculo = $data['reportes']->id_vehiculo;
												$id_conductor = $data['reportes']->id_conductor;

												$data['aseguradora'] = $this->aseguradora_model->get_id($id_aseguradora);
												$data['rama'] = $this->aseguradora_model->get_id_rama($id_rama);
												$data['asegurado'] = $this->asegurado_model->get($id_asegurado);
												$data['vehiculo'] = $this->vehiculo_model->get($id_vehiculo);
												$data['conductor'] = $this->conductor_model->get($id_conductor);	

												$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();
												$data['message_display'] = "Se presentó un error en la edicción, verifique si el número de expediente no esta asignado a otro reporte, o vuelva a loguearse.";


												$this->load->view('header/header');
												$this->load->view('cpanel/editar_reporte', $data);
												$this->load->view('footer/footer');
											}
										}
										else
										{	
											$data['reportes'] = $this->reporte_model->get_id($expediente);
											$id_aseguradora = $data['reportes']->id_aseguradora;
											$id_rama = $data['reportes']->id_rama;
											$id_asegurado = $data['reportes']->id_asegurado;
											$id_vehiculo = $data['reportes']->id_vehiculo;
											$id_conductor = $data['reportes']->id_conductor;

											$data['aseguradora'] = $this->aseguradora_model->get_id($id_aseguradora);
											$data['rama'] = $this->aseguradora_model->get_id_rama($id_rama);
											$data['asegurado'] = $this->asegurado_model->get($id_asegurado);
											$data['vehiculo'] = $this->vehiculo_model->get($id_vehiculo);
											$data['conductor'] = $this->conductor_model->get($id_conductor);	

											
											$data['query'] = $this->aseguradora_model->listarAseguradorasSelect();
											$data['message_display'] = "Tienes un problema con tu sesion, por favor, cierre la sesió y vuelve a iniciar sesión ";


											$this->load->view('header/header');
											$this->load->view('cpanel/editar_reporte', $data);
											$this->load->view('footer/footer');

										}
						
									}

							}

						}
						else{
							$data['mensajeEr'] = "El número de expediente no se encuentra en la base de datos.";
							$data['atras'] = base_url()."planillas/";
							$this->load->view('header/header');
							$this->load->view('cpanel/aseguradoras/view/errorExpediente', $data);
							$this->load->view('footer/footer');
						}
					}
		
				}


	public function eliminar($expediente){

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
			$this->load->view('header/header');
			$this->load->view('cpanel/eliminar_reporte.php', $data);
			$this->load->view('footer/footer');
		}
	}

	public function eliminado($expediente){

	$eliminado = $this->reporte_model->eliminar($expediente);

		if($eliminado)
		{
			$data['query'] = "El reporte con número de expediente: ".$expediente." fue eliminado de la base de datos";
		}
		else{
			$data['query'] = "Error el número de expediente: ".$expediente." No se encuentra en la base de datos";	
		}
		$this->load->view('header/header');
		$this->load->view('cpanel/eliminado.php', $data);
		$this->load->view('footer/footer');

	}



	
}