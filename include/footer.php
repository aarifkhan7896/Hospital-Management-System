<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Navbar</title>
</head>

<body>

    <div class="container-fluid">
        <div class="subscribe">
            <h1>Subscribe Now! It's Free.</h1>
            <span>Never miss an Update.</span>

            <form action="index.php" method="post">
                <div class="mt-3">
                    <input type="text" name="subscribe" id="subscribe" placeholder="Your Email"> &nbsp;
                    <button type="submit" name="submit" id="submit"
                        class="btn btn-outline-success mt-5">Subscribe</button>
                </div>

            </form>
        </div>
        <hr class="mt-5">
        <div class="row mt-5">
            <div class="col-sm-3">
                <div class="icons">
                    <h1 class="mb-5">Connect With Us</h1>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="otherlinks">
                    <h1 class="mb-5">Other Links</h1>
                    <ul>
                        <li><a href="#">Career</a></li>
                        <li><a href="aboutus.php">About</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="otherlinks">
                    <h1 class="mb-5">Important Links</h1>
                    <ul>
                        <li><a href="#">Find A Doctor</a></li>
                        <li><a href="#">Ambulance</a></li>
                        <li><a href="appointment.php">Book an Appointment</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="otherlinks">
                    <h1 class="mb-5">Address</h1>
                    <p>Mehrauli Badarpur Road, Near Saket Metro Station, New Delhi, Delhi 110062</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Designed & Built by Aarif Khan</p>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>