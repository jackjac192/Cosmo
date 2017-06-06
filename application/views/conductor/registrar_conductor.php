<?php
	if (isset($this->session->userdata['logged_in'])) {
		$username = ($this->session->userdata['logged_in']['user_name']);
		$correo = ($this->session->userdata['logged_in']['correo']);
		$id = ($this->session->userdata['logged_in']['id']);



		
	} 
	else {
		header("location: ".base_url()."Login");
	}


	$nombre_conductor = array(
		'type'  => 'text',
        'name'	=> 'nombre_conductor',        
        'class' => 'form-control',
        'value' =>  set_value('nombre_conductor'),       

		);

	$cedula_conductor = array(
		'type'  => 'text',
        'name'  => 'cedula_conductor',          
        'class' => 'form-control',
        'value' =>  set_value('cedula_conductor'),
        
		);	

	$telefono_conductor = array(
		'type'  => 'text',
        'name'  => 'telefono_conductor',        
        'class' => 'form-control',
        'value' =>  set_value('telefono_conductor'),
        
		);
	?>

	<div class="container">
	<div class="row">


		<?php 
					$attributes = array('id' => 'myformReport');
					echo form_open('conductor/crear', $attributes);
		?>
		<header class="tituloReporte">
				<h1 data-target="edit_reportes" > <i class="fa fa-user-plus" aria-hidden="true"></i>
 REGISTRO DE CONDUCTORES</h1>
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


			<div class="col-lg-4">	
					<div class="md-form">						
								<?=form_input($nombre_conductor);?>

								<?=form_label('Nombre conductor', 'nombre_conductor')?>
								<?=form_error('nombre_conductor','<span class="errors"> ','</span>'); ?>
								

					</div>
				</div>
				<div class="col-lg-4">	
					<div class="md-form">						
								<?=form_input($cedula_conductor);?>
								<?=form_label('Cédula conductor', 'cedula_conductor')?>
								<?=form_error('cedula_conductor','<span class="errors"> ','</span>'); ?>
								
					</div>
				</div>
				<div class="col-lg-4">	
					<div class="md-form">						
								<?=form_input($telefono_conductor);?>
								<?=form_label('Teléfono del conductor', 'telefono_conductor')?>								
					</div>
				</div>

			</div>
		</section>

		<section class="sectonwhite">
			<div class="col-lg-12">	
					<br> <center>
					
				
					<?= form_submit('mysubmit', 'Guardar registro', '', 'class="btn btn-success btn-lg"'); ?>	
					<a class="btn btn-danger btn-xs" href="<?php echo base_url(); ?>/conductor"> Cancelar</a>
					
					</center>		        
			
			</div>
			
			
		</section>			    
				
		<?php
			echo form_close();
		?>		

</div>
</div>