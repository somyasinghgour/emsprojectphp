<?php include "../session.php"; ?>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <a href="view_apply_leave.php" class="btn btn-info">Asked leave</a>
    </div><!---header end -->

     <!--table-->
      <div class="card shadow" style="background-color: #e6cbd2;text-align: center;">
              <div class="card-header">
                <h3 class="card-title font-weight-bold">View All Assigned Leave</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped bg-light">
                    <thead>
                        <tr>
                            <th>l_id</th>
                            <th>emp_name</th>
                            <th>valid_from</th>
                            <th>valid_to</th>
                            <th>Earning Leave</th>
                            <th>Medical Leave</th>
                            <th>Casual Leave</th>
                            <th>Assigned by</th>
                            <th>Assigned_to</th>
                            <th>Apply By</th>
                            <th>Status</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                            $i = 1;
                            include "../dbcon.php";
                            $data = "select * from assign_leave join employee on assign_leave.emp_id=employee.emp_id where role = 'employee'";

                            $result = mysqli_query($con,$data);
                            //print_r ($result2)
                            while ($result2 =
                                mysqli_fetch_array($result))
                            {
                            ?>
                    <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $result2['fname'] ?> <?php echo $result2['lname'] ?></td>
                    <td><?php echo $result2['valid_from'] ?></td>
                    <td><?php echo $result2['valid_to'] ?></td>
                    <td><?php echo $result2['earning_leave'] ?></td>
                    <td><?php echo $result2['medical_leave'] ?></td>
                    <td><?php echo $result2['casual_leave'] ?></td>
                    <td><?php echo $_SESSION['data'] ?></td>
                    <!-- echo $result2['assigned_by'] -->
                    <td><?php echo $result2['emp_id'] ?></td>
                    <td><?php echo $result2['apply_by'] ?></td>
                    <td><?php echo $result2['status'] ?></td>
                    <td><?php echo $result2['comment'] ?></td>
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


<?php include "footer.php"; ?>