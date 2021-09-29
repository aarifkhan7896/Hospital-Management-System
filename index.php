<?php
include 'include/dbcon.php';

if(isset($_POST['submit'])){
    $subscribe = $_POST['subscribe'];

    $sql = "INSERT INTO `subscription` (`email`) VALUES ('$subscribe')";
    $result = mysqli_query($dbcon, $sql);
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

    <?php include 'include/navbar.php'; ?>

    <div class="parallax">
        <div class="overlay"></div>
        <div class="tagline">
            <h1 class="text-warning">Health & Happiness for All...</h1>
            <h1 class="text-white">World class care right where you need it...</h1>
            <h1 class="text-info">Hope, Faith, Care, Love...</h1>
        </div>
    </div>

    <div class="covid">
        <div class="row">
            <div class="col-md-4 col-sm-4" id="image3">
                <img src="img/image3.jpg" alt="image" class="image-fluid rounded-circle responsive">
            </div>
            <div class="col-md-8 col-sm-8" id="aboutcovid">
                <h1 class="display-3 text-danger fw-bold mb-5">Our COVID Safety Measures</h1>
                <div class="covidsafety">
                    <div id="hospital">
                        <h2>Hospital</h2>
                    </div>
                    <div id="doctor">
                        <h2>Doctor</h2>
                    </div>
                    <div id="home">
                        <h2>Home Services</h2>
                    </div>
                </div>
                <div class="covidparagraph">
                    <div class="hparagraph">
                        <p>We have put measures in place at our Hospitals and flu clinics stationed outside the hospital
                            to
                            maintain patient safety during the Coronavirus pandemic. In the face of extraordinary
                            challenges, healthcare has been transformed.
                            <br><br>
                            From increased infection prevention measures to COVID-19 testing for staff and patients;
                            ensuring social distancing norms are followed by attendants in OPD areas. Temperature
                            checks,
                            hand sanitization, and mandatory masks for all are few other measures taken at our hospital
                            as
                            part of COVID safety measures.
                            <br><br>
                            Life-Line Hospital is also providing community outreach during these tough times, informing
                            and
                            educating people about how to stay safe. Simple rules such as the Power of Ws. Wear masks.
                            Wash
                            your hands. Watch your distance.
                        </p>
                    </div>
                    <div class="dparagraph">
                        <p>In the fight against COVID-19, our doctors are our first and last line of defense. They walk
                            the
                            extra mile and take all the measures ensuring the safety of doctors and patients.
                            <br><br>
                            Be it inside the surgery or the OPD wards where doctors treat hundreds of patients every
                            day.
                            Our commitment to your safety is unwavering and steadfast.
                            <br><br>
                            From donning, doffing & disposing the Personal Protective Equipment (PPE) to proper
                            sanitizing
                            of medical equipment, our doctors make sure that every patient is provided with a safe
                            healing
                            environment. To ensure continuity of patient care during this pandemic, our doctors have
                            started
                            conducting Virtual OPDs to reach patients who find it difficult to visit the hospital
                            physically.
                        </p>
                    </div>
                    <div class="hsparagraph">
                        <p>Our safety measures do not extend to just the gates of our hospital but the patient's home as
                            well. Our medical and nursing services such as wound care, injection, catheter insertion,
                            catheter removal, chemo-port removal are all available in the comfort of the patients' home.
                            <br><br>
                            These services are provided under the guidance of expert nurses and attendants, who make
                            sure
                            that all the safety protocols and hygiene practices issued by WHO are followed consistently.
                            <br><br>
                            Your safety is our utmost priority. And we are transforming and staying a step ahead of the
                            challenges by reinforcing our health and safety protocols every day.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <ul>
            <li><a href="#">Lab</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Check Up</a></li>
        </ul>
    </div>


    <?php include 'include/footer.php'; ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#hospital").click(function() {
            $('.dparagraph').hide();
            $('.hsparagraph').hide();
            $(".hparagraph").show().slideDown("slow");
        });
        $("#doctor").click(function() {
            $('.hparagraph').hide();
            $('.hsparagraph').hide();
            $(".dparagraph").show().slideDown("slow");
        });
        $("#home").click(function() {
            $('.dparagraph').hide();
            $('.hparagraph').hide();
            $(".hsparagraph").show().slideDown("slow");
        });
    });
    </script>
</body>

</html>