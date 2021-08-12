<?php  include "../session.php"; ?>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-weight: bold;"><u>Assign Leave</u></h1>
    </section>
    <br>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="all_assign_leave.php" class="btn btn-warning" style="font-weight: bold;" >All Assigned Leave</a>
            <div class="card" style="margin-top: 20px;">
              <div class="card-header" style="background-color: #d3e3e1;">
                <h3 class="card-title" style="font-weight: bold;">Employee List</h3>
                
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0" style="background-color: #d3e3e1;">
                <form method="POST" action="leave_insert.php">
                            <?php
                            $i = 1;
                            include "../dbcon.php";
                            $data = "select * from employee where role = 'employee'";

                            $result = mysqli_query($con,$data);
                            //print_r ($data);

                            while ($result2 =
                                mysqli_fetch_array($result))
                            {
                            ?>
                <div class="text-center form-group">
                  <input type="hidden"  name="assigned_by" value="<?php echo $_SESSION['admin_id'] ?>">
                  <input type="checkbox" name="emp_id[]" value="<?php echo $result2['emp_id'] ?>"  class="float-left">
                  <label><?php echo $result2['fname'] ?> <?php  echo $result2['lname']?></label>
                </div>
                <?php
                } 
                ?>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-header" style="background-color: #d3e3e1;">
                
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="background-color: #d3e3e1;">
                
                  <div class="form-group">
                    <label>Valid From</label>
                    <input type="date" name="validfrom" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Valid To</label>
                    <input type="date" name="validto" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Earning Leave</label>
                    <input type="text" name="earnleave" class="form-control" placeholder="Earning Leave">
                  </div>
                  <div class="form-group">
                    <label>Medical Leave</label>
                    <input type="text" name="medleave" class="form-control" placeholder="Medical Leave">
                  </div>
                  <div class="form-group">
                    <label>Casual Leave</label>
                    <input type="text" name="casualleave" class="form-control" placeholder="Casual leave">
                  </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div>
                  <center>
                  <button type="submit" class="btn btn-primary">Assign Leave</button>
                </center>
                </div>
              </div>
              <!-- /.card-footer -->
            </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php"; ?>