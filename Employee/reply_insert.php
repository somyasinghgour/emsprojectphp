<?php 

include "../dbcon.php";

$reply = $_POST['reply_by'];
$msg = $_POST['reply_msg'];
$t_id = $_POST['t_id'];


$query = "insert into reply_task(reply_msg,reply_by,t_id) value('$msg','$reply','$t_id')";
mysqli_query($con,$query);
header('location:emp_dashboard.php');



?>