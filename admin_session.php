<?php

session_start();
 if(!isset($_SESSION['adminpanel']))
 {
	 header("location:admin_login.php");
 }

error_reporting(0);
?>