<?php 
// Importar la conexión
require 'includes/app.php';
$db = conectarDb();

// Crear un email y password
$email = "inmobiliariayconstructorasm@gmail.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);



// Query para crear el usuario
$query = "INSERT INTO usuarios(`email`, `password`) VALUES ('$email', '$passwordHash')";




// Agregar a la base de datos
mysqli_query($db, $query);
?>
