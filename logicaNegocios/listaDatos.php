<?php
// Envía una consulta a MSSQL
include '../datos/conexionBD.php';
$sql = "SELECT * FROM practica";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
  echo 'No se encontraron registros';
    die( print_r( sqlsrv_errors(), true) );
}
else {
echo '
	 <table>
        <thead>
          <tr>
              <th data-field="name">Nombre</th>
              <th data-field="lastname">Apellidos</th>
              <th data-field="age">Edad</th>
              <th data-field="major">Carrera</th>

          </tr>
        </thead>

        <tbody>';
        while ($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
    	echo '

          <tr>
            <td>'.$row["nombre"].'</td>
            <td>'.$row["apellido"].'</td>
            <td>'.$row["edad"].'</td>
            <td>'.$row["carrera"].'</td>
          </tr>
';
          }
           echo '    </tbody>
      </table>
    ';
}

?>
