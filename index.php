<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
    <!-- for favicon-->
    <link rel="icon" type="image" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSokJXG2SmJmyygcXI7SOJSVKY_qGpGFv-eiw&usqp=CAU">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<style>
		.font{
			color: white;
			font-weight: bold;
		}
		.h3{
			margin-top: 10px;
			font-weight: bold;
			color: white;
		}
	</style>
</head>
<body style="background: url('assets/images/accordify.png');background-size: cover;background-repeat: no-repeat; padding: 10px 350px;">
	<h2 class="text-center h3 animate__animated animate__pulse" >EMPLOYEE MANAGEMENT SYSTEM</u></h2>
	
		<div class="container text-center" style="margin-top: 150px; background-color: #2b333c73; padding: 40px 100px; ">
				
			<h2 class="text-white">LOGIN FORM</h2><br>
			<form method="POST" action="login_insert.php" onsubmit="return validation()">
				<div class="form-group">
					<label class="font" style="font-size: 20px;">Email</label>
					<input type="email" name="email" id="ema" placeholder="Enter Email" class="form-control">
					<span id="email" style="color: white;"></span>
				</div>
				<div class="form-group">
					<label class="font" style="font-size: 20px;">Password</label>
					<input type="password" name="password" id="pass" placeholder="Enter Password" class="form-control">
					<span id="password" style="color: white;"></span>
				</div>
				<br><br>
				<button type="submit" class="btn btn-warning" style="border-radius: 30px; width: 200px;">LOGIN</button>
				<br><br>
				
				<!-- <a href="ragistration1.php" class="btn btn-info" style="text-decoration: none;border-radius: 30px; width: 220px;">REGISTER YOURSELF</a> -->
			</form>	
		</div>
		<!--container end-->


	<script>
		function validation(){
			var ema = document.getElementById('ema').value;
			var pass = document.getElementById('pass').value;

			if(ema = ""){
				
			document.getElementById('email').innerHTML = "**Please fill out email field";
			return false;
			}
			if(pass == ""){

			document.getElementById('password').innerHTML = "**Please fill out password field";
			return false;
		    }
		}
	</script>
</body>
</html>

