<?php 
session_start();
include ("../Controller/queries.php");
$conexion = crearConexion('asturianu');


$idReserva = $_POST['idReserva'];
$nombre   = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$fecha    = $_POST['fecha'];
$hora     = $_POST['hora'];
$estado   = $_POST['estado'];
$comensales = $_POST['num_comensales'];
$num_mesa = $_POST['num_mesa'];
$sql = "UPDATE reservas SET nombre='$nombre', apellidos='$apellidos', telefono='$telefono',fecha='$fecha',estado='$estado',num_comensales = $comensales,num_mesa='$num_mesa' 
        WHERE idReserva ='$idReserva';
";

$query = mysqli_query($conexion,$sql);

if($query){
  
    echo "todo correcto";
    Header("Location: ../View/confirmar-reservas.php");
}

?>