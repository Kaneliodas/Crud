<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'demo';
$link = mysqli_connect($host, $user, $password, $database);
if (!$link) {
die("Erro: " . mysqli_connect_error());
}
?>