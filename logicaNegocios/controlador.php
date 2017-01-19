<?php
require '../datos/conexionBD.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$edad = $_POST["edad"];
$carrera = $_POST["carrera"];

$sql = "INSERT INTO practica (nombre,apellido,edad,carrera)
VALUES ('$nombre', '$apellido', '$edad', '$carrera')";

$stmt = sqlsrv_query( $conn, $sql);

if ( $stmt )
{
  echo "Lo datos se guardaron con exito";

}
else
{
  echo "Lo datos NO se guardaron con exito";
}


 ?>
