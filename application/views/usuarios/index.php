



<?php

/*
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Lista de Usuarios </title>
</head>
<body>
<?php 

		//var_dump($query);
		
		foreach ($query as $key => $object) {
		    echo $object->id.",". $object->nombres;
		}
				 
       	
?>


</body>
</html>
*/


$ase = array(
		'type'  => 'text',
        'name'  => 'ase',
        'id'    => 'myNombreFun',        
        'class' => 'form-control',
        'value' =>  set_value('ase')

		);


?>


<div class="col-lg-3">
	
	<div class="md-form ">		
				<?php echo form_input($ase);?>
				<?php echo form_label('Nombres y apellidos funcionario', 'ase');

				echo $idAse;
				echo "<br>";
				echo $idRama;
				?>
	</div>
</div>
	
	
	


