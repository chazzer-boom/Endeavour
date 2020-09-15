<?php

//$serverName = "srv139\srv139dw"; //serverName\instanceName
$serverName = "249-bidbprd-01.mck.onsite\hdmsql"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array(
					"Database" => "hdm_local",
					"UID" => "ibrox.stadium",
					"PWD" => "B33r4TheB0ys"
				);
$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     echo "<pre>";
     print_r( sqlsrv_errors());
     echo "</pre>";
}
?>
