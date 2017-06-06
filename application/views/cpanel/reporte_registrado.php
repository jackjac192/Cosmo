
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
				El reporte con el número de expediente: <b><?=$reporte->expediente?></b>, se encuentra en la base de datos, puede proceder a imprimir. 
			</h2>
		</div>

		<div class="col-md-6">	
			<h3>
				<a href="<?php echo base_url();?>imprimir/view_print/<?= $reporte->expediente?>" target="_blank"  id="" class="btn btn-primary btn-lg">Imprimir Formulario Reporte</a>
			</h3>		
			<h3>
				<a href="<?php echo base_url();?>imprimir/view_print_ase/<?= $reporte->expediente?>" target="blank" id="" class="btn btn-warning btn-lg">Imprimir Formulario Aseguradora</a>
			</h3>
			<h3>
				<a href="<?php echo base_url();?>planillas/ver_por_expediente/<?= $reporte->expediente?>" id="" class="btn btn-success btn-lg">Ver en Planilla</a>
			</h3>
		</div>
		
	</div>
	
</div>