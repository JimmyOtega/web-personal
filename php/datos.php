

<?php 
   

    $boton_guar="";

    $nom = $_GET["nombre"];
    $ape =$_GET["apellido"];
    $cor = $_GET["correo"];
    $fec = $_GET["fecha"];
    $cla = $_GET["clave"];
  


    if(isset($_GET['boton_guar'])){
        $bd_hos="localhost";
        $bd_usu="root";
        $bd_cla="";
        $bd_nom="primero";
        $conn = mysqli_connect($bd_hos,$bd_usu,$bd_cla,$bd_nom);
        if(mysqli_connect_errno()){
            echo"Error en la conexion";
        }else{
            echo"conexion exitosa";
        }




    }

?>