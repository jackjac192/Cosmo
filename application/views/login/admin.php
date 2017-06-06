
  
   
<?php
	if (isset($this->session->userdata['logged_in'])) {
		$username = ($this->session->userdata['logged_in']['user_name']);
		$correo = ($this->session->userdata['logged_in']['correo']);
		$id= ($this->session->userdata['logged_in']['id']);
	} 
	else {
		header("location: ".base_url()."Login");
	}
?>




<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2> Hola <?= $username ?> </h2>
			<div>
			<p align="left">
			<h5 > Bienvenido al panel de control</h5>
				<h5> Tu nombre de usuario es: <b><?= $username?></b></h5>
				<h5> Tu correo electrónico es: <b><?= $correo?></b></h5>				
			</p>
			<h3>!Ya puedes comenzar registrando un reporte¡</h3>
			<center><a href="<?php echo base_url();?>reportes/crear" class="btn btn-success btn-lg">Registrar Reporte</a></center>	
				
			</div>
		</div>
		<div class="col-md-6">
			
			<h3>!Tambien puedes salir de tu sesión¡</h3>
			<p> <center>
			!Ahora tu sesión puede estar activa por 24 horas¡	
			</center>
			</p>
			<center><a href="<?php echo base_url();?>Login/salir" class="btn btn-danger btn-lg">Salir Sesion</a></center>			    			

			
		</div>
	</div>
</div>




