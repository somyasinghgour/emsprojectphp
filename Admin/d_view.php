
<?php
include "../dbcon.php";

$id = $_GET['id'];

$data = "select * from employee where emp_id = $id";

$result = mysqli_query($con,$data);

$result2 = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body><br><br><br>
	<div class="container">
		<table class="table table-bordered">
			<tr>
				<th colspan="11" class="text-center bg-primary">Data Display</th>
			</tr>
			<tr style="background-color: #f3f3f3;">
                <th>emp_id</th>
                <th>fname</th>
                <th>lname</th>
                <th>email</th>
                <th>password</th>
                <th>age</th>
                <th>phone</th>
                <th>gender</th>
                <th>department</th>
                <th>role</th>
                <th>date_time</th>
			</tr>
			<tr style="background-color: #f3f3f3;">
			    <td><?php echo $result2['emp_id'] ?></td>
				<td><?php echo $result2['fname']  ?></td>
                <td><?php echo $result2['lname']  ?></td>
                <td><?php echo $result2['email'] ?></td>
                <td><?php echo $result2['password'] ?></td>
                <td><?php echo $result2['age'] ?></td>
                <td><?php echo $result2['phone'] ?></td>
                <td><?php echo $result2['gender'] ?></td>
                <td><?php echo $result2['department'] ?></td>
                <td><?php echo $result2['role'] ?></td>
                <td><?php echo $result2['date_time'] ?></td>
			</tr>
		</table>
	</div>

</body>
</html>