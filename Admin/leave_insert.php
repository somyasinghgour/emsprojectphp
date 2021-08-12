<?php 
include "../dbcon.php";

$validfrom = $_POST['validfrom'];
$validto = $_POST['validto'];
$earning_leave = $_POST['earnleave'];
$medical_leave = $_POST['medleave'];
$casual_leave = $_POST['casualleave'];
$assign = $_POST['assigned_by'];
$emp_id = $_POST['emp_id'];

// print_r('emp_id');

 	foreach ($emp_id as $emp) {
	// echo $emp;
	// die;
 	$data = "insert into assign_leave(valid_from,valid_to,earning_leave,medical_leave,casual_leave,assigned_by,emp_id)value('$validfrom','$validto','$earning_leave','$medical_leave','$casual_leave','$assign','$emp')";

	mysqli_query($con,$data);
	header('location:assign_leave.php');
 
}

?>