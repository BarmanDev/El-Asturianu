<?php 
        include ("../Controller/queries.php");
        session_start();

        $conexion = crearConexion('asturianu');

        $idReserva = $_GET['idProducto'];
        $sql = "DELETE FROM productos WHERE idProducto='$idReserva'";
        $query = mysqli_query($conexion, $sql);

        if($query){
            Header("Location: modificarCarta.php");
        }





?>