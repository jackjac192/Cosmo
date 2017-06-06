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
@font-face
  {font-family:Castellar;
  panose-1:2 10 4 2 6 4 6 1 3 1;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {margin-top:0mm;
  margin-right:0mm;
  margin-bottom:8.0pt;
  margin-left:0mm;
  line-height:105%;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;}
p.msopapdefault, li.msopapdefault, div.msopapdefault
  {mso-style-name:msopapdefault;
  margin-right:0mm;
  margin-bottom:8.0pt;
  margin-left:0mm;
  line-height:105%;
  font-size:12.0pt;
  font-family:"Times New Roman",serif;}
p.msochpdefault, li.msochpdefault, div.msochpdefault
  {mso-style-name:msochpdefault;
  margin-right:0mm;
  margin-left:0mm;
  font-size:10.0pt;
  font-family:"Times New Roman",serif;}
.MsoChpDefault
  {font-size:10.0pt;}
.MsoPapDefault
  {margin-bottom:8.0pt;
  line-height:105%;}
@page WordSection1
  {size:612.0pt 792.0pt;
  margin:10.0mm 14.2pt 10.0mm 14.2pt;}
div.WordSection1
  {page:WordSection1;}
-->

body{
      text-transform: uppercase;
  }
</style>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/imprimir.css" media="print" />

</head>

<body lang=ES-CO>
<center>
  

<div class=WordSection1 id="section-to-print">

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=784
 style='width:588.05pt;border-collapse:collapse'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:24.15pt'>
  <td width=166 colspan=2 rowspan=2 style='width:124.65pt;border:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:24.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:18.0pt;
  font-family:"Castellar",serif'>MAPFRE</span></p>
  </td>
  <td width=115 colspan=6 rowspan=2 style='width:86.55pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt;height:24.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:16.0pt'>COLOMBIA</span></p>
  </td>
  <td width=198 colspan=6 rowspan=2 style='width:148.55pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt;height:24.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>INVENTARIO DE VEHICULOS</p>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>TRANSPORTADOS</p>
  </td>
  <td width=106 colspan=3 style='width:79.3pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt;height:24.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>N° INCIDENTE
  
  </p>

  </td>
  <td width=199 colspan=9 style='width:149.0pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0mm 5.4pt 0mm 5.4pt;height:24.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>FECHA DE ASISTENCIA</p>

            <?php $fecha = $reporte->fecha;
             $arrayFecha = explode("-", $fecha);
             
             ?>
          
 
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:13.5pt'>
  <td width=106 colspan=3 valign=top style='width:79.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:13.5pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>

  </p>
  
    <b>
    <center><?php echo $reporte->expediente; ?></center>
  </b>
  
  </td>
  <td width=48 colspan=2 valign=top style='width:36.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:13.5pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>
  <b>
    <center>    <?php echo $arrayFecha[0]; ?></center>
  </b>
    
    
  </p>
  </td>
  <td width=88 colspan=5 valign=top style='width:65.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:13.5pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>
    <b>
      <center><?php echo $arrayFecha[1]; ?></center>
  </b>
  </p>
  </td>
  <td width=63 colspan=2 valign=top style='width:46.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:13.5pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>
    
    <b>
      <center><?php echo $arrayFecha[2]; ?> </center>
  </b>
  </p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:24.15pt'>
  <td width=784 colspan=26 valign=top style='width:588.05pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:24.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Proveedor Nombre / Razón Social:
  <b>
    <b>MULTISERVICIOS COSMOS DE BUENAVENTURA S.A.S</b> -  NIT: <b> 900.673.876-7</b>
  </b>
  </p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.25pt'>
  <td width=453 colspan=12 valign=top style='width:339.6pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:18.25pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>Inmovilizado por</span>:</p>
  </td>
  <td width=331 colspan=14 rowspan=3 valign=top style='width:248.45pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;height:18.25pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:13.7pt'>
    <td width=123 valign=top style='width:92.15pt;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:13.7pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'>Placa</p>
    </td>
    <td width=210 valign=top style='width:157.35pt;border:solid windowtext 1.0pt;
    border-left:none;padding:0mm 5.4pt 0mm 5.4pt;height:13.7pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'>
       <b>
       <?php echo $vehiculo->placa; ?>
      </b>
    </p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:13.15pt'>
    <td width=123 valign=top style='width:92.15pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:13.15pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'>Marca y Línea</p>
    </td>
    <td width=210 valign=top style='width:157.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:13.15pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'>
       <b>
       <?php echo $vehiculo->marca; ?> - 
       <?php echo $vehiculo->modelo; ?>
    
      </b>
    </p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;height:14.0pt'>
    <td width=123 valign=top style='width:92.15pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:14.0pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'>Año</p>
    </td>
    <td width=210 valign=top style='width:157.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:14.0pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'>
      
    </p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:13.55pt'>
    <td width=123 valign=top style='width:92.15pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:13.55pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'>Color</p>
    </td>
    <td width=210 valign=top style='width:157.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:13.55pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'>
       <b>
       <?php echo $vehiculo->color; ?>
      </b>
    </p>
    </td>
   </tr>
  </table>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:27.15pt'>
  <td width=196 colspan=4 valign=top style='width:146.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:27.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Avería<o:p></o:p></p>
  </td>
  <td width=67 colspan=2 valign=top style='width:50.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:27.15pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=49
   style='width:36.85pt;border-collapse:collapse;mso-yfti-tbllook:1184;
   mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:22.7pt'>
    <td width="100%" valign=top style='width:100.0%;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:22.7pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><span style='position:absolute;z-index:251758592'>&nbsp;<o:p></o:p></p>
    </td>
   </tr>
  </table>
  </td>
  <td width=63 colspan=3 valign=top style='width:47.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 0mm 0mm 0mm;height:27.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;Robo<o:p></o:p></p>
  </td>
  <td width=127 colspan=3 valign=top style='width:95.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:27.15pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=49
   style='width:36.85pt;border-collapse:collapse;mso-yfti-tbllook:1184;
   mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:22.7pt'>
    <td width="100%" valign=top style='width:100.0%;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:22.7pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><span style='position:absolute;z-index:251760640'>&nbsp;<o:p></o:p></p>
    </td>
   </tr>
  </table>
  </td>
  <span style='font-size:12.0pt;line-height:105%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES-CO;mso-fareast-language:
  ES-CO;mso-bidi-language:AR-SA'></span></span>
 </tr>
 <tr style='mso-yfti-irow:5;height:23.15pt'>
  <td width=196 colspan=4 valign=top style='width:146.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Accidente<o:p></o:p></p>
  </td>
  <td width=67 colspan=2 valign=top style='width:50.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=49
   style='width:36.85pt;border-collapse:collapse;mso-yfti-tbllook:1184;
   mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:22.7pt'>
    <td width="100%" valign=top style='width:100.0%;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:22.7pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><span style='position:absolute;z-index:251759616'>&nbsp;&nbsp;&nbsp;
    &nbsp;<o:p></o:p></p>
    </td>
   </tr>
  </table>
  </td>
  <td width=63 colspan=3 valign=top style='width:47.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 0mm 0mm 0mm;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Otros<o:p></o:p></p>
  </td>
  <td width=127 colspan=3 valign=top style='width:95.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=49
   style='width:36.85pt;border-collapse:collapse;mso-yfti-tbllook:1184;
   mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:22.7pt'>
    <td width="100%" valign=top style='width:100.0%;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:22.7pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><span style='position:absolute;z-index:251761664'>&nbsp;<o:p></o:p></p>
    </td>
   </tr>
  </table>
  </td>
  <span style='font-size:12.0pt;line-height:105%;font-family:"Times New Roman",serif;
  mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES-CO;mso-fareast-language:
  ES-CO;mso-bidi-language:AR-SA'></span></span>
 </tr>
 <tr style='mso-yfti-irow:6;height:23.15pt'>
  <td width=784 colspan=26 valign=top style='width:588.05pt;border:solid windowtext 1.0pt;
  border-top:none;background:#D0CECE;padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='color:white'>DETALLE
  DEL VEHICULO</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:23.15pt'>
  <td width=196 colspan=4 valign=top style='width:146.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>kilometraje</p>
  </td>
  <td width=130 colspan=5 valign=top style='width:97.8pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
  </td>
  <td width=127 colspan=3 valign=top style='width:95.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Equipo&nbsp;&nbsp;&nbsp;&nbsp;
  de&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Carretera</p>
  </td>
  <td width=155 colspan=6 rowspan=3 valign=top style='width:116.3pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Nivel de Combustible</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>(Marque con una X)</p>
  </td>
  <td width=26 rowspan=3 valign=top style='width:19.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>0</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>½</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;<o:p></o:p></p>
  </td>
  <td width=56 colspan=3 rowspan=3 valign=top style='width:41.65pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal><span style='position:absolute;z-index:251767808'><o:p>&nbsp;</o:p></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0mm 5.4pt 0mm 5.4pt'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:19.85pt'>
    <td width=30 valign=top style='width:22.35pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0mm 5.4pt 0mm 5.4pt;
    height:19.85pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><o:p>&nbsp;</o:p></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0mm 5.4pt 0mm 5.4pt'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:19.85pt'>
    <td width=30 valign=top style='width:22.35pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0mm 5.4pt 0mm 5.4pt;
    height:19.85pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><o:p>&nbsp;</o:p></p>
    </td>
   </tr>
  </table>
  </td>
  <td width=32 colspan=2 rowspan=3 valign=top style='width:24.2pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  </span>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>¼</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>full<o:p></o:p></p>
  </td>
  <td width=63 colspan=2 rowspan=3 valign=top style='width:46.95pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal><span style='position:absolute;z-index:251769856'><o:p>&nbsp;</o:p></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0mm 5.4pt 0mm 5.4pt'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:19.85pt'>
    <td width=30 valign=top style='width:22.3pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0mm 5.4pt 0mm 5.4pt;
    height:19.85pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><o:p>&nbsp;</o:p></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'><o:p>&nbsp;</o:p></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0mm 5.4pt 0mm 5.4pt'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:19.85pt'>
    <td width=30 valign=top style='width:22.35pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0mm 5.4pt 0mm 5.4pt;
    height:19.85pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><o:p>&nbsp;</o:p></p>
    </td>
   </tr>
  </table>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:23.15pt'>
  <td width=196 colspan=4 valign=top style='width:146.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Llantas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Indicar Numero y estado</p>
  </td>
  <td width=130 colspan=5 valign=top style='width:97.8pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
  </td>
  <td width=127 colspan=3 valign=top style='width:95.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Llanta de</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Repuesto</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:18.25pt'>
  <td width=453 colspan=12 valign=top style='width:339.6pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:18.25pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Observaciones</p>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>&nbsp;</p>
  
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:23.15pt'>
  <td width=326 colspan=9 style='width:244.5pt;border:solid windowtext 1.0pt;
  border-top:none;background:#D0CECE;padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='color:white'>EQUIPAMIENTO
  INTERIOR DEL VEHÍCULO</span></b></p>
  </td>
  <td width=282 colspan=9 style='width:211.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#D0CECE;padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='color:white'>EQUIPAMIENTO
  EXTERIOR DEL VEHÍCULO</span></b></p>
  </td>
  <td width=176 colspan=8 style='width:132.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#D0CECE;padding:0mm 5.4pt 0mm 5.4pt;height:23.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='color:white'>OTROS</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:103.7pt'>
  <td width=182 colspan=3 style='width:136.8pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:103.7pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 align=left
   width=127 style='width:95.4pt;border-collapse:collapse;mso-yfti-tbllook:
   1184;mso-table-lspace:7.05pt;margin-left:4.8pt;mso-table-rspace:7.05pt;
   margin-right:4.8pt;mso-table-anchor-vertical:paragraph;mso-table-anchor-horizontal:
   column;mso-table-left:left;mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=104 style='width:78.0pt;border:solid windowtext 1.0pt;padding:
    0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Radio</span></p>
    </td>
    <td width=23 valign=top style='width:17.4pt;border:solid windowtext 1.0pt;
    border-left:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1'>
    <td width=104 style='width:78.0pt;border:solid windowtext 1.0pt;border-top:
    none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Cintas
    CD -DVD</span></p>
    </td>
    <td width=23 valign=top style='width:17.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2'>
    <td width=104 style='width:78.0pt;border:solid windowtext 1.0pt;border-top:
    none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Encendedor</span></p>
    </td>
    <td width=23 valign=top style='width:17.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3'>
    <td width=104 style='width:78.0pt;border:solid windowtext 1.0pt;border-top:
    none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Alarmas</span></p>
    </td>
    <td width=23 valign=top style='width:17.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
    <td width=104 style='width:78.0pt;border:solid windowtext 1.0pt;border-top:
    none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Sillas</span></p>
    </td>
    <td width=23 valign=top style='width:17.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
  </table>
  </td>
  <td width=144 colspan=6 style='width:107.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:103.7pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 align=left
   style='border-collapse:collapse;mso-yfti-tbllook:1184;mso-table-lspace:7.05pt;
   margin-left:4.8pt;mso-table-rspace:7.05pt;margin-right:4.8pt;mso-table-anchor-vertical:
   paragraph;mso-table-anchor-horizontal:column;mso-table-left:left;mso-padding-alt:
   0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Frontal
    de Radio</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border:solid windowtext 1.0pt;
    border-left:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Soporte
    Teléfono Móvil</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Retrovisor</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Cabezales
    de Asientos</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Sillas</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Tapicería</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>&nbsp;</b></p>
  </td>
  <td width=148 colspan=4 style='width:110.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:103.7pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 align=left
   style='border-collapse:collapse;mso-yfti-tbllook:1184;mso-table-lspace:7.05pt;
   margin-left:4.8pt;mso-table-rspace:7.05pt;margin-right:4.8pt;mso-table-anchor-vertical:
   paragraph;mso-table-anchor-horizontal:column;mso-table-left:left;mso-padding-alt:
   0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Faros
    Antiniebla</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border:solid windowtext 1.0pt;
    border-left:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Espejo(s)
    Retrovisor(es)</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Rines&nbsp;
    de Aleación</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Copas de
    Lujo</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Antena(s)</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:5'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Tapicería</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:6'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Tapa
    Gasolina</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Barra
    Antivuelco</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
  </table>
  </td>
  <td width=134 colspan=5 style='width:100.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:103.7pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 align=left
   style='border-collapse:collapse;mso-yfti-tbllook:1184;mso-table-lspace:7.05pt;
   margin-left:4.8pt;mso-table-rspace:7.05pt;margin-right:4.8pt;mso-table-anchor-vertical:
   paragraph;mso-table-anchor-horizontal:column;mso-table-left:left;mso-padding-alt:
   0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span class=SpellE><span
    style='font-size:9.0pt'>Espoiles</span></span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border:solid windowtext 1.0pt;
    border-left:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Alerones</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Batería</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Gato</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Herramienta</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:5'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Tapa
    Enganche del Remolque</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes'>
    <td width=101 style='width:75.95pt;border:solid windowtext 1.0pt;
    border-top:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><span style='font-size:9.0pt'>Emblemas</span></p>
    </td>
    <td width=25 valign=top style='width:18.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
  </table>
  </td>
  <td width=176 colspan=8 style='width:132.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:103.7pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 align=left
   width=160 style='width:120.25pt;border-collapse:collapse;mso-yfti-tbllook:
   1184;mso-table-lspace:7.05pt;margin-left:4.8pt;mso-table-rspace:7.05pt;
   margin-right:4.8pt;mso-table-anchor-vertical:paragraph;mso-table-anchor-horizontal:
   column;mso-table-left:left;mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=132 style='width:99.0pt;border:solid windowtext 1.0pt;padding:
    0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><i><span style='font-size:9.0pt'>Llaves
    Encendido</span></i></p>
    </td>
    <td width=28 valign=top style='width:21.25pt;border:solid windowtext 1.0pt;
    border-left:none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1'>
    <td width=132 style='width:99.0pt;border:solid windowtext 1.0pt;border-top:
    none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><i><span style='font-size:9.0pt'>Control
    remoto</span></i></p>
    </td>
    <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2'>
    <td width=132 style='width:99.0pt;border:solid windowtext 1.0pt;border-top:
    none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><i><span style='font-size:9.0pt'>Tarjeta
    de Propiedad</span></i></p>
    </td>
    <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3'>
    <td width=132 style='width:99.0pt;border:solid windowtext 1.0pt;border-top:
    none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><i><span style='font-size:9.0pt'>Seguro
    Obligatorio</span></i></p>
    </td>
    <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
    <td width=132 style='width:99.0pt;border:solid windowtext 1.0pt;border-top:
    none;padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
    text-align:right;line-height:normal'><i><span style='font-size:9.0pt'>Revisión
    Tecno-Mecánica</span></i></p>
    </td>
    <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>&nbsp;</b></p>
    </td>
   </tr>
  </table>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:'>
  <td width=784 colspan=26 style='width:588.05pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 3.4pt 0mm 3.4pt;height:'>

  <center> <img  width="75%" src="<?php echo base_url();?>img/image017.png" ></center>
  <br>
  
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:34.9pt'>
  <td width=784 colspan=26 style='width:588.05pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:34.9pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Marque según
  corresponda
  </p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:34.85pt'>
  <td width=119 style='width:89.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Roto<o:p></o:p></p>
  </td>
  <td width=80 colspan=4 style='width:60.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=49
   style='width:36.85pt;border-collapse:collapse;mso-yfti-tbllook:1184;
   mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:22.7pt'>
    <td width="100%" valign=top style='width:100.0%;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:22.7pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><span style='left:0px;position:absolute;z-index:251773952'>&nbsp;<o:p></o:p></p>
    </td>
   </tr>
  </table>
  </td>
  <td width=70 colspan=2 style='width:52.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='margin-top:0mm;margin-right:0mm;margin-bottom:0mm;
  margin-left:35.4pt;margin-bottom:.0001pt;text-indent:-35.4pt;line-height:
  normal'>Faltante&nbsp; <o:p></o:p></p>
  </td>
  <td width=65 colspan=3 style='width:48.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=49
   style='width:36.85pt;border-collapse:collapse;mso-yfti-tbllook:1184;
   mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:22.7pt'>
    <td width="100%" valign=top style='width:100.0%;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:22.7pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><span style='left:0px;position:absolute;z-index:251776000'>&nbsp;<o:p></o:p></p>
    </td>
   </tr>
  </table>
  </td>
  <td width=91 style='width:68.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:34.85pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>sumido&nbsp; <o:p></o:p></p>
  </td>
  <td width=65 colspan=4 style='width:48.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=49
   style='width:36.85pt;border-collapse:collapse;mso-yfti-tbllook:1184;
   mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:22.7pt'>
    <td width="100%" valign=top style='width:100.0%;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:22.7pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><span style='left:0px;position:absolute;z-index:251778048'>&nbsp;<o:p></o:p></p>
    </td>
   </tr>
  </table>
  </td>
  <td width=78 style='width:58.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:34.85pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Rayado<o:p></o:p></p>
  </td>
  <td width=65 colspan=3 style='width:48.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=49
   style='width:36.85pt;border-collapse:collapse;mso-yfti-tbllook:1184;
   mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:22.7pt'>
    <td width="100%" valign=top style='width:100.0%;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:22.7pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><span style='left:0px;position:absolute;z-index:251780096'>&nbsp;<o:p></o:p></p>
    </td>
   </tr>
  </table>
  </td>
  <td width=79 colspan=4 style='width:59.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Manchado<o:p></o:p></p>
  </td>
  <td width=72 colspan=3 style='width:53.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=49
   style='width:36.85pt;border-collapse:collapse;mso-yfti-tbllook:1184;
   mso-padding-alt:0mm 0mm 0mm 0mm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:22.7pt'>
    <td width="100%" valign=top style='width:100.0%;border:solid windowtext 1.0pt;
    padding:0mm 5.4pt 0mm 5.4pt;height:22.7pt'>
    <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;
    line-height:normal'><span style='left:0px;position:absolute;z-index:251782144'>&nbsp;<o:p></o:p></p>
    </td>
   </tr>
  </table>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:34.85pt'>
  <td width=270 colspan=7 style='width:202.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Lugar y fecha del Servicio</p>
  </td>
  <td width=364 colspan=12 style='width:273.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>&nbsp;</p>
  </td>
  <td width=150 colspan=7 rowspan=2 valign=top style='width:112.8pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>RECIBIDO</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:41.9pt'>
  <td width=270 colspan=7 style='width:202.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:41.9pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Lugar y Fecha de Entrega</p>
  </td>
  <td width=364 colspan=12 style='width:273.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:41.9pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>&nbsp;</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:34.85pt'>
  <td width=270 colspan=7 style='width:202.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;line-height:
  normal'>Observaciones</p>
  </td>
  <td width=514 colspan=19 style='width:385.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:34.85pt'>
  <p class=MsoNormal align=right style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
    <b>
      <?php echo $reporte->observaciones; ?>
  </b>
  </p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;mso-yfti-lastrow:yes'>
  <td width=119 style='width:89.45pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=47 style='width:35.2pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=16 style='width:12.15pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=13 style='width:9.9pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=4 style='width:3.0pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=70 colspan=2 style='width:52.5pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=12 style='width:9.0pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=44 style='width:33.3pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=8 style='width:6.35pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=91 style='width:68.6pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=27 style='width:20.15pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=21 style='width:15.65pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=6 style='width:4.5pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=11 style='width:8.35pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=78 style='width:58.5pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=17 style='width:12.45pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=22 style='width:16.85pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=26 style='width:19.35pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=1 style='width:1.0pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=10 style='width:7.65pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=44 style='width:33.0pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=23 style='width:17.45pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=9 style='width:6.75pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=1 style='width:1.0pt;padding:0mm 0mm 0mm 0mm'></td>
  <td width=61 style='width:45.95pt;padding:0mm 0mm 0mm 0mm'></td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=119 style='border:none'></td>
  <td width=45 style='border:none'></td>
  <td width=16 style='border:none'></td>
  <td width=13 style='border:none'></td>
  <td width=4 style='border:none'></td>
  <td width=63 style='border:none'></td>
  <td width=7 style='border:none'></td>
  <td width=12 style='border:none'></td>
  <td width=44 style='border:none'></td>
  <td width=8 style='border:none'></td>
  <td width=91 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=21 style='border:none'></td>
  <td width=6 style='border:none'></td>
  <td width=11 style='border:none'></td>
  <td width=78 style='border:none'></td>
  <td width=17 style='border:none'></td>
  <td width=22 style='border:none'></td>
  <td width=26 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=44 style='border:none'></td>
  <td width=23 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=61 style='border:none'></td>
 </tr>
 <![endif]>
</table>
	
    <p class=MsoNormal><span style='font-size:10.0pt;line-height:105%'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></p>

<p class=MsoNormal>&nbsp;</p>

</div>
</center>

<script type="text/javascript">
  
  window.print();

</script>
</body>

</html>