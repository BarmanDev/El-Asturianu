<?php
session_start();
include ("queries.php");

$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];

$_SESSION['telefono'] = $telefono;

$conexion = crearConexion('asturianu');

$sql = "SELECT * FROM usuarios WHERE pass = '" . $contraseña . "' AND telefono = '" . $telefono . "' ";

$query = mysqli_query($conexion,$sql); 

$row = mysqli_fetch_array($query);

if ($row['administrador'] == 1){
    header("location:../View/zonaAdmin.php");

}else if
    ($row['administrador'] == 0){
        header("location:../View/zonaCliente.php");
}else{
    echo "Usuario no encontrado intentalo de nuevo";
}


?>