<?php include "../session.php"; ?>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<?php
include "../dbcon.php";

$id = $_GET['id'];

$data = "select * from assign_task join employee on assign_task.emp_id=employee.emp_id where t_id = $id";

$result = mysqli_query($con,$data);

$result2 = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
  .task_card{
    width:500px;  
    border: 2px solid grey;

  }
  .e_card{
    width:500px; 
    border: 2px solid lightskyblue;
  }
  .a_card{
    width:500px; 
    border: 2px solid greenyellow;
  }
</style>
<body>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Task Reply</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <center>
              <div class="task_card card">
                <h3 class="text-center"><b>Task</b></h3>
                <h5 class="text-center"><?php echo $result2['task']  ?></h5>
              </div>
            </center>
            <!-- /.card -->

            <div class="row">
              <div class="col-md-6">

                <div class="card e_card">
                  <?php
                    include "../dbcon.php";

                    $id = $_GET['id'];
                    $data = "select * from reply_task where t_id = $id";
                    $result = mysqli_query($con,$data);
                    $result3 = mysqli_fetch_array($result);
                
                    ?>                
                    <h4 class="text-center"><b>Employee Reply</b></h4>
                    <h5 class="text-center"><?php echo $result3['reply_msg'] ?></h5> 
                </div>
                <!-- /.card -->
                
              </div>
              <!--col-6 end-->
              <div class="col-md-6">

                
                <div class="card a_card">
                  <?php
                    include "../dbcon.php";

                    $id = $_GET['id'];
                    $data = "select * from admin_reply where a_id = $id";
                    $result = mysqli_query($con,$data);
                    $a_reply = mysqli_fetch_array($result);
                
                    ?>                
                    <h4 class="text-center"><b>Admin Reply</b></h4>
                    <form method="POST" action="adminreply_insert.php">
                      
                      <center><textarea type="text" name="admin_msg" class="form-control" style="width:300px; border:1px solid grey;"></textarea>
                        <button class="btn btn-info">submit</button>
                      </center>

                      
                    </form>
                    <h5 class="text-center"><?php echo $a_reply['admin_msg'] ?></h5> 
                </div>
                <!-- /.card -->
                
              </div>
              <!--col-6 end-->
            </div>
            <!--row end-->
            

      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</body>
</html>

<?php include "footer.php"; ?>