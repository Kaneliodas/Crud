<?php
include("config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM employees WHERE id = $id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>
<form action="process_update.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
Nome: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
Endereço: <input type="text" name="address" value="<?php echo $row['address']; ?>"
><br>
Salário: <input type="number" name="salary" value="<?php echo $row['salary']; ?>"><
br>
<input type="submit" value="Atualizar">
</form>