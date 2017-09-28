<?php
if(isset ($_POST['identidad'])){
    $identidad = $_POST['identidad'];
    $cita = $_POST['cita'];
      $fecha = $_POST['fecha'];

    require '../conexion.php';
    mysql_query("insert into citas(identidad,cita,fecha)
    values('".$identidad."','".$cita."','".$fecha."')") or die(mysql_error());
        echo '<script type="text/javascript">alert("Cita Guardada");</script>';
        echo "<script>window.location = '../../detalleFicha.php?id=".$identidad."'</script>";

    mysql_close($conexion);
}
?>
