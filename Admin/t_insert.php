<?php
include "Admin/dbcon.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];


$data = "insert into employee(fname,lname)value('$fname','$lname')";

$result = mysqli_query($con,$data);

$total = mysqli_num_rows($result);

$user = mysqli_fetch_array($result);

if($total == 1){
	$_SESSION['data']= $user['fname'];
	header('location:task.php');
}else{
	header('location:index.php');
}

?>