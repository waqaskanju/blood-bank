<?php include('configuration.php');
//error_reporting(0);
?>

<?php

if (isset($_POST['submit'])) {

  $username = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  $insert = "INSERT INTO login(username, email, password) 
      VALUES ('$username','$email','$password')";

  $insert_run  = mysqli_query($con, $insert)  or trigger_error("query failed" . mysqli_error($con));

  if ($insert_run) {

    echo "<div class='alert alert-success'> Donor Registered Successfully.</div>";
    header('Refresh:3');
  } else {
    echo "not submited";
  }
}

?>

<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> KPK blood bank</title>
  <!-- login page -->
  <link rel="shortcut icon" href="assets/images/fav.jpg">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
  <link rel="stylesheet" type="text/css" href="kpkbbLogin/assets/css/style.css" />
  <!-- main page  -->
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

</head>

<body class="h-100">
  <header>

    <div id="menu-jk" class="headwe-nav container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-12 logo-dv">
            <a href="home_page.php">
              <h3 class="p-4 text-white lign text-center "> KPK BLOOD BANK</h3>
            </a>
          </div>

        </div>
      </div>
    </div>

    </div>

  </header>

  <!-- login -->


  <div class="container-fluid full-bg h-100">
    <div class="container h-100">
      <div class="row no-margin h-100">
        <div class="bg-layer d-flex col-md-4">
          <div class="login-box row">


            <form role="form" action="" method="post">
              <h3>sign up</h3>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Username" name="user" aria-describedby="basic-addon1" required>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Password" name="password" aria-describedby="basic-addon1" required>
              </div>


              <a href="user_login.php">Already have Account?</a>
              <button class="btn btn-danger" name="submit" type="submit">Sign Up</button>
            </form>


          </div>

        </div>
      </div>
    </div>


  </div>

  </div>


  <div class="copy">
    <div class="container">
      <a href="https://www.smarteyeapps.com/">2021 &copy; All Rights Reserved</a>

      <span>
        <a><i class="fab fa-facebook-f"></i></a>
        <a><i class="fab fa-instagram"></i></a>
        <a><i class="fab fa-linkedin"></i></a>
        <a><i class="fab fa-twitter"></i></a>

      </span>
    </div>

  </div>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>


</html>