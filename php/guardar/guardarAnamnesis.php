<?php
if(isset ($_POST['identidad'])){
  $identidad=$_POST['identidad'];
$antecedentes_patologicos = $_POST["antecedentes_patologicos"];
$antecedentes_hospitalarios = $_POST["antecedentes_hospitalarios"];
$antecedentes_alergicos = $_POST["antecedentes_alergicos"];
$antecedentes_familiares = $_POST["antecedentes_familiares"];
$antecedentes_epidemiologicos = $_POST["antecedentes_epidemiologicos"];

$sintoma_principal = $_POST["sintoma_principal"];
$historia_enfermedad = $_POST["historia_enfermedad"];



    require '../conexion.php';
    mysql_query("insert into anamnesis(identidad,antecedentes_patologicos,
    antecedentes_hospitalarios,antecedentes_alergicos,antecedentes_familiares,antecedentes_epidemiologicos,
    sintoma_principal,historia_enfermedad,fecha)
    values('".$identidad."','".$antecedentes_patologicos."','".$antecedentes_hospitalarios."','".$antecedentes_alergicos
    ."','".$antecedentes_familiares."','".$antecedentes_epidemiologicos."','".$sintoma_principal."','".$historia_enfermedad."',CURDATE())") or die(mysql_error());
        echo '<script type="text/javascript">alert("Anamnesis Guardado");</script>';
        echo "<script>window.location = '../../detalleFicha.php?id=".$identidad."'</script>";

    mysql_close($conexion);
}
?>
