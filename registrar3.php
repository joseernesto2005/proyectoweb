<?php

$servidor = "Localhost";
$usuario = "root";
$clave = "";
$base = "proyecto";

$enlace = mysqli_connect($servidor,$usuario,$clave,$base);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
           <div class="container">
              <div class="row justify-content-center mt-5">
                  <div class="col-lg-4 col-md-8 col-sm-8">
                      <div class="card shadow-lg">
                         <div class="card-title text-center border-bottom">
                           <div class="text-center">
                          <img src="img/logo2.png" height="120" class="rounded" alt="..." >
                        </div>
                     </div>
                    <div class="card-body">
                  <form   name="proyecto" method="POST">
                <div class="mb-4">
              <label for="" class="form-label">Registrar Usuario</label>
            <input type="text" name="usua" class="form-control">
            
            </div>

                <div class="mb-4">
                  <label for="" class="form-label">Registrar Contraseña</label>
                     <input type="password" name="contra" class="form-control">

                       </div>
                        <div class="d-grid"> 
                         <button type="submit" name="registrar" class="btn btn-primary">Registrar</button><br> 
                         <a class="btn btn-success" href="index2.php" role="button">Inicio</a>
        
                     </div>
                </form>
             </div>
          </div>
        </div>
    </div>
</div>


<?php


if(isset($_POST['registrar'])){

    $usua = $_POST['usua'];
    $contra = $_POST['contra'];

    $insertar = "INSERT INTO usuarios  VALUES('$usua','$contra')";

    $enlace2 = mysqli_query($enlace,$insertar);


    if($enlace2){
    ?>
      <script>


swal("Datos!", "Guardados correctamente!");
    



      </script>


<?php




  }

}

?>

























