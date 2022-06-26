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

<div class="col-sm-8">
<br>
<?php include('configuration.php');?>
       <div class="col-sm-4" >
		    	<h3 class="text-danger"><i class="fa fa-users fa-lg"></i>Inbox </h3><hr> 
            </div>
        
        <br>
  <div class="table-responsive" >
  <table class="table table-striped bg-light-grey border rounded-right "> 
   <thead style="background-color:#cf3d3c; color:white;">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">message</th>
      <th scope="col">action</th>
      
    </tr>
   </thead>
   <tbody>

      <?php

     

    $date=date("Y-m-d H:i:s");
    $no = 1;
    $select  = "SELECT * FROM messages ";
    $select_run = mysqli_query($con,$select);
   // if(mysqli_num_row($select_run) > 0){
   
           while($row = mysqli_fetch_assoc($select_run))
           {

            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $contact = $row['contact'];
            $message = $row['message'];
            
              
               ?>
              
               <tr>

               <td><?php  echo $no++ ?> </td>
               <td><?php  echo $name;?> </td>
               <td><?php  echo $email;?></td>
               <td><?php  echo $contact;?></td>
               <td><?php  echo $message;?></td>
               
               <td><a href="admin_del_msg.php?id= <?php echo  $row['id']; ?>" class="btn btn-danger "> Delete</a></td>
	
               
              

               
             </tr>

             <?php   } ?>
          </tbody>
        </table>
        </div>
               
			
		
		
		
		
	</div>
		
		
       
</div> 

<!-- dashboard end 2 side -->
<br><br><br><br><br>    
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
