<?php
	if (isset($this->session->userdata['logged_in'])) {
		$username = ($this->session->userdata['logged_in']['user_name']);
		$correo = ($this->session->userdata['logged_in']['correo']);
		$id = ($this->session->userdata['logged_in']['id']);



		
	} 
	else {
		header("location: ".base_url()."Login");
	}
	?>

<?php
	


	$nombre_func = array(
		'type'  => 'text',
        'name'  => 'nombre_func',
        'id'    => 'myNombreFun',        
        'class' => 'form-control',
        'value' =>  $reportes->nombre_funcionario

		);
	
		
	$options = array('0'	=> '0 : Ninguna');
	foreach ($query as $key => $objeto) {
				
		$options[$objeto->id] = $objeto->id. " : ". $objeto->nombre_ase;		  
	
	}

	

	$arrayAse = array(
					'class' => '',
					'id'	=> 'mySelectAse',
					'name'	=> 'select_ase',
					'value' =>  set_value('select_ase')
				); 

	

// ASEGURADO
	$nombre_asegurado = array(
		'type'  => 'text',
        'name'	=> 'nombre_asegurado',        
        'class' => 'form-control',
        'value' =>   $asegurado->nombre


		);

	$cedula_ase = array(
		'type'  => 'text',
        'name'  => 'cedula_ase',          
        'class' => 'form-control',
        'value' =>  $asegurado->cedula

		);

	$telefono_ase = array(
		'type'  => 'text',
        'name'  => 'telefono_ase',        
        'class' => 'form-control',
        'value' =>  $asegurado->telefono
		);

//***************************

// CONDUCTOR


	


	$nombre_conductor = array(
		'type'  => 'text',
        'name'	=> 'nombre_conductor',        
        'class' => 'form-control',
        'value' =>  $conductor->nombre,
        'id'	=> 'myNombre',
        'disabled' => ''

		);

	$cedula_conductor = array(
		'type'  => 'text',
        'name'  => 'cedula_conductor',          
        'class' => 'form-control',
        'value' =>  $conductor->cedula,
        'id' => 'idCedulaConductor'

		);

	$telefono_conductor = array(
		'type'  => 'text',
        'name'  => 'telefono_conductor',        
        'class' => 'form-control',
        'value' =>  $conductor->telefono,
        'id'	=> 'myTelefono',
        'disabled' => ''
		);




//****************************


// VEHICULO

	$placa = array(
		'type'  => 'text',
        'name'  => 'placa',        
        'class' => 'form-control',
        'value' =>  $vehiculo->placa
		);

	$marca = array(
		'type'  => 'text',
        'name'  => 'marca',        
        'class' => 'form-control',
        'value' =>  $vehiculo->marca
		);

	$color = array(
		'type'  => 'text',
        'name'  => 'color',        
        'class' => 'form-control',
        'value' =>  $vehiculo->color
		);

	$modelo = array(
		'type'  => 'text',
        'name'  => 'modelo',        
        'class' => 'form-control',
        'value' =>  $vehiculo->modelo
		);

//***********************************


// LUGAR RECOGE

	$lugar_recoge = array(
		'type'  => 'text',
        'name'  => 'lugar_recoge',        
        'class' => 'form-control',
        'value' =>  $reportes->lugar_recoge
		);

	$hora_recoge = array(
		'type'  => 'text',
        'name'  => 'hora_recoge', 
        'id'    =>	'input_starttime2',
        'class' => 'form-control timepicker',
        'value' =>  $reportes->hora_recoge
		);

	$lugar_entrega = array(
		'type'  => 'text',
        'name'  => 'lugar_entrega',        
        'class' => 'form-control',
        'value' =>  $reportes->lugar_entrega
		);

	$hora_entrega = array(
		'type'  => 'text',
        'name'  => 'hora_entrega',
        'id'	=> 'input_starttime3',
        'class' => 'form-control',
        'value' =>  $reportes->hora_entrega
		);

	$hora_salida = array(
		'type'  => 'text',
        'name'  => 'hora_salida',
        'id'	=> 'input_starttime4',
        'class' => 'form-control',
        'value' =>  $reportes->hora_salida
		);

//Expediente

	$expediente = array(
		'type'  => 'text',
        'name'  => 'expediente',        
        'class' => 'form-control',
        'value' =>  $reportes->expediente
		);

	$placa_grua = array(
		'type'  => 'text',
        'name'  => 'placa_grua',        
        'class' => 'form-control',
        'value' =>  $reportes->placa_grua 
		);

	$nombre_receptor = array(
		'type'  => 'text',
        'name'  => 'nombre_receptor',        
        'class' => 'form-control',
        'value' =>  $reportes->nombre_receptor
		);
	
	$km_servicio = array(
		'type'  => 'text',
        'name'  => 'km_servicio',        
        'class' => 'form-control',
        'value' =>  $reportes->km_servicio 
		);

	$km_valor = array(
		'type'  => 'text',
        'name'  => 'km_valor',        
        'class' => 'form-control',
        'value' =>  $reportes->km_valor 
		);

	$adicional = array(
		'type'  => 'text',
        'name'  => 'adicional',        
        'class' => 'form-control',
        'value' =>  $reportes->adicional
		);

	$valor_to = array(
		'type'  => 'text',
		'name'  => 'valor_total',        
        'class' => 'form-control',
        'value' =>  $reportes->valor_total 
		);

	$tipo_servicio = array(
		'type'  => 'text',
        'name'  => 'tipo_servicio',        
        'class' => 'form-control',
        'value' =>  $reportes->tipo_servicio 
		);

	$fallido = array(
		'type'  => 'text',
        'name'  => 'fallido',        
        'class' => 'form-control',
        'value' =>  $reportes->fallido
		);

	$observaciones = array(
		'type'  => 'text',
        'name'  => 'observaciones',        
        'class' => 'form-control',
        'value' =>  ''
		);



	

	

?>

<div class="container">
	<div class="row">


		<?php 
					$attributes = array('id' => 'myformReport');
					echo form_open('reportes/editar/'.$reportes->expediente, $attributes);
		?>
		<header class="tituloReporte">
				<h1 data-target="edit_reportes"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
 EDITAR DE REPORTES</h1>
				<h3> 
					<?php
						if (isset($message_display)) {
							echo "<div class='message'>";
							echo $message_display;
							echo "</div> <br>";
						}


					?>
				</h3>
		</header>

		<section class="sectiongris">
			
			<div class="row">
				
				<div class="col-lg-6">
					
					<div class="md-form">

						<?php
							$fecha = array(
								'type'	=>	'text',
								'id' 	=>	'date-picker-example',
								'class'	=>	'form-control datepicker',
								'name'	=>	'fecha',
								'value'	=>	$reportes->fecha

							);

							$hora = array(
								'type'	=>	'text',
								'id' 	=>	'input_starttime',
								'class'	=>	'form-control timepicker',
								'name'	=>	'hora',
								'value'	=>	$reportes->hora

							);
						?>
					    
					    <?=form_input($fecha);?>
					    <?=form_label('Seleccionar fecha', 'date-picker-example')?>					    
					    <?=form_error('fecha','<span class="errors"> ','</span>'); ?>
					    <input id="inputfecha" type="hidden" name="fecha_submit" value="<?php echo $reportes->fecha;?>">
					</div>
					
				</div>					
				<div class="col-lg-6">	
					<div class="md-form">

						<?=form_input($hora);?>
					    <?=form_label('Seleccionar hora', 'input_starttime')?>					    
					    <?=form_error('hora','<span class="errors"> ','</span>'); ?>
					</div>	

				</div>
				<div class="col-lg-6">
					
					<div class="md-form ">								
							<?=form_label('Nombres completo funcionario', 'nombre_func')?>					
							<?=form_input($nombre_func);?>
							<?=form_error('nombre_func','<span class="errors"> ','</span>'); ?>								
					</div>					
				</div>	

				<div class="col-lg-3">	
					<div class="" id="mydivAse">						
							<?=form_label('Seleccionar aseguradora', 'select_ase')?>
							<?php echo form_dropdown('select_ase',$options, $aseguradora->id, $arrayAse); ?>
							<?=form_error('select_ase','<span class="errors"> ','</span>'); ?>
								
					</div>
				</div>
				<div class="col-lg-3">	
					<div class="" id="mydivRama">

					
					</div>
					<input type="hidden" name="" id="ramaselect" value="<?php echo $reportes->id_rama;?>">
				</div>

				<div class="clearfix"></div>

				<div class="col-lg-6">					
					<div class="md-form">	
								<?=form_label('Nombre del asegurado','nombre_asegurado');?>					
								<?=form_input($nombre_asegurado);?>	
								<?=form_error('nombre_asegurado','<span class="errors"> ','</span>'); ?>

					</div>
					
				</div>	
				<!--
				<div class="col-lg-4">	
					<div class="md-form">						
								<?=form_label('Cédula', 'cedula_ase')?>
								<?=form_input($cedula_ase);?>
								<?=form_error('cedula_ase','<span class="errors"> ','</span>'); ?>								
					</div>
				
				</div>
				-->			
				<input type="hidden" name="id_asegurado" value="<?php echo $asegurado->id; ?>">
				<input type="hidden" name="id_vehiculo" value="<?php echo $vehiculo->id; ?>">
				<input type="hidden" name="id_conductor" value="<?php echo $conductor->id; ?>">
				<input type="hidden" name="id_reportes" value="<?php echo $reportes->id; ?>">

				<div class="col-lg-6">	
					<div class="md-form">						
								<?=form_label('Teléfono', 'telefono_ase')?>
								<?=form_input($telefono_ase);?>								
					</div>
				</div>

			</div>
			
		</section>

		<br>
		<header class="tituloReporte">
			<h1 data-target="edit_reportes"> DATOS DE VEHÍCULO </h1>
		</header>

		<section class="sectionwhite">

			<div class="row">

				<div class="col-lg-3">	
					<div class="md-form">						
								<?=form_input($placa);?>
								<?=form_label('Placa', 'placa')?>
								<?=form_error('placa','<span class="errors"> ','</span>'); ?>
					</div>
				</div>
				<div class="col-lg-3">					
					<div class="md-form">						
								<?=form_input($marca);?>
								<?=form_label('Marca', 'marca')?>
								<?=form_error('marca','<span class="errors"> ','</span>'); ?>
					</div>					
				</div>					
				<div class="col-lg-3">	
					<div class="md-form">						
								<?=form_input($color);?>
								<?=form_label('Color', 'color')?>
								<?=form_error('color','<span class="errors"> ','</span>'); ?>
					</div>
				</div>
				<div class="col-lg-3">	
					<div class="md-form">						
								<?=form_input($modelo);?>
								<?=form_label('Modelo', 'modelo')?>
								<?=form_error('modelo','<span class="errors"> ','</span>'); ?>
					</div>
				</div>

				
				

				<div class="col-lg-6">
					
					<div class="md-form">						
								<?=form_input($lugar_recoge);?>
								<?=form_label('Lugar donde se recoge', 'lugar_recoge')?>
					</div>
					
				</div>					
				
				<div class="col-lg-6">
					
					<div class="md-form">						
								<?=form_input($lugar_entrega);?>
								<?=form_label('Lugar donde se entrega', 'lugar_entrega')?>
					</div>
					
				</div>
				<div class="col-lg-4">	
					<div class="md-form">						

								<?=form_input($hora_recoge);?>
					    		<?=form_label('Seleccionar hora llegada', 'input_starttime2')?>					    
					    		<?=form_error('hora_recoge','<span class="errors"> ','</span>'); ?>
								
					</div>
				</div>			
				<div class="col-lg-4">	
					<div class="md-form">	

								<?=form_input($hora_salida);?>
					    		<?=form_label('Seleccionar hora salida', 'input_starttime4')?>					    
					    		<?=form_error('hora_salida','<span class="errors"> ','</span>'); ?>

								
					</div>
				</div>		
				<div class="col-lg-4">	
					<div class="md-form">	

								<?=form_input($hora_entrega);?>
					    		<?=form_label('Seleccionar hora entrega', 'input_starttime3')?>					    
					    		<?=form_error('hora_entrega','<span class="errors"> ','</span>'); ?>

								
					</div>
				</div>
				
			</div>

		</section>


		<header class="tituloReporte">
			<h1 data-target="edit_reportes">
				OTROS DATOS
			</h1>
		</header>

		<section class="sectiongris">
			<div class="row">
				
				<div class="col-lg-8">
					
					<div class="md-form">						
								<?=form_input($expediente);?>
								<?=form_label('Número de expediente','expediente')?>
								<?=form_error('expediente','<span class="errors"> ','</span>'); ?>
					</div>
					
				</div>					
				<div class="col-lg-4">	
					<div class="md-form">						
								<?=form_input($placa_grua);?>
								<?=form_label('Placa grúa', 'placa_grua')?>
								<?=form_error('placa_grua','<span class="errors"> ','</span>'); ?>
					</div>
				</div>
				<div class="col-lg-3">	
					<div class="md-form">						
								<?=form_input($nombre_conductor);?>
								<?=form_label('Nombre conductor', 'nombre_conductor')?>
								<?=form_error('nombre_conductor','<span class="errors"> ','</span>'); ?>

					</div>
				</div>
				<div class="col-lg-3">	
					<div class="md-form">						
								<?=form_input($cedula_conductor);?>
								<?=form_label('Cédula conductor', 'cedula_conductor')?>
								<span class="errors" id="myErrorConductor"></span>
								<?=form_error('cedula_conductor','<span class="errors"> ','</span>'); ?>
					</div>
				</div>
				<div class="col-lg-3">	
					<div class="md-form">						
								<?=form_input($telefono_conductor);?>
								<?=form_label('Teléfono del conductor', 'telefono_conductor')?>								
					</div>
				</div>
				<div class="col-lg-3">					
					<div class="md-form">						
								<?=form_input($nombre_receptor);?>
								<?=form_label('Nombre receptor', 'nombre_receptor')?>
								<?=form_error('nombre_receptor','<span class="errors"> ','</span>'); ?>
					</div>					
				</div>					
				

				<div class="col-lg-3">	
					<div class="md-form">						
								<?=form_input($km_servicio);?>
								<?=form_label('Kilometraje del servicio', 'km_servicio')?>
					</div>
				</div>
				<div class="col-lg-3">	
					<div class="md-form">						
								<?=form_input($km_valor);?>
								<?=form_label('Valor Kilometraje', 'km_valor')?>
					</div>
				</div>

				
				<div class="col-lg-3">	
					<div class="md-form">						
								<?=form_input($adicional);?>
								<?=form_label('Adicional', 'adicional')?>
					</div>
				</div>

				<div class="col-lg-3">	
					<div class="md-form">						
								<?=form_input($valor_to);?>
								<?=form_label('Valor Total','valor_total')?>
					</div>
				</div>
				
				<div class="clearfix"></div>

				<div class="col-lg-6">	
						<div class="md-form">						
									<?=form_input($tipo_servicio);?>
									<?=form_label('Tipo de servicio', 'tipo_servicio')?>
						</div>						
				</div>
				<div class="col-lg-6">	
						<div class="md-form">						
									<?=form_input($fallido);?>
									<?=form_label('Fallido', 'fallido')?>
						</div>						
				</div>

				<div class="col-lg-12">	
					<div class="md-form">						    
					    <textarea type="text" id="form8" class="md-textarea" name="observaciones"><?php echo $reportes->observaciones ?>
					    </textarea>
					    <label for="form8">Observaciones</label>
					</div>
				</div>

				


				<div>				    	
				   	<a href="" id="btnCargarAseguradora" class="btn btn-primary btn-lg">Gestionar aseguradora</a>
				   	
				</div>	

			</div>
		</section>

		<section class="sectionwhite">
			<div class="content-aseguradoras" id="contentFormularioAseguradora">	
								
			</div>
			
		</section>
		<div class="clearfix"></div>
		<section class="sectionwhite">

		<div class="col-lg-12">
				<center>
						<?= form_submit('mysubmit', 'Editar!', 'id=btnGuardar', 'class="btn btn-success btn-lg"'); ?>
						<a class="btn btn-danger btn-xs" href="<?php echo base_url(); ?>/planillas"> Cancelar</a>
					</center>
			</div>			
					
					<input type="hidden" name="id_usuario" value="<?php echo $id;?>">			        
			
			
		</section>			    
				
		<?php
			echo form_close();
		?>		
			
	</div>
	
</div>

