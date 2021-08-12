<?php

include "../dbcon.php";

$id = $_GET['id'];

$data = "delete from employee where emp_id = $id ";

mysqli_query($con,$data);

header('location:admin_dashboard.php');


?>