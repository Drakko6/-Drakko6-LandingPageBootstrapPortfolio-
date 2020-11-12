<?php

//recibir datos
  
  $nombre = $_POST['name'];
  $correo = $_POST['email'];
  $subject = $_POST['subject'];



//sanitizar datos

//Conexion a BD
include("conexion.php");

//Insertar datos
$sql = "INSERT INTO usuarios (nombre, correo)
  VALUES ('$nombre', '$correo')";
$conn->exec($sql);




?> 
  
