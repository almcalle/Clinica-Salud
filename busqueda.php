<?php
require 'php/requerirUsuario.php';
include 'include/head.inc';
?>
      <div class="wrapper">
      <?php
      include 'include/menu.inc';
      ?>
      <?php
        if (isset($_POST['busqueda']) && isset($_POST['campo'])) {
            require 'php/conexion.php';
            $busqueda = $_POST['busqueda'];
            $campo= $_POST['campo'];
        }
        ?>
      <div class="content-wrapper">
        <section class="content-header">
        <h1>
        Búsqueda

        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Búsqueda</li>
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
         		 <form  id="Busqueda" method="POST">
          	<!--MENU DE OPCIONES-->
          	<div class="col-lg-12">
          <div class="box box-solid">

            <!-- /.box-header -->


          </div>
          <!-- /.box -->
        </div>
          	<!--FIN DEL MENU OPCIONES-->
          	  <div class="col-lg-12"><!--informacion personal-->
          		<div class="box box-warning">
          			<div class="box-header with-border">
	    			<i class="fa fa-search"></i>
	    			<h3 class="box-title">BÚSQUEDA</h3>
	    			</div>
	    			<div class="box-body">

              <div class="col-lg-6">
              <div class="form-group">
                <!--Numero de identidad-->
                <label for="campo">Campo en el que buscar</label>
                <select  id="campo" name="campo" class="form-control">

                  <!-- <option value="">Examen Físico</option> -->

                  <option
<?php if ($campo=="pa") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="pa">PA</option>
                  <option
<?php if ($campo=="fr") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="fr">FR</option>
                  <option
<?php if ($campo=="temperatura") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="temperatura">Temperatura</option>
<?php if ($campo=="peso") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                            value="peso">Peso</option>
                            <option
<?php if ($campo=="talla") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
value="talla">Talla</option>
<option
<?php if ($campo=="imc") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
value="imc">IMC</option>

<option
<?php if ($campo=="cabeza") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
value="cabeza">Cabeza</option>

                  <option
<?php if ($campo=="ojos") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="ojos">Ojos</option>

                  <option
                  <?php if ($campo=="oidos") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="oidos">Oidos</option>
                  <option
                  <?php if ($campo=="nariz") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="nariz">Nariz</option>

                  <option
                  <?php if ($campo=="cuello") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="cuello">Cuello</option>

                  <option
                  <?php if ($campo=="columna") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="columna">Columna</option>

                  <option
                  <?php if ($campo=="pulmones") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="pulmones">Pulmones</option>


                  <option
                  <?php if ($campo=="corazon") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="corazon">Corazón</option>
                  <option
                  <?php if ($campo=="abdomen") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="abdomen">Abdomen</option>
                  <option
                  <?php if ($campo=="genitales") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="genitales">Genitales</option>
                  <option
                  <?php if ($campo=="extremidades") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="extremidades">Extremidades</option>
                  <option
                  <?php if ($campo=="piel") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="piel">Piel</option>
                  <option
                  <?php if ($campo=="observaciones") {
            echo "selected=\"selected\"";
            $tabla="examen";
        } ?>
                  value="observaciones">Observaciones</option>


<option <?php if ($campo=="antecedentes_patologicos") {
            echo "selected=\"selected\"";
            $tabla="anamnesis";
        } ?>  value="antecedentes_patologicos">Antecedentes Patologicos </option>

<option <?php if ($campo=="antecedentes_hospitalarios") {
            echo "selected=\"selected\"";
            $tabla="anamnesis";
        } ?>  value="antecedentes_hospitalarios">Antecedentes Hospitalarios</option>

<option <?php if ($campo=="antecedentes_alergicos") {
            echo "selected=\"selected\"";
            $tabla="anamnesis";
        } ?>  value="antecedentes_alergicos">Antecedentes Alérgicos</option>
<option <?php if ($campo=="antecedentes_familiares") {
            echo "selected=\"selected\"";
            $tabla="anamnesis";
        } ?>  value="antecedentes_familiares">Antecedentes Familiares</option>

<option <?php if ($campo=="antecedentes_epidemiológicos") {
            echo "selected=\"selected\"";
            $tabla="anamnesis";
        } ?>  value="antecedentes_epidemiológicos">Antecedentes Epidemiológicos</option>

<option <?php if ($campo=="sintoma_principal") {
            echo "selected=\"selected\"";
            $tabla="anamnesis";
        } ?>  value="sintoma_principal"> Sintoma Principal</option>

<option <?php if ($campo=="historia_enfermedad") {
            echo "selected=\"selected\"";
            $tabla="anamnesis";
        } ?>  value="historia_enfermedad">Historia de la Enfermedad</option>

<option <?php if ($campo=="patologico") {
            echo "selected=\"selected\"";
            $tabla="diagnosticos";
        } ?>  value="patologico">Diagnostico Patológico</option>
<option <?php if ($campo=="nutricional") {
            echo "selected=\"selected\"";
            $tabla="diagnosticos";
        } ?>  value="nutricional">Diagnostico Nutricional</option>
<option <?php if ($campo=="socieconomico") {
            echo "selected=\"selected\"";
            $tabla="diagnosticos";
        } ?>  value="socieconomico">Diagnostico Socieconómico</option>
<option <?php if ($campo=="inmunologico") {
            echo "selected=\"selected\"";
            $tabla="diagnosticos";
        } ?>  value="inmunologico">Diagnostico Inmunológico</option>
<option <?php if ($campo=="etario") {
            echo "selected=\"selected\"";
            $tabla="diagnosticos";
        } ?>  value="etario">Diagnostico Etario</option>

<option <?php if ($campo=="tratamiento") {
            echo "selected=\"selected\"";
            $tabla="tratamiento";
        } ?>  value="tratamiento">Tratamiento</option>

                </select>
              </div>
            </div>

            <div class="col-lg-6">
	    				<div class="form-group">
                <!--Numero de identidad-->
	    					<label for="busqueda">Búsqueda en ese campo</label>
							<input value="<?php echo $busqueda; ?>" class="form-control"  type="text" name="busqueda" placeholder=""/>
	    				</div>
              </div>
              <div class="box-body">
            <button id="buscar_boton" class="btn btn-warning btn-flat pull-right">Búsqueda
            </button>

              </div>
	    			</div>
	    		</div>
          	</div>

          </form>
            <!-- /.box-body -->

            <?php
if (isset($_POST['busqueda']) && isset($_POST['campo'])) {



            // $count ="SELECT COUNT (*) AS 'CUENTA' FROM ".$tabla." WHERE ".$campo." LIKE '%".$busqueda."%'";
            // $result  = mysql_query($count);

            // $row = mysql_result($result,true);
            // $row=mysql_fetch_assoc($result);


            $query="SELECT * FROM ".$tabla." WHERE ".$campo." LIKE '%".$busqueda."%'";
            $resultados  = mysql_query($query);
            $cuenta= mysql_num_rows($resultados);

            // $filas = mysql_fetch_array($resultados);

            $consulta1 = mysql_query("select COUNT(*) from ".$tabla."");
            $registros=mysql_result($consulta1, 0);

            //  echo "Query: ".$query;
            // echo " Resultado: ".$filas[$campo];
            echo " Cuenta: ".$cuenta." de ".$registros." registros";
            $porcentaje=$cuenta/$registros*100;
            echo "<br> Porcentaje: ".$porcentaje."%" ?>

  <div class="box box-warning">
    <div class="box-header with-border">
  <i class="fa fa-search"></i>
  <h3 class="box-title">Resultados</h3>
  </div>
  <div class="box-body">

  <div class="col-lg-12">
<?php
  echo '<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
                  <tr>

                     <th width="100">IDENTIDAD</th>
                     <th width="200">NOMBRE</th>
                      <th width="200">FECHA</th>
                      <th width="200">RESULTADO</th>
                <th width="100">ACCIONES</th>
                  </tr>
    </thead>
     <tbody>';

            while ($fila = mysql_fetch_array($resultados)) {
                $consulta = mysql_query("select nombre from ficha where identidad='".$fila['identidad']."'") or die(mysql_error());
                $nombre = mysql_fetch_array($consulta);
                echo'<tr>
              <td>'.$fila['identidad'].'</td>
              <td>'.$nombre['nombre'].'</td>
               <td>'.$fila['fecha'].'</td>
               <td>'.$fila[$campo].'</td>
                    <td><a href="detalleFicha.php?id='.$fila['identidad'].'" class="glyphicon glyphicon-search" data-toggle="tooltip" title="Ver Ficha"></a>&nbsp;&nbsp;&nbsp;
                    <!-- <a href="javascript:borrarDiagnostico('.$registro2['id'].');" class="fa fa-trash" data-toggle="tooltip" title="Borrar"></a> -->
                    </td>
               </tr>';
            }
            echo '</tbody></table>';
        }
            ?>

           </div>

          </div>
          </div>

           	</div>
           </div>
           </div>
          </div>
          </section><!-- right col -->
          </div>
        <?php
        include 'include/footer.inc';
        ?>
        </div><!-- ./wrapper -->

  <?php
  include 'include/scripts.inc';
  ?>
  <script src = "js/jquery.dataTables.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#example').DataTable();
  } );
  </script>


  <?php
  include 'include/plugins.inc';
  include 'include/fin.inc';
  ?>
