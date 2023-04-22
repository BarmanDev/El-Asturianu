<?php
session_start();
include ("queries.php");
// Creamos las variable de almacenamiento del post
$telefono = $_POST['telefono'];
$contraseñaVerificacion = $_POST['contraseña'];
// Creamos la sesión con el nombre de la variable telefono
$_SESSION['telefono'] = $telefono;

// Consulta para sacar la contraseña 
$conexion = crearConexion('asturianu');

$sql = "SELECT pass FROM usuarios WHERE  telefono = '" . $telefono . "' ";

$query = mysqli_query($conexion,$sql); 

$row = mysqli_fetch_array($query);

// Si la contraseña coincide 
if($contraseñaVerificacion == $row[0]){
// Consulta para sacar el valor 1 o 0 para saber si es administrador
    $sql = "SELECT administrador FROM usuarios WHERE  telefono = '" . $telefono . "' ";
    $query = mysqli_query($conexion,$sql); 

    $row = mysqli_fetch_array($query);

// Si es 1, es administrador y lleva a la zonaAdmin.
    if ($row['administrador'] == 1){
        header("location:../View/zonaAdmin.php");
// De caso contrario no es administrador y lleva a la zona cliente.
    }else if ($row['administrador'] == 0){
        header("location:../View/zonaCliente.php");

    }
// Si la contraseña no coincide 
}else{
    echo "<script>alert('Telefono o contaseña incorrecta')</script>";
        header("Location:../View/Login.php");

}

mysqli_close($conexion);



?>