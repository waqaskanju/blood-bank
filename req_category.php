<?php

include('configuration.php');

$id =$_GET['id'];

$select  = "SELECT status FROM request_blood WHERE id = $id";
$select_run = mysqli_query($con,$select);
$row = mysqli_fetch_assoc($select_run);


if ($row['status']=='pending')
{
    mysqli_query ($con,"UPDATE request_blood SET status='Completed' WHERE id=$id " ) or die (mysqli_error());
    header("Location:admin_request.php");
}
else{
    mysqli_query($con,"UPDATE request_blood SET status='pending' WHERE id=$id " ) or die (mysqli_error());
    header("Location:admin_request.php");
}


?>