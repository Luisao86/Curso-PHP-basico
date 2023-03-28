<?php 
  $nombre_formu = $_POST ['nombre'];
  $apellido_formu = $_POST ['apellido'];
  $edad_formu = $_POST ['edad'];
  $correo_formu = $_POST ['correo'];
  $motivo_formu = $_POST ['motivo_consulta'];
  $mensaje_formu = $_POST ['mensaje'];

  //no importa el orden //

  //conexion con el servidor//
include ("conexion.php");

mysqli_query ($base, " INSERT INTO consultas VALUES('$nombre_formu','$apellido_formu',$edad_formu,'$correo_formu','$motivo_formu','$mensaje_formu')");

header("Location: contacto.php?ok");

?>