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
    /* 
        $conexion = crearConexion("asturianu");
        $idReserva = $_GET['idReserva'];

        $sql = "SELECT idReserva,nombre,apellidos,telefono,fecha,hora,num_mesa FROM reservas 
        WHERE idReserva='$idReserva'";
        $query = mysqli_query($conexion,$sql);
        $row = mysqli_fetch_array($query);
    */
    ?>

    <?php
        
        $conexion = crearConexion("asturianu");
        $idProducto = $_GET['idProducto'];
    
        $sql = "SELECT idProducto, categoria, plato, precio FROM productos 
        WHERE idProducto='$idProducto'";
        $query = mysqli_query($conexion,$sql);
        $row = mysqli_fetch_array($query);

    ?>

    <div class="formulario-reserva">
        <h1>EDITAR PRODUCTO</h1>
        <form action="../Controller/editarProductos.php" method="POST">
                <input name="idProducto" type="hidden"    value="<?=$row['idProducto']?>"> </br>
                <p>Categoria</p> <input name="categoria"     type="text"      value="<?= $row['categoria'] ?>"> </br>
                <p>Plato</p> <input name="plato"type="text"     value="<?=$row['plato']?>"> </br>
                <p>Teléfono</p> <input name="precio" type="text"      value="<?=$row['precio']?>"> </br>

                <input type="submit"    value="Modificar producto">
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