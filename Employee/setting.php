<?php include "../session.php"; ?>
<?php include "../Admin/header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="content-wrapper">
    <h2 class="text-center text-info">Settings</h2><br>

     <!--table-->
      <div class="card shadow" style="background-color: skyblue;">
              <div class="card-header" style="border-color: black;">
                <h3 class="card-title font-weight-bold">Settings</h3>
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
                                mysqli_fetch_array($result))
                            {
                            ?>
                    <tr>
                      <?php 
                    if($_SESSION['data1'] == $result2['emp_id'])
                    {

                    ?>
                    <td><?php echo $result2['emp_id'] ?></td>
                    <td><?php echo $result2['fname']  ?></td>
                    <td><?php echo $result2['lname']  ?></td>
                    <td><?php echo $result2['email'] ?></td>
                    <td><?php echo $result2['password'] ?></td>
                    <td>
                      <a class="btn btn-success" href="ps_edit.php?id=<?php echo $result2['emp_id'] ?>">Change password</a>
                    </td>
                    </tr>
                  <?php } ?>
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

<!-- select * from assign_task as e join employee as f on e.assigned_by=f.e_id -->
                   