<?php
include 'conexion.php';


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['username'];
$correo =$_POST['correo'];
$contrasena = $_POST['contrasena'];


$sql = "INSERT INTO usuarios (Nombre, Apellido, Correo, Usuario, Contrasena) VALUES 
('$nombre', '$apellido', '$correo', '$usuario','$contrasena');";

$resultado = mysqli_query($db,$sql);

if($resultado){
    echo "Usuario agregado correctamente";
} else{
    echo "Algo ha fallado". mysqli_error($db) ;
}

?>