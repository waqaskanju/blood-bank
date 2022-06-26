<?php include('configuration.php');
session_start();

if ($_SESSION['username'] == '') {
  header("location:user_login.php");
}

error_reporting(0);
?>

<?php

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $father_name = $_POST['father_name'];
  $blood = $_POST['blood'];
  $gender = $_POST['gender'];
  $weight = $_POST['weight'];
  $dob = $_POST['dob'];
  $contact = $_POST['contact'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $last_d_date = $_POST['last_d_date'];



  $insert = "INSERT INTO `blood_donor`(`name`, `father_name`, `blood`, `gender`, `weight`, `dob`, `contact`,  `city`, `address`, `last_d_date`) 
      VALUES ('$name',' $father_name','$blood','$gender','$weight','$dob','$contact ','$city','$address','$last_d_date')";

  $insert_run  = mysqli_query($con, $insert);
  if ($insert_run) {
    echo "<div class='alert alert-success'> Donor Registered Successfully.</div>";
    header('Refresh:3');
  } else {
    echo "not submited";
  }
}

?>

<!doctype html>
<html lang="en">

<?php include('head.php') ?>

<body>
  <!-- ******************** Header Starts Here ******************* -->
  <header>
    <?php include('header.php') ?>
  </header>
  <!-- ******************** Donor Registeration Form******************* -->

  <div class="container-fluid">
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-10 mx-auto">
      <h3 class=" text-danger">
        <i class="fa fa-users"></i> Donor Registration
      </h3>
      <hr>

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="registeration_form.php" style="text-decoration:none;" class="text-danger mr-4 "><i class="fa fa-users"></i> Donor Registration</a></li>
            <li><a href="request_form.php" style="text-decoration:none;" class="text-danger mr-4 "><i class="fa fa-bed"></i> Need Blood </a></li>
            <li><a href="view_request.php" style="text-decoration:none;" class="text-danger "><i class="fa fa-tint"></i> View Blood Request</a></li>
          </ol>
        </div>
      </div>

    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto cf-container">

          <form action="" method="post">
            <div class="cf-cover">
              <div class="session-title row">
                <h2 style="color: #cf3d3c;">Registeration Form</h2>
                <p>“Never lose the opportunity for blood donation<br> as it always chose someone special.” </p>
              </div>
              <div id="form_submit_alert">

              </div>
              <div class="form-row row">
                <div class="col-md-12">
                  <label for="">First Name</label>
                  <input type="text" placeholder="Enter Your Name" name="name" class="form-control " Required>
                </div>
              </div>
              <div class="form-row row">
                <div class="col-md-12">
                  <label for="">Father Name</label>
                  <input type="text" placeholder="Enter Your Father Name" name="father_name" class="form-control" Required>
                </div>
              </div>

              <div class="form-row row">
                <div class="col-md-3">
                  <label for="">Blood Group</label>
                </div>

                <div class="col-md-7">
                  <select style="background-color: rgba(234, 233, 233, 0.78);" name="blood" class="col-md-6" Required>
                    <option selected>Select</option>
                    <option value="A+"> A+</option>
                    <option value="A-"> A-</option>
                    <option value="B+"> B+</option>
                    <option value="B-"> B-</option>
                    <option value="AB+"> AB+</option>
                    <option value="AB-"> AB-</option>
                    <option value="O+"> O+</option>
                    <option value="O-"> O-</option>
                  </select>
                </div>
              </div>

              <div class="form-row row">
                <div class="col-md-3">
                  <label for="">Gender </label>
                </div>
                <div class="col-md-7">
                  <select style="background-color: rgba(234, 233, 233, 0.78);" name="gender" class="col-md-6" Required>
                    <option selected>Select</option>
                    <option value="male">Male </option>
                    <option value="female">Female </option>
                    <option value="other">Other </option>

                  </select>
                </div>
              </div>

              <div class="form-row row">
                <div class="col-md-12">
                  <label for="">Weight</label>
                </div>
                <div class="col-md-12">
                  <input type="text" min="50" max="400" placeholder="Enter your weight in number" name="weight" class="form-control" Required>


                </div>

              </div>


              <div class="form-row row">
                <div class="col-md-3">
                  <label for="">Date of birth</label>
                </div>
                <div class="col-md-3">
                  <input style="background-color: rgba(234, 233, 233, 0.78);" type="date" name="dob" placeholder="mm/dd/yyyy" Required>
                </div>
              </div>



              <div class="form-row row">
                <div class="col-md-12">
                  <label for="">Contact</label>
                  <input type="text" placeholder="Enter your contact no" name="contact" class="form-control" Required>
                </div>
              </div>


              <div class="form-row row">
                <div class="col-md-12">
                  <label for="">City</label>
                  <input type="text" placeholder="Enter your city" name="city" class="form-control" Required>
                </div>
              </div>

              <div class="form-row row">
                <div class="col-md-12">
                  <label for="">Address</label>
                  <input type="text" placeholder="Enter your Address" name="address" class="form-control">
                </div>
              </div>

              <div class="form-row row">
                <div class="col-md-5">
                  <label for="">Last Date of Donation</label>
                </div>
                <div class="col-md-3">

                  <input style="background-color: rgba(234, 233, 233, 0.78);" type="date" name="last_d_date" placeholder="mm/dd/yyyy">
                </div>
              </div>
              <br>


              <div class="form-row row">
                <div class="col-md-12">
                  <button type="submit" name="submit" class="btn btn-danger w-100">Submit</button>
                </div>
              </div>

            </div>
          </form>
          <!-- Php for donor form -->
          <?php


          ?>

        </div>
      </div>
    </div>
  </div>
  <div class="col md-12" style="height: 200px;">
  </div>

  <!-- ******************** End ******************* -->








  <!-- ******************** footer ******************* -->

  <div style="background-color: #cf3d3c;" class="footer-ablove">
    <div class="container">
      <div class="row">
        <p>Do you wanna become a Donor?
          <button class="btn btn-default "> <a href="registeration_form.php" style="color:black;">Become a Donor</a> </button>
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