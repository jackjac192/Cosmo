var READY_STATE_COMPLETE = 4;
var OK = 200;

var ajax = null;
var baseurl = "http://localhost/code/";
//var baseurl = "http://192.168.1.120/code/";



var respuesta = document.querySelector("#contentFormularioAseguradora");
var content;

var divSelectAse = document.querySelector("#mydivAse");
var divSelectRama = document.querySelector("#mydivRama");
var myIdSelectRama = document.querySelector("#mySelectRama");
var inputUl;
var idAseguradora;



function base_url(){
	return baseurl;
}


function objetoAjax(){

	if(window.XMLHttpRequest){
		return new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
}

function enviarDatos(){

	if(ajax.readyState == READY_STATE_COMPLETE){
		if(ajax.status == OK){
			console.log(ajax);
			content.innerHTML = ajax.responseText;




		}
		else
	 	{
	 		alert ("Error de ajax\nError "+ajax.status+": "+ajax.statusText);
	 	}
	}
}
	var telefono = document.querySelector("#myTelefono");
	var nombre = document.querySelector("#myNombre");
	var spanError = document.querySelector("#myErrorConductor");
	
function enviarDatosConductor(){
	
	

	if(ajax.readyState == READY_STATE_COMPLETE){
		if(ajax.status == OK){
			
			var datosAjax = ajax.responseText;
			var datosConductor = datosAjax.split(":");
			
			

			if(datosConductor[0] =="0"){
				
				nombre.blur();	
				nombre.value="";
				
				telefono.blur();
				telefono.value ="";
				myErrorConductor.innerHTML =" Cédula incorrectar o no registrada. ";
				
			}
			else{
				nombre.disabled = false;
				myErrorConductor.innerHTML ="";
				nombre.focus();				
				nombre.value = datosConductor[0];
				telefono.disabled = false;
				telefono.focus();
				telefono.value = datosConductor[1];
				telefono.disabled = true;
				nombre.disabled = true;
			}


		}
		else
	 	{
	 		alert ("Error de ajax\nError "+ajax.status+": "+ajax.statusText);
	 	}
	}
}


function ejecutarAjax(datos){
	//console.log("ajax");
	ajax = objetoAjax();

	ajax.onreadystatechange = enviarDatos;
	ajax.open("POST", baseurl+"Aseguradoras/index/");

	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(datos);
}

function ejecutarAjaxExcel(datos){
	//console.log("ajax");
	ajax = objetoAjax();

	ajax.onreadystatechange = enviarDatos;
	ajax.open("POST", baseurl+"planillas/excel/");

	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(datos);
}

function ejecutarAjaxConductor(datos){
	//console.log("ajax");
	ajax = objetoAjax();

	ajax.onreadystatechange = enviarDatosConductor;
	ajax.open("POST", baseurl+"conductor/traer_conductor/");

	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(datos);
}

function ejecutarAjaxConductores(datos){
	//console.log("ajax");
	ajax = objetoAjax();

	ajax.onreadystatechange = enviarDatos;
	ajax.open("POST", baseurl+"conductor/indexAjax/");

	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(datos);
}



function cargarFormularios(evento){
	evento.preventDefault();

	var idRama = document.querySelector("#mySelectRama").value;
	var idAse = document.querySelector("#mySelectAse").value;
		
	content = respuesta;
	ejecutarAjax(datos);
	
	
}

function cargarConductor(e){

	console.log();
	var dataConductor = document.querySelector("#mydataConductor");

	if(e.keyCode == 13 || e.which == 13){
		console.log(e.target.value);
		var cedulaConductor = e.target.value;

		var datos="cedula="+cedulaConductor;
		
		ejecutarAjaxConductor(datos);

	}
}

function seleccionarConductor(e){
		console.log(e.value);
		var cedulaConductor = document.querySelector("#idCedulaConductor")
		cedulaConductor.value = e.value;
		var cedulaCon = e.value;
		var datos="cedula="+cedulaCon;
		ejecutarAjaxConductor(datos);

	}


function cargarRamas(){
	//.querySelector("selected")
	console.log("hola");
	var datosSelect = document.querySelector("#mySelectAse").value;

	console.log(datosSelect);
	var arregloSelect = datosSelect.split(":");
	console.log(arregloSelect);

	idAseguradora = arregloSelect[0];
	console.log(idAseguradora);
	cargarSelectRama();
	
}

function cargarSelectRama(evento){

	var ramaSelect = document.querySelector("#ramaselect");
	if(ramaSelect === null){
		var select_record = document.querySelector("#select_record").value;		
		var datos="id="+idAseguradora+"&select="+select_record;
	}
	else{
		ramaSelect = document.querySelector("#ramaselect").value;
		var datos="id="+idAseguradora+"&select="+ramaSelect;	
	}

	
	content = divSelectRama;
	ejecutarAjax(datos);
	document.querySelector("#btnCargarAseguradora").style.display = "";
	document.querySelector("#btnGuardar").style.display = "block";


}

function detenerEvent(e){
	var key = e.which || e.keyCode;
    if (key === 13) { 
    	e.preventDefault();
    	
    }
}


function imprimirFormularios() {
		
		window.print();
	}

var btnPrint = document.querySelector('#btnPrint');
var btnPrintExcel = document.querySelector('#btnExcel');


function mostrarOpcionesDos(){	
	var datosSelect = document.querySelector("#mySelect").value;
	console.log(datosSelect);
	var datos="id="+datosSelect;
	content = divSelectRama;
	ejecutarAjax(datos);
}



function conductorAjax(){	
	
	var nombreConductor = document.querySelector("#nombreConductorAjax").value;
	var divConductoresAjax = document.querySelector("#conductoresNombre");
	console.log(nombreConductor);
	
	var datos="nombreConductorAjax="+nombreConductor;
	content = divConductoresAjax;
	ejecutarAjaxConductores(datos);
	
	

}


	

function viewConductores(){
	document.querySelector("#buttonModal").click();	
	console.log("click")
}
function exportarExcel(e){
	e.preventDefault();
	var fechaI = $( "input[name='fechaI_submit']" ).val();
	var fechaF = $( "input[name='fechaF_submit']" ).val();
	var aseguradorasList =  document.querySelector("#mySelect");
	var valueAseguradora =  document.querySelector("#mySelect").value;
	var checkRama = document.querySelector("#checkbox1").checked;
	var arrayAse=[];
	var valorRama;
	 valorRama= "0";
	if(valueAseguradora == "0"){
		console.log(valueAseguradora+" Yes");
		for (var i = 1; i < aseguradorasList.length; i++) {
			arrayAse[i-1] = aseguradorasList[i].value;
		}
		valorRama = "0";
	}else{
		var valueRama = document.querySelector('#mySelectRama').value;
		arrayAse[0]=valueAseguradora;
		valorRama= valueRama;
	}
	if(checkRama){valorRama = "0";}


	console.log(arrayAse+" "+valorRama+" "+fechaI+" "+fechaF);

	if(fechaI=="" || fechaF == "")
	{	
		var divRespuesta = document.querySelector('#divRespuesta');
		
		divRespuesta.innerHTML="<span class='error'>Los campos fechas no son válidos</span>";
		
	}
	else{
		var arrayI = fechaI.split('/');
		var a = arrayI[0]+"-"+arrayI[1]+"-"+arrayI[2];
		//console.log(a);
		var fechI = new Date(arrayI[0],arrayI[1]-1,arrayI[2]);
		var arrayF = fechaF.split('/');
		var b = arrayF[0]+"-"+arrayF[1]+"-"+arrayF[2];
		var fechF = new Date(arrayF[0],arrayF[1]-1,arrayF[2]);

		if(fechI >= fechF){
			
			var divRespuesta = document.querySelector('#divRespuesta');
		
			divRespuesta.innerHTML="<span class='error'>La fecha inicio no puede ser mayor o igual a la fecha final</span>";
		}
		else{
			var divRespuesta = document.querySelector('#divRespuesta');
			var datos;
			for(var i=0; i < arrayAse.length; i++){
				datos += "&ArregloAse[]="+arrayAse[i];
			}
			datos +="&rama="+valorRama;
			datos +="&fechaI="+fechaI+"&fechaF="+fechaF;
			content = divRespuesta;
			//ejecutarAjaxExcel(datos);
			divRespuesta.innerHTML="<span class='error'>Se ha generado exitosamente el archivo</span>";
			window.location="http://localhost/code/planillas/excel/"+valueAseguradora+"/"+valorRama+"/"+a+"/"+b;
			console.log((fechI < fechF));
		}
		
	}
	
}



function mostrarOpciones(e){
	e.preventDefault();
	console.log("hh");
	var form = document.querySelector('#idformImp');

	form.style.display = "block";

	var selectItems = document.querySelector('#mySelect');

	for(var i=0; i < selectItems.length; i++){
	
	}
	selectItems.addEventListener("change", mostrarOpcionesDos);


}





function alCargarDocumento()
{	
	

	
	var btnCargarAseguradora = document.querySelector("#btnCargarAseguradora");
	var formulario = document.querySelector("#myformReport");
	var inputSelect = document.querySelector("#mySelectAse");
	var inputConductor = document.querySelector("#idCedulaConductor"); 
	var nombreConductorAjax = document.querySelector("#nombreConductorAjax");
	
	console.log(inputSelect);
	//inputUl = divSelectRama.childNodes[1].childNodes[2];
	//console.log(inputUl);

	var btnImprimir = document.querySelector('#btnImprimir');
	


	if(nombreConductorAjax === null){

	}
	else
	{
		nombreConductorAjax.addEventListener("keyup", conductorAjax);
	}


	if(btnImprimir === null){

	}
	else
	{
		btnImprimir.addEventListener("click", imprimirFormularios);
	}

	if(inputSelect === null){

	}else{

		cargarRamas();
		inputSelect.addEventListener("change", cargarRamas);
		formulario.addEventListener("keypress", detenerEvent);
		btnCargarAseguradora.addEventListener("click", cargarFormularios);

	}

	if(inputConductor === null){

	}
	else
	{
		inputConductor.addEventListener("keypress", cargarConductor);
		inputConductor.addEventListener("click", viewConductores);
	}

	if(btnPrint === null){}
		else{
			btnPrint.addEventListener("click", mostrarOpciones);
			btnPrintExcel.addEventListener("click", exportarExcel);
		}

	
}

window.addEventListener("load", alCargarDocumento);