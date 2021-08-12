<?php include "../session.php"; ?>
<?php include "../Admin/header.php"; ?>
<?php include "sidebar.php"; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
    </div><!---header end -->


<!--table-->
      <div class="card shadow" style="background-color: #e6cbd2;text-align: center;">
              <div class="card-header">
                <h3 class="card-title font-weight-bold">Leave Status</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped bg-light">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Leave From</th>
                            <th>Leave to</th>
                            <th>Earning Leave</th>
                            <th>Medical Leave</th>
                            <th>Casual Leave</th>
                            <th>Status</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                            $i = 1;
                            include "../dbcon.php";
                            $data = "select * from apply_leave join employee on apply_leave.apply_by=employee.emp_id";

                            $result = mysqli_query($con,$data);
                            //print_r ($result2)
                            while ($result2 =
                                mysqli_fetch_array($result))
                            {
                            ?>
                            
                    <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $result2['fname'] ?> <?php echo $result2['lname'] ?></td>
                    <td><?php echo $result2['leave_from'] ?></td>
                    <td><?php echo $result2['leave_to'] ?></td>
                    <td><?php echo $result2['earning_leave'] ?></td>
                    <td><?php echo $result2['medical_leave'] ?></td>
                    <td><?php echo $result2['casual_leave'] ?></td>
                    <td><?php echo $result2['status'] ?></td>
                    <td>
                      <form action="applyleave_update.php" method="post">
                        <textarea name="comment" class="form-control"></textarea>
                    </td> 
                     
                    <input type="hidden" name="apply_by" value="<?php echo$result2['apply_by']?>">
                    <td>
                      <button type="submit" class="btn btn-danger" name="approved">Approved</button>
                      <button type="submit" class="btn btn-primary" name="rejected">Rejected</button>
                    </td>
                    
                      </form>
                    
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
