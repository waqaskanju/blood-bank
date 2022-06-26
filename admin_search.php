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

    <style>
    .b_search{
        border-radius:2px;
        background-color: rgba(234, 233, 233, 0.78);
        padding:10px;
       
    }
    </style>
</head>


<body>
     <!-- ******************** Header Starts Here ******************* -->
     <header>
        <div class="container-fluid header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo-dv">
                       
                     <img class="top-logo" src="assets/images/Logo.jpg" alt=""> 
                    </div>
                    
                    <div class="col-md-9 bonto">
                        <ul>
                            <li><div class="donta-btn">
                                
                                <strong><a href="dashboard.php"> Dashboard</a></strong>
                            </div></li>
                            

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

     <!-- ******************** Nav Starts Here ******************* -->

        <div id="menu-jk" class="headwe-nav container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 nav-div">
                       <nav class="navbar navbar-expand-lg navbar-light ">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                         

                          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                              <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="about_us.php">About Us</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link " href="faqs.php">FAQ's</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link " href="Request_form.php">Request Blood</a>
                              </li>
                              
                               <li class="nav-item">
                                <a class="nav-link " href="contact_us.php" >Contact US</a>
                              </li>
                            </ul>
                           
                           
                          </div>
                        </nav>
                                            </div>
                    <div class="col-lg-3 d-none d-lg-block social-div">
                        <ul class="ulright">
                            <li><div class="voltterr-btn">
                                
                                <strong ><a class="login1" href="admin_logout.php"> logout </a> </strong>
                            </div></li>
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</header>

   <!-- ******************** Nav Starts Here ******************* -->
  
   
<section class="container-fluid">
<br><br><br><br>
<!-- container -->
        <div class="container">

        <div class="col-sm-8" >
			<h3 class="text-danger"><i class="fa fa-search"></i> Search Donor Details </h3><hr> 
        </div>
        
        <br><br><br><br>
		<div class="col-lg-8">

    <form action="" method="POST" class=" col-lg-12 row" role="form" >
				<div class="col-md-5 text-danger ">
          	<label class="h4">Blood Group : </label>
                    <select  name="blood_group" class="form-control rounded"  required>
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
                
              
       <div class="col-lg-6 text-danger ">
        <label class="h4">Search :</label>   
          <input type="search" class="form-control rounded d-flex " placeholder="Search address" required  name="location">
             <button type="submit" name="search" class="btn btn-danger w-50">search</button>
             </div>

			</form>
		</div>

        <br><br><br><br>

		<div class="col-md-12">
			<div class="table-responsive">
			
			

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">blood group</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
      <?php
  $con = mysqli_connect('localhost','root','','kpk_blood_bank') or die('not connected');

  if(isset($_POST['search'])){

    $blood_group = $_POST['blood_group'];
    $location = $_POST['location'];

    $select  = "SELECT * FROM blood_donor WHERE blood = '$blood_group' AND addcityress = '$location'";
    $select_run = mysqli_query($con,$select);
   // if(mysqli_num_row($select_run) > 0){
   
           while($row = mysqli_fetch_assoc($select_run)){

               $id = $row['id'];
               $name = $row['name'];
               $blood_group = $row['blood'];
               $address = $row['address'];
               
           }


   ?>

    <tr>
      
      <td><?php  echo $id;?></td>
      <td><?php  echo $name;?></td>
      <td><?php  echo $blood_group;?></td>
      <td><?php  echo $address;?></td>
      
    </tr>
   
<?php


}else{

    echo "<h5>No Donor Found</h5>";
   


}
?>



  </tbody>
</table>			
			<div>
		</div>
		
		
	</div>
		
		
		</div>
	</div>
</div>
    
<br><br><br><br><br><br>
        </div>
<!-- container end -->
</section>

<!-- section end -->


<?php include('admin_footer.php'); ?>

</body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
