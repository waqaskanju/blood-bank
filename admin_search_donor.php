<?php
session_start();
if (!isset($_SESSION['usertype'])) {
  header("location:admin_login.php");
}

error_reporting(0);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>KPK blood Bank</title>
  <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link rel="shortcut icon" href="assets/images/fav.jpg">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

  <!-- Form registeration css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!-- ******************** Header Starts Here ******************* -->
  <?php
  include('admin_header.php');
  ?>


  <!-- ******************** Nav Starts Here ******************* -->


  <section class="container-fluid ">

    <!-- container -->
    <div class="container-fluid">

      <div class="row">
        <!-- side nav -->

        <?php include('dashboard_side_nav.php'); ?>

        <!-- side nav end -->

        <!-- right side -->
        <div class="col-md-8 ">
          <br>
          <div class="col-sm-12">
            <h3 class="text-danger"><i class="fa fa-search"></i> Search Donor Details </h3>
            <hr>
          </div>

          <br>
          <form action="" method="POST" class="row" role="form">
            <div class="col-sm-4">

              <label class="h4">Blood Group : </label>
              <select name="blood" class="form-control rounded" required>
                <option value="">Select blood group</option>
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

            <br>

            <div class="col-sm-6">
              <label class="h4">Address :</label>
              <input type="search" class="form-control rounded " placeholder="Search address" required name="address">

            </div>
            <div class="col-sm-2">

              <span> <button style="margin-top:35px;" type="submit" name="submit" class="btn btn-danger w-100 ">search</button></span>
            </div>
          </form>


          <br> <br>
          <!-- right side table -->
          <div class="col-sm-12">

            <div class="table-responsive">
              <table class="table table-striped bg-light-grey border rounded-right ">
                <thead style="background-color:#cf3d3c; color:white;">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Blood group</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact No </th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $con = mysqli_connect('localhost', 'root', '', 'blood_bank') or die('not connected');

                  if (isset($_POST['submit'])) {

                    $blood = $_POST['blood'];
                    $address = $_POST['address'];

                    $no = 1;
                    $select  = "SELECT * FROM blood_donor WHERE blood = '$blood' AND address LIKE '%$address%' ";
                    $select_run = mysqli_query($con, $select);
                  }
                  // if(mysqli_num_row($select_run) > 0){

                  while ($row = mysqli_fetch_assoc($select_run)) {

                    $name = $row['name'];
                    $blood_group = $row['blood'];
                    $address = $row['address'];
                    $contact = $row['contact'];

                  ?>

                    <tr>

                      <td><?php echo $no++; ?></td>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $blood_group; ?></td>
                      <td><?php echo $address; ?></td>
                      <td><?php echo $contact; ?></td>

                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>

        <!-- search donor end -->

      </div>
    </div>
    </div>

    </div>
    <!-- container end -->
  </section>
  <!-- section end -->

  <?php include('admin_footer.php'); ?>

</body>


</html>