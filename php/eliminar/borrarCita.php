<?php
require '../conexion.php';
$id = $_POST['id'];

//ELIMINAMOS LA FICHA

mysql_query("DELETE FROM citas  WHERE id = '$id'");

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS
mysql_close($conexion);
echo '<script type="text/javascript">alert("Cita borrada");</script>';
echo "<script>window.location = 'consultaCitas.php'</script>";
?>
