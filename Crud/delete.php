<?php
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM employees WHERE id = $id";
mysqli_query($link, $sql);
header("Location: index.php");
?>