<?php
$destino= "sebaspascali@gmail.com"; 
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\ncorreo: " .$correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino,"contacto",$contenido);
header ("location:gracias.html");
?>