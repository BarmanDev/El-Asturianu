<?php 
        include ("../Controller/queries.php");
        session_start();

        $conexion = crearConexion('asturianu');

        $idReserva = $_GET['idReserva'];
        $sql = "DELETE FROM reservas WHERE idReserva='$idReserva'";
        $query = mysqli_query($conexion, $sql);

        if($query){
            Header("Location: confirmar-reservas.php");
        }




?>