<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
<div id="vent_emergente">
         
         <h2 class="h2">Te damos la bienvenida a este folder</h2>
         <br>
         <h2 class="h2">Formulario de registro</h2>
         <form class="formulario" method="GET" Action="php/datos.php">
             <input class="regist" type="text" name="nombre" id="nombre"placeholder="Ingrese su Nombre">
             <input class="regist" type="text" name="apellido" id="apellido"placeholder="Ingrese su Apellido">
             <input class="regist" type="email" name="correo" id="correo"placeholder="Ingrese su Correo">
             <input class="regist" type="date" name="fecha" id="fecha"placeholder="Ingrese fecha" style="cursor: pointer;">
             <input class="regist" type="password" name="clave" id="clave"placeholder="Ingrese su Contraceña">
             <br>
             <p class="p">Estoy deacurdo con :<a class="a" href="#">Terminos y condiciones</a></p>
             <input type="submit" id="boton_guar" name="boton_guar" class="boton_guar" value="Guardar">
             <input type="submit" id="boton_cerr" class="boton_cerr" value="Cerrar">
             <br>
             <br>
             <p  class="p"><a class="a" href="#">¡Ya tengo cuenta?</a></p>
         </form> 

     </div>
</body>
</html>