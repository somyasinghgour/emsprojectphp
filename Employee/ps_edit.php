<?php include "../session.php"; ?>
<?php include "../Admin/header.php"; ?>
<?php include "sidebar.php"; ?>

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
  <style>
    
  </style>
</head>
<body>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!---header end -->


<section class="content">
	<div class="container-fluid">
			<div class="row">
        <div class="col-md-3"></div>
				<div class="col-md-6">
				  <div class="card shadow"> 

            <div class="card-body"  style="background: linear-gradient(to right, lightblue,pink);">
                  <!-- form start -->
              <form method="POST" action="ps_update.php">
                	 <?php 
                    if($_SESSION['data1'] == $result2['emp_id'])
                    {

                    ?>
                	<input type="hidden" name="id" value="<?php echo $result2['emp_id'] ?>">
                	<div class="form-group">
                    <label>First name*</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo $result2['fname'] ?>">
                  </div>
                 
                  <div class="form-group">
                    <label>Password*</label>
                    <input type="text" class="form-control" name="password" value="<?php echo $result2['password'] ?>">
                  </div>

                </div>
                 <?php } ?>


                <div class="card-footer"  style="background: linear-gradient(to right, lightblue,pink);">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card-body-->
          </div>
			  </div>
        <div class="col-md-3"></div>
			</div>
	</div>
</section>

</body>
</html>

<?php include "footer.php"; ?>