<?php
include 'include/dbcon.php';
$id = $_GET['id'];

$sql ="DELETE FROM `doctors` WHERE `doctors`.`id` = $id";
$result = mysqli_query($dbcon,$sql);
mysqli_close($dbcon);
header("location: managedoctors.php");
exit();
?>