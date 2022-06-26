 <!doctype html>

<?php
include("configuration.php");


 if(isset($_POST['submit'])) 
  {

      $name = $_POST['name'];
      $father_name= $_POST['father_name'];
      $blood = $_POST['blood'];
      $gender = $_POST['gender'];
      $weight = $_POST['weight'];
      $dob = $_POST['dob'];
      $contact = $_POST['Phone'];
      $city = $_POST['city'];
      $address = $_POST['address'];
      $last_d_date = $_POST['last_d_date'];



      $insert = "INSERT INTO `blood_donor`(`name`, `father_name`, `blood`, `gender`, `weight`, `dob`, `contact`,  `city`, `address`, `last_d_date`) 
      VALUES ('$name',' $father_name','$blood','$gender','$weight','$dob','$contact ','$city','$address','$last_d_date')";

      $insert_run  = mysqli_query($con,$insert);
      if($insert_run)
      {

      echo "form has been submited successfully";

      }
      else
      {
                   echo "not submited";

      }

  }
  ?>
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
  
   
    <section>

    <!-- container -->
        <div class="container-fluid ">
        <div class="row">

       <?php include('dashboard_side_nav.php');?>
  
        <div class="col-lg-8">
        <br><br>
        <div class="col-md-10 mx-auto  bg-light-grey border rounded-right" style="background-color: #f5f5f5;">
        <form action="" method="post">
                <div class="cf-cover">
                 <div class="session-title row">
                   <h2 style="color: #cf3d3c;">Registeration Form</h2>
                   <p>“Never lose the opportunity for blood donation<br> as it always chose someone special.” </p>
                 </div>
  
                 <div class="form-row row">
                   <div class="col-md-12">
                     <label for="">First Name</label>
                     <input type="text"  placeholder="Enter Your Name" name="name" class="form-control " Required>
                   </div>
                   </div>
                   <div class="form-row row">
                   <div class="col-md-12">
                     <label for="">Father Name</label>
                     <input type="text" placeholder="Enter Your Father Name" name="father_name" class="form-control" Required>
                   </div>
                 </div>
  
                 <div class="form-row row">
                   <div class="col-md-3">
                     <label for="">Blood Group</label>
                     </div>
                     
                     <div class="col-md-7">
                      <select style="background-color: rgba(234, 233, 233, 0.78);"  name="blood" class="col-md-6" Required>
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
                      <select style="background-color: rgba(234, 233, 233, 0.78);" name="gender" class="col-md-6" Required>
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
                          <input type="text" min="50" max="400" placeholder="Enter your weight in number" name="weight" class="form-control" Required>
                        
                       
                      </div>
  
                 </div>
                  
                 
                 <div class="form-row row">
                  <div class="col-md-3">
                    <label for="">Date of birth</label>
                    </div>
                    <div class="col-md-3">
                    <input style="background-color: rgba(234, 233, 233, 0.78);"  type="date" name="dob" placeholder="mm/dd/yyyy" Required>
                  </div>
                  </div>
             
  
  
                 <div class="form-row row">
                   <div class="col-md-12">
                     <label for="">Contact</label>
                     <input type="text" placeholder="Enter your city" name="Phone" class="form-control" Required>
                   </div>
                 </div>
  
                
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">City</label>
                    <input type="text" placeholder="Enter your city" name="city" class="form-control" Required>
                  </div>
                </div>
  
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Address</label>
                    <input type="text" placeholder="Enter your Address" name="address" class="form-control">
                  </div>
                </div>
                
                <div class="form-row row">
                  <div class="col-md-5">
                    <label for="">Last Date of Donation</label>
                    </div>
                    <div class="col-md-3">
                       
                  <input style="background-color: rgba(234, 233, 233, 0.78);"  type="date" name="last_d_date" placeholder="mm/dd/yyyy"> 
                  </div>
                  </div>
               <br>
               
                 
                 <div class="form-row row">
                   <div class="col-md-12">
                     <button type="submit" name="submit" class="btn btn-danger w-100">Submit</button>
                   </div>
                   <br><br><br><br>
                 </div>
  
               </div>
             </form>

             <!-- Php for donor form -->
        </div>
        <br><br><br>
</div>

        </div>
         <!-- container end -->
</section>

<!-- section end -->

<?php include('admin_footer.php'); ?>

</body>

    
</html>
