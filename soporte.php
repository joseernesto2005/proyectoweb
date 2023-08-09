<?php 
REQUIRE('conexion.php');
$usua = isset( $_POST['usua'])? $_POST ['usua']:"";
$contra = isset($_POST['contra'])? $_POST['contra']:"";
$control = isset($_POST['control'])? $_POST['control']:"";

switch($control){

case 'Buscar':{
    $carrito = "SELECT * FROM usuarios where usua = '$usua'";
    $ejecutar = mysqli_query($camino, $carrito);
    $lupa = mysqli_fetch_array($ejecutar);


    if($lupa){

      $usua = $lupa ['usua'];
      $contra = $lupa ['contra'];
     }

     break;

    }
     case 'actualizar':{
  
  
        $carrito = "UPDATE  usuarios SET  usua= '$usua' , contra = '$contra' 
        WHERE usua = '$usua'";
        $ejecutar = mysqli_query($camino , $carrito);
        break;
     }

      
    case 'eliminar':{
    
      $carrito = "DELETE FROM  usuarios WHERE usua = '$usua'";
      $ejecutar = mysqli_query($camino,$carrito);
      break;
      
  }
default:
   # code...
   break;






}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    

<body>

<h1>Aqui tienes la solucion a tu problema</h1>



<div class="row justify-content-center mt-5">
                  <div class="col-lg-4 col-md-8 col-sm-8">
                      <div class="card shadow-lg">
                         <div class="card-title text-center border-bottom">
                           <div class="text-center">
                          <img src="img/logo2.png" height="120" class="rounded" alt="..." >
                        </div>
                     </div>
                    <div class="card-body">
                  <form method="POST" >
                
                <div class="mb-4">
              <label for="" class="form-label">Nombre de usuario</label>
            <input type="text" name="usua"  value="<?php echo $usua; ?>" class="form-control">

            </div>

                <div class="mb-4">
                  <label for="" class="form-label">Contraseña</label>
                     <input type="password" name="contra"  value="<?php echo $contra; ?>" class="form-control">
                       </div>
                        <div class="d-grid"> 
                        <button type="submit" name="control" value="Buscar" class="btn btn-success">Buscar</button><br> 
                         <button type="submit" name="control" value="actualizar" class="btn btn-info">Actualizar</button><br>
                            <button type="submit" name="control" value="eliminar" class="btn btn-warning">Eliminar</button>
                            
                     
                </form>
              
             </div>
          </div>
        </div>
    </div>
</div>
<br>


<?php include("Plantillas/pie.php");?>