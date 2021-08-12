<?php
include "../dbcon.php";

$emp_id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$role = $_POST['role'];


$data = "update employee set fname = '$fname',lname = '$lname',email = '$email',password = '$password',age = '$age',phone ='$phone',gender = '$gender',department = '$department',role = '$role' where emp_id = $emp_id";

$result = mysqli_query($con,$data);

if($result){
	header('location:admin_dashboard.php');
}
else{
	alert('not updated');
}

?>