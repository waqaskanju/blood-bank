<?php
session_start();

if ($_SESSION['username'] == '') {
    header("location:user_login.php");
}

error_reporting(0);
?>
<!doctype html>
<html lang="en">

<?php include('head.php') ?>

<body>
    <!-- ******************** Header Starts Here ******************* -->


    <header>
        <?php include('header.php') ?>
    </header>


    <!-- ******************** Slider Starts Here ******************* -->


    <?php include('slider.php') ?>


    <!-- ******************** About US Starts Here ******************* -->

    <div class="about-us">
        <div class="container">
            <div class="session-title">

            </div>
            <div class="about-row row">
                <div class="col-md-8">
                    <div class="abut-detail">

                        <h4 style="font-size: 30px;" class="h4-styles">ABOUT US
                        </h4>
                        <h4 style="font-size: 20px; margin-top: 50px;" class="h4-styles">


                            <span style="color:#cf3d3c"> KPK Blood Bank</span> is developed to record and manage the blood<br> donation process.
                            This system helps record the blood donation<br> process through the web application which is less time<br> consuming and simple to use.
                            transporting blood themselves.<br>Using this system, people can
                            easily register and donate blood.<br> People who are in need of blood can also
                            request the blood<br> on this system.This system is an online website so people
                            can<br> reach it anywhere and anytime.
                        </h4>


                        <div style="margin-left: 190px; padding: 10px ; margin-top: 50px;" class="col-md-6">

                            <div>
                                <button class="btn btn-danger"><a href="about_us.php" style="color: white;">Readmore </a> </button>

                            </div>
                        </div>

                    </div>
                    <br>
                    <br>


                </div>
                <div class="col-md-4">
                    <img src="assets/images/bloodbank/87874188-doctor-hands-holding-a-red-blood.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- SHORT MSG -->

    <div class="we-are-making container-fluid">
        <div class="row">
            <div class="col-lg-5 imag-part">
                <img class="img-part1" src="assets/images/about-img.jpg" alt="">
            </div>
            <div class="col-lg-7 col-12 mobile-fixing home-cover-part">



                <h4 style="font-size: 35px;" class="h4-styles">

                    <br>
                    in <span style="color:#cf3d3c">KPK,</span> patients’ families have
                    the<br> burden and stress of managing and <br>
                    transporting blood themselves.<br><br><span style="font-weight:600; font-size: 37px;">
                        We are on a <span class="hightlight" style="background-color:#cf3d3c; padding: 5px; color: white;">mission to
                            change</span>
                        that.</span>
                </h4>

                <div style="margin-top:3%;display:inline-flex;">
                    <a href="registeration_form.php" class="btn event-click-button" style="padding:12px;border-radius:25px;font-weight:600;background-color: #cf3d3c; color: white;">
                        <i class="fas fa-tint"></i> BECOME A DONOR</a>

                </div>
            </div>

        </div>
    </div>
    </div>

    <!-- ******************** ABOUT BLOOD ******************* -->
    <?php include('about_blood.php'); ?>
    <!-- end -->



    <!-- team -->
    <?php include('our_team.php'); ?>




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
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>