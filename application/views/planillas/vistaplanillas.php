

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

$expediente = array(
        'type'  => 'text',
        'name'  => 'expediente',
        'id'    => 'myNombreFun',        
        'class' => 'form-control',
        'value' =>  set_value('expediente')

        );

?>
<div class="container">
<?php 
                    $attributes = array('id' => 'myformReport');
                    echo form_open('planillas/index', $attributes);

        ?>
<div class="row">
    <div class="col-md-12">
    <header  class="tituloReporte">
        <h1 data-target="list_planillas"> <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
 PLANILLAS</h1>

    </header>
    
    <h3> 
        <?php
            if (isset($message_display)) {
                echo "<div class='message'>";
                echo $message_display;
                echo "</div> <br>";
            }

        ?>
    </h3>
    <br>
    </div>

    <div class="col-md-4">
        <div class="md-form ">
            <?=form_label('Número Expediente', 'expediente');?>                  
            <?=form_input($expediente);?>
            <?=form_error('expediente','<span class="errors"> ','</span>'); ?>
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
                <a href="<?php echo base_url();?>planillas/" id="" class="btn btn-success btn-lg">Listar Planilla
                </a>
            </h3>
                                                  
              
    </div>
    <div class="col-md-12">
         <a href="" id="btnPrint"> <i class="fa fa-print fa-2" aria-hidden="true"></i> Imprimir planillas</a>
        
            <div class="row">
            <form id="idformImp">
                <div class="col-md-4">

                 
                 
                   <label class="active">Seleccionar Aseguradora</label>
                    <select id="mySelect" disabled>
                        <option value="0">Todas</option>           
                        <?php
                            foreach ($aseguradora as $key => $objeto) {                
                                ?> <option value="<?php echo $objeto->id?>"> <?php echo $objeto->nombre_ase;?></option><?php                      
                            }
                        ?> 
                    </select>
                
                
            </div>
            <div class="col-md-4">
            <br>
                    <div class="" id="mydivRama">
                    
                    </div>
            </div>
            <div class="col-md-4">
            <br>
            <br>
                <fieldset class="form-group">
                    <input type="checkbox" id="checkbox1" disabled>
                    <label for="checkbox1">Seleccionar todas las ramas?</label>
                </fieldset>
            </div>

             <div class="col-md-6">
                <div class="md-form">

                        <?php
                            $fechaI = array(
                                'type'  =>  'text',
                                'id'    =>  'date-picker-example',
                                'class' =>  'form-control datepicker',
                                'name'  =>  'fechaI'

                            );

                           
                        ?>
                        
                        <?=form_input($fechaI);?>
                        <?=form_label('Fecha inicio', 'date-picker-example')?>                     
                        <?=form_error('fecha','<span class="errors"> ','</span>'); ?>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="md-form">

                        <?php
                            $fechaF = array(
                                'type'  =>  'text',
                                'id'    =>  'date-picker-example9',
                                'class' =>  'form-control datepicker',
                                'name'  =>  'fechaF'

                            );

                           
                        ?>
                        
                        <?=form_input($fechaF);?>
                        <?=form_label('Fecha final', 'date-picker-example9')?>                     
                        <?=form_error('fecha','<span class="errors"> ','</span>'); ?>
                    </div>
            </div>
             <div class="col-md-6">
                <a href="<?php echo base_url(); ?>planillas/excel" id="btnExcel">Descargar Excel</a>
            </div>
             <div class="col-md-6">
             <div id="divRespuesta">
                 
             </div>
                
            </div>

            </form>
            </div>
            
       
        
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
            <th>Expediente</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Asegurador</th>            
            <th>Placa</th>
            <th>Aseguradora</th>
            <th>Ramificación</th>
            <th>Funcionario</th>            
            <th>O.Servicio</th>
            <th>D.Servicio</th>
            <th>Km.Servicio.</th>
            <th>Valor</th>
            <th>T.Servicio</th>
            <th>Conductor</th>
            <th>Cédula</th>
            <th>Placa_Grúa</th>
            <th>Hora Llegada</th>
            <th>Hora Salida</th>
            <th>Hora Entrega</th>
            <th>Valor Total</th>   
            <th>Acciones</th>     
            
            
            
            
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
                <a class="teal-text" href="<?php echo base_url(); ?>reportes/editar/<?php echo $objeto->expediente;?>"><i class="fa fa-pencil fa-2"></i></a>
                <a class="blue-text" href="<?php echo base_url(); ?>imprimir/index/<?php echo $objeto->expediente;?>"><i class="fa fa-print fa-2" aria-hidden="true"></i></a>
                <a class="red-text" href="<?php echo base_url(); ?>reportes/eliminar/<?php echo $objeto->expediente;?>"><i class="fa fa-trash-o fa-2" aria-hidden="true"></i></a>
            </td>
            <td>
                <?php echo $objeto->expediente;?>
                <input type="hidden" name="expediente" value="<?php echo $objeto->expediente;?>"> 
            </td>
            <td> <?php echo $objeto->fecha;?> </td>
            <td> <?php echo $objeto->hora;?> </td>            
            <td> <?php echo $objeto->as_enombre;?> </td>            
            <td> <?php echo $objeto->placa;?> </td>            
            <td> <?php echo $objeto->nombre_ase;?> </td>
            <td> <?php echo $objeto->nombre_rama;?> </td>
            <td> <?php echo $objeto->nombre_funcionario;?></td>            
            <td> <?php echo $objeto->lugar_recoge;?> </td>
            <td> <?php echo $objeto->lugar_entrega;?> </td>
            <td> <?php echo $objeto->km_servicio;?> </td>
            <td> <?php echo $objeto->km_valor;?> </td>
            <td> <?php echo $objeto->tipo_servicio;?> </td>
            <td> <?php echo $objeto->co_nombre;?> </td>
            <td> <?php echo $objeto->co_cedula;?> </td>
            <td> <?php echo $objeto->placa_grua;?> </td>
            <td> <?php echo $objeto->hora_recoge;?> </td>
            <td> <?php echo $objeto->hora_salida;?> </td>
            <td> <?php echo $objeto->hora_entrega;?> </td>
            <td> <?php echo $objeto->valor_total;?> </td>  
            <td>
                <!--<a class="blue-text"><i class="fa fa-user"></i></a>-->
                <a class="teal-text" href="<?php echo base_url(); ?>reportes/editar/<?php echo $objeto->expediente;?>"><i class="fa fa-pencil fa-2"></i></a>
                <a class="blue-text" href="<?php echo base_url(); ?>imprimir/index/<?php echo $objeto->expediente;?>"><i class="fa fa-print fa-2" aria-hidden="true"></i></a>
                <a class="red-text" href="<?php echo base_url(); ?>reportes/eliminar/<?php echo $objeto->expediente;?>"><i class="fa fa-trash-o fa-2" aria-hidden="true"></i></a>
            </td>  
            
            
            
           
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