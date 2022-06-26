<?php 
   include("configuration.php");

   if(isset($_POST['submit'])){
   
       $username = ($_POST['username']);
       $password = ($_POST['password']);
   
       
   
           $select = "select * from login WHERE username  = '$username' AND password = '$password' ";

           $result = mysqli_query($con,$select) or mysqli_error($con);
           $row = mysqli_fetch_array($result);
           


            if( mysqli_num_rows($result) == 1   ){
               session_start();
               $_SESSION['username'] = $_POST['username'];

              header('Location: index.php');
            }
           
           else
           {
               echo "Invalid username and password";
           }
   
       
   
   }
  
   ?>