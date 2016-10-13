<?php
$serverName="LAPTOP-7RU0LH29\LOCAL";
 
$connectionOptions = array("Database"=>"clothes");

$conn = sqlsrv_connect( $serverName, $connectionOptions);
if( $conn )
	echo "The connection is succesfull";
else

      { 
      	echo "The connection failed";
      	die( 'cannot connect'); }
?>