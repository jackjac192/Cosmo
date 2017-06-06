<?php



$cedula = array(
        'type'  => 'text',
        'name'  => 'cedula',
        'id'    => 'myUserCedula',        
        'class' => 'form-control',
        'value' =>  set_value('cedula'),
        'rules' => 'required'
        

);
$nombres = array(
        'type'  => 'text',
        'name'  => 'nombres',
        'id'    => 'myUserNombre',        
        'class' => 'form-control',
        'value' =>  set_value('nombres'),
        'rules' => 'required'

);
$apellidos = array(
        'type'  => 'text',
        'name'  => 'apellidos',
        'id'    => 'myUserApellidos',        
        'class' => 'form-control',
        'value' =>  set_value('apellidos'),
        'rules' => 'required'

);


$user = array(
        'type'  => 'text',
        'name'  => 'user_name',
        'id'    => 'myUserName',        
        'class' => 'form-control',
        'value' =>  set_value('user_name'),
        'rules' => 'required'

);

$pass = array(
		'type'	=> 'password',
		'name'	=> 'user_pass',
		'id'	=> 'myUserPass',
		'class'	=> 'form-control validate',
		'value' =>  set_value('user_pass'),
		'rules' => 'required'

);
$correo = array(
        'type'  => 'text',
        'name'  => 'correo',
        'id'    => 'myUserCorreo',        
        'class' => 'form-control',
        'value' =>  set_value('correo'),
        'rules' => 'required'

);

$registra = array(		
		'class'	=> 'btn btn-primary btn-md'


);

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			
			<div class="content-form-register">
			<h2 class="tituloReporte"> Fomulario de registro</h2>
				
				<?php 
					$attributes = array('id' => 'myform');
					echo form_open('login/registro_nuevo', $attributes);
				?>
					
					<div class="row">
						<div class="col-lg-12">
							<?php
								if (isset($message_display)) {
									echo "<div class='message'>";
									echo $message_display;
									echo "</div> <br> ";
								}
							?>
						</div>
					</div>

					<div class="row">
						
						

						

						<div class="col-lg-6">

							<div class="md-form">						
								<?=form_input($nombres);?>
								<?=form_label('Nombres', 'nombres')?>
								<?= form_error('nombres','<span class="errors"> ','</span>'); ?>
							</div>
							
						</div>

						<div class="col-lg-6">
							<div class="md-form">						
								<?=form_input($apellidos);?>
								<?=form_label('Apellidos', 'apellidos')?>
								<?= form_error('apellidos','<span class="errors"> ','</span>'); ?>
							</div>							
						</div>


						<div class="clearfix"></div>

						<div class="col-lg-6">							
							<div class="md-form">						
								<?=form_input($cedula);?>
								<?=form_label('Cédula', 'cedula')?>
								<?= form_error('cedula','<span class="errors"> ','</span>'); ?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="md-form">						
								<?=form_input($correo);?>
								<?= form_label('Correo', 'correo')?> 
								<?= form_error('correo','<span class="errors"> ','</span>'); ?>
							</div>
						</div>

						<div class="clearfix"></div>

						<div class="col-lg-6">
							<div class="md-form">						
								<?=form_input($user);?>
								<?=form_label('Nombre de usuario', 'user_name')?>
								<?= form_error('user_name','<span class="errors"> ','</span>'); ?>
							</div>						

						</div>
						<div class="col-lg-6">							
							<div class="md-form">					    
							    <?=form_input($pass);?>							    
							    <?=form_label('Contraseña', 'user_pass')?>
							    <?= form_error('user_pass','<span class="errors"> ','</span>'); ?>
							    
							</div>
							
						</div>
						
					</div>	
							
							

					<div class="md-form form-group divSubmit">
							
						<button  type="submit" name="mysubmit" value="Registrar!" class="btn btn-primary">Registrarme</button>		        
				    </div>	
				    
				    	

					

				<?php
					echo form_close();
				?>

			</div>
		</div>
	</div>
</div>

<?php



?>