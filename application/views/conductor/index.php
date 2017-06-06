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
<?php 
                    $attributes = array('id' => 'myformReport');
                    echo form_open('conductor/index', $attributes);

        ?>
<div class="row">
<div class="col-md-12">
    <header class="tituloReporte">
         <h1 data-target="edit_reportes"><i class="fa fa-user"></i> CONDUCTORES</h1>
    </header>
   
    <br>
    </div>
    <div class="col-md-4">
        <div class="md-form ">
            <?=form_label('Número Cédula', 'cedula');?>                  
            <?=form_input($cedula);?>
            <?=form_error('cedula','<span class="errors"> ','</span>'); ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="md-form form-group">
            <?= form_submit('mysubmit', 'Buscar!', 'id=btnBuscar'); ?> 
        </div>
            <?php
            echo form_close();
        ?>                    
                                                 
              
    </div>
    <div class="col-md-4">
        
            <h3>
                <a href="<?php echo base_url();?>conductor/" id="" class="btn btn-success btn-lg">Listar Conductores
                </a>
            </h3>
                                                  
              
    </div>



    
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
            <th>Acciones</th>
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
             <td>
                <!--<a class="blue-text"><i class="fa fa-user"></i></a>-->
                <a class="teal-text" href="<?php echo base_url(); ?>conductor/editar/<?php echo $objeto->cedula;?>"><i class="fa fa-pencil fa-2"></i></a>
                
                <a class="red-text" href="<?php echo base_url(); ?>conductor/eliminar/<?php echo $objeto->cedula;?>"><i class="fa fa-trash-o fa-2" aria-hidden="true"></i></a>
            </td>
            <td>
                <?php echo $objeto->cedula;?>
                <input type="hidden" name="cedula" value="<?php echo $objeto->cedula;?>"> 
            </td>
            <td> <?php echo $objeto->nombre;?> </td>
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

