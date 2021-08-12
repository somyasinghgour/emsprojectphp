<?php include "../session.php"; ?>
<?php include "../Admin/header.php"; ?>
<?php include "sidebar.php"; ?>


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
              <li class="breadcrumb-item active">Leave Status</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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
                            $data = "select * from apply_leave t1 join employee e2 on t1.apply_by=e2.emp_id";

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
                    <td><?php echo $result2['fname'] ?> <?php echo $result2['lname'] ?></td>
                    <td><?php echo $result2['leave_from'] ?></td>
                    <td><?php echo $result2['leave_to'] ?></td>
                    <td><?php echo $result2['earning_leave'] ?></td>
                    <td><?php echo $result2['medical_leave'] ?></td>
                    <td><?php echo $result2['casual_leave'] ?></td>
                    <td><?php echo $result2['status'] ?></td>
                    <td><?php echo $result2['comment'] ?></td>
                  </tr>
                  <?php
                    }

                  ?>
                  <?php } ?>
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
