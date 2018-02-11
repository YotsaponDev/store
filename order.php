<?php
include_once("dbcon.php");

$orderSQL = "SELECT * FROM order";
$sql = "INSERT INTO order (menu,value,flavor,temp) VALUES 
('".$_POST["menu"]."','".$_POST["value"]."','".$_POST["flavor"]."','".$_POST["temp"]."')";

$dbquery = mysql_db_query($con, $orderSQL);

	mysqli_close();
?>
