<?php 
    session_start();
    include ("../Controller/queries.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Style/style.css">
    <title>Parrilla L'Asturianu</title>
</head>
<body>
    <header>
    <!--NEVEGACIÓN-->
    <nav>
        <div class="logo">
            <h3>L'ASTURIANU</br></h3>
        </div>
    <ul class="navegacion">
        <li>
            <a href=../../index.html>INICIO</a>
        </li>
        <li>
            <a href="carta.html">CARTA</a>
        </li>
        <li>
            <a href="login.php">INICIAR SESIÓN</a>
        </li>
        <li>
            <a href="registro.php">REGISTRATE</a>
        </li>
    </ul>
    <div class="bigmac">
        <div class="1"></div>
        <div class="2"></div>
        <div class="3"></div>
    </div>
  </nav>
</header>
<!--FIN NAVEGACION-->

<!--SECCIÓN PRINCIPAL-->
    <div class="contenedor-formulario">
    <h1>NOS PONEMOS MANOS A LA MASA</h1> </br>
    <div class="formulario">
    <h2>REGISTRATE</h2>
        <form class="formulario" action="registro.php" method="POST">
                <div class="input">
                <input name="nombre"    type="text" placeholder="Nombre" required> </br>
                <input name="apellido"  type="text" placeholder="Apellidos" required> </br>
                <input name="direccion" type="text" placeholder="Dirección" required> </br>
                <input name="telefono"  type="text" placeholder="teléfono" required> </br>
                <input name="password"  type="Password" placeholder="Contraseña" required> </br>
            </div>
            <button class="enviar">Enviar</button>
            <p>¿Ya tienes cuenta? </p><a href="login.php">¡A COCINAR!</br></a>
            <?php
         // Insertar datos de registro 
    if(isset ($_POST["nombre"],$_POST["apellido"],$_POST["direccion"],$_POST["telefono"],$_POST["password"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $password = $_POST["password"];
    registroUsuario($nombre,$apellido,$direccion,$telefono,$password);
        
    }
    ?>

        </form>

    </div>
    </div>


    <footer>
    <div class="contenedor">
        <p>&copy; Parrilla L'Asturiano 2022</p>
        <p>Todos los derechos reservados</p>
    </div>
</footer>

  <script src="../../js/app.js"></script>



  <!-- REGISTRO --!>


    

</body>
</html>

