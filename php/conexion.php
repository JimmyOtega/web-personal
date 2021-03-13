
<?php

    function conecta(){
        $bd_hos="localhost";
        $bd_usu="root";
        $bd_cla="";
        $bd_nom="primero";
        $conn = mysqli_connect($bd_hos,$bd_usu,$bd_cla,$bd_nom)or die ("Error al conectar la DB" .mysqli_error());
        
        return $conn;
    }

?>
