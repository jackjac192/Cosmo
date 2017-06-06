
<?php

$optionsRama = array();

	foreach ($ramas as $key => $objeto) {
		
		$optionsRama[$objeto->id] = $objeto->id. " : ". $objeto->nombre_rama;		  
	
	}


$arrayRama = array(
					'id'	=> 'mySelectRama',
					'name'	=> 'select_rama',
					'value' =>  set_value('select_rama')
				);


	if(isset($select))
	{
		echo form_label('Seleccionar ramificación', 'select_rama');
		echo form_dropdown('select_rama',$optionsRama, $select, $arrayRama);
		echo form_error('select_rama','<span class="errors"> ','</span>'); 
	}else{
		echo form_label('Seleccionar ramificación', 'select_rama');
		echo form_dropdown('select_rama',$optionsRama, $select, $arrayRama);
		echo form_error('select_rama','<span class="errors"> ','</span>'); 
	}
	


	

?>





