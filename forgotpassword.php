<?php
include 'include/dbcon.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username1 = $_POST['username1'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

        if($password1==$password2){
            $sql3 = "UPDATE `admin_login` SET `password` = '$password1' WHERE `admin_login`.`username` = '$username1'";
            $result3 = mysqli_query($dbcon, $sql3);
            if($result3){
                mysqli_close($dbcon);
                header("location: adminlogin.php");
                exit();
            }else{
                echo 'Could not update password';
            }
        }
    }
?>