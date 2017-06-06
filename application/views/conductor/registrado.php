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

<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>
				<?php echo $query;?>
			</h2>
		</div>

		<div class="col-md-6">	
			<h3>
				<a href="<?php echo base_url();?>conductor/ver_por_cedula/<?php echo $conductor->cedula?>" id="" class="btn btn-primary btn-lg">Ver Conductor</a>
			</h3>
			<h3>
				<a href="<?php echo base_url();?>conductor/index" id="" class="btn btn-success btn-lg">Listar Conductores</a>
			</h3>
		</div>
		
	</div>
	
</div>