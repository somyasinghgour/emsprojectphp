<?php 
session_start();
include "dbcon.php";

$email = $_POST['email'];
$password = $_POST['password'];

$data = "select * from employee where email = '$email' && password = '$password' ";

$result = mysqli_query($con,$data);

$total = mysqli_num_rows($result);

$user = mysqli_fetch_array($result);

 if($total == 1){
    $role = $user['role'];
    if($role=='Admin'){
      $_SESSION['message']="Login Successfull!!";
      $_SESSION['data']= $user['fname'];
      $_SESSION['d1']= $user['lname'];
      $_SESSION['admin_id']= $user['emp_id'];
  	  header('location:Admin/admin_dashboard.php');
    }
    elseif ($role=='employee') {
      $_SESSION['message']="Login Successfull!!";
      $_SESSION['data']= $user['fname'];
      $_SESSION['d1']= $user['lname'];
      $_SESSION['data1']= $user['emp_id'];
      $_SESSION['e_id'] = $user['emp_id'];
      header('location:Employee/emp_dashboard.php');
    }
    else{
      $_SESSION['error'] = "Role not defined!!";
      header('location:index.php');
    }
  }
  else{
  	$_SESSION['message']="Login Failed!!";
  	header('location:index.php');

  }

?>