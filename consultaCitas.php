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
        Consulta de Citas
        <small></small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Ficha de Citas</li>
        <li class="active">Consulta de Citas</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class=container>
          <div class="col-lg-7">
          <section id="tabla_resultado">
        <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
        <?php
        require 'php/conexion.php';
        $id = $_POST['id'];



        $registro = mysql_query("SELECT
            *
        FROM
            citas
        INNER JOIN ficha ON citas.identidad = ficha.identidad
        ORDER BY
            citas.fecha
        DESC")

        // SELECT DISTINCT * FROM citas ORDER BY `citas`.`fecha` DESC")
         or die(mysql_error());


      echo '<table id="citas" class="display" cellspacing="0" width="100%">
        <thead>
                      <tr>
                      <th width="200">FECHA DE LA CITA</th>
                         <th width="100">IDENTIDAD</th>
                         <th width="200">NOMBRE</th>
                          <th width="200">CITA</th>
                    <th width="100">ACCIONES</th>
                      </tr>
        </thead>
         <tbody>';

      while($registro2 = mysql_fetch_array($registro)){

        echo'<tr>
                  <td>'.$registro2['fecha'].'</td>
                  <td>'.$registro2['identidad'].'</td>
                  <td>'.$registro2['nombre'].'</td>
                   <td>'.$registro2['cita'].'</td>
                        <td><a href="javascript:detalleCita('.$registro2['id'].');"
                         class="glyphicon glyphicon-search" data-toggle="tooltip"
                          title="Ver Detalle"></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="detalleFicha.php?id='.$registro2['identidad'].'""
                         class="glyphicon glyphicon-user" data-toggle="tooltip"
                         title="Ver Ficha"></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="javascript:borrarCita('.$registro2['id'].');"
                         class="glyphicon glyphicon-trash" data-toggle="tooltip"
                         title="borrar Evaluación"></a>
                         </td>
                   </tr>';
      }
        echo '</tbody></table>';

        ?>
        </section>
            </div>
             <div class="col-lg-5">
            <center><ul class="pagination" id="pagination"></ul></center>
                <div class="registros" id="agrega-registros"></div>
            </div>

           </div>
         </section><!-- right col -->
    </div><!-- ./wrapper -->
       <?php
      include 'include/footer.inc';
      ?>
     </div>

<?php
include 'include/scripts.inc';
?>
<script src = "js/jquery.dataTables.js" type="text/javascript"></script>
<script type="text/javascript">
function detalleCita(id){
    var url = 'php/detalle/detalleCita.php';
    if(!id){
        }
        else{
        $.ajax({
        type:'POST',
        url:url,
        data:'id='+id,
        success: function(registros){
            $('#agrega-registros').html(registros);
            return false;
        }
        });
        }
    }
</script>
<script type="text/javascript">
    function borrarCita(id){
		var url = 'php/eliminar/borrarCita.php';
		var pregunta = confirm('¿Esta seguro de eliminar la Cita?');
		if(pregunta==true){
			$.ajax({
			type:'POST',
			url:url,
			data:'id='+id,
			success: function(registro){
				$('#agrega-registros').html(registro);
			}
		});
		}else{
			return false;
		}
	}
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#citas').DataTable();
} );
</script>
<?php
include 'include/plugins.inc';
include 'include/fin.inc';
?>
