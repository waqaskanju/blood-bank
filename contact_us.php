<?php include('configuration.php') ?>

<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    $insert = "INSERT INTO `messages`( `name`, `email`, `contact`, `message`)
                    VALUES ('$name','$email','$contact','$message')";

    $insert_run  = mysqli_query($con, $insert);
    if ($insert_run) {
        echo "<div class='alert alert-success'> Request posted Successfully.</div>";
        header('Refresh:3');
    } else {
        echo "not submited";
    }
}

?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KpK Blood Bank</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>

    <!-- ******************** Header Starts Here ******************* -->
    <header>
        <?php include('header.php') ?>
    </header>


    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Contact US</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact US</li>
                </ul>
            </div>
        </div>
    </div>


    <!--  ************************* Contact Us Starts Here ************************** -->


    <br><br>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-7">
                    <h2 style="color: #cf3d3c;">Contact Form</h2> <br>
                    <form action="" method="post">
                        <div class="row cont-row">


                            <div class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"></div>
                        </div>

                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Email </label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email" class="form-control input-sm"></div>
                        </div>

                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" name="contact" placeholder="Enter Mobile Number" class="form-control input-sm"></div>
                        </div>

                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                            <div class="col-sm-8">
                                <textarea rows="5" name="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                            </div>
                        </div>

                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button type="submit" name="submit" class="btn btn-danger btn-lg">Send Message</button>
                            </div>
                        </div>
                </div>
                </form>
                <br>

                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">

                        <h2 style="margin-top:10px; color: #cf3d3c;">Address</h2>

                        kanju township <br>
                        street 23, Near SDDA office<br>
                        <br>
                        Phone:+92 3058784007<br>
                        Email:kpkbloodbank@gmail.com<br>
                        Website:www.kpkBloodBank.com<br>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>



    <!-- ******************** footer ******************* -->

    <div style="background-color: #cf3d3c;" class="footer-ablove">
        <div class="container">
            <div class="row">
                <p>Do you wanna become a Donor?
                    <button class="btn btn-default "> <a href="registeration_form.php">Become a Donor</a> </button>
                </p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>
    <!-- footer end -->

    <!-- copy -->
    <?php include('copy.php') ?>
    <!-- copy end -->



</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src ="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>