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
        Ficha del paciente
        <small>Detalle de ficha</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li>Ficha de salud</li>
        <li class="active">Detalle ficha de salud</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class="row">
          <!--AQUI COMIENZA EL CODIGO DE DE CONSULTA DE FICHA-->
            <?php
require 'php/conexion.php';
$identidad = $_GET['id'];
//BUSCA FICHA

$registro = mysql_query("select * from ficha where identidad='".$identidad."'");
$reg = mysql_num_rows($registro);
if ($reg==0) {
    echo"
    <div class=\"col-lg-12\">
    <div class=\"alert alert-block alert-info\">
	<h4>¡Lo sentimos!</h4>El Registro con ID ".$identidad." no fue encontrado. <a href='nuevaFicha.php'>¿Registrar una nueva ficha?</a>
	</div></div>";
} else {
    $Ficha = mysql_fetch_array($registro);
    //CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX ?>

<div class="col-lg-12">
<div class="box box-warning">
<div class="box-header with-border">
  <h3 class="box-title"><i class="fa fa-folder-open"></i>Ficha de Salud</h3>
</div>
<div class="box-body">
	<!-- <center><img src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$registro['foto']; ?>" id="fotoGrande" /></center> -->
	<br/>
	<dl class="dl-horizontal">
        <dt>Numero de identidad</dt>
        <dd><?php echo $identidad; ?></dd>
        <dt>Nombre:</dt>
        <dd><?php echo $Ficha['nombre']; ?></dd>
        <dt>Edad:</dt>
        <dd><?php echo $Ficha['edad']." A&ntilde;os"; ?></dd>
        <dt>Sexo:</dt>
        <dd><?php echo $Ficha['sexo']; ?></dd>
        <dt>Dirección:</dt>
        <dd><?php echo $Ficha['direccion']; ?></dd>
        <dt>Fecha de Nacimiento:</dt>
        <dd><?php echo $Ficha['fecha_nacimiento']; ?></dd>
        <dt>Lugar de Nacimiento:</dt>
        <dd><?php echo $Ficha['lugar_nacimiento']; ?></dd>
        <dt>Procedencia:</dt>
        <dd><?php echo $Ficha['procedencia']; ?></dd>
        <dt>Escuela:</dt>
        <dd><?php echo $Ficha['escuela']; ?></dd>
        <dt>Grado:</dt>
        <dd><?php echo $Ficha['grado']; ?></dd>

        <dt>Religion:</dt>
        <dd><?php echo $Ficha['religion']; ?></dd>
        <dt>Fuente:</dt>
        <dd><?php echo $Ficha['fuente']; ?></dd>
        <dt>Teléfono:</dt>
        <dd><?php echo $Ficha['telefono']; ?></dd>

        <dd>* Datos al momento del registro</dd>
    </dl><br/>
    <a class="btn btn-app" href="javascript:borrarFicha(<?php echo $identidad; ?>);">
    	<i class="glyphicon glyphicon-trash"></i> Borrar Ficha
    </a>

    <!-- <a class="btn btn-app" href="editarFicha.php?id=<?php echo $identidad; ?>">
      <i class="glyphicon glyphicon-edit"></i> Editar Ficha
    </a> -->
    <a class="btn btn-app" href="nuevoAnamnesis.php?id=<?php echo $identidad; ?>">
      <i class="glyphicon glyphicon-plus"></i>  Anamnesis
    </a>

    <a class="btn btn-app" href="nuevoExamenFisico.php?id=<?php echo $identidad; ?>">
    	<i class="glyphicon glyphicon-plus"></i>  Examen Físico
    </a>
    <!-- <a class="btn btn-app" href="Evaluacion.php?id=<?php echo $identidad; ?>">
      <i class="glyphicon glyphicon-plus"></i>  Evaluación Médica
    </a> -->
    <a class="btn btn-app" href="nuevoDiagnostico.php?id=<?php echo $identidad; ?>">
      <i class="glyphicon glyphicon-plus"></i>  Diagnostico
    </a>
    <a class="btn btn-app" href="nuevoTratamiento.php?id=<?php echo $identidad; ?>">
      <i class="glyphicon glyphicon-plus"></i>  Tratamiento
    </a>
    <a class="btn btn-app" href="nuevaCita.php?id=<?php echo $identidad; ?>">
      <i class="glyphicon glyphicon-plus"></i>  Cita
    </a>

</div>
</div>
</div>


<!--Aqui comienza el detalle del examen fisico-->

<!-- <div class="container"> -->
<div class="col-lg-12">
<div class="panel panel-warning">
<div class="panel-heading">
  <h3><i class="fa fa-folder-open"></i>Ficha de Examen Físico</h3>
</div>
<div class="panel-body">
<dl>
	<?php
    $registro = mysql_query("select * from examen where identidad='".$identidad."' ORDER BY `fecha` DESC");
    $examen = mysql_fetch_array($registro); ?>
<dl>
        <dt>PA:</dt>
        <dd><?php echo $examen['pa']; ?></dd>
        <dt>FR:</dt>
        <dd><?php echo $examen['fr']; ?></dd>
        <dt>Temperatura (ºC):</dt>
        <dd><?php echo $examen['temperatura']; ?></dd>
        <dt>Peso:</dt>
        <dd><?php echo $examen['peso']; ?></dd>
        <dt>Talla:</dt>
        <dd><?php echo $examen['talla']; ?></dd>
        <dt>IMC:</dt>
        <dd><?php echo $examen['imc']; ?></dd>
        <dt>Cabeza:</dt>
        <dd><?php echo $examen['cabeza']; ?></dd>
        <dt>Ojos:</dt>
        <dd><?php echo $examen['ojos']; ?></dd>

        <dt>Oidos:</dt>
        <dd><?php echo $examen['oidos']; ?></dd>
        <dt>Nariz:</dt>
        <dd><?php echo $examen['nariz']; ?></dd>
        <dt>Boca:</dt>
        <dd><?php echo $examen['boca']; ?></dd>

        <dt>Cuello:</dt>
        <dd><?php echo $examen['cuello']; ?></dd>

        <dt>Columna:</dt>
        <dd><?php echo $examen['columna']; ?></dd>
        <dt>Pulmones:</dt>
        <dd><?php echo $examen['pulmones']; ?></dd>
        <dt>Corazon:</dt>
        <dd><?php echo $examen['corazon']; ?></dd>
        <dt>Abdomen:</dt>
        <dd><?php echo $examen['abdomen']; ?></dd>
        <dt>Genitales:</dt>
        <dd><?php echo $examen['genitales']; ?></dd>
        <dt>Extremidades:</dt>
        <dd><?php echo $examen['extremidades']; ?></dd>
        <dt>Piel:</dt>
        <dd><?php echo $examen['piel']; ?></dd>
        <dt>Observaciones:</dt>
        <dd><?php echo $examen['observaciones']; ?></dd>
        <dt>Fecha:</dt>
        <dd><?php echo $examen['fecha']; ?></dd>
    </dl>
    <!-- <a class="btn btn-app" href="editarExamenFisico.php?idExamen=<?php echo $examen['id']; ?>">
      <i class="fa fa-edit"></i> Editar Examen Físico
    </a> -->
</div>
</div>
</div>
    <!-- </div> -->
<!--Aqui finaliza el detalle del examen fisico-->


<!--Aqui comienza el detalle del Anamnesis-->

<!-- <div class="container"> -->
<div class="col-lg-12">
<div class="panel panel-warning">
<div class="panel-heading">
  <h3><i class="fa fa-folder-open"></i>Ficha de Anamnesis</h3>
</div>
<div class="panel-body">
<dl>
	<?php
    $registro = mysql_query("select * from anamnesis where identidad='".$identidad."' ORDER BY `fecha` DESC");
    $anamnesis = mysql_fetch_array($registro); ?>
<dl>
  <dt>Antecedentes personales patológicos:</dt>
  <dd><?php echo $anamnesis['antecedentes_patologicos']; ?></dd>
  <dt>Antecedentes hospitalarios, traumáticos y quirúrgicos:</dt>
  <dd><?php echo $anamnesis['antecedentes_hospitalarios']; ?></dd>
  <dt>Antecedentes Alergicos:</dt>
  <dd><?php echo $anamnesis['antecedentes_alergicos']; ?></dd>
  <dt>Antecedentes Familiares:</dt>
  <dd><?php echo $anamnesis['antecedentes_familiares']; ?></dd>
  <dt>Antecedentes epidemiológicos:</dt>
  <dd><?php echo $anamnesis['antecedentes_epidemiologicos']; ?></dd>
  <dt>Sintoma Principal de la enfermedad actual:</dt>
  <dd><?php echo $anamnesis['sintoma_principal']; ?></dd>
  <dt>Historia de la enfermedad actual:</dt>
  <dd><?php echo $anamnesis['historia_enfermedad']; ?></dd>
  <dt>Fecha:</dt>
        <dd><?php echo $anamnesis['fecha']; ?></dd>
    </dl>
</div>
</div>
</div>
    <!-- </div> -->
<!--Aqui finaliza el detalle del Anamnesis-->
    <!--Aqui comienza el detalle del diagnostico-->
    <?php
    $sql = mysql_query("select * from diagnosticos where identidad='".$identidad."' ORDER BY `fecha` DESC");
    $diagnostico = mysql_fetch_array($sql); ?>
<!-- <div class="container"> -->
<div class="col-lg-12">
    <div class="panel panel-warning">
<div class="panel-heading"><h3><i class="fa fa-folder-open"></i>Ficha de Diagnostico</h3>
<!-- /.box-tools -->
</div>

<!-- /.box-header -->

<div class="panel-body">
	<dl>
        <dt>Nombre:</dt>
        <dd><?php echo $diagnostico['nombre']; ?></dd>
        <dt>Diagnostico Patológico:</dt>
        <dd><?php echo $diagnostico['patologico']; ?></dd>
        <dt>Diagnostico Nutricional:</dt>
        <dd><?php echo $diagnostico['nutricional']; ?></dd>
        <dt>Diagnostico Socioeconómico:</dt>
        <dd><?php echo $diagnostico['socieconomico']; ?></dd>
        <dt>Diagnostico Inmunológico:</dt>
        <dd><?php echo $diagnostico['inmunologico']; ?></dd>
        <dt>Diagnostico Etario</dt>
        <dd><?php echo $diagnostico['etario']; ?></dd>
        <dt>Fecha:</dt>
        <dd><?php echo $diagnostico['fecha']; ?></dd>
    </dl>
</div>

</div>
</div>
<!-- </div> -->
    <!--Aqui finaliza el detalle del diagnostico-->

    <!--Aqui comienza el detalle del tratamiento-->
    <?php
    $tratamientos = mysql_query("select * from tratamiento where identidad='".$identidad."' ORDER BY `fecha` DESC");
    // $tratamientos = mysql_fetch_array($sql); ?>
<!-- <div class="container"> -->
<div class="col-lg-12">
    <div class="panel panel-warning">
<div class="panel-heading"><h3><i class="fa fa-folder-open"></i>Ficha de tratamientos</h3>
<!-- /.box-tools -->
</div>

<!-- /.box-header -->

<div class="panel-body">
  <dl>
    <?php
    while($tratamiento = mysql_fetch_array($tratamientos)){
      ?>
      <dt>Fecha:</dt>
      <dd><?php echo $tratamiento['fecha']; ?></dd>
        <dt>Tratamiento:</dt>
        <dd><?php echo $tratamiento['tratamiento']; ?></dd>
        <?php
      }
          ?>
    </dl>
</div>

</div>
</div>
<!-- </div> -->
    <!--Aqui finaliza el detalle del tratamiento-->

<?php
}
mysql_close($conexion);
?>

          <!--AQUI TERMINA EL CODIGO DE DE CONSULTA DE FICHA-->
        </div>
        </section><!-- right col -->
      </div>
      <?php
      include 'include/footer.inc';
      ?>
      </div><!-- ./wrapper -->

      <div id="agregar-html-borrado"></div>

      <script type="text/javascript">
          function borrarFicha(id){
            debugger;
      		var url = 'php/eliminar/borrarFicha.php';
      		var pregunta = confirm('¿Esta seguro de eliminar el Examen?');
      		if(pregunta==true){
      			$.ajax({
      			type:'POST',
      			url:url,
      			data:'id='+id,
      			success: function(registro){
      				$('#agregar-html-borrado').html(registro);
      			}
      		});
      		}else{
      			return false;
      		}
      	}
      </script>
<?php
include 'include/scripts.inc';
?>
<?php
include 'include/plugins.inc';
include 'include/fin.inc';
?>
