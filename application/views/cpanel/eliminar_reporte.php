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
				¿Realmente desea eliminar  el Reporte con el número de expediente: <b><?=$reporte->expediente?></b>?
			</h2>
		</div>

		<div class="col-md-6">	
			
			<h3>
				<a href="<?php echo base_url();?>Reportes/eliminado/<?= $reporte->expediente?>" id="" class="btn btn-danger btn-lg">SI</a>
			</h3>
			<h3>
				<a href="<?php echo base_url();?>planillas/" id="" class="btn btn-primary btn-lg">NO</a>
			</h3>
		</div>
		
	</div>
	
</div>