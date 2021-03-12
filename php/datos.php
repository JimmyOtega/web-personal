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
            exit();
        }else{
           # echo"conexion exitosa";
           #$f=str_replace('-','/',date('Y-m-d',strtotime($fec))); canvia formato de fecha
          
            $sql ="INSERT INTO registro(nombre, apellido, correo, fecha, clave) VALUES('$nom','$ape','$cor','$fec','$cla')";
            $re=mysqli_query($conn,$sql);
            if($re==true){
                echo"Ingreso exitoso";
                #en este lugar debemos colocar la con sulta de los ingresados  SELECT COUNT(id) FROM registro
                mysqli_close( $conn);# sierra la conexion
            }else{
                echo "Error al insertar";
            }
        }




    }

?>