<?php
$host = "localhost";
$dbFirstname = "auth_first"; 
$dbLastname = "auth_last"; 
$password = ""; 
$pdoFirst = new PDO("mysql:host=$host;dbname=$dbFirstname", null, $password);
$pdoLast = new PDO("mysql:host=$host;dbname=$dbLastname", null, $password);
?>
