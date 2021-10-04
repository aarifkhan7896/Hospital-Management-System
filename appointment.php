<?php include 'include/dbcon.php'; 

$sql2 = "SELECT * FROM `doctors`";
$result2 = mysqli_query($dbcon, $sql2);
$row2 = mysqli_fetch_assoc($result2);
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
    <?php include 'include/navbar.php'; ?>
    <h1 class="text-success fw-bold fs-1 py-5 ps-5">Book An Appointment</h1>
    <div class="bg-light border border-secondary p-3 m-5">
        <div class="editform bg-dark text-light border border-danger rounded py-4 px-5 m-3 fs-2">
            <form action="appointment.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="specialization" class="form-label pb-2">Specialization</label>
                            <br>
                            <select name="<?php echo $row2['id']; ?>" id="specialization" class="bg-dark text-light"
                                style="width:300px">
                                <option value="">Select</option>
                                <?php
                                    $sql2 = "SELECT * FROM `doctors`";
                                    $result2 = mysqli_query($dbcon, $sql2);
                                    while($row=mysqli_fetch_assoc($result2)){
                                        $id = $row['id'];
                                        echo "<option value='.<?php echo $id; ?>.'>".$row['specialization']."</option>
                                ";
                                }
                                ?>
                            </select>
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
                            <label for="fee" class="form-label">Appointment Date</label>
                            <input type="date" class="form-control" name="date">
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
                <button type="submit" class="btn btn-outline-primary px-5 fs-3">Book Now</button>
            </form>
        </div>
    </div>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];

        $sql3 = "INSERT INTO `appointment` (`doctorid`, `name`, `address`, `mobile`, `email`, `appointmentdate`) 
        VALUES ('$id', '$name', '$address', '$mobile', '$email', '$date')";
        $result3 = mysqli_query($dbcon, $sql3);
    }
    ?>

    <?php include 'include/footer.php'; ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>