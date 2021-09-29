<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$dbcon = mysqli_connect($servername,$username,$password,$database);
if(!$dbcon){
    echo "Unable to connect";
}
?>