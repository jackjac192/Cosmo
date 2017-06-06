<?php
 

?>

<!DOCTYPE html>
<html>
<head>
  

  <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Formulario de Reporte</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">

        
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/imprimir.css" media="print" />
        <style type="text/css">
            body{
                text-transform: uppercase;
            }
        </style>
</head>
<body>



<section id="section-to-print">
  <div class="container">    
    <div class="row">
      <div class="col-lg-12">

          <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='width:100%; border-collapse:collapse;border:none'>
           <tr>
            <td width=820 colspan=5 valign=top style='width:615.0pt;border:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            
              <center> <img src="<?php echo base_url();?>img/servi.jpg" id="imgPrint"></center>
            
            </td>
           </tr>
           <tr>
            <td width=820 colspan=5 valign=top style='width:615.0pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <span style='color:#002060'>&nbsp;</span>
            <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
            text-align:center;line-height:normal'><span style='color:#002060'>Calle 7ª N°
            44-49 Barrio Miraflores Tel: 244 3406 – Cels 317 313 0178 – 318 456 1572 –
            Buenaventura</span></p>
            </td>
           </tr>
           <tr>
            <td width=820 colspan=5 valign=top style='width:615.0pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <span style='color:#002060'>&nbsp;</span>
            <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
            text-align:center;line-height:normal'><span style='color:#002060'>E-mail: </span><a
            href="mailto:parcosmos@hotmail.com"><span style='color:#002060'>parcosmos@hotmail.com</span></a></p>
            </td>
           </tr>
           <tr>
            <td width=820 colspan=5 valign=top style='width:615.0pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <span style='color:#002060'>&nbsp;</span>
            <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
            text-align:center;line-height:normal'>REPORTE DE SERVICIOS ASEGURADORAS</p>
            </td>
           </tr>
           <tr>
            <td width=598 colspan=4 valign=top style='width:448.2pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>FECHA: </span></p>

            <b><?php echo $reporte->fecha;?></b>
            </td>
            <td width=222 valign=top style='width:166.8pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>HORA</span></p>
            
            <b><?php echo $reporte->hora;?></b>
            </td>
           </tr>
           <tr>
            <td width=598 colspan=4 valign=top style='width:448.2pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>FUNCIONARIO:</span></p>
            <b><?php echo $reporte->nombre_funcionario;?></b>
            </td>
            <td width=222 valign=top style='width:166.8pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>ASEGURADORA:</span></p>
            <b>

            <?php echo $aseguradora->nombre_ase;
                if($rama->id == 1)
                {echo " ";}
                else
                { echo " | ".$rama->nombre_rama;}


            ?>               


            </b>
            </td>
           </tr>
           <tr>
            <td width=598 colspan=4 valign=top style='width:448.2pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>ASEGURADO:</span></p>
            <b><?php echo $asegurado->nombre;?></b>
            </td>
            <td width=222 valign=top style='width:166.8pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>TELEFONO:</span></p>
            <b><?php echo $asegurado->telefono;?></b>
            </td>
           </tr>
           <tr>
            <td width=351 colspan=2 valign=top style='width:263.4pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>MARCA VEHICULO: </span></p>
            <b><?php echo $vehiculo->marca;?></b> - MODELO: <b><?php echo $vehiculo->modelo;?></b>
            </td>
            <td width=246 colspan=2 valign=top style='width:184.8pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>COLOR: </span></p>
            <b><?php echo $vehiculo->color;?></b>
            </td>
            <td width=222 valign=top style='width:166.8pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>PLACA: </span></p>
            <b><?php echo $vehiculo->placa;?></b>
            </td>
           </tr>
           <tr>
            <td width=598 colspan=4 valign=top style='width:448.2pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>LUGAR DONDE SE RECOGE: </span></p>

            <b><?php echo $reporte->lugar_recoge;?></b>
            
            </td>
            <td width=222 valign=top style='width:166.8pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>HORA: </span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            </td>
           </tr>
           <tr>
            <td width=598 colspan=4 valign=top style='width:448.2pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>LUGAR DE ENTREGA:</span></p>
            <b><?php echo $reporte->lugar_entrega;?></b>
            </td>
            <td width=222 valign=top style='width:166.8pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>HORA:</span></p>
            </td>
           </tr>
           <tr>
            <td width=820 colspan=5 valign=top style='width:615.0pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>EXPEDIENETE:</span></p>
            <b><?php echo $reporte->expediente;?></b>
            </td>
           </tr>
           <tr>
            <td width=351 colspan=2 valign=top style='width:263.4pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>NOMBRE DEL CONDUTOR: </span></p>
            <b><?php echo $conductor->nombre;?></b>
            </td>
            <td width=246 colspan=2 valign=top style='width:184.8pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>PLACA GRUA: </span></p>
            <b><?php echo $reporte->placa_grua;?></b>
            </td>
            <td width=222 valign=top style='width:166.8pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>TELEFONO CONDUCTOR:  </span></p>
            <b><?php echo $conductor->telefono;?></b>
            </td>
           </tr>
           <tr>
            <td width=820 colspan=5 valign=top style='width:615.0pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>QUIEN RECEPTA:</span></p>
             <b><?php echo $reporte->nombre_receptor;?></b>
            </td>
           </tr>
           <tr>
            <td width=598 colspan=4 valign=top style='width:448.2pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>KILOMETRAJE DEL SERVICIO: </span></p>
            <b><?php echo $reporte->km_servicio;?></b>
            </td>
            <td width=222 valign=top style='width:166.8pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>VALOR KILOMETRAJE: </span></p>
            <b><?php echo $reporte->km_valor;?></b>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            </td>
           </tr>
           <tr>
            <td width=598 colspan=4 valign=top style='width:448.2pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>ADICCIONAL:</span></p>
            <b><?php echo $reporte->adicional;?></b>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            </td>
            <td width=222 valign=top style='width:166.8pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>VALOR TOTAL:</span></p>
            <b><?php echo $reporte->valor_total;?></b>
            </td>
           </tr>
           <tr>
            <td width=820 colspan=5 valign=top style='width:615.0pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>FALLIDO:</span></p>
            <b><?php echo $reporte->fallido;?></b>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            </td>
           </tr>
           <tr>
            <td width=820 colspan=5 valign=top style='width:615.0pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>OBSERVACIONES:</span></p>
            <b><?php echo $reporte->observaciones;?></b>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            </td>
           </tr>
           <tr style='height:58.3pt'>
            <td width=340 valign=top style='width:254.75pt;border:solid windowtext 1.0pt;
            border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:58.3pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>____________________________   </span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>QUIEN ENTREGA:</span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>C.C.                                                                                                      </span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>            </span></p>
            </td>
            <td width=241 colspan=2 valign=top style='width:181.1pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt;height:58.3pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>____________________________         </span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>QUIEN RECIBE:</span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>C.C.                                                                                                      </span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            </td>
            <td width=239 colspan=2 valign=top style='width:179.15pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            padding:0mm 5.4pt 0mm 5.4pt;height:58.3pt'>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>____________________________         </span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>QUIEN PRESTA EL SERVICIO:</span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>C.C.                                                                                                     </span></p>
            <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
            normal'><span style='color:#002060'>&nbsp;</span></p>
            </td>
           </tr>
           
          </table>


      </div>
    </div>
  </div>
  
  </section>

  <script type="text/javascript">
  
  window.print();

</script>
  </body>
</html>


