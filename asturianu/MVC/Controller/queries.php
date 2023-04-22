<?php 
    include ("../Model/BBDD.php");


//Función para crear usuarios en la base de datos     
function registroUsuario($nombre,$apellido,$direccion,$telefono,$password){
    $conexion = crearConexion("asturianu");
    $sql = "INSERT INTO usuarios (nombre, apellidos, direccion, telefono, pass, administrador) 
                    VALUES ('$nombre', '$apellido','$direccion','$telefono','$password', default)";
    $query = mysqli_query($conexion,$sql);                


    if($query){
        echo "<p>Usuario creado correctamente</p>";
    }else{
    }
    mysqli_close($conexion);

}


function login($telefono,$pass){
    $conexion = crearConexion("asturianu");

    $sql = "SELECT * FROM usuarios WHERE pass = '" . $pass . "' AND telefono = '" . $telefono . "' ";
    $result = mysqli_query($conexion,$sql);  
        if (mysqli_num_rows($result) > 0){
          return true;

    }else{
          return false;
    }
    mysqli_close($conexion);
}

function getUsuario($telefono, $contraseña){
    $conexion = crearConexion('asturianu');
    
    $sql = "SELECT * FROM usuarios WHERE pass = '" . $contraseña . "' AND telefono = '" . $telefono . "' ";
    
    $query = mysqli_query($conexion,$sql); 

    mysqli_close($conexion);
}

function crearReserva($nombre,$apellidos,$telefono,$fecha,$hora,$comensales){
    $conexion = crearConexion("asturianu");
    $sql = "INSERT INTO reservas (nombre,apellidos,telefono,fecha,hora,num_comensales) 
    VALUES ('$nombre','$apellidos','$telefono','$fecha',' $hora',$comensales)";
    $query = mysqli_query($conexion,$sql); 
    
    if($query){
        echo "<h2>Su reserva se ha creado correctamente, espere a su confirmación </h2>";
    }else{
        echo "<script> alert('No se pudo realizar la reserva, intentelo de nuevo
                             o llame al Asturianu 666 444 888'); </script>";
    }
    mysqli_close($conexion);

}

function editarReservas($idReserva){
    $conexion = crearConexion("asturianu");

    $sql = "SELECT idReserva,nombre,apellidos,telefono,fecha,hora,num_mesa FROM reservas 
    WHERE idReserva='$idReserva'";
    
    $query = mysqli_query($conexion,$sql);

    if (mysqli_num_rows($query) > 0){
        return $query;
    }else{
        echo "Error al obtener la consulta";
    }
    mysqli_close($conexion);


}




function añadirCarta($categoria,$plato,$precio){
    $conexion = crearConexion("asturianu");
    $sql = "INSERT INTO productos (categoria, plato, precio) 
                    VALUES ('$categoria', '$plato','$precio')";
    $query = mysqli_query($conexion,$sql);                
    if($query){
        echo "<p>Plato añadido correctamente a la carta</p>";
    }else{
    }
    mysqli_close($conexion);



}


?>