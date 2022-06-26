<?php

include ('configuration.php');

// sql to delete a record
$id=$_GET["id"];
$sql = "DELETE FROM messages WHERE id=$id";
$result = mysqli_query($con,$sql);

if ($con->query($sql) === TRUE) 
{
	header("location:admin_inbox.php");
} 

$con->close();
?>
