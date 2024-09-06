<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mysql"; 


$connection = new mysqli($host, $username, $password, $dbname);


if ($connection->connect_error) {
    die("Falha na conexão: " . $connection->connect_error);
}
?>
