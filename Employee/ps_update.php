<?php
include "../dbcon.php";

$emp_id = $_POST['id'];

$password = $_POST['password'];

$data = "update employee set password = '$password' where emp_id = $emp_id";

$result = mysqli_query($con,$data);

if($result){
	header('location:emp_dashboard.php');
}
else{
	alert('not updated');
}

?>