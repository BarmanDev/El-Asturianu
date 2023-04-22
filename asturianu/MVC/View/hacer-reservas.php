<?php 
        include ("../Controller/queries.php");
        session_start();

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
            <a href="zonacliente.php">PÁGINA PRINCIPAL</a>
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
<!--FIN NAVEGACION-->

<!--SECCIÓN PRINCIPAL-->
    <section class="hacer-reserva">
    <div class="contenedor-reservas">
    <h1>BIENVENIDO A LA ZONA DE RESERVAS</h1> </br>
    <h2>RELLENE EL FORMULARIO PARA REALIZAR UNA RESERVA</h2>
        <form class="formulario" action="hacer-reservas.php" method="POST">
                <div class="input">
                <input name="nombre"    type="text" placeholder="Nombre" required> </br>
                <input name="apellido"  type="text" placeholder="Apellidos" required> </br>
                <input name="telefono"  type="text" placeholder="teléfono" required> </br>
                <input name="fecha"     type="date" placeholder="fecha"  requiered> </br>
                <input name="hora"      type="time" placeholder="hora" requiered> </br>
                <input name="num_comensales"  type="text" placeholder="Comensales" required> </br>
            <button class="enviar">reservar</button>

            <?php

            if(isset($_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['fecha'],$_POST['hora'],$_POST['num_comensales'])){
            $nombre   = $_POST['nombre'];
            $apellidos = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $fecha    = $_POST['fecha'];
            $hora     = $_POST['hora'];      
            $comensales = $_POST['num_comensales'];

            crearReserva($nombre,$apellidos,$telefono,$fecha,$hora,$comensales);
            }
           
           
            ?>

        </form>    
   </div>
   </section>
    <footer>
    <div class="contenedor">
        <p>&copy; Parrilla L'Asturiano 2022</p>
        <p>Todos los derechos reservados</p>
    </div>
</footer>

  <script src="../../js/app.js"></script>



