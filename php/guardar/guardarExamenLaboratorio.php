<?php
if(isset ($_POST['identidad'])){
    $identidad = $_POST['identidad'];
    $examen_laboratorio = $_POST['examen_laboratorio'];

    require '../conexion.php';
    mysql_query("insert into examen_laboratorio(identidad,examen_laboratorio,fecha)
    values('".$identidad."','".$examen_laboratorio."', CURDATE())") or die(mysql_error());
        echo '<script type="text/javascript">alert("Examen de Laboratorio Guardado");</script>';
        echo "<script>window.location = '../../detalleFicha.php?id=".$identidad."'</script>";

    mysql_close($conexion);
}
?>
