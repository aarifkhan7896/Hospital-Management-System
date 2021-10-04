<?php
        include 'include/dbcon.php';
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $history = $_POST['history'];
            
            $sql2 = "INSERT INTO `patients` (`name`, `age`, `sex`, `mobile`, `email`, `address`, `medicalHistory`)
            VALUES ('$name', '$age', '$sex', '$mobile', '$email', '$address', '$history')";
            
            $result2 = mysqli_query($dbcon, $sql2);
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



    <!-- Modal -->
    <div class="modal fade" id="addpatient" tabindex="-1" aria-labelledby="addpatientLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-2" id="addpatientLabel">Add New Patient</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body center-block p-5">
                    <form action="managepatients.php" method="post">
                        <div class="mb-2 d-flex justify-content-between align-items-center">
                            <label for="name" class="form-label fs-3">Name</label>
                            <input type="text" class="form-control text-dark border border-secondary fs-3" id="name"
                                name="name">
                        </div>
                        <div class="mb-2 d-flex justify-content-between align-items-center">
                            <label for="age" class="form-label fs-3">Age</label>
                            <input type="text" class="form-control text-dark border border-secondary fs-3" id="name"
                                name="age">
                        </div>
                        <div class="mb-2 d-flex justify-content-between align-items-center">
                            <label for="sex" class="form-label fs-3">Sex</label>
                            <input type="text" class="form-control text-dark border border-secondary fs-3" id="name"
                                name="sex">
                        </div>
                        <div class="mb-2 d-flex justify-content-between align-items-center">
                            <label for="mobile" class="form-label fs-3">Mobile</label>
                            <input type="text" class="form-control text-dark border border-secondary fs-3" id="name"
                                name="mobile">
                        </div>
                        <div class="mb-2 d-flex justify-content-between align-items-center">
                            <label for="email" class="form-label fs-3">Email</label>
                            <input type="text" class="form-control text-dark border border-secondary fs-3" id="name"
                                name="email">
                        </div>
                        <div class="mb-2 d-flex justify-content-between align-items-center">
                            <label for="address" class="form-label fs-3">Address</label>
                            <input type="text" class="form-control text-dark border border-secondary fs-3" id="name"
                                name="address">
                        </div>
                        <div class="mb-2 d-flex justify-content-between align-items-center">
                            <label for="medhis" class="form-label fs-3">Medical History</label>
                            <input type="text" class="form-control text-dark border border-secondary fs-3" id="name"
                                name="history">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary fs-3 px-5 mt-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="admindashboard">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <?php include 'include/sidebar.php'; ?>
            </div>
            <div class="col-md-10 col-sm-9">
                <?php include 'include/header.php'; ?>
                <div class="d-flex justify-content-between pe-3">
                    <h1>MANAGE PATIENTS</h1>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary fs-3" data-bs-toggle="modal"
                        data-bs-target="#addpatient">
                        Add Patient
                    </button>
                </div>

                <div class="managedoctors">
                    <table class="table table-bordered table-hover" id="table">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th scope="col">S. No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Sex</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Medical History</th>
                                <th scope="col">Creation Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                include 'include/dbcon.php';
                                $sql = "SELECT * FROM `patients`";
                                $result = mysqli_query($dbcon, $sql);
                                $sno=0;
                                while($row=mysqli_fetch_assoc($result)){
                                    $sno = $sno+1;
                                    echo "<tr>
                                    <th scope='row'>". $sno ."</th>
                                    <td>".$row['name']."</td>
                                    <td>".$row['age']."</td>
                                    <td>".$row['sex']."</td>
                                    <td>".$row['mobile']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['address']."</td>
                                    <td>".$row['medicalHistory']."</td>
                                    <td>".$row['creationDate']."</td>
                                </tr>";
                                }
                        ?>
                        </tbody>
                    </table>
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