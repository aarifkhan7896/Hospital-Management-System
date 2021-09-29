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

    <?php include 'include/navbar.php'; ?>
    <div class="parallax-3">
        <div class="overlay-3">
            <h1 class="fw-bold text-white text-center">Contact Us</h1>
        </div>
    </div>
    <div class="container mt-5 question">
        <h1 class="text-secondary fw-bold text-center mb-3">Have any Questions?</h1>
        <div class="hline mb-5"></div>
        <div class="row mt-5 text-center">
            <div class="col-md-4">
                <i class="fas fa-phone fa-4x"></i>
                <h2 class="mt-5 text-dark fw-bold">Call Us</h2>
                <h4 class="text-secondary fw-bold mt-4">Phone: 91-11-2888 8747, 2991 8747, 2990 3201, 2905 1180</h4>
            </div>
            <div class="col-md-4">
                <i class="fas fa-map-marker-alt fa-4x"></i>
                <h2 class="mt-5 text-dark fw-bold">Address</h2>
                <h4 class="text-secondary fw-bold mt-4">Mehrauli Badarpur Road, Near Saket Metro Station, New Delhi,
                    Delhi 110062</h4>
            </div>
            <div class="col-md-4">
                <i class="fas fa-envelope fa-4x"></i>
                <h2 class="mt-5 text-dark fw-bold">Email</h2>
                <h4 class="text-secondary fw-bold mt-4">info@lifelinehospital.com</h4>
            </div>
        </div>
    </div>
    <div class="parallax-3"></div>
    <div class="container mt-5 mb-5 contactform">
        <h1 class="text-secondary fw-bold text-center mb-3 ">Interested in Discussing?</h1>
        <div class="hline mb-5"></div>
        <form action="contactus.php" method="post" class="formcontact text-center">
            <div class="mb-3">
                <label for="name" class="form-label">Name : &nbsp;&nbsp;</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :&nbsp;&nbsp;&nbsp;</label>
                <input type="text" id="email" name="email" aria-describedby="textHelp">
                <div id="textHelp" class="form-text">We'll never share your text with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject :&nbsp;</label>
                <input type="text" id="subject" name="subject">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone :&nbsp;&nbsp;&nbsp;</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="mb-3 mt-4">
                <label for="message" class="form-label">Message : </label>
                <textarea name="message" id="message" cols="57" rows="10" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php include 'include/footer.php'; ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>