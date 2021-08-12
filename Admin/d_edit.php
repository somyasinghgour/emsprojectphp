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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body><br><br><br>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				   <!-- form start -->
              <form method="POST" action="d_update.php">
                <div class="card-body" style="background-color: #e5e3e3">
                	<input type="hidden" name="id" value="<?php echo $result2['emp_id'] ?>">
                  <div class="form-group">
                    <label >First Name*</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo $result2['fname'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Last Name*</label>
                    <input type="text" class="form-control" name="lname" value="<?php echo $result2['lname'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Password*</label>
                    <input type="text" class="form-control" name="password" value="<?php echo $result2['password'] ?>">
                  </div>
                  <div class="form-group">
                    <label >Email*</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $result2['email'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Age*</label>
                    <input type="text" class="form-control" name="age" value="<?php echo $result2['age'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Phone*</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $result2['phone'] ?>" >
                  </div>
                  <div class="form-group">
                    <label>Gender*</label>
                    <input type="text" class="form-control" name="gender" value="<?php echo $result2['gender'] ?>">
                  </div>
                  <div class="form-group">
					          <label>Department*</label>
					            <select class="form-control" name="Department">
					              <option>Select Department*</option>
					              <option>HR</option>
					              <option>IT</option>
					            </select>
			            </div>
			            <div class="form-group">
				            <label>Role*</label>
					            <select class="form-control" name="role">
					              <option>Select Role</option>
					      	      <option>Admin</option>
			           	      <option>Employee</option>
			                </select>
			            </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
			    </div>
			</div>
		</div>
	</div>

</body>
</html>