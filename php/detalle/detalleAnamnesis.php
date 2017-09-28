<?php
require '../conexion.php';
$buscar = $_POST['id'];

//BUSCA FICHA

$registros = mysql_query("select * from anamnesis where id='".$buscar."'");
$reg = mysql_num_rows($registros);
if ($reg==0) {

}
else{
	 $anamnesis = mysql_fetch_array($registros);
     $consulta = mysql_query("select * from ficha where identidad='".$anamnesis['identidad']."'");
     $ficha = mysql_fetch_array($consulta);
	//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

?>
<div class="panel panel-warning">
<div class="panel-heading">
  <h3><i class="fa fa-folder-open"></i>Ficha de Anamnesis</h3>
</div>
<div class="panel-body">
<dl>
        <dt>Numero de identidad</dt>
        <dd><?php echo $ficha['identidad'];?></dd>
        <dt>Nombre:</dt>
        <dd><?php echo $ficha['nombre'];?></dd>
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
    </dl><br/>
</div>
<?php
}
mysql_close($conexion);
?>
