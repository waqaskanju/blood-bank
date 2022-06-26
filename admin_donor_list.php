<?php
include('configuration.php');
?>
<!doctype html>
<html lang="en">

<!-- head -->
<?php include('head.php')?>

<!-- body -->

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
		
       <div class="col-sm-4" >
		    	<h3 class="text-danger"><i class="fa fa-users fa-lg"></i>Donor List</h3><hr> 
            </div>
        
        <br>
  <div class="table-responsive" >
  <table class="table table-striped bg-light-grey border rounded-right "> 
   <thead style="background-color:#cf3d3c; color:white;">
    <tr>
      
              <th scope="col" >SL</th>
               <th colspan="1" >Name</th>
                <th scope="col" >blood</th>
                  <th scope="col" >Contact</th>
                   <th scope="col" >Address</th>
                   <th colspan="1" >last_D_Date</th>
                    <th class="text-center" scope="col" >Status</th>
                     <th class="text-center" colspan="2">Action</th>
    
    </tr>
   </thead>
   <tbody>

      <?php

    $no = 1;
    $select  = "SELECT * FROM Blood_donor ";
    $select_run = mysqli_query($con,$select);
    
    echo $d;
   // if(mysqli_num_row($select_run) > 0){
   
           while($row = mysqli_fetch_assoc($select_run))
           {

               $id = $row['id'];
               $name = $row['name'];
               $blood = $row['blood'];
               $Contact = $row['contact'];
               $address = $row['address'];
               $last_d_date = $row['last_d_date'];
               $created_at = $row['created_at'];
               $status = $row['status'];
               ?>
            
              
               <tr>

               <td><?php  echo $no++ ?> </td>
               <td><?php  echo $name;?> </td>
               <td><?php  echo $blood;?></td>
               <td><?php  echo $Contact;?></td>
               <td><?php  echo $address;?></td>
               <td><?php  echo $last_d_date;?></td>
               <!-- <td>//<?php // echo $created_at;?></td> -->
               <td class="col-1">
                 
                        <?php if ($row['status'] =='0'):  ?>
                          <a href="#" class="btn btn-success  btn-sm col-sm-12 "> <i class="fa fa-bed mr-2" ></i> Valid  </a>
                        <?php else: ?>
                          <a href="#" class="btn btn-danger btn-sm "><i class="fa fa-bed"></i> Invalid</a> 
                          <?php endif ?>
                       </td>

                      <td>
                        <a href="admin_Donor_details.php?id= <?php echo  $row['id']; ?>" class="btn btn-danger btn-sm ">Details</a> 
                      </td>
	
               <td><a href="admin_del_donor.php?id= <?php echo  $row['id']; ?>" class="btn btn-danger btn-sm"> Delete</a></td>
	
               
              
               
             </tr>

             <?php   } ?>
          </tbody>
        </table>
        </div>
               
			
		
		
		
		
	</div>
		
		
       
</div> 
          
<!-- dashboard end 2 side -->
   
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
