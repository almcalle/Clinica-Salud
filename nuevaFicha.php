<?php
require 'php/requerirUsuario.php';
include 'include/head.inc';
?>
      <div class="wrapper">
      <?php
      include 'include/menu.inc';
      ?>
      <div class="content-wrapper">
        <section class="content-header">
        <h1>
        Ficha de salud
        <small>Ficha de registro</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Ficha de registro</li>
        <li class="active">Nueva ficha</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class="row">
         <div class="col-lg-12">
         	<div class="panel panel-warning">
         <div class="panel-heading">
         	<h4></h4>
         </div>
         <div class="panel-body">
         		 <form role="form" method="POST" action="php/guardarFicha.php"  id="nuevaFicha">
          	<!--MENU DE OPCIONES-->
          	<div class="col-lg-12">
          <div class="box box-solid">



          </div>
          <!-- /.box -->
        </div>
          	<!--FIN DEL MENU OPCIONES-->
          	  <div class="col-lg-12"><!--informacion personal-->
          		<div class="box box-warning">
          			<div class="box-header with-border">
	    			<i class="glyphicon glyphicon-pencil"></i>
	    			<h3 class="box-title">INFORMACIÓN PERSONAL</h3>
	    			</div>
	    			<div class="box-body">
	    				<div class="form-group">
                <!--Numero de identidad-->
	    					<label for="identidad">* Numero de identidad</label>
							<input class="form-control" maxlength="13" required="required" type="text" name="identidad" placeholder="" onkeypress="return soloNumero(event)"/>
	    				</div>
	    				<div class="form-group">
	    					<label for="nombre">* Nombre y Apellidos</label>
	    					<input  type="text" onBlur="javascript:this.value=this.value.toUpperCase();"  name="nombre" maxlength="40" required="required" class="form-control"/>
	    				</div>

              <div class="form-group">
	    					<label for="sexo">* Sexo</label>
                <select name="sexo" class="form-control">
                  <option value="MASCULINO">MASCULINO</option>
                  <option value="FEMENINO">FEMENINO</option>
</select>
                </div>
	    				<!-- <div class="form-group"> -->
                <!--Fecha de nacimiento y edad-->
                <div class="form-group">
                  <div class="col-xs-6">
                    <label for="grado">Grado</label>
                    <input type="text" maxlength="39"  onBlur="javascript:this.value=this.value.toUpperCase();" required="required" name="grado" class="form-control" />

                  </div>
                  <div class="col-xs-6">
                    <label for="escuela">Escuela</label>
                    <input type="text" maxlength="39"  onBlur="javascript:this.value=this.value.toUpperCase();" required="required" name="escuela" class="form-control" />
                  </div>
                </div>
	    				<div class="col-xs-6">
	    					<label for="fecha">* Fecha de nacimiento</label>
	    					<div class="input-group">
                  			<input onBlur="getAge()" class="form-control" type="text" name="fecha" id="fecha" required="required"/>
                  			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
	    				</div>
	    				<div class="col-xs-6">
	    					<label for="edad">* Edad</label>
	    					<input readonly="readonly" type="number" min="1" max="99" required="required" id="edad" name="edad" class="form-control"/>
	    				</div>
	    				<!-- </div> -->
	    				<div class="form-group"><!--Responsable-->
	    					<label for="responsable">Lugar de Nacimiento</label>
	    					<input type="text" maxlength="39" onBlur="javascript:this.value=this.value.toUpperCase();" required="required" name="lugarNacimiento" class="form-control" />
	    				</div>
                <div class="form-group"><!--Responsable-->
  	    					<label for="religion">Religión</label>
  	    					<input type="text" maxlength="39" onBlur="javascript:this.value=this.value.toUpperCase();" required="required" name="religion" class="form-control" />
  	    				</div>
                <div class="form-group"><!--Responsable-->
  	    					<label for="fuente">Fuente</label>
  	    					<input type="text" maxlength="39" onBlur="javascript:this.value=this.value.toUpperCase();" required="required" name="fuente" class="form-control" />
  	    				</div>
                <div class="form-group"><!--Responsable-->
                  <label for="telefono">Número de telefono</label>
                  <input type="text" maxlength="39"  onBlur="javascript:this.value=this.value.toUpperCase();" required="required" name="telefono" class="form-control" />
                </div>
	    				</div>
	    			</div>
	    		</div>
          	</div>



          <div class="box-body">
        <input type="submit" class="btn btn-warning btn-flat pull-right" value="Guardar Ficha"/>
        <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
          </div>
        </form>
          <!-- /.box-body -->
         	</div>
         </div>
         </div>
        </div>
        </section><!-- right col -->
      <?php
      include 'include/footer.inc';
      ?>
    </div>
      </div><!-- ./wrapper -->

<?php
include 'include/scripts.inc';
?>
<script type="text/javascript">
	$(document).ready(function(){
    $("#fecha").datepicker({
        defaultDate: new Date(),
        format: 'yyyy-mm-dd',
        //daysOfWeekDisabled: [0,6],
         endDate: '+0d',
        })
})
function soloNumero(e){
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
    }

    function limpiar() {
    document.getElementById("nuevaFicha").reset();
  }

  function getAge(){
    var hoy = new Date();
    var fechaNacimiento = new Date($("#fecha").val());
    var edad = hoy.getFullYear()-fechaNacimiento.getFullYear();
    var mes = hoy.getMonth() - fechaNacimiento.getMonth();
    if (mes < 0 || ( mes==0) && hoy.getDate() < fechaNacimiento.getDate()){
      edad--;
    }
    $("#edad").val(edad);
  }
</script>


<?php
include 'include/plugins.inc';
include 'include/fin.inc';
?>
