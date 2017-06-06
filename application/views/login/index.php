<?php

$user = array(
        'type'  => 'text',
        'name'  => 'user_name',
        'id'    => 'myUserName',        
        'class' => 'form-control'

);

$pass = array(
		'type'	=> 'password',
		'name'	=> 'user_pass',
		'id'	=> 'myUserPass',
		'class'	=> 'form-control validate'

);

$login = array(		
		'class'	=> 'btn btn-primary btn-md',


);

?>

<?php

if (isset($this->session->userdata['logged_in'])) {

	header("location: ".base_url()."Login/user_login_process");
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2> INICIO DE SESION</h2>
			
			<div class="content-form-login">
				<?php 
					$attributes = array('id' => 'myform');
					echo form_open('login/user_login_process', $attributes);
				?>
					
					<?php
						echo "<div>";
						if (isset($error_message)) {
							echo $error_message;
						}
						
						echo "</div>";
					?>

					

					<?php
						if (isset($message_display)) {
							echo "<div class='message'>";
							echo $message_display;
							echo "</div>";
						}


					?>



					<br>
					<div class="md-form">
						<i class="fa fa-user prefix"></i>
						<?=form_input($user);?>
						<?=form_label('Nombre de usuario', 'user_name')?>
						<?= form_error('user_name','<span class="errors"> ','</span>'); ?>
					</div>

					<div class="md-form">
					    <i class="fa fa-lock prefix"></i>
					    <?=form_input($pass);?>
					    <?=form_label('Contraseña', 'user_pass')?>
					    <?= form_error('user_pass','<span class="errors"> ','</span>'); ?>
					    
					</div>

					<div class="md-form form-group divSubmit">
							
						<button  type="submit" name="mysubmit"  class="btn btn-primary">Iniciar sesión</button>				        
				    </div>	
				    <div>
				    	<!--<a href="<?php echo base_url();?>Login/registrar"> Registrarse.</a>-->
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