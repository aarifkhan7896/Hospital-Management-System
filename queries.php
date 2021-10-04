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
                <h1>PATIENTS QUERY</h1>
                <div class="managedoctors">
                    <table class="table table-bordered table-hover" id="table">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th scope="col">S. No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                include 'include/dbcon.php';
                                $sql = "SELECT * FROM `contactus`";
                                $result = mysqli_query($dbcon, $sql);
                                $sno=0;
                                while($row=mysqli_fetch_assoc($result)){
                                    $sno = $sno+1;
                                    echo "<tr>
                                    <th scope='row'>". $sno ."</th>
                                    <td>".$row['name']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['subject']."</td>
                                    <td>".$row['phone']."</td>
                                    <td>".$row['message']."</td>
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