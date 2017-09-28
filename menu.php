<?php
require 'php/requerirUsuario.php';
include 'include/head.inc';
include 'include/menu.inc';
?>
      <div class="wrapper">
      <div class="content-wrapper">
      	<section class="content-header">
	          <h1>
	            Clínica medica
	            <small>Bienvenido</small>
	          </h1>
	          <ol class="breadcrumb">
	            <li><a href="#"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
	            <li class="active">Inicio</li>
	          </ol>
	    </section>

      <section class="content">

      <!-- Tabla con Número, Nombre y apellidos, Sexo, Edad, Grado, Dirección y Diagnostico -->
Fecha sale del ultimo diagnóstico

      <div class="row">
        <div class="col-lg-12">
        <section id="tabla_resultado">
      <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
      <?php
      require 'php/conexion.php';



      $registro = mysql_query("SELECT DISTINCT * FROM ficha ") or die(mysql_error());


      echo '<table id="tabla" class="display" cellspacing="0" width="100%">
      <thead>
                    <tr>
                       <th width="100">FECHA</th>
                       <th width="200">NOMBRE Y APELLIDOS</th>
                       <th width="200">SEXO</th>
                       <th width="200">EDAD</th>
                    <th width="200">GRADO</th>
                    <th width="200">DIRECCIÓN</th>
                    <th width="200">DIAGNOSTICO</th>

                  <th width="100">ACCIONES</th>
                    </tr>
      </thead>
       <tbody>';

      while($registro2 = mysql_fetch_array($registro)){

      echo'<tr>
                <td>'.$registro2['fecha'].'</td>
                <td>'.$registro2['nombre'].'</td>
                <td>'.$registro2['sexo'].'</td>
                <td>'.$registro2['edad'].'</td>
                <td>'.$registro2['grado'].'</td>
                <td>'.$registro2['direccion'].'</td>
                <td>'.$registro2['diagnostico'].'</td>


                      <td><a href="detalleFicha.php?id='.$registro2['identidad'].'" class="glyphicon glyphicon-search" data-toggle="tooltip" title="Ver Detalle"></a>
                      &nbsp;&nbsp;&nbsp;<a href="editarFicha.php?id='.$registro2['identidad'].'" class="fa fa-edit" data-toggle="tooltip" title="Editar Ficha"></a>
                      &nbsp;&nbsp;&nbsp;<a href="javascript:borrarFicha('.$registro2['identidad'].');" class="fa fa-trash" data-toggle="tooltip" title="Borrar Ficha"></a>
                        </td>
      </tr>';
      }
      echo '</tbody></table>';

      ?>
      </section>
          </div>
         </div>


        </section><!-- right col -->
      </div>
      </div><!-- ./wrapper -->
<?php
include 'include/footer.inc';
include 'include/scripts.inc';
include 'include/plugins.inc';
?>

<script src = "js/jquery.dataTables.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#tabla').DataTable();
} );
</script>
