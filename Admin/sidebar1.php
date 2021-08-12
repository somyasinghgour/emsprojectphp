<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		*{
			padding: 0;margin: 0;text-decoration: none;list-style: none;box-sizing: border-box;
		}
		nav{
			background: #1D2951;line-height: 80px;position: fixed;width: 100%;
		}
		label{
			line-height: 80px;font-size: 30px;color: white;font-weight: 200;margin-left: 50px;cursor: pointer;
		}
		nav ul{
			float: right;margin-right: 20px;
		}
		nav ul li{
			line-height: 80px;margin: 0 10px;
		}
		nav ul li a{
			color: white;font-size: 20px;padding: 6px 15px;font-weight: 600;background-color: rgb(55, 34, 246);border-radius: 3px;
		}
		nav ul li a:hover{
			background-color: rgb(49,27,214);color: white;transition: 0.5s;
		}
		.side-menu{
			position: fixed;background: #1D2951;width: 250px;height: 100%;margin-top: 80px;
		}
		.side-menu center img{
			height: 120px;width: 120px;border-radius: 50px;margin-top: 30px;border:3px solid white;
		}
		.side-menu center h2{
			color: white;
		}
		.side-menu a{display: block;line-height: 60px;transition: 0.5s}
		.side-menu a:hover{background: rgb(20,54,165);padding-left: 20px;}
		.side-menu span{
			font-size: 20px;margin-left: 10px;color: white;
		} 
		.side-menu i{
			font-size: 20px;margin-left: 20px;color: white;
		}
		nav .menu-bar{
			display: none;
			float: right;
			margin-top: 20px;
			margin-right: 20px;
		}
		#menu{
			display: none;
		}
		.side-menu .logout{
			display: none;
		}
		@media(max-width: 850px){
			.side-menu a span{
				display: none;
			}
			.side-menu center{
				display: none;
			}
			.side-menu{
				width: 100px;
			}
			.side-menu a i{
				display: block;
				line-height: 80px;
				text-align: center;
				margin-left: 0;
				font-size: 35px;
			}

		}
	</style>
</head>
<body>
	<input type="checkbox" id="menu">
	<nav>
		<label style="font-weight: bold;">Employee Management System</label>
		<ul>
			<li><a href="logout.php">Logout</a></li>
		</ul>

		<label for="menu" class="menu-bar">
			<i class="fa fa-bars"></i>
		</label>
	</nav>

	<div class="side-menu">
		<center>
			<img class="img rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSokJXG2SmJmyygcXI7SOJSVKY_qGpGFv-eiw&usqp=CAU">
			<br><br>
			<h3 style="color: white;">Admin<br>Raksha Rajput</h3>
		</center>
		<br>

		<a href="main.php"><i class="fa fa-home text-light"></i><span>Home</span></a>
		<a href="admin_dashboard.php"><i class="fa fa-home text-light"></i><span>Dashboard</span></a>
		<a href="ragistration.php"><i class="fa fa-registered text-light"></i><span>Ragistration</span></a>
		<a href=""><i class="fa fa-registered text-light"></i><span>Task</span></a>

		<a href="" class="logout"><span>Logout</span></a>
	</div>

	<div class="footer">
		
	</div>

</body>
</html>