<?php
session_start();
$a=$_SESSION["arr"];
print json_encode($a);

?>