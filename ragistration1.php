<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<!--for font family-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <!-- for favicon-->
    <link rel="icon" type="image" href="Admin/upload/ems.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        .h{
            font-weight: bold;
            color:#1d3743 ;
        }
    	.img{
    		height: 60px;
    		width: 150px;
    		text-align: center;
    		border-radius: 8px;
    	}
    </style>
</head>
<body>
	<div class="Container-fluid" style="background: linear-gradient(to bottom, skyblue, #1d3743);">
		<div class="container" style="padding:50px 200px;">
			<h2 class="animate__animated animate__flash h text-center">WELCOME TO ACCORDIFY WEBSOL PVT.LTD.</h2><br>
				
			<div class="card shadow text-white" style="background: linear-gradient(to right, #1d3743,skyblue); padding: 30px;">
				<h3>Register Here</h3>
				<div class="card-body">
				    <!-- form start -->
                    <form method="POST" action="ragistration1_insert.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="Enter your First Name">
                                </div>
                            </div>
                            <!--col-6 end-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Enter your Last Name">
                                </div>
                            </div>
                            <!--col-6 end-->
                        </div>
                        <!--row end-->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Your Password">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" class="form-control" name="age" placeholder="Enter your Age">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter your Phone no.">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" name="gender" placeholder="Enter your Gender">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department</label>
                                        <select class="form-control" name="department">
                                            <option>Select Department*</option>
                                            <option>HR</option>
                                            <option>IT</option>
                                        </select>
                                </div>
                            </div>
                            <!--col-6 end-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Role</label>
                                        <select class="form-control" name="role">
                                            <option>Select Role</option>
                                            <option>Admin</option>
                                            <option>employee</option>
                                        </select>
                                </div>
                            </div>
                            <!--col-6 end-->
                        </div>
                        <!--row end-->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">SUBMIT</button>
                            <a href="index.php" class="btn btn-info float-right">LOGIN</a>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
				
		</div>
		
	</div>
</div>


</body>
</html>