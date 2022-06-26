<?php
session_start();
if (!isset($_SESSION['usertype'])) {
    header("location:admin_login.php");
}

error_reporting(0);
?>
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

<div class="col-md-3  bg-light-grey border rounded-right" style="background-color: #f5f5f5;">

    <br>
    <div>
        <h3><a href="dashboard.php" class="text-danger ml-2 "> Dashboard </a> </h3>
        <hr>



        <nav class="navbar side-nav bg-grey-light">

            <ul class="list-none">

                <li class="h5">
                    <a href="admin_inbox.php" class="text-danger"><i class="fa fa-envelope fa-lg ">
                        </i> Inbox <span style=" border-radius: 8px 8px 8px;background:#dc3545;  1px solid red;
      color:white; margin-left:20px; padding:3px; font-size:12px">
                            <?php echo $message_count; ?> unread</span> </a>
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
               <!--  <li class="h5">
                    <a href="email/email.php" class="text-danger"><i class="fa fa-users fa-lg"></i> Email</a>
                </li> -->
            </ul>
        </nav>
    </div>

    <br><br><br><br><br>
</div>


<!-- left side nav end -->