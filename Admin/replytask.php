<?php include "../session.php"; ?>
<?php include "header.php"; ?>
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
              <li class="breadcrumb-item active">All Assigned Task</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!---header end -->

     <!--table-->
      <div class="card shadow" style="background-color: #e6cbd2;text-align: center;">
              <div class="card-header" >
                <h3 class="card-title font-weight-bold">View All Assigned Task</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped bg-light">
                    <thead>
                        <tr>
                            <th>r_id</th>
                            <th>emp_name</th>
                            <th>Task</th>
                            <th>Reply</th>
                            <th>date_time</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                            $i = 1;
                            include "../dbcon.php";
                            $data = "select * from assign_task join employee on assign_task.emp_id = employee.emp_id order by fname";

                            $result = mysqli_query($con,$data);
                            //print_r ($result2)
                            while ($result2 =
                                mysqli_fetch_array($result))
                            {
                          ?>

                    <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $result2['fname'] ?> <?php echo $result2['lname'] ?></td>
                    <td><?php echo $result2['task']  ?></td>
                    <?php
                      $i = 1;
                            include "../dbcon.php";
                            $data1 = "select * from reply_task join employee on assign_task.emp_id = employee.emp_id order by fname";

                            $display = mysqli_query($con,$data1);
                            //print_r ($result2)
                            while ($result =
                                mysqli_fetch_array($display))
                            {
                    ?>
                    <td><?php echo $result['reply_msg']  ?></td>
                    <td><?php echo $result2['date_time'] ?></td>
                    <td>
                      <a class="btn btn-light" href="task_delete.php?id=<?php echo $result2['t_id'] ?>"><i class="fa fa-trash nav-icon text-danger"></i></a>
                      <a class="btn btn-info" href="Status.php?id=<?php echo $result2['t_id'] ?>"><i class="fa fa-check-circle nav-icon "></i>Status</a>
                    </td>
                  </tr>
                  <?php
                    }

                  ?>
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