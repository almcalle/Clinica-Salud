<?php
require 'php/requerirUsuario.php';
include 'include/head.inc';
include 'include/menu.inc';
?>
      <div class="wrapper">
      <div class="content-wrapper">
        <section class="content-header">
        <h1>
        Anamnesis
        <small>Nuevo Anamnesis</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li>Anamnesis</li>
        <li class="active">Nuevo Anamnesis</li>
        </ol>
        </section>
          <?php
            if(isset($_GET['id']))
            {
            require 'php/conexion.php';
            $buscar = $_GET['id'];
            //BUSCA FICHA
            $registro = mysql_query("select * from ficha where identidad='".$buscar."'");
            $Ficha = mysql_fetch_array($registro);
            ?>
          <div class="col-lg-12">
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class="row">

            <div class="box box-warning widget-user-2">

            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
              <div class="widget-user-image">
              <br>
              <!-- <center><img class="img-circle" src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$Ficha['foto']; ?>" id="fotoGrande" /></center> -->
              </div>
              <!-- /.widget-user-image -->
              <center>
                <h3 class="widget-user-username"><?php echo $Ficha['nombre']; ?></h3>
                <h5 class="widget-user-desc"><?php echo $Ficha['grado'],"-",$Ficha['seccion']," (",$Ficha[edad]," años)"?></h5>
              </center>
              <br>
            </div>
          </div>

<!--FIN del la ficha de consulta-->
  <form method="post" action="php/guardar/guardarAnamnesis.php" id="miform">



    <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Datos personales</h3>
      </div>
      <div class="box-body">
          <div>
          <label>Identidad</label>
              <input class="form-control" readonly="readonly" name="identidad" required="required" value="<?php echo $Ficha['identidad']; ?>" />
          </div>
        <div>
          <label>Nombre</label>
          <input class="form-control" type="text" name="nombre" maxlength="30" required="required" readonly="readonly" value="<?php echo $Ficha['nombre']; ?>"/>
        </div>
        <div>
          <label>Dirección</label>
          <input type="text" name="direccion" maxlength="50" required="required" readonly="readonly" class="form-control" value="<?php echo $Ficha['direccion']; ?>">
        </div>

      </div>


    </div>



    <!--/////////////////////////////////////////////////////////////////-->
       <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Antecedentes</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Antecedentes personales patológicos</label>
          <input class="form-control" type="text" name="antecedentes_patologicos" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>

        <div>
          <label>Antecedentes hospitalarios, traumáticos y quirúrgicos</label>
          <input class="form-control" type="text" name="antecedentes_hospitalarios" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>

        <div>
          <label>Antecedentes alérgicos</label>
          <input class="form-control" type="text" name="antecedentes_alergicos" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>

        <div>
          <label>Antecedentes familiares</label>
          <input class="form-control" type="text" name="antecedentes_familiares" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>

        <div>
          <label>Antecedentes epidemiológicos</label>
          <input class="form-control" type="text" name="antecedentes_epidemiologicos" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>

      </div>
    </div>



    <!--/////////////////////////////////////////////////////////////////-->
       <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Historia de enfermedad actual</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Sintoma Principal</label>
          <input class="form-control" type="text" name="sintoma_principal" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>

        <div>
          <label>Historia de la enfermedad actual</label>
          <input class="form-control" type="text" name="historia_enfermedad" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>

      </div>
    </div>
    <!--//////////////////////////////////////////////////////////////////-->


    <input type="submit" class="btn btn-warning btn-flat pull-right" value="Guardar Ficha"/>
    <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
  </form>
<!--INICIO-->
<?php
}
?>
        </div>
        </section><!-- Aqui es el fin -->
        </div>
      </div>
    </div><!-- ./wrapper -->
      <?php
      include 'include/footer.inc';
      ?>

<?php
include 'include/scripts.inc';
?>
<script type="text/javascript">
  function limpiar() {
    document.getElementById("miForm").reset();
  }
</script>
<?php
include 'include/plugins.inc';
include 'include/fin.inc';
?>
