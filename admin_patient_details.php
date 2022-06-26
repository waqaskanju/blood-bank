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
		    	<h3 class="text-danger"><i class="fa fa-users fa-lg"></i> Patient Details </h3><hr> 
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

        $sql="UPDATE request_blood SET created_at='{$created_at}', status ='{$status}' WHERE id='{$id}'";
            if($con->query($sql))
            {
                
                $s= "<div class='alert alert-success fade in' >
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Success : </strong> Status Updated Success.</div>";
            }
        
        }
        
    
    if(isset($_GET["id"]))
    {
        $sql="SELECT * FROM request_blood WHERE id=".$_GET["id"];
        $result=$con->query($sql);
        if($result->num_rows>0)
        {
            $row=$result->fetch_assoc();
            
    ?>

    <div class="col-md-7 border rounded">
    <table class="table table-hover">
        <tr>
            <th>Patient name</th>
            <td><?php echo $row["p_name"];?></td>
        </tr>
        <tr>
            <th>Blood</th>
            <td><?php echo $row["blood"];?></td>
        </tr>
        <tr>
            <th>Blood reason</th>
            <td><?php echo $row["r_blood"];?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $row["gender"];?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?php echo $row["age"];?></td>
        </tr>
        <tr>
            <th>contact</th>
            <td><?php echo $row["contact"];?></td>
        </tr>
        <tr>
            <th> Cty</th>
            <td><?php echo $row["city"];?></td>
        </tr>
        <tr>
            <th>Hospital name</th>
            <td><?php echo $row["h_name"];?></td>
        </tr>
        <tr>
            <th>Hospital address</th>
            <td><?php echo $row["h_address"];?></td>
        </tr>
        <tr>
            <th>Request by</th>
            <td><?php echo $row["request_by"];?></td>
        </tr>
        
        <tr>
            <th>Status</th>
            <td><?php 
            if($row["status"]== 0 )
            {
                echo "<b>Pending</b>";
            }
            else if($row["status"]== 1 )
            {
                echo "<b>Completed</b>";
            }
                
                
                ?></td>
        </tr>
        <tr>
            <th>Completed Date</th>
            <td><?php echo $row["created_at"];?></td>
        </tr>
    </table>
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
            <label for="STATUS">Status</label>
            <select name="status" required  id="STATUS" class="form-control">
                <option value="">Select Status</option>
                <option value="0">Pending</option>
                <option value="1">Completed</option>
            </select>
        </div>
        <button type='submit' class='btn btn-danger  btn-sm' name='submit'><i class='fa fa-edit'></i> Update Now</button>
        <a href='admin_request.php' class='btn btn-primary btn-sm'>Back Page</a>
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
