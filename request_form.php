<?php include('configuration.php');
error_reporting(0);
?>

<?php

if (isset($_POST['submit'])) {

  $p_name = $_POST['name'];
  $blood = $_POST['blood'];
  $r_blood = $_POST['r_blood'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $contact = $_POST['contact'];
  $city = $_POST['city'];
  $h_name = $_POST['h_name'];
  $h_address = $_POST['address'];
  $request_by = $_POST['request_by'];


  $insert = "INSERT INTO `request_blood`(`p_name`, `blood`, `r_blood`, `gender`, `age`,`contact`, `city`, `h_name`, `h_address`, `request_by`) 
      VALUES ('$p_name','$blood','$r_blood','$gender','$age','$contact','$city','$h_name','$h_address','$request_by')";

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

<?php include('head.php') ?>

<body>
  <!-- ******************** Header Starts Here ******************* -->

  <header>
    <?php include('header.php') ?>
  </header>

  <!-- ******************** Request Form******************* -->

  <div class="container-fluid ">
    <br>
    <br>
    <br>
    <br>

    <div class="col-md-10 mx-auto">
      <h3 class=" text-danger">
        <i class="fa fa-users"></i> Request for Blood
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

    <div class="container" style="margin-top: 2em;">
      <div class="row">
        <div class="col-md-6 mx-auto cf-container">

          <form action="" method="POST">
            <div class="cf-cover">
              <div class="session-title row">
                <h2 style="color: #cf3d3c;">Request Form</h2>
                <p>“Never lose the opportunity for blood donation<br> as it always chose someone special.” </p>
              </div>
              <form action="" method="POST">
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Patient Name</label>
                    <input type="text" required="" placeholder="Enter Patient Name" name="name" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-3">
                    <label for="">Blood Group</label>
                  </div>

                  <div class="col-md-7">
                    <select style="background-color: rgba(234, 233, 233, 0.78);" name="blood" class="col-md-6">
                      <option selected>Select</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                    </select>
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-3">
                    <label for="">Reason of Blood </label>
                  </div>
                  <div class="col-md-7">
                    <select style="background-color: rgba(234, 233, 233, 0.78); " name="r_blood" class="col-md-6">
                      <option selected>Select</option>
                      <option value="Low HB ">Low HB </option>
                      <option value="Thalassemia">Thalassemia </option>
                      <option value="Dayliss">Dayliss </option>
                      <option value="Surgery">Surgery </option>
                      <option value="Delivery">Delivery </option>
                      <option value="Accident">Accident </option>
                      <option value="Other">Other </option>

                    </select>
                  </div>
                </div>

                <div class="form-row row">
                  <div class="col-md-3">
                    <label for="">Gender </label>
                  </div>
                  <div class="col-md-7">
                    <select style="background-color: rgba(234, 233, 233, 0.78);" name="gender" class="col-md-6">
                      <option selected>Select</option>
                      <option value="Male">Male </option>
                      <option value="Female">Female </option>
                      <option value="Other">Other </option>

                    </select>
                  </div>
                </div>




                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Age </label>
                    <input type="text" placeholder="Enter your Age" name="age" class="form-control">
                  </div>
                </div>



                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Contact Number</label>
                    <input type="text" placeholder="Enter your number" name="contact" class="form-control">
                  </div>
                </div>



                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">City</label>
                    <input type="text" placeholder="Enter City Name" name="city" class="form-control">


                  </div>
                </div>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Hospital Name </label>
                    <input type="text" placeholder="Enter Hospital Name" name="h_name" class="form-control">

                  </div>

                </div>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Hospital Location </label>
                    <input type="text" placeholder="Hospital Location" name="address" class="form-control">
                  </div>
                </div>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Requested by </label>
                    <input type="text" placeholder="Name" name="request_by" class="form-control">
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
        </div>


      </div>


    </div>
  </div>

  <br>
  <br>
  <br>
  <br>
  </div>


  <!-- ******************** End ******************* -->


  <!-- ******************** Footer Starts Here ******************* -->
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