<?php
include '../layout/layout.php';
include '../helpers/utilities.php';

session_start();


if(isset($_GET['id'])){

  $estuid = $_GET['id'];

  $_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();
  
  $estudiantes = $_SESSION['estudiantes'];

  $element = searchProperty($estudiantes, 'id', $estuid)[0];
  $elementIndex = getIndexElement($estudiantes,'id', $estuid);

  if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['carrera']) && isset($_POST['verificacion']) ){
  
  
  
   $updateEstu = [ 'id' => $estuid, 'nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'], 'carrera' => $_POST['carrera'], $_POST['verificacion'] ];
   $estudiantes[$elementIndex] = $updateEstu;
  
    $_SESSION['estudiantes'] = $estudiantes;
  
  
    header('location: ../index.php');
    exit();
  }


}else{
  header('location: ../index.php');
  exit();

}





?>
<?php printHeader(true);?>

<main role="main">

<div style="margin-top: 3%" class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

    <div class="card ">
  <div style="text-align:center" class="card-header bg-secondary text-light" >
    Registrarse
  </div>
  <div class="card-body">
    
  <form action="edit.php?id=<?php echo $element['id']?>" method="POST">
  <div class="Nombre">
    <label for="Apellido">Nombre</label>
    <input type="text" value="<?php echo $element['nombre'] ?>"class="form-control" id="Nombre" placeholder="Nombre" name="nombre">
  </div>
  <div class="Apellido">
    <label for="Apellido">Apellido</label>
    <input type="text" <?php echo $element['apellido'] ?> class="form-control" id="Apellido" placeholder="Apellido" name="apellido">
  </div>
  <div class="form-group">
    <label for="carrera">Carrera</label>
  
    <select class="form-control" id="carrera" name="carrera">

    <?php foreach($carreras as $id => $text):  ?>

        <?php if($id == $element['carrera']): ?>

          <option selected value="<?php echo $id; ?>"> <?php echo $text; ?></option>

        <?php else:  ?>

          <option value="<?php echo $id; ?>"> <?php echo $text; ?></option>

        <?php endif ?>

        

    <?php endforeach; ?>

    </select>
  </div>
  <div>
  <input type="checkbox" name="verificacion" id="Verificacion">
     <label for="Verificacion">Activo</label>
     <h6>Seleccione si esta activo</h6>
  </div>
      <button type="submit" class="btn btn-primary">Guardar</button>

</form>

  </div>
</div> 

    </div>
    <div class="col-md-3"></div>
</div>



</main>

<?php printFooter(true); ?>

