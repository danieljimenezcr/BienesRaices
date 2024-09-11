<?php 
//Importar la conerxion

require 'includes/config/database.php';
$db = conectarDB();

//Crear un email y password
$email = 'correo@correomail.com';
$password = '123456';

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//Querty para crear el usuario
 $query = "INSERT INTO usuarios (email, password) VALUES ('{$email}', '{$passwordHash}');";


 echo $query;

 mysqli_query($db, $query);

//Agregar a la base de datos

?>