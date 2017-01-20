<?php
$serverName = "DESKTOP-CVGPVU6  "; //serverName\instanceName
$connectionInfo = array( "Database"=>"c_s_ejemplo", "UID"=>"usuario2", "PWD"=>"root");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
  $sql = "SELECT * FROM practica";
  $stmt = sqlsrv_query( $conn, $sql );
  if( $stmt === false) {
    echo 'No se encontraron registros';
      die( print_r( sqlsrv_errors(), true) );
  }
  else {
  echo '
    <nav>
      <div class="nav-wrapper" distplay>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

          <li><a href="index.php">Regresar</a></li>
        </ul>
      </div>
      </nav>
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
            </tr>';
          }
             echo '  </tbody></table>';
  }
}else{
     die( print_r( sqlsrv_errors(), true));
}


?>
