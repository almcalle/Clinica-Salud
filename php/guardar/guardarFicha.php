<?php
	$identidad = $_POST["identidad"];
	$nombre = $_POST["nombre"];
	$edad = $_POST["edad"];
	$sexo = $_POST["sexo"];
	$fecha = $_POST["fecha"];
	$direccion = $_POST["direccion"];
	$lugarNacimiento = $_POST["lugarNacimiento"];
	$procedencia = $_POST["procedencia"];
	$escuela = $_POST["escuela"];
	$grado = $_POST["grado"];
$religion = $_POST["religion"];
$fuente = $_POST["fuente"];

	$telefono = $_POST["telefono"];

	$d=mt_rand(1,10000);
if (isset($_POST['identidad']) and isset($_POST['nombre'])) {


		require '../conexion.php';
		$consulta = mysql_query("select identidad from ficha where identidad='".$identidad."'")or die(mysql_error());
		$id = mysql_num_rows($consulta);
		if ($id==0){

			mysql_query("insert into ficha(identidad,nombre,sexo,direccion,procedencia,grado,escuela,
			fecha_nacimiento,edad,lugar_nacimiento,religion,fuente,telefono)
			values('".$identidad."','".$nombre."','".$sexo."','".$direccion."','".$procedencia."','".$grado."','".$escuela."','".$fecha."',
			'".$edad."','".$lugarNacimiento."','".$religion."','".$fuente."','".$telefono."')") or die(mysql_error());
			echo '<script type="text/javascript">alert("Ficha Guardada");</script>';
			echo "<script>window.location = '../detalleFicha.php?id=".$identidad."'</script>";
		}
		else {
			echo '<script type="text/javascript">alert("El No. de identidad ya se encuentra registrado");</script>';
			echo "<script>window.location = '../nuevaFicha.php'</script>";
		}
		mysql_close();
}
?>
