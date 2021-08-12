<?php include "../session.php"; ?>
<?php include "../Admin/header.php"; ?>
<?php include "sidebar.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="content-wrapper">
    <br>

     <!--table-->
      <div class="card shadow" style="background-color: skyblue;">
              <div class="card-header">
                <h3 class="card-title font-weight-bold">All Assigned Task</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped bg-light">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Task</th>
                            <th>Assigned_by</th>
                            <th>date_time</th>
                            
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                            $i = 1;
                            include "../dbcon.php";
                            $data = "select * from assign_task join employee on assign_task.emp_id=employee.emp_id";

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
                    <td><?php echo $result2['task'] ?></td>
                   
                    <!-- echo $result2['assigned_by'] -->
                    
                    <td><?php echo $result2['assigned_by']  ?></td>
                    <td><?php echo $result2['date_time'] ?></td>
                    <td>
                      <a class="btn btn-success" href="reply.php?id=<?php echo $result2['t_id']  ?>">Reply<i class="fa fa-share text-light"></i></a>
                    </td>
                  
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

</body>
</html>

<?php include "footer.php"; ?>

