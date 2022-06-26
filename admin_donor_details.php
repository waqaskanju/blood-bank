<?php
session_start();
 if(!isset($_SESSION['usertype']))
 {
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
  include ('admin_header.php');
  ?>

   <!-- ******************** Nav Starts Here ******************* -->
<section class="container-fluid">

         <!-- container -->
    <div class="container-fluid">
      <div class="dashboard-row row">


    <?php include('dashboard_side_nav.php');?>


<!-- right side -->
<div class="col-md-8 mx-auto">
<br>

       <div class="col-sm-4" >
		    	<h3 class="text-danger"><i class="fa fa-users fa-lg"></i> Donors Details </h3><hr> 
            </div>
<br>

<div class="table-responsive" >

<?php 
		
        if(isset($_POST["submit"]))
        {
            $id=$_GET['id'];
            $created_at=$_POST["created_at"];
            $status=$_POST["status"];
            if($created_at=="")
            {
                $created_at="0000-00-00";
                $status=1;
            }

        $sql="UPDATE blood_donor SET created_at='{$created_at}', status ='{$status}' WHERE id='{$id}'";
            if($con->query($sql))
            {
                
                $s= "<div class='alert alert-success fade in' >
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Success : </strong> Status Updated Success.</div>";
            }
        
        }
        
    
    if(isset($_GET["id"]))
    {
        $sql="SELECT * FROM blood_donor WHERE id=".$_GET["id"];
        $result=$con->query($sql);
        if($result->num_rows>=0)
        {
            $row=$result->fetch_assoc();
            
    ?>
 
    <div class="col-md-7 border rounded">
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <td><?php echo $row["name"];?></td>
        </tr>
        <tr>
            <th>Father</th>
            <td><?php echo $row["father_name"];?></td>
        </tr>
        <tr>
            <th>Blood type</th>
            <td><?php echo $row["blood"];?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $row["gender"];?></td>
        </tr>
        <tr>
            <th>weight</th>
            <td><?php echo $row["weight"];?></td>
        </tr>
        <tr>
            <th>Date of birth</th>
            <td><?php echo $row["dob"];?></td>
        </tr>
        <tr>
            <th> Contact</th>
            <td><?php echo $row["contact"];?></td>
        </tr>
        <tr>
            <th> City</th>
            <td><?php echo $row["city"];?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $row["address"];?></td>
        </tr>
        <tr>
            <th> Last Donation Date</th>
            <td><?php echo $row["last_d_date"];?></td>
        </tr>
        
        <tr>
            <th>Status</th>
            <td><?php 
            if($row["status"]== 0 )
            {
                echo "<b>Valid</b>";
            }
            else if($row["status"]== 1 )
            {
                echo "<b>Invalid</b>";
            }
                
                
                ?></td>
        </tr>
        <tr>
            <th>Valid Date  </th>
            <td><?php echo $row["created_at"];?></td>
        </tr>
       
    </table>
    <br>
        <br>
        <a href="admin_edit_donor.php?id= <?php echo  $row['id']; ?>"  class='btn btn-primary btn-sm align-center'>Edit</a>
       
        <br>
    </div>
    <br>
    <br>
<!-- updation of status -->
    <div class="col-md-6 mx-auto">
    <h4 class='text-primary'>Update Status</h4>
    <hr>

    <?php if(isset($s)){echo $s;}?>

    <form method='post' action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET["id"];?>">
    <div class="form-group">
            <label for="created_at">Completed Date</label>
            <input type="date" name="created_at"  id="created_at" class="form-control DATES">
        </div>
        
        <div class="form-group">
            <label for="STATUS">Donation Status</label>
            <select name="status" required  id="STATUS" class="form-control" >
                <option value="">Select Status</option>
                <option value="0">Valid</option>
                <option value="1">Invalid</option>
            </select>
        </div>
        <button type='submit' class='btn btn-danger  btn-sm' name='submit'><i class='fa fa-edit'></i> Update Now</button>
        <a href='admin_donor_list.php' class='btn btn-primary btn-sm'>Back Page</a>
    </form>
    </div>
    <br>
    <br>

    <?php
        }
    }	
    else
    {
    echo "<script>window.open('admin_donor.php','_self');</script>";
    }

    ?>
  
       </div>
    <!-- table res end  -->
		
      
               
			
    

	</div>
<!-- right side table end -->	

</div>
<!-- dashboard row end -->      
</div>
<!-- container end -->   

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
