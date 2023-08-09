<?php
    try{
        $camino = mysqli_connect("localhost","root", "","proyecto");
        
    }

    catch(Exception $ex){
        echo $ex->getMessage();
    }
    
?>