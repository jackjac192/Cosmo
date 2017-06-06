<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planillas extends CI_Controller {

	
	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Login_Database');
		$this->load->model('aseguradora_model');
		$this->load->model('planillas_model');	
		$this->load->library('export_excel');

		$this->form_validation->set_message('required', ' Este campo es obligatorio');
		$this->form_validation->set_message('integer', ' el campo %s deve poseer solo numeros enteros');
		$this->form_validation->set_message('is_unique', ' el campo %s ya esta registrado');
		$this->form_validation->set_message('max_length', ' el campo %s debe tener un Maximo de %d Caracteres');
		$this->form_validation->set_message('valid_email', ' el %s es inválido');
		
	}



	public function excel($valorAse,$valorRama,$fechaI,$fechaF){
		
		$fechaII= date("Y-m-d", strtotime($fechaI));
		$fechaFF= date("Y-m-d", strtotime($fechaF));
		//echo ("Hola");
		require_once APPPATH . '/third_party/Phpexcel/Bootstrap.php';

		// Create new Spreadsheet object
		$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Set document properties
		$spreadsheet->getProperties()->setCreator('Webeasystep.com ')
				->setLastModifiedBy('Ahmed Fakhr')
				->setTitle('Phpecxel codeigniter tutorial')
				->setSubject('integrate codeigniter with PhpExcel')
				->setDescription('this is the file test');

		// add style to the header
		$styleArray = array(
				'font' => array(
						'bold' => false,
				),
				'alignment' => array(
						'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
						'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
				),
				'borders' => array(
						'top' => array(
								'style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
						),
				),
				
		);

		if($valorAse == "0"){
			//$arrayAseguradoras = [1,2,3,4,5,6];
			//$longitud = count($arrayAseguradoras);
			$nombreHoja = "IKE";

			
				$spreadsheet->createSheet();
				
				$spreadsheet->getSheetByName('Worksheet')->getStyle('A1:P1')->applyFromArray($styleArray);
				$spreadsheet->getSheetByName('Worksheet 1')->getStyle('A1:P1')->applyFromArray($styleArray);
				$spreadsheet->createSheet();
				$spreadsheet->getSheetByName('Worksheet 2')->getStyle('A1:P1')->applyFromArray($styleArray);
				$spreadsheet->createSheet();
				$spreadsheet->getSheetByName('Worksheet 3')->getStyle('A1:P1')->applyFromArray($styleArray);
				$spreadsheet->createSheet();
				$spreadsheet->getSheetByName('Worksheet 4')->getStyle('A1:P1')->applyFromArray($styleArray);
				$spreadsheet->createSheet();
				$spreadsheet->getSheetByName('Worksheet 5')->getStyle('A1:P1')->applyFromArray($styleArray);
				
				
				//formato de IKE *************************************************************************
				foreach(range('A','M') as $columnID) {				
					$spreadsheet->getSheetByName('Worksheet')->getColumnDimension($columnID)
							->setAutoSize(true);					
				}
				$spreadsheet->getSheetByName('Worksheet')
				->setCellValue("A1",'EXPEDIENTE')
				->setCellValue("B1",'RAMIFICACION')
				->setCellValue("C1",'NOMBRE ASEGURADO')
				->setCellValue("D1",'FUNCIONARIO')
				->setCellValue("E1",'FECHA SERVICIO')
				->setCellValue("F1",'ORIGENS ERVICIO')
				->setCellValue("G1",'DESTINO SERVICIO')
				->setCellValue("H1",'KILOMETRAJE')
				->setCellValue("I1",'PLACA VEHICULO')
				->setCellValue("J1",'VALOR SERVICIO')
				->setCellValue("K1",'CONDUCTOR')
				->setCellValue("L1",'PLACA GRUA')
				->setCellValue("M1",'TIPOSERVICIO');

				$y= 2;				
				$object = $this->planillas_model->get_ases("Ike",$fechaII,$fechaFF);
				foreach($object as $sub){
					$spreadsheet->getSheetByName('Worksheet')
							->setCellValue("A$y",$sub['expediente'])
							->setCellValue("B$y",$sub['nombre_rama'])
							->setCellValue("C$y",$sub['as_enombre'])
							->setCellValue("D$y",$sub['nombre_funcionario'])
							->setCellValue("E$y",$sub['fecha'])
							->setCellValue("F$y",$sub['lugar_recoge'])
							->setCellValue("G$y",$sub['lugar_entrega'])
							->setCellValue("H$y",$sub['km_servicio'])
							->setCellValue("I$y",$sub['placa'])							
							->setCellValue("K$y",$sub['co_nombre'])
							->setCellValue("L$y",$sub['placa_grua'])
							->setCellValue("M$y",$sub['tipo_servicio']);
					$y++;
				}

				//formato de ANDY*********************************************************************
				foreach(range('A','N') as $columnID) {				
					$spreadsheet->getSheetByName('Worksheet 1')->getColumnDimension($columnID)
							->setAutoSize(true);					
				}
				$spreadsheet->getSheetByName('Worksheet 1')
				->setCellValue("A1",'MOVIMIENTO ECONOMICO (EXPEDIENTE)')
				->setCellValue("B1",'RAMIFICACION')
				->setCellValue("C1",'FECHA SERVICIO')
				->setCellValue("D1",'HORA SERVICIO')
				->setCellValue("E1",'PLACA')
				->setCellValue("F1",'ORIGEN SERVICIO')
				->setCellValue("G1",'DESTINO SERVICIO')
				->setCellValue("H1",'VALOR SERVICIO')
				->setCellValue("I1",'KILOMETRAJE')
				->setCellValue("J1",'NOMBRE DEL ASEGURADO')
				->setCellValue("K1",'FUNCIONARIO')
				->setCellValue("L1",'CONDUCTOR')
				->setCellValue("M1",'PLACA GRUA')
				->setCellValue("N1",'TIPO DE SERVICIO');
				
				$y= 2;				
				$object = $this->planillas_model->get_ases("Andi",$fechaII,$fechaFF);
				foreach($object as $sub){
					$spreadsheet->getSheetByName('Worksheet 1')
							->setCellValue("A$y",$sub['expediente'])
							->setCellValue("B$y",$sub['nombre_rama'])
							->setCellValue("C$y",$sub['fecha'])
							->setCellValue("D$y",$sub['hora'])
							->setCellValue("E$y",$sub['placa'])
							->setCellValue("F$y",$sub['lugar_recoge'])
							->setCellValue("G$y",$sub['lugar_entrega'])							
							->setCellValue("I$y",$sub['km_servicio'])	
							->setCellValue("J$y",$sub['as_enombre'])						
							->setCellValue("K$y",$sub['nombre_funcionario'])
							->setCellValue("L$y",$sub['co_nombre'])
							->setCellValue("M$y",$sub['placa_grua'])
							->setCellValue("N$y",$sub['tipo_servicio']);
					$y++;
				}


				//formato de AXA*****************************************************************
				foreach(range('A','N') as $columnID) {				
					$spreadsheet->getSheetByName('Worksheet 2')->getColumnDimension($columnID)
							->setAutoSize(true);					
				}
				$spreadsheet->getSheetByName('Worksheet 2')
				->setCellValue("A1",'FECHA SERVICIO')
				->setCellValue("B1",'HORA')
				->setCellValue("C1",'NOMBRE ASEGURADO')
				->setCellValue("D1",'ORIGEN SERVICIO')
				->setCellValue("E1",'EXPEDIENTE')
				->setCellValue("F1",'RAMIFICACION')
				->setCellValue("G1",'PLACA')
				->setCellValue("H1",'MARCA')
				->setCellValue("I1",'SERVICIO PRESTADO')
				->setCellValue("J1",'CONDUCTOR')
				->setCellValue("K1",'PLACA GRUA')
				->setCellValue("L1",'DESTINO SERVICIO')
				->setCellValue("M1",'FUNCIONARIO')
				->setCellValue("N1",'VALOR SERVICIO');
				$y= 2;				
				$object = $this->planillas_model->get_ases("Axa",$fechaII,$fechaFF);
				foreach($object as $sub){
					$spreadsheet->getSheetByName('Worksheet 2')
							->setCellValue("A$y",$sub['fecha'])
							->setCellValue("B$y",$sub['hora'])
							->setCellValue("C$y",$sub['as_enombre'])
							->setCellValue("D$y",$sub['lugar_recoge'])
							->setCellValue("E$y",$sub['expediente'])
							->setCellValue("F$y",$sub['nombre_rama'])						
							->setCellValue("G$y",$sub['placa'])							
							->setCellValue("H$y",$sub['marca'])	
							->setCellValue("I$y",$sub['tipo_servicio'])	
							->setCellValue("J$y",$sub['co_nombre'])	
							->setCellValue("K$y",$sub['placa_grua'])
							->setCellValue("L$y",$sub['lugar_entrega'])
							->setCellValue("M$y",$sub['nombre_funcionario']);
					$y++;
				}


				//formato de SURA******************************************************************************************
				foreach(range('A','J') as $columnID) {				
					$spreadsheet->getSheetByName('Worksheet 3')->getColumnDimension($columnID)
							->setAutoSize(true);					
				}
				$spreadsheet->getSheetByName('Worksheet 3')
				->setCellValue("A1",'FECHA')
				->setCellValue("B1",'HORA')
				->setCellValue("C1",'EXPEDIENTE')
				->setCellValue("D1",'TIPO DE SERVICIO')
				->setCellValue("E1",'CONDUCTOR')
				->setCellValue("F1",'PLACA DE GRUA')
				->setCellValue("G1",'PLACA DEL VEHICULO')
				->setCellValue("H1",'ASEGURADO')
				->setCellValue("I1",'VALOR')
				->setCellValue("J1",'FUNCIONARIO');

				$y= 2;				
				$object = $this->planillas_model->get_ases("Sura",$fechaII,$fechaFF);
				foreach($object as $sub){
					$spreadsheet->getSheetByName('Worksheet 3')
							->setCellValue("A$y",$sub['fecha'])
							->setCellValue("B$y",$sub['hora'])
							->setCellValue("C$y",$sub['expediente'])
							->setCellValue("D$y",$sub['tipo_servicio'])
							->setCellValue("E$y",$sub['co_nombre'])	
							->setCellValue("F$y",$sub['placa_grua'])
							->setCellValue("G$y",$sub['placa'])
							->setCellValue("H$y",$sub['as_enombre'])
							->setCellValue("J$y",$sub['nombre_funcionario']);						
							
					$y++;
				}


				//formato de BOLIVAR ********************************************************************************************
				foreach(range('A','N') as $columnID) {				
					$spreadsheet->getSheetByName('Worksheet 4')->getColumnDimension($columnID)
							->setAutoSize(true);					
				}
				$spreadsheet->getSheetByName('Worksheet 4')
				->setCellValue("A1",'AUTORIZACION SERVICIO (EXPEDIENTE)')
				->setCellValue("B1",'FUNCIONARIO')
				->setCellValue("C1",'FECHA')
				->setCellValue("D1",'SERVICIO')
				->setCellValue("E1",'HORA')
				->setCellValue("F1",'NOMBRE ASEGURADO')
				->setCellValue("G1",'ORIGEN SERVICIO')
				->setCellValue("H1",'DESTINO SERVICIO')
				->setCellValue("I1",'KILOMETRAJE')
				->setCellValue("J1",'PLACA VEHICULO')
				->setCellValue("K1",'VALOR SERVICIO')
				->setCellValue("L1",'CONDUCTOR')
				->setCellValue("M1",'PLACA GRUA')
				->setCellValue("N1",'TIPO SERTVICIO');

				$y= 2;				
				$object = $this->planillas_model->get_ases("Bolivar",$fechaII,$fechaFF);
				foreach($object as $sub){
					$spreadsheet->getSheetByName('Worksheet 4')
							->setCellValue("A$y",$sub['expediente'])
							->setCellValue("B$y",$sub['nombre_funcionario'])
							->setCellValue("C$y",$sub['fecha'])
							->setCellValue("D$y",$sub['tipo_servicio'])	
							->setCellValue("E$y",$sub['hora'])
							->setCellValue("F$y",$sub['as_enombre'])
							->setCellValue("G$y",$sub['lugar_recoge'])					
							->setCellValue("H$y",$sub['lugar_entrega'])
							->setCellValue("I$y",$sub['km_servicio'])
							->setCellValue("J$y",$sub['placa'])	
							->setCellValue("L$y",$sub['co_nombre'])	
							->setCellValue("M$y",$sub['placa_grua'])
							->setCellValue("N$y",$sub['tipo_servicio']);
					$y++;
				}



				

				//Forma de Mafre ***************************************************************************************
				foreach(range('A','P') as $columnID) {				
					$spreadsheet->getSheetByName('Worksheet 5')->getColumnDimension($columnID)
							->setAutoSize(true);					
				}
				$spreadsheet->getSheetByName('Worksheet 5')
				->setCellValue("A1",'NUMERO INCIDENTE')
				->setCellValue("B1",'CODIGO PRODUCTO')
				->setCellValue("C1",'NUMERO DE POLIZA')
				->setCellValue("D1",'FECHA SERVICIO')
				->setCellValue("E1",'HORA')
				->setCellValue("F1",'NOMBRE ASEGURADO')
				->setCellValue("G1",'NUMEROIDENTIFICACIOIN ASEGURADO')
				->setCellValue("H1",'MARCA VEHICULO')
				->setCellValue("I1",'PLACA')
				->setCellValue("J1",'TIPO SERVICIO')
				->setCellValue("K1",'CONDUCTOR')
				->setCellValue("L1",'PLACA GRUA')
				->setCellValue("M1",'ORIGEN SERVICIO')
				->setCellValue("N1",'DESTINO SERVICIO')
				->setCellValue("O1",'KILOMETRAJE')
				->setCellValue("P1",'VALOR');

				$y= 2;				
				$object = $this->planillas_model->get_ases("Mapfre",$fechaII,$fechaFF);
				foreach($object as $sub){
					$spreadsheet->getSheetByName('Worksheet 5')
							->setCellValue("A$y",$sub['expediente'])
							->setCellValue("D$y",$sub['fecha'])
							->setCellValue("E$y",$sub['hora'])
							->setCellValue("F$y",$sub['as_enombre'])
							->setCellValue("H$y",$sub['marca'])
							->setCellValue("I$y",$sub['placa'])	
							->setCellValue("J$y",$sub['tipo_servicio'])	
							->setCellValue("K$y",$sub['co_nombre'])	
							->setCellValue("L$y",$sub['placa_grua'])
							->setCellValue("M$y",$sub['lugar_recoge'])	
							->setCellValue("N$y",$sub['lugar_entrega'])
							->setCellValue("O$y",$sub['km_servicio']);
					$y++;
				}
		// Add some data
				
				$spreadsheet->getSheetByName('Worksheet')->setTitle($nombreHoja);
				$nombreHoja = "ANDY";
				$spreadsheet->getSheetByName('Worksheet 1')->setTitle($nombreHoja);
				$nombreHoja = "AXA";
				$spreadsheet->getSheetByName('Worksheet 2')->setTitle($nombreHoja);
				$nombreHoja = "SURA";
				$spreadsheet->getSheetByName('Worksheet 3')->setTitle($nombreHoja);
				$nombreHoja = "BOLIVAR";
				$spreadsheet->getSheetByName('Worksheet 4')->setTitle($nombreHoja);
				$nombreHoja = "MAFRE";
				$spreadsheet->getSheetByName('Worksheet 5')->setTitle($nombreHoja);
		}

		
		
		//$spreadsheet->getActiveSheet()->getStyle('A1:F1')->applyFromArray($styleArray);
		// auto fit column to content

		
		// set the names of header cells
		/*$spreadsheet->setActiveSheetIndex(0)
				->setCellValue("A1",'Username')
				->setCellValue("B1",'Name')
				->setCellValue("C1",'UserEmail')
				->setCellValue("D1",'UserAddress')
				->setCellValue("E1",'UserJob')
				->setCellValue("F1",'Gender');
				$x= 2;
				foreach($subscribers as $sub){
					$spreadsheet->setActiveSheetIndex(0)
							->setCellValue("A$x",$sub['id'])
							->setCellValue("B$x",$valorAse)
							->setCellValue("C$x",$valorRama)
							->setCellValue("D$x",$fechaI);
							
					$x++;
				}
		*/
// Rename worksheet
		//$spreadsheet->getActiveSheet()->setTitle('Users Information');

// set right to left direction
//		$spreadsheet->getActiveSheet()->setRightToLeft(true);

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		//$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Planillas.xlsx"');
		header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0

		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Excel2007');
		$writer->save('php://output');

		exit;
		
	}


	public function index()
	{

		if(!$_POST)
		{

		$this->load->library('pagination');
		$config['base_url'] = base_url()."planillas/index";
		$config['total_rows'] = $this->planillas_model->num_planillas();
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



		$data['query'] = $this->planillas_model->get_pagination($config['per_page']);
		$data['aseguradora'] = $this->aseguradora_model->listarAseguradorasSelect();
		// var_dump($data['query']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('header/header');
		$this->load->view('planillas/vistaplanillas.php', $data);
		$this->load->view('footer/footer');
		
		}

		else
		{	
			$this->form_validation->set_rules('expediente', ' ', 'trim|required');

			if($this->form_validation->run() == FALSE){
				
				

				$this->load->library('pagination');
				$config['base_url'] = base_url()."planillas/index";
				$config['total_rows'] = $this->planillas_model->num_planillas();
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



				$data['query'] = $this->planillas_model->get_pagination($config['per_page']);
				// var_dump($data['query']);
				$data['pagination'] = $this->pagination->create_links();
				$this->load->view('header/header');
				$this->load->view('planillas/vistaplanillas.php', $data);
				$this->load->view('footer/footer');





			}
			else
			{

				$data['query'] = $this->planillas_model->get_id_one(str_replace(' ', '', $this->input->post('expediente')));

				if(!$data['query']){
					$data['mensajeEr'] = "El número de expediente no existe en la base de datos";
					$data['atras'] = base_url()."planillas/";
					$this->load->view('header/header');
					$this->load->view('cpanel/aseguradoras/view/errorExpediente', $data);
					$this->load->view('footer/footer');
				}
				else{

					$this->load->view('header/header');
					$this->load->view('planillas/vistaplanillas.php', $data);
					$this->load->view('footer/footer');

				}

			}


			
		}
		
		
	

	}

	public function ver_por_expediente($expediente){

			$data['query'] = $this->planillas_model->get_id_one($expediente);

			if(!$data['query']){
				$this->load->view('header/header');
				$this->load->view('cpanel/aseguradoras/view/errorExpediente');
				$this->load->view('footer/footer');
			}
			else{

				$this->load->view('header/header');
				$this->load->view('planillas/vistaplanillas.php', $data);
				$this->load->view('footer/footer');

			}

	}


	




}

