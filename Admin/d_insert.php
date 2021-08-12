<?php
include "../dbcon.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$role = $_POST['role'];
$date_time = $_POST['date_time'];

$data = "insert into employee(fname,lname,email,password,age,phone,gender,department,role,date_time)value('$fname','$lname','$email',$password','$age','$phone','$gender','$department','$role','$date_time')";

mysqli_query($con,$data);

header('location:admin_dashboard.php');


?>