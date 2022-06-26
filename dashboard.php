<?php
session_start();
if (!isset($_SESSION['usertype'])) {
    header("location:admin_login.php");
}

error_reporting(0);
?>
<html lang="en">

<!-- head -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>KPK blood Bank</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">




<!-- body -->

<body>
    <!-- ******************** Header Starts Here ******************* -->
    <?php
    include('admin_header.php');
    ?>


    <!-- ******************** Nav Starts Here ******************* -->


    <section class="container-fluid ">

        <!-- container -->
        <div class="container row">


            <!-- side nav -->

            <?php

            include("configuration.php");
            $select = "select * from request_blood";
            $result = mysqli_query($con, $select);
            $request_count = mysqli_num_rows($result);

            $date = date("Y-m-d");
            $inbox  = "SELECT * FROM messages WHERE created_at LIKE '%$date%' AND status = 'not seen'";
            $inbox_result = mysqli_query($con, $inbox);
            $message_count = mysqli_num_rows($inbox_result);




            ?>

            <div class="col-md-  bg-light-grey border rounded-right" style="background-color: #f5f5f5;">

                <br>
                <div class=" ml-4 ">
                    <h3><a href="dashboard.php" class="text-danger "> Dashboard </a> </h3>
                    <hr>



                    <nav class="navbar side-nav bg-grey-light">

                        <ul class="list-none">

                            <li class="h5">
                                <a href="admin_inbox.php" class="text-danger"><i class="fa fa-envelope fa-lg ">
                                    </i> Inbox <span style=" border-radius: 8px 8px 8px;
background:#dc3545;  1px solid red; color:white; margin-left:20px; padding:3px; font-size:12px  "> <?php echo $message_count; ?> unread</span> </a>
                            </li>


                            <hr>
                            <li class="h5">
                                <a href="admin_search_donor.php" class="text-danger ml"><i class="fa fa-search mr-2  "></i>Search Donor</a>
                            </li>


                            <hr>
                            <li class="h5">
                                <a href="admin_donor_list.php" class="text-danger ml-1 "><i class="fa fa-users "></i> Donor list</a>
                            </li>


                            <hr>
                            <li class="h5">
                                <a href="admin_request.php" class="text-danger h5"><i class="fa fa-users "></i> Request Blood <span style=" border-radius: 8px 8px 8px;
background:#dc3545;  1px solid red; color:white; margin-left:15px; padding:3px; font-size:12px "> <?php echo $request_count; ?> Request</span></a>
                            </li>


                            <hr>
                            <li class="h5">
                                <a href="admin_add_donor.php" class="text-danger"><i class="fa fa-bed "></i> Add Donor</a>
                            </li>
                            <hr>
                            <!-- <li class="h5">
                    <a href="#" class="text-danger"><i class="fa fa-users fa-lg"></i>user</a>
                   </li>  -->

                        </ul>
                    </nav>
                </div>

                <br><br><br><br><br>
            </div>



        </div>
        <!-- container end -->
    </section>

    <!-- section end -->

    <?php include('admin_footer.php'); ?>

</body>


</html>