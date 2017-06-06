<?php
    if (isset($this->session->userdata['logged_in'])) {
        $username = ($this->session->userdata['logged_in']['user_name']);
        $correo = ($this->session->userdata['logged_in']['correo']);
        $id = ($this->session->userdata['logged_in']['id']);



        
    } 
    else {
        header("location: ".base_url()."code/Login");
    }
    ?>



<?php 

$cedula = array(
        'type'  => 'text',
        'name'  => 'cedula',
        'id'    => 'myNombreFun',        
        'class' => 'form-control',
        'value' =>  set_value('cedula')

        );

?>

    
<div class="container">

<div class="row">
    
</div>
<br>
<center>
    <?php

    if(isset($pagination)){
        echo $pagination;    
    }
    else {

    }
    
?>

</center>

    
<section class="sectiongris">

<div class="table-responsive">
<table class="table table-planillas">
    <thead>
        <tr>
            <th>#</th>  
            <th>Acción</th>          
            <th>Cédula</th>
            <th>Nombres</th>
            <th>Telefono</th>
                 
            
            
            
            
        </tr>
    </thead>
    <tbody>
    <?php

        //var_dump($query);
        $num=1;
        if(!$query)
        {
            ?>
            <b> No se encontraron registros </b>
            <?php
        }

        else
        {
        foreach ($query as $key => $objeto) {
                    
   
       

    ?>

    
        <tr>
            <th scope="row"><?php echo $num++;?> </th>
            <td><button value="<?php echo $objeto->cedula;?>" onclick="seleccionarConductor(this)" data-dismiss="modal"> Seleccionar</button></td>
            <td>
                <?php echo $objeto->cedula;?>
                <input type="hidden" name="cedula" value="<?php echo $objeto->cedula;?>"> 
            </td>
            <td> <a href="#" class="conductoresAjaxx" > <?php echo $objeto->nombre;?> </a> </td>
            <td> <?php echo $objeto->telefono;?> </td>            
            
                      
           
        </tr>
        

    

    <?php

     }
     }

    ?>
    </tbody>
</table>

</div>

</section>
<center>
    <?php

    if(isset($pagination)){
        echo $pagination;    
    }
    else {

    }
    
?>

</center>

    

</div>