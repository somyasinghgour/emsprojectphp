<?php include "../session.php"; ?>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  
</head>
<body>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div >
          <h4 class="text-center">Login successfull</h4><br>
          <a style="font-weight: bold; border-radius: 30px;width: 200px;" href="ragistration.php" class="btn-lg btn-info">REGISTRATION</a>
        </div>

      </div><!-- /.container-fluid -->
    </div><!---header end -->

     <!--table-->
      <div class="card shadow" style="background-color: #e6cbd2;text-align: center;">
        <div class="card-header" style="border-color: black;">
          <h3 class="card-title font-weight-bold">Admin/Employee data</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped bg-light" >
            <thead>
              <tr>
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
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i = 1;
                include "../dbcon.php";
                $data = "select * from employee";

                $result = mysqli_query($con,$data);
                //print_r ($result2)
                while ($result2 =
                mysqli_fetch_array($result)){
              ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $result2['fname']  ?></td>
                <td><?php echo $result2['lname']  ?></td>
                <td><?php echo $result2['email'] ?></td>
                <td><?php echo $result2['password'] ?></td>
                <td><?php echo $result2['age'] ?></td>
                <td><?php echo $result2['phone'] ?></td>
                <td><?php echo $result2['gender'] ?></td>
                <td><?php echo $result2['department'] ?></td>
                <td><?php echo $result2['role'] ?></td>
                <td>
                  <a class="btn btn-primary" href="d_view.php?id=<?php echo $result2['emp_id']  ?>"><i class="fa fa-eye nav-icon"></i></a>
                  <a class="btn btn-success" href="d_edit.php?id=<?php echo $result2['emp_id'] ?>"><i class="fa fa-pencil-square-o nav-icon"></i>Edit</a>
                  <a class="btn btn-danger" href="d_delete.php?id=<?php echo $result2['emp_id'] ?>"><i class="fa fa-trash nav-icon"></i></a>
                </td>
              </tr>
              <?php
                }

              ?>
            </tbody>
            <tfoot>
                    
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!--table end-->
</div><!-- content wrapper end-->

</body>
</html>

<?php include "footer.php"; ?>