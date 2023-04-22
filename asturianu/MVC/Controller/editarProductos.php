<?php 
session_start();
include ("../Controller/queries.php");
$conexion = crearConexion('asturianu');


$idProducto = $_POST['idProducto'];
$categoria   = $_POST['categoria'];
$plato = $_POST['plato'];
$precio = $_POST['precio'];

$sql = "UPDATE productos SET categoria='$categoria', plato='$plato', precio='$precio'
        WHERE idProducto ='$idProducto';";

$query = mysqli_query($conexion,$sql);

if($query){
    echo "todo correcto";
    Header("Location: ../View/modificarCarta.php");

}

?>