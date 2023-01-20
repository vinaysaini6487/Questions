<?php
$dbhost="localhost";

$dbuser="root";

$dbpass="";

$database="demo";

$error="Connection Error";

//database_connection
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$database) or die($error);

?>
