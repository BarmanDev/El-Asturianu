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
            <a href="zonaAdmin.php">PÁGINA PRINCIPAL</a>
        </li>
            <a href="../../index.html">CERRAR SESIÓN</a>
        </li>
    </ul>
    <div class="bigmac">
        <div class="1"></div>
        <div class="2"></div>
        <div class="3"></div>
    </div>
  </nav>
</header>

  

    <div class="formulario-reserva">
        <h1>AÑADIR PRODUCTOS A LA CARTA</h1>
        <form action="añadirCarta.php" method="POST">
                <p>Categoria</p> <input name="categoria" type="text" placeholer="Categoria" > </br>
                <p>Plato</p> <input name="plato"type="text"  > </br>
                <p>Precio</p> <input name="precio" type="text"  ></br>
        <?php
            if(isset ($_POST["categoria"],$_POST["plato"],$_POST["precio"])){
                $categoria = $_POST["categoria"];
                $plato = $_POST["plato"];
                $precio = $_POST["precio"];
                añadirCarta($categoria,$plato,$precio);
            }
        ?>  
                <input type="submit"    value="Añadir a la carta">
        </form>
    </div>    

    <footer>
    <div class="contenedor">
        <p>&copy; Parrilla L'Asturiano 2022</p>
        <p>Todos los derechos reservados</p>
    </div>
</footer>

  <script src="../../js/app.js"></script>
</body>
</html>