<?php
include 'layout/layout.php';
include 'helpers/utilities.php';

session_start();

$_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

$ListadoEstu = $_SESSION['estudiantes'];



?>
<?php printHeader(TRUE);?>

<main role="main">

  <section class="jumbotron text-center bg-white">
    <div class="container">
      <h1>Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="Estudiantes/add.php" class="btn btn-primary my-2">Registarse</a>
        
      </p>
    </div>
  </section>

  <div class="album py-5 bg-info">
    <div class="container">

    <div class="row">
       <?php if(empty($ListadoEstu)):  ?>
       <h2>No hay estudiantes Registrado, REGISTRATE <a href="Estudiantes/add.php"></a></h2>

       <?php else: ?>

         <?php foreach($ListadoEstu as $estudiante): ?>

          
               <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                          <div class="card-body">
                           <h5 class="card-title"><?php echo $estudiante['nombre']?> <?php echo $estudiante['apellido']?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo getCarrera($estudiante['carrera'])  ?></h6>
                           <p class="card-text"></p>
                           <a href="Estudiantes/edit.php?id=<?php echo $estudiante['id']; ?>" class="card-link">Editar</a>
                           <a href="Estudiantes/delete.php?id=<?php echo $estudiante['id']; ?>" class="card-link">Borrar</a>
                         </div>
                       </div>
             </div>
    

         <?php endforeach; ?>

  


<?php endif ?>


          
</div>
    </div> 
 </div>    
</main>

<?php printFooter(TRUE); ?>



