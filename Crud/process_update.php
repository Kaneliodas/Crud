<?php
include("config.php");
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$sql = "UPDATE employees SET name='$name', address='$address', salary=$salary WH
ERE id=$id";
mysqli_query($link, $sql);
header("Location: index.php");
?>