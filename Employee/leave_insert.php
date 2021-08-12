<?php 
include "../dbcon.php";

$leavefrom = $_POST['leave_from'];
$leaveto = $_POST['leave_to'];
$medleave = $_POST['medical_leave'];
$earnleave = $_POST['earning_leave'];
$casualleave = $_POST['casual_leave'];
$status = "pending";
$comment = $_POST['comment'];
$applyby = $_POST['apply_by'];

$data = "insert into apply_leave(leave_from,leave_to,medical_leave,earning_leave,casual_leave,status,comment,apply_by)value('$leavefrom','$leaveto','$medleave','$earnleave','$casualleave','$status','$comment','$applyby') ";
mysqli_query($con,$data);
header('location:emp_dashboard.php');

?>