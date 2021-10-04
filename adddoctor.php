<?php   
$added=false;
include 'include/dbcon.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $address = $_POST['address'];
    $fee = $_POST['fee'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `doctors` (`doctorName`, `specialization`, `address`, `fee`, `mobile`, `email`) 
    VALUES ('$name', '$specialization', '$address', '$fee', '$mobile', '$email')";
    $result = mysqli_query($dbcon, $sql);
    if($result){
        $added = true;
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
    <title>Life-Line Hospital</title>
</head>

<body>
    <div class="admindashboard">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <?php include 'include/sidebar.php'; ?>
            </div>
            <div class="col-md-10 col-sm-9">
                <?php include 'include/header.php'; ?>
                <h1>ADD DOCTOR</h1>
                <div class="bg-light border border-secondary p-3 m-4 mt-5">
                    <div class="editform bg-dark text-light border border-danger rounded py-4 px-5 m-3 fs-2">
                        <form action="adddoctor.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="specialization" class="form-label">Specialization</label>
                                        <input type="text" class="form-control" name="specialization">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fee" class="form-label">Fee</label>
                                        <input type="number" class="form-control" name="fee">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Mobile</label>
                                        <input type="text" class="form-control" name="mobile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary px-5 fs-3">Add</button>
                        </form>
                    </div>
                </div>
                <?php
                    if($added){
                        echo "<h2 class='text-success fw-bold text-center fs-1 py-5'>Doctor Added Successfully</h2>";
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>