<?php
include("index2.php");
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base  = "proyecto";

$conn = mysqli_connect($servidor,$usuario,$clave,$base);

$usuario = $_POST['usua'];
$contrasena = $_POST['contra'];

$query = "SELECT * FROM usuarios WHERE usua ='".$usuario."' AND contra = '".$contrasena."'";

$result = mysqli_query($conn,$query);

$cont = mysqli_num_rows($result);

if($cont == 1){

   
    header("location:Principal.php");
    

    

}
else{

   
    header("location:index2.php?=error Usuario no encontrado");
    exit();
    

}


?>