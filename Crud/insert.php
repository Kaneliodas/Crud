<?php
include("config.php");
$name = $_POST['name'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$sql = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address',
$salary)";
mysqli_query($link, $sql);
header("Location: index.php");
?>