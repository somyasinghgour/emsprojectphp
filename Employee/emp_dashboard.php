<?php include "../session.php"; ?>
<?php include "../Admin/header.php"; ?>
<?php include "sidebar.php"; ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
  
  <style>
    .e{
      text-align: center;
      font-weight: bold;
    }
    .main{
      font-size: 30px;
      font-weight: bold;
    }
  </style>
</head>
<body>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
          <h1 class="e">Employee Details</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container" style="padding:10px 100px">   
        <div style="background: linear-gradient(to right,skyblue,#fff)">
          <h2 class="text-center main"><?php echo $_SESSION['data'] ?> <?php echo $_SESSION['d1'] ?></h2>
          <p class="text-muted text-center" style="font-size: 20px;">Employee</p>
        </div>

          <!-- About Me Box -->
          <div style="background: linear-gradient(to right,#fff,skyblue)">
            <div class="card-header bg-info">
              <h4>About Me</h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php
              include "../dbcon.php";
              $data = "select * from employee";

              $result = mysqli_query($con,$data);
              //print_r ($result2)
              while ($result2 =
              mysqli_fetch_array($result))
              {
              ?>
                <?php 
              if($_SESSION['data1'] == $result2['emp_id'])
              {
                ?>
              <strong><i class="fas fa-book mr-1"></i>Email</strong>

              <p class="text-muted">
              <?php echo $result2['email']  ?>
              </p>

              <hr>

              <strong>Phone no.</strong>

              <p class="text-muted">
                <?php echo $result2['phone']  ?>
              </p>

              <hr>

              <strong>Age / Gender</strong>

              <p class="text-muted">
                <?php echo $result2['age']  ?> / <?php echo $result2['gender']  ?>
              </p>

              <hr>

              <strong>Department</strong>

              <p class="text-muted">
                <?php echo $result2['department']  ?>
              </p>

              <hr>

              <strong>Role</strong>

              <p class="text-muted">
              <?php echo $result2['role']  ?>
              </p>
              <br>
              <a href="setting.php" class="btn btn-warning">Settings</a>
              <?php } ?>
              <?php } ?>
            </div>
            <!-- /.card-body -->
          </div>
           
         
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</body>
</html>

<?php include "footer.php"; ?>