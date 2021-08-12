<?php include "../session.php"; ?>
<?php include "../Admin/header.php"; ?>
<?php include "sidebar.php"; ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style>
    .co{
      color: black;
    }
  </style>
</head>
<body>
  <div class="content-wrapper">

     <!--table-->
      <div class="card shadow" style="background-color: #e3c5e3;">
              <div class="card-header">
                <h3 class="card-title font-weight-bold">View Leave</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped bg-light">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Valid_from</th>
                            <th>Valid_to</th>
                            <th>Earning_leave</th>
                            <th>Medical_leave</th>
                            <th>Casual_leave</th>
                            <th>assigned_by</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                            $i = 1;
                            include "../dbcon.php";

                            $data = "select * from assign_leave";

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
                    <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $result2['valid_from']  ?></td>
                    <td><?php echo $result2['valid_to']  ?></td>
                    <td><?php echo $result2['earning_leave']  ?></td>
                    <td><?php echo $result2['medical_leave']  ?></td>
                    <td><?php echo $result2['casual_leave']  ?></td>
                    <td><?php echo $result2['assigned_by']  ?></td>
                  </tr>
                  <?php
                    }

                  ?>
                  <?php } ?>
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
     <!--table end-->    

   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card shadow card-center bg-info">
              <div class="card-header">
                <h3 class="card-title" style="text-align: center;font-weight: bold;">Apply Leave Here</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="leave_insert.php">

                <input type="hidden" name="apply_by" value="<?php echo $_SESSION['e_id'] ?>">

                <div class="card-body" style="background-color: #e5e3e3">
                   <div class="form-group">
                    <label class="co">Leave From*</label>
                    <input type="date" name="leave_from" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="co">Leave To*</label>
                    <input type="date" name="leave_to" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="co">Medical Leave*</label>
                    <input type="text" name="medical_leave" class="form-control" placeholder="Enter Medical Leave">
                  </div>
                  <div class="form-group">
                    <label class="co">Earning Leave*</label>
                    <input type="text" name="earning_leave" class="form-control" placeholder="Enter Earning Leave">
                  </div>
                  <div class="form-group">
                    <label class="co">Casual Leave*</label>
                    <input type="text" name="casual_leave" class="form-control" placeholder="Enter Casual leave">
                  </div> 
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer" style="background-color: #e5e3e3">
                  <button type="submit" class="btn btn-primary">Submit leave</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

</div><!-- content wrapper end-->

	

</body>
</html>

<?php include "footer.php"; ?>