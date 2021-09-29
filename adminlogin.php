<?php
$failed =false;
include 'include/dbcon.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin_login` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($dbcon,$sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        while($row=mysqli_fetch_assoc($result)){
            $login=true;
                session_start();
                $_SESSION['loggedin']=true;
                header("location: admindashboard.php");
        }
    }else{
        $failed = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome | Admin Login</title>
</head>

<body>
    <div class="adminbg">
        <div class="overlay1"></div>
    </div>
    <div class="container adminlogin">
        <h1>Admin Login</h1>
        <form action="adminlogin.php" method="post">
            <div class="mb-3">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary mb-3">Login</button>
            <p><a href="#" id="mybtn">Forgot password?</a></p>
        </form>
        <?php
            if($failed){
                echo "<h3 class='text-danger fw-bold'>Invalid Credentials</h3>";
            }
        ?>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="forgotpassword.php" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="username1" id="username"
                                placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password1" id="newpassword"
                                placeholder="New Password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password2" id="confirmpassword"
                                placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#mybtn").click(function() {
            $("#modal").modal("show");
        })
    })
    </script>
</body>

</html>