
		



<!-- Button trigger modal -->
<button id="buttonModal" hidden="hidden" type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#basicExample">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title w-100" id="myModalLabel">Seleccionar Conductor</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                
				<div class="md-form">
				    <input type="text" id="nombreConductorAjax" class="form-control">
				    <label for="form1" class="">Nombre Conductor</label>
				</div>
				<div class="md-form" id="conductoresNombre">
				    
				</div>


            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal -->

                                        

                                            

		
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.1.1.min.js.descarga"></script>

	    <!-- Bootstrap tooltips -->
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/tether.min.js.descarga"></script>

	    <!-- Bootstrap core JavaScript -->
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js.descarga"></script>

	    <!-- MDB core JavaScript -->
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/mdb.min.js.descarga"></script>

	    <script type="text/javascript" src="<?php echo base_url(); ?>js/ajaxCargarAseguradoras.js"></script>


	     <script>

	     

        //$(".button-collapse").sideNav();

        var el = document.querySelector('.custom-scrollbar');

        Ps.initialize(el);

        $.extend($.fn.pickadate.defaults, {
		  	monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		  	monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
			weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vien', 'Sáb'],
		  	today: 'Hoy',
		  	clear: 'Limpiar',
		  	formatSubmit: 'yyyy/mm/dd',

		  	// Accessibility labels
			labelMonthNext: 'Mes siguiente',
			labelMonthPrev: 'Mes Aterior',
			labelMonthSelect: 'Seleccionar mes',
			labelYearSelect: 'Seleccionar año',
			// Strings and translations
			weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			
		})

		$('.datepicker').pickadate({
		  
		  onSet: function(context) {
		  	var input = document.querySelector('#inputfecha'); 	
				

				if(input === null){
					
				}
				else
				{
					var nodo = input.parentNode;
					nodo.removeChild(input);
				}
		    //console.log('Just set stuff:', context)
		  }
		});

		

// Or, pass the months and weekdays as an array for each invocation.

        $('.datepicker').pickadate();

        $('#input_starttime').pickatime({
        	twelvehour: false,
		    darktheme: true
		});

		$('#input_starttime2').pickatime({
        	twelvehour: false,
		    darktheme: true
		});

		$('#input_starttime3').pickatime({
        	twelvehour: false,
		    darktheme: true
		});

		$('#input_starttime4').pickatime({
        	twelvehour: false,
		    darktheme: true
		});

		
		 // Material Select Initialization
		 $(document).ready(function() {
		    $('.mdb-select').material_select();
		    
		  });




    </script>


    <div class="hiddendiv common"></div><div class="drag-target" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 0px;"></div>
		
    </body>
</html>