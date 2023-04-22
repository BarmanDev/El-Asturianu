
<?php  
//FUNCIÓN PARA CREAR CONEXIÓN A LA BASE DE DATOS WEB

function crearConexion($database) {
	// Datos de conexión
	$host = "localhost";
	$user = "root";
	$password = "";
	$conexion = mysqli_connect($host, $user, $password, $database);

	if (!$conexion) {
		die("Error de conexión con la base de datos vuelva a intentarlo más tarde " . mysqli_connect_error());
	}
	
	return $conexion;
}

?>