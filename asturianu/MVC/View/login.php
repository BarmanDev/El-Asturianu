<?php 
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
            <a href="#">INICIAR SESIÓN</a>
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
    <h2>INICIA SESIÓN </h2>
        <form class= "formulario" action="../Controller/validarUsuarios.php" method="POST">
            <div class="input">
                <input  name="telefono"    class= controles type="Tel" class="input" placeholder="Teléfono" required> </br>
                <input  name="contraseña" class= controles type="Password" class="input" placeholder="Contraseña" required></br>
                <button class="enviar">Enviar</button>
                <p>¿No tienes cuenta? </p><a href="registro.php">¡CLICK AQUÍ!</br></a>
            </div>
        </form>
    
    </div>
    </div>


    <footer>
    <div class="contenedor">
        <p>&copy; Parrilla L'Asturianu 2022</p>
        <p>Todos los derechos reservados</p>
    </div>
</footer>

  <script src="js/app.js"></script>




    

</body>
</html>