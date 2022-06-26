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
		    	<h3 class="text-danger"><i class="fa fa-users fa-lg"></i> Edit Donors </h3><hr> 
            </div>
<br>

<div class="table-responsive" >


<?php
// Using database connection file here
include ('configuration.php'); 
session_start();
 // get id through query string
$id = $_GET['id'];

// select query
$select  = "SELECT * FROM Blood_donor WHERE id ='$id'";
$result= mysqli_query($con,$select);
$row = mysqli_fetch_array($result ); // fetch data

	
if(isset($_POST['update'])) // when click on Update button
{
    
               $id = $row['id'];
               $name = $row['name'];
               $father_name = $row['father_name'];
               $blood = $row['blood'];
               $Gender = $row['gender'];
               $weight = $row['weight'];
               $dob = $row['dob'];
               $Contact = $row['contact'];
               $City = $row['city'];
               $address = $row['address'];
               $last_d_date = $row['last_d_date'];
	
    $edit = "UPDATE blood_donor SET name='$name',father_name='$father_name',blood='$blood',
     gender='$Gender',weight='$weight',dob='$dob',contact='$Contact',city='$City',address='$address',last_d_date='$last_d_date', where id='$id'";
	
    $querry_run  = mysqli_query($con,$edit);

    if($con->query($edit) === TRUE)
    {
        mysqli_close($con); // Close connection
        header("location:admin_donor_details.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo 'successed';
    }  

      	
}
?>



<div class="container">
          <div class="row">
            <div class="col-md-6 mx-auto cf-container">
              
              <form action="" method="post">
                <div class="cf-cover">
                 <div class="session-title row">
                   <!-- <h2 style="color: #cf3d3c;">Registeration Form</h2> -->
                   <p>“Never lose the opportunity for blood donation<br> as it always chose someone special.” </p>
                 </div>
            <div id="form_submit_alert">

            </div>
                 <div class="form-row row">
                   <div class="col-md-12">
                     <label for="">First Name</label>
                     <input type="text" value="<?php echo $row['name'] ?>" placeholder="Enter Your Name" name="name" class="form-control " Required>
                   </div>
                   </div>
                   <div class="form-row row">
                   <div class="col-md-12">
                     <label for="">Father Name</label>
                     <input type="text" value="<?php echo $row['father_name'] ?>" placeholder="Enter Your Father Name" name="father_name" class="form-control" Required>
                   </div>
                 </div>
  
                 <div class="form-row row">
                   <div class="col-md-3">
                     <label for="">Blood Group</label>
                     </div>
                     
                     <div class="col-md-7">
                      <select style="background-color: rgba(234, 233, 233, 0.78);"  value="<?php echo $row['blood'] ?>"  name="blood" class="col-md-6" Required>
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
                      <select style="background-color: rgba(234, 233, 233, 0.78);"  value="<?php echo $row['gender'] ?>" name="gender" class="col-md-6" Required>
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
                          <input type="text" min="50" max="400"  value="<?php echo $row['weight'] ?>" placeholder="Enter your weight in number" name="weight" class="form-control" Required>
                        
                       
                      </div>
  
                 </div>
                  
                 
                 <div class="form-row row">
                  <div class="col-md-3">
                    <label for="">Date of birth</label>
                    </div>
                    <div class="col-md-3">
                    <input style="background-color: rgba(234, 233, 233, 0.78);"  type="date" name="dob"  value="<?php echo $row['dob'] ?>" placeholder="mm/dd/yyyy" Required>
                  </div>
                  </div>
             
  
  
                 <div class="form-row row">
                   <div class="col-md-12">
                     <label for="">Contact</label>
                     <input type="text"  value="<?php echo $row['contact'] ?>" placeholder="Enter your city" name="contact" class="form-control" Required>
                   </div>
                 </div>
  
                
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">City</label>
                    <input type="text"  value="<?php echo $row['city'] ?>" placeholder="Enter your city" name="city" class="form-control" Required>
                  </div>
                </div>
  
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Address</label>
                    <input type="text"  value="<?php echo $row['address'] ?>" placeholder="Enter your Address" name="address" class="form-control">
                  </div>
                </div>
                
                <div class="form-row row">
                  <div class="col-md-5">
                    <label for="">Last Date of Donation</label>
                    </div>
                    <div class="col-md-3">
                       
                  <input style="background-color: rgba(234, 233, 233, 0.78);"  type="date" name="last_d_date"  value="<?php echo $row['last_d_date'] ?>" placeholder="mm/dd/yyyy"> 
                  </div>
                  </div>
               <br>
               
                 
                 <div class="form-row row">
                   <div class="col-md-12">
                     <button type="submit" name="update" value="Update" class="btn btn-danger w-100">Submit</button>
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
  
    <!-- table res end  -->
		
      
               
			
    

	</div>
<!-- right side table end -->	
<br>
<br>
<br>
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




