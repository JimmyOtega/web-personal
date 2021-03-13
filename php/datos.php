
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FOLDER</title>
      
    </head>
    <body style="background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
        background-blend-mode: multiply,multiply;">
        <img src="img/font1.gif" id="img"style="display:none;" width=" 100%" height="100%" alt="" srcset="">
        <?php 
            $boton_guar="";
            $nom = $_GET["nombre"];
            $ape =$_GET["apellido"];
            $cor = $_GET["correo"];
            $fec = $_GET["fecha"];
            $cla = $_GET["clave"];
            if(isset($_GET['boton_guar'])){
            include ("conexion.php");
                $conn = conecta();
                $sql ="INSERT INTO registro(nombre, apellido, correo, fecha, clave) VALUES('$nom','$ape','$cor','$fec','$cla')";
                $re=mysqli_query($conn,$sql);
        
            }
        ?>
        <table border="0" alig="center" style="width: 50%;height:500px;border:2px solid #000;margin:0px auto;paddin:20px 50px 20px; background: #24303c;color:#fff;">
          
            <tr> <td><h2 style="color:#fff; text-align: center;">Registro exitoso</h2></td> </tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr style="margin:10px;paddin:20px 20px 20px;">
                <td style="border:2px solid #000;margin:10px;paddin:20px 50px 20px;">NOMBRE</td>
                <td style="border:2px solid #000;margin:10px;paddin:20px 50px 20px;font-size: 18px;"><?php echo $nom ?> </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr>
                <td  style="border:2px solid #000;margin:10px;paddin:20px 50px 20px;">APELLIDO</td>
                <td  style="border:2px solid #000;margin:10px;paddin:20px 50px 20px;font-size: 18px;"><?php echo $ape ?> </td>
            </tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr>
                <td  style="border:2px solid #000;margin:10px;paddin:20px 50px 20px;">CORREO</td>
                <td  style="border:2px solid #000;margin:10px;paddin:20px 50px 20px;font-size: 18px;"><?php echo $cor ?> </td>
            </tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr>
                <td  style="border:2px solid #000;margin:10px;paddin:20px 50px 20px;">FECHA</td>
                <td  style="border:2px solid #000;margin:10px;paddin:20px 50px 20px;"><?php echo $fec ?> </td>
            </tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr>
                <td  style="border:2px solid #000;margin:10px;paddin:20px 50px 20px;">CLAVE</td>
                <td  style="border:2px solid #000;margin:10px;paddin:20px 50px 20px;font-size: 18px;"><?php echo $cla ?> </td>
            </tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr> <tr></tr></tr>
            <tr style="background:#fff;border:2px solid #000;paddin:20px 50px 20px;">
            <td style="border:2px solid #000;text-align: center;" ><a href="#" style="margin:0px auto;text-decoration:none;cursor:pointer;color:#000;display:inline-block;font-size:20px;">Detalle</a></td>
                <td style="border:2px solid #000;text-align: center;" ><a href="http://localhost/folder/index.php" style="margin:0px auto;text-decoration:none;cursor:pointer;color:#000;display:inline-block;font-size:20px;">Salir</a></td>
               
            </tr>

        </table>
    </body>
</html>