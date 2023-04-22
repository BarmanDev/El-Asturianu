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
    <?php
        
        $conexion = crearConexion("asturianu");
        $idReserva = $_GET['idReserva'];

        $sql = "SELECT idReserva,nombre,apellidos,telefono,fecha,hora,estado,num_comensales,num_mesa FROM reservas 
        WHERE idReserva='$idReserva'";
        $query = mysqli_query($conexion,$sql);
        $row = mysqli_fetch_array($query);
    ?>

    <div class="formulario-reserva">
        <h1>EDITAR RESERVA</h1>
        <form action="../Controller/editarReservas.php" method="POST">
                <input name="idReserva"         type="hidden"    value="<?=$row['idReserva']?>"> </br>
                <p>Nombre</p> <input name="nombre"     type="text"      value="<?= $row['nombre'] ?>"> </br>
                <p>Apellido</p> <input name="apellidos"type="text"      value="<?=$row['apellidos']?>"> </br>
                <p>Teléfono</p> <input name="telefono" type="text"      value="<?=$row['telefono']?>"> </br>
                <p>Fecha</p> <input name="fecha"       type="date"      value="<?=$row['fecha']?>"> </br>
                <p>Hora</p> <input name="hora"         type="time"      value="<?=$row['hora']?>"> </br>
                <p>Estado</p> <input name="estado"     type="text"      value="<?=$row['estado']?>"> </br>
                <p>Número de comensales</p> <input name="num_comensales"     type="text"      value="<?=$row['num_comensales']?>"> </br>
                <p>Número de mesa</p> <input name="num_mesa" type="text"value="<?=$row['num_mesa']?>"></br>

                <input type="submit"    value="Modificar Reserva">
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