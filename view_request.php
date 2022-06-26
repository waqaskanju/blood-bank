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

    echo "form has been submited successfully";
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


    <div class="col-md-10 mx-auto">
      <h3 class=" text-danger">
        <i class="fa fa-tint"></i> Request Blood
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





  </div>
  <div class="container mt-1 ">
    <div class="col-md-12 mx-auto">
      <br>

      <br>

      <div class="table-responsive bg-layer">
        <table class="table table-bordered bg-light-grey border rounded-2 ">
          <thead style="background-color:#cf3d3c; color:white;">
            <tr>
              <th scope="col">id</th>
              <th scope="col">p_name</th>
              <th scope="col">blood</th>
              <th scope="col">R_blood</th>
              <th scope="col">Gender</th>
              <th scope="col">Age</th>
              <th scope="col">Contact</th>
              <th scope="col">City</th>
              <th scope="col">h_name</th>
              <th scope="col">Req_By</th>

            </tr>
          </thead>
          <tbody id="table">

            <?php
            include('admin_req_del.php');

            $con = mysqli_connect('localhost', 'root', '', 'kpk_blood_bank') or die('not connected');

            $no = 1;
            $select  = "SELECT * FROM request_blood";
            $select_run = mysqli_query($con, $select);
            // if(mysqli_num_row($select_run) > 0){

            while ($row = mysqli_fetch_assoc($select_run)) {

              $id = $row['id'];
              $p_name = $row['p_name'];
              $blood = $row['blood'];
              $R_blood = $row['r_blood'];
              $Gender = $row['gender'];
              $Age = $row['age'];
              $Contact = $row['contact'];
              $City = $row['city'];
              $h_name = $row['h_name'];
              $h_address = $row['address'];
              $Req_By = $row['request_by'];
            ?>

              <tr>

                <td><?php echo $no++ ?> </td>
                <td><?php echo $p_name; ?> </td>
                <td><?php echo $blood; ?></td>
                <td><?php echo $R_blood; ?></td>
                <td><?php echo $Gender; ?></td>
                <td><?php echo $Age; ?></td>
                <td><?php echo $Contact; ?></td>
                <td><?php echo $City; ?></td>
                <td><?php echo $h_name; ?></td>
                <td><?php echo $Req_By; ?></td>



              </tr>

            <?php   } ?>
          </tbody>
        </table>
      </div>







    </div>
    <br>
    <br>
    <br>
    <br>
  </div>
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