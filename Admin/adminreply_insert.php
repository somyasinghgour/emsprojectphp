<?php 

include "../dbcon.php";

$reply = $_POST['reply_by'];
$admin_msg = $_POST['admin_msg'];
$t_id = $_POST['t_id'];


$query = "insert into admin_reply(admin_msg,reply_by,t_id) value('$admin_msg','$reply','$t_id')";
mysqli_query($con,$query);

header('location:all_assign_task.php');



?>