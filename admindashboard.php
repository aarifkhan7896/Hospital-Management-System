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
    <div class="modal fade" id="modaladmin" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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

    <div class="admindashboard">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <?php include 'include/sidebar.php'; ?>
            </div>
            <div class="col-md-10 col-sm-9">
                <?php include 'include/header.php'; ?>
                <h1>ADMIN | DASHBOARD</h1>
                <div class="admindash d-flex flex-wrap">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-users"></i></h5>
                            <p class="card-text"><a href="managedoctors.php">Manage Doctors</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-calendar-check"></i></h5>
                            <p class="card-text"><a href="#">Appointments</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-user-injured"></i></h5>
                            <p class="card-text"><a href="#">Manage Patients</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-question-circle"></i></h5>
                            <p class="card-text"><a href="#">New Queries</a></p>
                        </div>
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