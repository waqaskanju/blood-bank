<?php
$con = mysqli_connect('localhost', 'root', '', 'blood_bank') or die('not connected');
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
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">


</head>


<body>
  <!-- ******************** Header Starts Here ******************* -->
  <?php
  include('admin_header.php');
  ?>

  <!-- ******************** Nav Starts Here ******************* -->
  <section class="container-fluid">

    <!-- container -->

    <div class="dashboard-row row bg-light">


      <?php include('dashboard_side_nav.php'); ?>


      <!-- right side -->
      <div class="col-md-8">
        <br>
        <div class="col-sm-4">
          <h3 class="text-danger"><i class="fa fa-users fa-lg"></i> Request List </h3>
          <hr>
        </div>
        <br>

        <div class="table-responsive">

          <table class="table table-hover table-bordered">
            <thead class="bg-danger text-white">
              <tr>
                <th scope="col">SL</th>
                <th colspan="1">P_Name</th>
                <th scope="col">blood</th>
                <th colspan="1">B_Reason</th>
                <th scope="col">Contact</th>
                <th scope="col">Date</th>

                <th class="text-center" scope="col">Status</th>
                <th class="text-center" colspan="2">Action</th>

              </tr>
            </thead>
            <tbody>


              <?php




              $no = 1;
              $select  = "SELECT * FROM request_blood";
              $select_run = mysqli_query($con, $select);
              // if(mysqli_num_row($select_run) > 0){

              while ($row = mysqli_fetch_assoc($select_run)) {

                $id = $row['id'];
                $p_name = $row['p_name'];
                $blood = $row['blood'];
                $R_blood = $row['r_blood'];
                $Contact = $row['contact'];
                $created_at = $row['created_at'];
                $status = $row['status'];
              ?>

                <tr>

                  <td><?php echo $no++; ?> </td>
                  <td colspan="1"><?php echo $p_name; ?> </td>
                  <td><?php echo $blood; ?></td>
                  <td colspan="1"><?php echo $R_blood; ?></td>
                  <td><?php echo $Contact; ?></td>
                  <td><?php echo $created_at; ?></td>


                  <td class="col-1">

                    <?php if ($row['status'] == '0') :  ?>
                      <a href="#" class="btn btn-danger btn-sm col-sm-12 "> <i class="fa fa-bed mr-2"></i> Pending </a>
                    <?php else : ?>
                      <a href="#" class="btn btn-success btn-sm "><i class="fa fa-bed"></i> Completed</a>
                    <?php endif ?>
                  </td>

                  <td>
                    <a href="admin_patient_details.php?id= <?php echo  $row['id']; ?>" class="btn btn-danger btn-sm ">Details</a>
                  </td>
                  <td>
                    <a href="admin_req_del.php?id= <?php echo  $row['id']; ?>" class="btn btn-danger btn-sm ">Delete </a>

                  </td>
                </tr>
              <?php   } ?>
            </tbody>

          </table>

        </div>





      </div>

    </div>
    <!-- right side table end -->




    <!-- container end -->
    <br>
    <br>

  </section>
  <!-- section end -->

  <?php include('admin_footer.php'); ?>

</body>

</script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>