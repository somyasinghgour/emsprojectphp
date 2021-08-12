<?php

include "../dbcon.php";

$id = $_GET['id'];

$data = "delete from assign_task where t_id = $id ";

mysqli_query($con,$data);

header('location:all_assign_task.php');

?>