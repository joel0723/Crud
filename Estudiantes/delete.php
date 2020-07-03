<?php

include '../helpers/utilities.php';

session_start();

$estudiantes = $_SESSION['estudiantes'];

if(isset($_GET['id'])){


    $estuid = $_GET['id'];

    $elementIndex = getIndexElement($estudiantes,'id',$estuid);

    unset($estudiantes[$elementIndex]);

    $_SESSION['estudiantes'] = $estudiantes;

}

header("Location: ../index.php");


exit();

?>