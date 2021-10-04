<?php   
$edited=false;
include 'include/dbcon.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `doctors` WHERE id = $id";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($result);

if($_SERVER['REQUEST_METHOD']=="POST"){

    $idb = $_GET['id'];

    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $address = $_POST['address'];
    $fee = $_POST['fee'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $sql2 = "UPDATE `doctors` SET `doctorName` = '$name',`specialization` = '$specialization',`address` = '$address',
    `fee` = '$fee',`mobile` = '$mobile',`email` = '$email' WHERE `doctors`.`id` = $idb";
    $result2 = mysqli_query($dbcon, $sql2);
    if($result2){
        $edited = true;
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
                <h1>EDIT DOCTOR DETAILS</h1>
                <div class="bg-light border border-secondary p-3 m-4 mt-5">
                    <div class="editdoctordetails ps-4">
                        <?php
                        if($edited){
                            echo "<h2 class='text-success fw-bold'>Doctor Details updated Successfully</h2>";
                        }
                    ?>
                        <p class="text-dark fs-1 fw-bold"><?php echo $row['doctorName']; ?> |
                            <?php echo $row['specialization']; ?></p>
                        <p class="text-muted fs-2">Profile Reg. Date: <?php echo $row['creationDate']; ?></p>

                        <p class="text-muted fs-2">Profile Last Updation Date: <?php echo $row['updationDate']; ?></p>
                    </div>
                    <div class="editform bg-dark text-light border border-danger rounded py-4 px-5 m-3 fs-2">
                        <form action="editdoctor.php?id=<?php echo $id;?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $row['doctorName']; ?>" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="specialization" class="form-label">Specialization</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $row['specialization']; ?>" name="specialization">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" value="<?php echo $row['address']; ?>"
                                            name="address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fee" class="form-label">Fee</label>
                                        <input type="number" class="form-control" value="<?php echo $row['fee']; ?>"
                                            name="fee">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Mobile</label>
                                        <input type="number" class="form-control" value="<?php echo $row['mobile']; ?>"
                                            name="mobile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" value="<?php echo $row['email']; ?>"
                                            name="email">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary px-5 fs-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>