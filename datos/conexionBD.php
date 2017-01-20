<?php
$serverName = "DESKTOP-CVGPVU6  ";
//UID = usuario
//PWD = password
$connectionInfo = array( "Database"=>"c_s_ejemplo", "UID"=>"usuario2", "PWD"=>"root");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
}else{
     die( print_r( sqlsrv_errors(), true));
}
?>
