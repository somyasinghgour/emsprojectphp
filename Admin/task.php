<?php  include "../session.php"; ?>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <h1 style="font-weight: bold;"><u>ASSIGN TASK HERE</u></h1>
       
      </div><!-- /.container-fluid -->
    </section>
    <br>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="all_assign_task.php" class="btn btn-warning" style="font-weight: bold;" >All Assigned Task</a>
            <div class="card" style="margin-top: 20px;">
              <div class="card-header" style="background-color: #ebebeb;">
                <h3 class="card-title" style="font-weight: bold;">Employee List</h3>
                
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <br>
              <div class="card-body p-0" style="background-color: #ebebeb;">
                <form method="POST" action="task_insert.php">
                            <?php
                            $i = 1;
                            include "../dbcon.php";
                            $data = "select * from employee where role = 'employee'";

                            $result = mysqli_query($con,$data);
                            //print_r ($result2)
                            while ($result2 =
                                mysqli_fetch_array($result))
                            {
                            ?>
                  <div class="text-center form-group">
                    <input type="hidden"  name="assign_by" value="<?php echo $_SESSION['admin_id'] ?>">
                    <input type="checkbox" name="emp_id[]" value="<?php echo $result2['emp_id'] ?>">
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
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Compose New Message</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                  <div class="form-group">
                    <textarea class="form-control" name="task" style="height: 300px;background-color: #ebebeb;">
                      
                    </textarea>
                  </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
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