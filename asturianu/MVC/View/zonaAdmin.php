<?php 
        include ("../Controller/queries.php");
        session_start();

        if (isset($_SESSION['telefono'])){
            $usuarioSesion = $_SESSION['telefono'];
            $usuario = htmlspecialchars($usuarioSesion);   
        }

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
            <a href="../Controller/cerrarSesion.php">CERRAR SESIÓN</a>
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
<section id="zona-admin">
    <div class="contenedor-admin">
    
    <?php echo "<h1>Bienvenido $usuario<h1>";?>
    <h2>¡QUE TENGA UN GRAN SERVICIO!</h2>
            <form class="opciones-cliente" action="confirmar-reservas.php">
                <input type="submit" value="CONFIRMAR RESERVA">
            </form>
            <form class="opciones-cliente" action="verCarta.php">
                <input type="submit" value="VER CARTA">
            </form>
            <form class="opciones-cliente" action="modificarCarta.php">
                <input type="submit" value="MODIFICAR CARTA">
            </form>
            <form class="opciones-cliente" action="añadirCarta.php">
                <input type="submit" value="AÑADIR A LA CARTA">
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



