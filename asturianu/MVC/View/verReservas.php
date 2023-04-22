<?php 
        session_start();
        $telefono = $_SESSION['telefono'];
        include ("../Controller/queries.php");

        $conexion = crearConexion('asturianu');

        $sql = "SELECT idReserva,nombre,apellidos,telefono,fecha,hora,estado,num_comensales,num_mesa 
                FROM reservas WHERE telefono = '$telefono' ORDER BY fecha;";
        $query = mysqli_query($conexion, $sql);


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
            <a href="zonaCliente.php">PÁGINA PRINCIPAL</a>
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
<section id="zona-admin">
    <div class="contenedor-admin">
    <h1>¡BIENVENIDO ADMINISTRADO!</h1> </br>
    <h2>¡QUE TENGA UN GRAN SERVICIO!</h2>
    </div>
    </section>

<section class="tabla">
    <div class="tablas">
<h2>USUARIOS CON RESERVAS</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>apellidos</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Estado</th>
                    <th>Numero de comensales</th>
                    <th>Numero de mesa</th>
            
                </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?=$row['idReserva']?></th>
                        <th><?=$row['nombre']?></th>
                        <th><?=$row['apellidos']?></th>
                        <th><?=$row['telefono']?></th>
                        <th><?=$row['fecha']?></th>
                        <th><?=$row['hora']?></th>
                        <th><?=$row['estado']?></th>
                        <th><?=$row['num_comensales']?></th>
                        <th><?=$row['num_mesa']?></th>
                    </tr>
                <?php endwhile; ?>    
            </tbody>
        </table>
    </div>
    </section>    



  <script src="../../js/app.js"></script>



