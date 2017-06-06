<?php
  


?>


<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>


<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0mm;
	margin-right:0mm;
	margin-bottom:8.0pt;
	margin-left:0mm;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:792.0pt 612.0pt;
	margin:10.0mm 10.0mm 10.0mm 10.0mm;}
div.WordSection1
	{page:WordSection1;}

-->
body{
      text-transform: uppercase;
  }

</style>


</head>

<body lang=ES-CO>
<center>
<div class=WordSection1>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=293 colspan=3 rowspan=5 valign=top style='width:219.5pt;border:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt'>
  <center> <img  width="100%" src="<?php echo base_url();?>img/ike1.png" ></center>
  </td>
  <td width=99 colspan=2 valign=top style='width:74.4pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>FECHA</span></p>
  </td>
  <td width=156 colspan=4 valign=top style='width:116.95pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt'>
  <b>
    B/tura, <?php echo $reporte->fecha; ?>
  </b>
  </td>
  <td width=227 colspan=5 valign=top style='width:60.0mm;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>EXPEDIENTE   No</span></p>
  </td>
  <td width=205 colspan=3 valign=top style='width:153.85pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt'>
  <b>
    <?php echo $reporte->expediente; ?>
  </b>
  </td>
 </tr>
 <tr>
  <td width=99 colspan=2 valign=top style='width:74.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>MARCA</span></p>
  </td>
  <td width=156 colspan=4 valign=top style='width:116.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <b>
    <?php echo $vehiculo->marca; ?>
  </b>
  </td>
  <td width=227 colspan=5 valign=top style='width:60.0mm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>AUTORIZO</span></p>
  </td>
  <td width=205 colspan=3 valign=top style='width:153.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  
   
      <b>
    <?php echo $reporte->nombre_funcionario; ?>
  </b>
    
 
  </td>
 </tr>
 <tr>
  <td width=99 colspan=2 valign=top style='width:74.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>MODELO</span></p>
  </td>
  <td width=156 colspan=4 valign=top style='width:116.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <b>
    <?php echo $vehiculo->modelo; ?>
  </b>
  </td>
  <td width=227 colspan=5 valign=top style='width:60.0mm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>HORA QUE INICIO EL SERVICIO</span></p>
  </td>
  <td width=205 colspan=3 valign=top style='width:153.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=99 colspan=2 valign=top style='width:74.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>COLOR</span></p>
  </td>
  <td width=156 colspan=4 valign=top style='width:116.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <b>
    <?php echo $vehiculo->color; ?>
  </b>
  </td>
  <td width=227 colspan=5 valign=top style='width:60.0mm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>HORA QUE TERMINO EL SERVICIO</span></p>
  </td>
  <td width=205 colspan=3 valign=top style='width:153.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=99 colspan=2 valign=top style='width:74.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>PLACAS</span></p>
  </td>
  <td width=156 colspan=4 valign=top style='width:116.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <b>
    <?php echo $vehiculo->placa; ?>
  </b>
  </td>
  <td width=227 colspan=5 valign=top style='width:60.0mm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>CIUDAD</span></p>
  </td>
  <td width=205 colspan=3 valign=top style='width:153.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>
    <b>BUENAVENTURA</b>
  </p>
  </td>
 </tr>
 <tr>
  <td width=980 colspan=17 valign=top style='width:734.8pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:16.0pt'>CONTROL
  DE SERVICIO</span></p>
  </td>
 </tr>
 <tr style='height:1.70pt'>
  <td width=359 colspan=4 rowspan=21 style='width:269.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:1.70pt'>
  <center> <img  width="75%" src="<?php echo base_url();?>img/ike2.jpg" ></center>
  <center> <img  width="75%" src="<?php echo base_url();?>img/ike3.jpg" ></center>
  </td>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;padding:
  0mm 5.4pt 0mm 5.4pt;height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
  <td width=337 colspan=5 rowspan=21 style='width:253.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.70pt'>
 
    <center> <img  width="75%" src="<?php echo base_url();?>img/ike4.jpg" ></center>
  
  

  <center> <img  width="75%" src="<?php echo base_url();?>img/ike5.jpg" ></center>
  
  </td>
 </tr>
 <tr style='height:1.70pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;padding:
  0mm 5.4pt 0mm 5.4pt;height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>SI</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>NO</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>SI</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.70pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>NO</span></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Radiador</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Llantas de
  repuesto</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Ventilador</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Señales</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Radiador</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Gato</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Batería</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Llave de
  cruz</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'> Carburador</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Herramienta</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Filtro de
  aire</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Cuartos</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Distribuidor</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Defensa</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Bujías
  cables</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Espejos
  Externos</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Bobina</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Tapones</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Bomba de
  gas</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Antenas</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Inyectores</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Plumas</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Tablero</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Canastilla</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Volante</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Tapón
  gasolina</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Estéreo</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Batería</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Reloj</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Placas</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Encendedor</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Papeles</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Espejos</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Llaves</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border:none;border-right:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Asientos</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Bocinas</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:1.2pt'>
  <td width=76 colspan=2 valign=top style='width:20.0mm;border-top:none;border-right:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Tapetes</span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:23.9pt;border-top:none;border-right:solid windowtext 1.0pt;border-left:none;
  border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=82 colspan=2 valign=top style='width:61.15pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:8.0pt'>Otros</span></p>
  </td>
  <td width=31 valign=top style='width:23.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>






<tr style="height:7.6pt" e="">
  <td width="19" valign="top" style="width:13.95pt;border:none;border-left:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:7.6pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="274" colspan="2" style="width:205.55pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:7.6pt">
  <p class="MsoNormal" align="center" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="66" valign="top" style="width:49.6pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:7.6pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="76" colspan="2" valign="top" style="width:20.0mm;border:none;padding:
  0mm 5.4pt 0mm 5.4pt;height:7.6pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="28" valign="top" style="width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:7.6pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="32" valign="top" style="width:23.9pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:7.6pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="82" colspan="2" valign="top" style="width:61.15pt;border:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:7.6pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="31" valign="top" style="width:23.6pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:7.6pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="35" valign="top" style="width:26.0pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:7.6pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="16" valign="top" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;border-bottom:solid windowtext 1.0pt;">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="306" colspan="3" style="width:229.2pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:7.6pt">
  <p class="MsoNormal" align="center" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal"><span style="font-size:8.0pt">MARQUE
  CON UNA X TIPO DE SERVICIO</span></p>
  </td>
  <td width="16" valign="top" style="width:12.1pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:7.6pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
 </tr>
 <tr style="height:1.2pt">
  <td width="19" valign="top" style="width:13.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="274" colspan="3" valign="top" style="width:205.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt" rowspan="6">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">OBSERVACIONES</span></p>
  <span style="font-size:8.0pt">
   <?php echo $reporte->observaciones; ?>
  </span></td>
  <td width="66" valign="top" style="width:49.6pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="76" colspan="2" valign="top" style="width:20.0mm;border:none;padding:
  0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="28" valign="top" style="width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="32" valign="top" style="width:23.9pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="82" colspan="2" valign="top" style="width:61.15pt;border:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="31" valign="top" style="width:23.6pt;border:none;border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  
  <td width="153" colspan="3" valign="top" style="width:114.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">Arrastre de grúa</p>
  </td>
  <td width="153" valign="top" style="width:114.45pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt" colspan="2">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">Paso de corriente</p>
  </td>
  
 </tr>
 <tr style="height:1.2pt">
  <td width="19" valign="top" style="width:13.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  <td width="66" valign="top" style="width:49.6pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="76" colspan="2" valign="top" style="width:20.0mm;border:none;padding:
  0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="28" valign="top" style="width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="32" valign="top" style="width:23.9pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="82" colspan="2" valign="top" style="width:61.15pt;border:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="31" valign="top" style="width:23.6pt;border:none;border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  
  <td width="153" colspan="3" valign="top" style="width:114.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">Por accidente</p>
  </td>
  <td width="153" valign="top" style="width:114.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt" colspan="2">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">Suministro de gasolina</p>
  </td>
  
 </tr>
 <tr style="height:1.2pt">
  <td width="19" valign="top" style="width:13.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  
  <td width="76" colspan="2" valign="top" style="width:20.0mm;border:none;padding:
  0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="28" valign="top" style="width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="32" valign="top" style="width:23.9pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="82" colspan="2" valign="top" style="width:61.15pt;border:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="31" valign="top" style="width:23.6pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="35" valign="top" style="width:26.0pt;border:none;border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  <td width="153" colspan="3" valign="top" style="width:114.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">Por falla mecánica</p>
  </td>
  <td width="153" valign="top" style="width:114.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt" colspan="2">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">Taxi</p>
  </td>
  
 </tr>
 <tr style="height:1.2pt">
  <td width="19" valign="top" style="width:13.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  
  <td width="76" colspan="2" valign="top" style="width:20.0mm;border:none;padding:
  0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="28" valign="top" style="width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="32" valign="top" style="width:23.9pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="82" colspan="2" valign="top" style="width:61.15pt;border:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="31" valign="top" style="width:23.6pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="35" valign="top" style="width:26.0pt;border:none;border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  <td width="153" colspan="3" valign="top" style="width:114.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">Carro taller</p>
  </td>
  <td width="153" valign="top" style="width:114.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt" colspan="2">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">Conductor elegido</p>
  </td>
  
 </tr>
 <tr style="height:1.2pt">
  <td width="19" valign="top" style="width:13.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  
  <td width="76" colspan="2" valign="top" style="width:20.0mm;border:none;padding:
  0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="28" valign="top" style="width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="32" valign="top" style="width:23.9pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="82" colspan="2" valign="top" style="width:61.15pt;border:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="31" valign="top" style="width:23.6pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="35" valign="top" style="width:26.0pt;border:none;border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  <td width="153" colspan="3" valign="top" style="width:114.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">Cambio de llanta</p>
  </td>
  <td width="153" valign="top" style="width:114.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt" colspan="2">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">Conductor profesional</p>
  </td>
  
 </tr>
 <tr style="height:1.2pt">
  <td width="19" valign="top" style="width:13.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  
  <td width="76" colspan="2" valign="top" style="width:20.0mm;border:none;padding:
  0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="28" valign="top" style="width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="32" valign="top" style="width:23.9pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="82" colspan="2" valign="top" style="width:61.15pt;border:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="31" valign="top" style="width:23.6pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="35" valign="top" style="width:26.0pt;border:1px;border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  
  <td width="153" colspan="3" valign="top" style="width:114.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">otro</p>
  </td>
  <td width="153" valign="top" style="width:114.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt" colspan="2">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal">&nbsp;</p>
  </td>
  
 </tr>
 <tr style="height:1pt" e="">
  <td width="19" valign="top" style="width:13.95pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="274" colspan="2" valign="top" style="width:205.55pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="66" valign="top" style="width:49.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="76" colspan="2" valign="top" style="width:20.0mm;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="28" valign="top" style="width:21.25pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="32" valign="top" style="width:23.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="82" colspan="2" valign="top" style="width:61.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" align="right" style="margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="31" valign="top" style="width:23.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="35" valign="top" style="width:26.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="16" valign="top" style="width:11.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="153" colspan="2" valign="top" style="width:114.75pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="153" valign="top" style="width:114.45pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
  <td width="16" valign="top" style="width:12.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt">
  <p class="MsoNormal" style="margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:8.0pt">&nbsp;</span></p>
  </td>
 </tr>









 <tr style='height:1.2pt'>
  <td width=189 colspan=2 style='width:141.5pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Nombre del Proveedor</p> 
  </td>
  <td width=246 colspan=4 valign=top style='width:184.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
   <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>
    
    <span style='font-size:8.0pt'>
    
    <b>MULTISERVICIOS COSMOS DE BUENAVENTURA S.A.S</b>
  </span>
  </p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=195 colspan=6 valign=top style='width:146.45pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Nombre del Usuario</p>
  </td>
  <td width=322 colspan=4 valign=top style='width:241.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:1.2pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:24.55pt'>
  <td width=189 colspan=2 style='width:141.5pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Nombre del Técnico</p>
  </td>
  <td width=246 colspan=4 valign=top style='width:184.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>
    
    <span style='font-size:8.0pt'>
    
    <b>
    <?php echo $conductor->nombre; ?>
 
    </b>
  </span>
  </p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:24.55pt'>
 
  </td>
  <td width=195 colspan=6 style='width:146.45pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Teléfono</p>
  </td>
  <td width=322 colspan=4 valign=top style='width:241.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:24.55pt'>
  <td width=189 colspan=2 style='width:141.5pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>No. Cedula Técnico</p>
  </td>
  <td width=246 colspan=4 valign=top style='width:184.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>
    
    <span style='font-size:8.0pt'>
    
    <b>
    <?php echo $conductor->cedula; ?>
 
    </b>
  </td>
  <td width=28 valign=top style='width:21.25pt;border:none;padding:0mm 5.4pt 0mm 5.4pt;
  height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=195 colspan=6 style='width:146.45pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>No. Cedula</p>
  </td>
  <td width=322 colspan=4 valign=top style='width:241.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr height=0>
  <td width=34 style='border:none'></td>
  <td width=173 style='border:none'></td>
  <td width=106 style='border:none'></td>
  <td width=64 style='border:none'></td>
  <td width=33 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=23 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=51 style='border:none'></td>
  <td width=22 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=35 style='border:none'></td>
  <td width=16 style='border:none'></td>
  <td width=117 style='border:none'></td>
  <td width=36 style='border:none'></td>
  <td width=146 style='border:none'></td>
  <td width=16 style='border:none'></td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%'>&nbsp;</span></p>

</div>
</center>
<script type="text/javascript">
  
  window.print();

</script>
</body>

</html>
